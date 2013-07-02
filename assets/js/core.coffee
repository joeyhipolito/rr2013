class Rcrtmnt
  constructor: () ->
  init: ->
    ui =  new Rcrtmnt.ui;
    login = new Rcrtmnt.login;
    ui.build();
    login.status();
    @bindEvents();
  bindEvents: ->
    ui =  new Rcrtmnt.ui;
    login = new Rcrtmnt.login;
    ui.bindEvents();
    login.bindEvents();
  setStatus: (v) ->
    @variables.status = v;
  getStatus: ->
    return @variables.status;
  setEndDate: (v) ->
    @variables.endDate = v;
  getEndDate: ->
    return @variables.endDate;
  variables:
    app_path: 'app/'
    tpl_path: 'app/views/tpl'
    status: 0
    endDate: ''

class Rcrtmnt.ui
  constructor: () ->
    rr = new Rcrtmnt;
    @variables.app_path = rr.variables.app_path;
    @variables.tpl_path = rr.variables.tpl_path;
  variables:
    app_path: ''
    tpl_path: ''
  build: ->
    $('#exam-navigation').css
      'display': 'hidden'
  bindEvents: ->
    # logout
    logout = $('#lnk-logout');
    logout.on 'click', (e) =>
      e.preventDefault();
      e.stopPropagation();
      @reload();
      $('.rnd-user-nav').removeAttr('style');
      $.post "#{@variables.app_path}logout.php", {}, (e) ->
        console.log e;
      .promise()
      .always =>
        $('body').find('.overlay').fadeIn();
        @reload();
      .done -> $('body').find('.overlay').fadeOut();
    # going hardcore
    $('#content').on 'click', '#go-hard', =>
      @goHardCore();
    # toggling advance
    $('#content').on 'click', '.toggle-advanced', (e) ->
      e.preventDefault();
      e.stopPropagation();
      btnText = $(@).text();
      if btnText is 'toggle advanced'
        $(@).text 'toggle basic'
      else
        $(@).text 'toggle advanced'

      $(@).parents('.general').find('ol').slideToggle();
      $(@).parents('.task-group').find('ul.advanced').slideToggle 'fast', ->
        li = $(@).find('li');
        href = li.attr('id');
        pos = li.offset().top - 100;
        $('body').animate
          scrollTop: pos
        , 500
        , ->
          window.location.hash = href;
    # upload
    upload = $('#upload');
    submit = $('#submit');
    drop = $('#dropzone');
    ul = upload.find('ul');

    # upload : handle cancel
    upload.find('.cancel').on 'click', (e) ->
      e.preventDefault();
      upload.toggleClass('show');

    $('#lnk-submit').on 'click', (e) ->
      e.preventDefault();
      e.stopPropagation();
      upload.toggleClass('show');
    # upload : simulate click on browse
    upload.on 'click', 'a.browse', (e) ->
      e.stopPropagation();
      e.preventDefault();
      $('#browse').click();
    # upload : handle drop upload
    submit.fileupload(
      dropZone: drop
      add: (e, data) ->
        util = new Rcrtmnt.util;
        tpl = $('<li class="working"><div class="progress"><div class="progress-bar"></div></div><p></p><span class="icon-remove"></span></li>');
        tpl.find('p').text(data.files[0].name).append('<i>' + util.formatFileSize(data.files[0].size) + '</i>');
        data.context = tpl.appendTo(ul);

        tpl.find('span').on 'click', ->
          if tpl.hasClass('working')
            jqXHR.abort();
          tpl.fadeOut ->
            tpl.remove();
        jqXHR = data.submit()
                    .done (re, status, jqXHR) ->
                      # if re == 'true'
                      #   message = 'Uploading successful.'
                      # else if re == 'false'
                      #   message = 'Uploading failed. Make sure it is a zip file.';
                      # alert re;
                      upload.find('.result').append re;
                      setTimeout ->
                        upload.find('.result').html('');
                      , 3000
      progress: (e, data) ->
        progress = parseInt(data.loaded / data.total * 100, 10);
        data.context.find('.progress-bar').css(
            width: "#{progress}%"
          ).change();
        if progress == 100
          setTimeout ->
            data.context.remove();
          , 3000
      fail: (e, data) ->
        data.context.addClass('error');
      );
    $(document).on 'drop dragover', (e) ->
      e.preventDefault();
    # opening and closing navigation
    # $('#exam-navigation').find('.toggle').on 'click', (e) ->
    #   e.preventDefault();
    #   $(@).parent().toggleClass('shown');
    #   spanClass = $(@).find('span').attr('class');
    #   if spanClass is 'icon-plus-sign'
    #     $(@).find('span').removeClass().addClass('icon-minus-sign');
    #   else
    #     $(@).find('span').removeClass().addClass('icon-plus-sign');
      
  reload: ->
    rr = new Rcrtmnt;
    if rr.getStatus() isnt 1
      @loggedOut();
    else 
      @loggedIn();
  renderTemplate: (tpl, target) ->
    $.get tpl, (re) ->
      $(target).html re;
    .done ->
      $(target).toggleClass('show');
  clearForms: (target) ->
    $(target).find('input').val('');
  isOnLoginPage: ->
    # a little bit of hack
    token = $('.rnd-form').find('button').text();
    return if token.length > 0 then true else false
  isContentLoaded: (node) ->
    return if $.trim($(node).html()).length > 0 then true else false
  loggedIn: ->
    rr = new Rcrtmnt;
    onLogin = @isContentLoaded('.rnd-form');
    onLoginHack = @isOnLoginPage();
    isExamLoaded = @isContentLoaded('#content');
    status = rr.getStatus();
    if onLogin == true && status == 1
      form = $('.rnd-form');
      form.css(
        top: "-#{form.height()}px"
      );
      #clear the form if logged in
      form.hide().empty();
      
    if onLogin == false && status == 1
      $('.rnd-user-nav').stop().removeAttr('style').css
          display: 'block'
          top: '40px'
      #clear the form if logged in
    if status == 1 && isExamLoaded == false
      $.get("#{@variables.app_path}exam.php")
      .then (re) =>
        re = JSON.parse re;
        $.get("#{@variables.app_path}/views/exam-cache/#{re.division}.html")
        .done (exam) =>
          # load the exam
          $('#content').html(exam).fadeIn('fast')
          .find('.advanced').slideToggle()
          .parent().find('.toggle-advanced').slideToggle();
          # start counter
          $.get("#{@variables.app_path}duration.php")
          .done (re) ->
            rr.setEndDate(re.end_date);
            endDate = rr.getEndDate(); # "June 7, 2087 15:03:25";
            console.log rr.getEndDate();
            $('#countdown').countdown(
              date: endDate
              render: (data) -> 
                $(this.el).html(data.days + " <span>days</span> " + this.leadingZeros(data.hours, 2) + " <span>hrs</span> " + this.leadingZeros(data.min, 2) + " <span>min</span> " + this.leadingZeros(data.sec, 2) + " <span>sec</span>");
              );

          # find titles and append to exam-navigation
          # blkExam = $('#exam-navigation');
          # ul = blkExam.find('ul');
          # html = $(exam);
          # html.find('article').each (k,v) ->
          #   tpl = $('<li><a href="#"><span class="icon-chevron-right"></span></a></li>');
          #   attrid = $(v).attr('id');
          #   title = $(v).find('.title').text();
          #   tpl.find('a').attr('href', "##{attrid}").append(title);
          #   ul.append tpl;
          #   if $(v).hasClass('advanced')
          #     tpl.addClass('advanced').hide();
          # blkExam.toggleClass('shown')
          # blkExam.find('.toggle').find('span').removeClass().addClass('icon-minus-sign')
  goHardCore: ->
    # $('#exam-navigation').find('li.advanced').toggleClass('show');
    btnAdvanced = $('#go-hard');
    btnAdvancedText = 'Go Hard Core!';
    btnAdvancedTextCurrent = btnAdvanced.text();
    if btnAdvancedTextCurrent == btnAdvancedText
      btnAdvanced.text('Go Basic!');
    else
      btnAdvanced.text(btnAdvancedText);
    $('#content').find('article.advanced').slideToggle();
    $('.general').find('.toggle-advanced').slideToggle();
   
  loggedOut: ->
    rr = new Rcrtmnt;
    onLogin = @isContentLoaded('.rnd-form');
    status = rr.getStatus();
    content = $('#content');
    if status == 0 &&  onLogin == false
      @renderTemplate("#{@variables.tpl_path}/login.tpl", '.rnd-form');
      $('.rnd-user-nav').stop().removeAttr('style').css('display', 'none');
      content.fadeOut().html('');
      form = $('.rnd-form');
      form.css(
        top: "#{form.height()}px"
        display: 'block'
      );
