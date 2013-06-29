class Rcrtmnt
  constructor: () -> 
  variables:
    status: 0
    division: 0
    logreg: 1 # 1 is login 2 is registration
  init: ->
    # ui-build
    ui = new Ui;
    # bindEvents
    ui.loggedIn();
    ui.build(); 
    @bindEvents();
    @checkStatus();
  bindEvents: ->
    ui = new Ui;
    ui.bindEvents();
  checkStatus: =>
    ui = new Ui;
    $.get 'status.php', (re) =>
      if re == 'true'
        @variables.status = 1;
      else
        @variables.status = 0;
      setTimeout(=>
        @checkStatus();
        @reloadUi();
      , 1000);
    # loggedIn or loggedOut

  reloadUi: =>
    ui = new Ui;
    if @variables.status isnt 1
      ui.loggedOut();
class Login
  constructor: () ->
  submit: (data) ->
    $.post 'login.php', data, (re) ->
      ui = new Ui;
      # if true
      # change ui - force check status
      if re == 'true'
        ui.loggedIn();    
      
class Ui
  constructor: () ->
  build: ->
    $('#wrap').fadeIn();
  bindEvents: ->
    #login
    login =  $('#login');
    register = $('#register');
    loginParent = login.parent();
    regisParent = register.parent();
    loginParent.on 'click', '#not-registered', (e) ->
      e.preventDefault();
      loginParent.toggleClass('back');
      regisParent.removeClass('back').addClass('front');
    regisParent.on 'click', '#already-registered', (e) ->
      e.preventDefault();
      regisParent.toggleClass('back');
      loginParent.removeClass('back');
    login.on 'click', '#btn-login', (e) ->
      e.preventDefault();
      loginObj = new Login;
      data = login.serializeArray();
      loginObj.submit(data);
      login.find('input[type="password"]').val(''); #clear password field
    #logout
    lnkLogout = $('#lnk-logout');
    lnkLogout.on 'click', (e) ->
      e.preventDefault();
      $('#content-nav').fadeOut().find('.container').html('');
      $('body').append("<div id='overlay'></div>");
      $.post 'logout.php', {}, (re) ->
        $('#overlay').fadeOut().promise().done ->
          $('#overlay').remove();
    #file upload
    $('#lnk-submit').on 'click', (e) ->
      e.preventDefault();
      e.stopPropagation();
      $('#submit').toggleClass('submit-open');
    ul = $('#upload').find('ul');
    drop = $('#drop');
    #simulate click on input button
    $('#drop').on 'click', 'a', (e) ->
      e.stopPropagation();
      e.preventDefault();
      $(@).parent().find('input').click();
    $('#upload').fileupload(
      dropZone: drop
      add: (e, data) ->
        util = new Util;
        tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48" data-fgcolor="#0788a5" data-readOnly="1" data-bgColor="#3e4043"><p></p><span></span></li>');
        tpl.find('p').text(data.files[0].name).append('<i>' + util.formatFileSize(data.files[0].size) + '</i>');
        data.context = tpl.appendTo(ul);

        tpl.find('input').knob();
        tpl.find('span').on 'click', ->
          if tpl.hasClass('working')
            jqXHR.abort();
          tpl.fadeOut ->
            tpl.remove();
        jqXHR = data.submit()
                    .success (result, textStatus, jqXHR) ->
                      alert(result);

      progress: (e, data) ->
        progress = parseInt(data.loaded / data.total * 100, 10);
        data.context.find('input').val(progress).change();
        # if progress == 100
        #   data.context.removeClass('working');
      fail: (e, data) ->
        data.context.addClass('error');
    );
    $(document).on 'drop dragover', (e) ->
      e.preventDefault();

    #navigation
    root = $('body');
    $('body').on 'click', 'a', (e) ->
      href = $.attr(this, 'href');
      root.animate(
          scrollTop: $(href).offset().top - 40
        , 1000, ->
            window.location.hash = href;
          )
      e.preventDefault();
      e.stopPropagation();
    $('#content').on 'click', '.toggle-advanced', (e) ->
      btnText = $(@).text();
      if btnText == 'toggle advanced'
        $(@).text('toggle basic');
      else
        $(@).text('toggle advanced');
      $(@).parents('.general').find('ol').slideToggle();
      $(@).parents('.task-group').find('ul.advanced').slideToggle('fast', ->
          href = $(@).find('li').attr('id');
          pos = $(@).find('li').offset().top - 100;
          $('body').animate({
            scrollTop: pos
          }, 1000, -> 
            window.location.hash = href;
          );
        );
      e.stopPropagation();
      e.preventDefault();
    #go-hard 
    $('#content').on 'click', '#go-hard', (e) ->
      e.preventDefault();
      btnText = $(@).text();
      if btnText == 'Go Hard Core!'
        $(@).text('Go Basic');
      else
        $(@).text('Go Hard Core!');
      $('#exam-ainstructions').slideToggle();
      $('.general').find('.toggle-advanced').slideToggle();
  loggedIn: ->
    console.log 'uiLoggedIn!';
    # hideLoginDiv
    rndForm = $('.rnd-form');
    $('.rnd-form').css({
        top: rndForm.height() * -1
      });
    # navbarSlidedown
    $('.navbar').removeClass('nav-logged-out');
    # loadDivisionContent
    $.get 'app/exam.php', (re) ->
      $('#content').html(re).fadeIn();
      $('.advanced').slideToggle();
      $('#exam-ainstructions').slideToggle();
      $('.general').find('.toggle-advanced').slideToggle();

      topLevelLinks = ["<ul>"];
      $('#content').find('article').each (k,v) ->
        atrid = $(v).attr('id');
        a = $(v).find('h1.title').text();
        b = "<li class='top-level'><a href='##{atrid}'>#{a}</a></li>";
        topLevelLinks.push(b);
      topLevelLinks.push("</ul>");
      topLevelLinks.join();
      contNav = $('#content-nav');
      contNav.find('.container').html topLevelLinks;
      contNav.fadeIn();
      # $('#content-nav').html('');
      # iterate to all .title class
      # create a list'
      
  loggedOut: ->
    console.log 'uiLoggedOut!';
    # showlogin
    rndForm = $('.rnd-form');
    rndFormMarginTop = (rndForm.height() / 2) * -1;
    $('.rnd-form').css({
        top: '50%'
        marginTop: rndFormMarginTop
      });
    # navbarSlideup
    $('.navbar').addClass('nav-logged-out');
    $('#content-nav').fadeOut().find('.container').html('');
    # hideContent and emptyDivisionContent
    $('#content').fadeOut().html('');

class Util
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
  rnd = new Rcrtmnt();
  rnd.init();