class Rcrtmnt.login
  constructor: () ->
    rr = new Rcrtmnt;
    @variables.app_path = rr.variables.app_path;
    @variables.tpl_path = rr.variables.tpl_path;
  variables:
    app_path: ''
    tpl_path: ''
  bindEvents: ->
    form = $('.rnd-form');
    form.on 'click', '#btn-login', (e) =>
      e.preventDefault();
      login = $('#login');
      data = login.serializeArray();
      @submit(data);
      ui = new Rcrtmnt.ui;
      ui.reload();
  submit: (data) ->
    rr = new Rcrtmnt;
    ui = new Rcrtmnt.ui;
    $.post "#{@variables.app_path}login.php", data, (re) ->
      console.log re;
      if re is 'true'
        rr.setStatus(1);
        ui.clearForms('.rnd-form');
        ui.loggedIn();
    .always ->
      ui.reload();
  status: ->
    rr = new Rcrtmnt;
    ui = new Rcrtmnt.ui;
    $.get "#{rr.variables.app_path}status.php", (re) ->
      if re is 'true'
        rr.setStatus(1);
      else 
        rr.setStatus(0);
    .promise()
    .done =>
      setTimeout(=>
        @status();
      ,3000);
    .always ->
      ui.reload();

class Rcrtmnt.util
  constructor: () ->
  formatFileSize: (bytes) ->
    if typeof bytes isnt 'number'
      return false;
    if bytes >= 1000000000
      retunrn (bytes / 1000000000).toFixed(2) + ' GB';
    if bytes >= 1000000
      return (bytes / 1000000).toFixed(2) + ' MB';
    return (bytes / 1000).toFixed(2) + ' KB';


$(document).ready ->
  rr = new Rcrtmnt;
  rr.init();