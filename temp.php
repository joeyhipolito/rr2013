<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recruitment Examination | Web Development Division | 2013 R&D Recruitment | University of the East - Manila</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div class="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a id="lnk-logout" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </nav>
    <div class="rnd-form">
      <form action="POST" id="login">
        <h1>Login</h1>
        <input type="text" name="sn" id="txt-sn" placeholder="Student Number">
        <input type="password" name="pwd" id="txt-pwd" placeholder="Password">
        <button id="btn-login" class="submit rnd-btn">Login</button>
        <p class="note">Not Yet Registered?</p>
        <p><a id="not-registered" href="#">← Click Here</a></p>
        <img class="rnd-logo" src="assets/img/rnd-logo.webp" alt="Research and Development Unit Logo" width="80px" height="72px">
      </form>
    </div>
    <div class="rnd-form back">
      <div class="overlay notavailable"><h1>Feature Not Available. Yet...</h1><h3>Please Refresh...</h3></div>
      <form action="POST" id="register">
        <h1>Register</h1>
        <input type="text" name="sn" class="txt-lastname" placeholder="Last Name">
        <input type="text" name="sn" class="txt-firstname" placeholder="First Name">
        <input type="text" name="sn" class="txt-sn" placeholder="Student Number">
        <input type="password" name="" class="txt-pwd" placeholder="Password">
        <button id="btn-register" class="submit rnd-btn">Register</button>
        <p class="note">Already Registered?</p>
        <p><a id="already-registered" href="#">← Click Here</a></p>
        <img class="rnd-logo" src="assets/img/rnd-logo.webp" alt="Research and Development Unit Logo" width="80px" height="72px">
      </form>
    </div>
    <aside id="content-nav">
      <h2>Quick Links</h2>
      <div class="container">
        
      </div>
    </aside>
    <section id="content" style="display:block">
      <div class="container">
        <div class="mast">
          <h2>Research & Development Unit</h2>
          <h1>Web Development Division Exam</h1>
        </div>
        <article id="exam-description">
          <h1 class="title">Description:</h1>
          <h2 class="category">General Task</h2>
          <p>The Examination for the Web Development Division consists of 20 bring home assignments (tasks). Each task has an equivalent number of points depending on its difficulty; with task number one to be the easiest and task number twenty likely to be the hardest. The applicant can choose a minimum of 3 tasks to a maximum of 5 tasks. The applicant must get at least 40 points to pass this examination.</p>
          <h2 class="category">Advanced Instruction</h2>
          <p>There will be an option to toggle the “Advance Instructions” - [GO HARD CORE]. If the advanced instructions option was toggled which will give the applicants a different workflow on solving the problem. If the advance instruction option was toggled, general information and instructions will be given to the applicants. Also, each task will have a different way of solving if this option was toggled. The advanced instructions also has an equivalent number of 20pts. Maximum points will only be given if all advanced instructions were applied to all selected tasks. (This can be understood during the course of each selected task). If the additional instruction weren’t applied to all selected tasks, 3pts will still be given to each task.</p>
          <button id="go-hard" class="rnd-btn btn-large" title="Toggle Advanced Instructions">Go Hard Core!</button>
        </article>
        <article id="exam-environment">
          <h1 class="title">Setting up the Environment:</h1>
          <h2 class="category">INSTALL PHP, APACHE & MYSQL</h2>
          <p>Installing a packaged installer like XAMMP, WAMP LAMP or MAMP is the easiest way.</p>
          <ul>
            <li><a href="//www.apachefriends.org/">XAMMP - Packaged Installer</a> [http://www.apachefriends.org/] - Recommended</li>
            <li><a href="//www.wampserver.com/en/">WAMP - Packaged Installer</a> [http://www.wampserver.com/en/]</li>
          </ul>
          <h2 class="category">NOTE</h2>
          <p>
            It is recommended that the applicant saves his output in the virtual server he set up (www or htdocs folder). If the applicant has followed the instructions so far, he will have a folder named xammp in his root directory.
          </p>
          <code>
            C:/xampp/htdocs/ OR C:/wamp/www/
          </code>
          <p>
            If the applicant is already familiar with the above instructions, he can skip the steps and move on to the development of the tasks. This introductory instructions were given because the Research and Development Unit would like to extend their recruitment up to those people who do not have experience but has the will to learn and explore new things, this would of R&D’s advantage if we have more people that are willing to learn.
          </p>
        </article>
        <article id="exam-before">
          <h1 class="title">Before Starting</h1>
          <h2 class="category">Introduction</h2>
          <p>
          It is quite rare that you find someone who really loves what he does and really have the focus on what he want to achieve. Being organized sets one different from the other. The Web Development Division Head would like all the applicants to be as organized as they could, so he created an application boilerplate to help the applicants to get started. The basic boilerplate that you can use throughout the examination process looks like as follows:
          <img src="assets/img/project-structure.png" alt="project-structure">
          </p>
          <blockquote>
            This may differ depending on the complexity of the task. If there are any more complex task that needs have a different folder structure, the applicant could improve this structure
          </blockquote>
          <h2 class="category">Boilerplate</h2>
          <p>
            The applicant could just replicate the prescribe folder structure as defined above or he could download the boilerplate from the address below:
            <ul>
              <li>
                <a href="//joeyhipolito.com/exam/resources/boilerplate.zip">http://joeyhipolito.com/exam/resources/boilerplate.zip</a>
              </li>
            </ul>
          </p>
        
        </article>
        <article id="exam-ainstructions">
          <h1 class="title">
            Advanced Instructions
          </h1>
          <h2 class="category">Introduction</h2>
          <p>
            As part of the web development division, we assume that everyone taking this examination have already a good idea on how the web works and could easily follow instructions and tutorials found in the World Wide Web.
          </p>
          <p>
            With that said, the Web Development Division Head would like the applicant to use his recommended application for web development as well as integrate the distributed version control and source code management system (DVCS) in your current workflow as a junior web developer or web designer.
          </p>
          <h2 class="category">Notes</h2>
          <p>
            It would be of the applicant’s advantage if he has his own machine (laptop/desktop) to use so he can setup his own development environment.
          </p>
          <h2 class="category">Recommended Applications</h2>
          <p>
            <ul>
              <li>Text Editor
                <ul>
                  <li>Sublime Text 2 - Recommended</li>
                </ul>
              </li>
              <li>DVCS Client
                <ul>
                  <li>Git Bash - Recommended</li>
                </ul>
              </li>
            </ul>
          </p>
          <h2 class="category">Opening Sublime For the First Time</h2>
          <p>I recommend opening the sublime text 2 for the first time before proceeding. This will speed up the starting of the application in the later part of this examination.
          </p>
          <p>After you have successfully installed and opened the text editor for the first time, you can look up the internet why use sublime text 2. You can either close it or not. It will open up another instance when you type:
            <code>subl</code>
          in "Git Bash"
          </p>
          <h2 class="category">Link</h2>
          <p>
            <ul>
              <li><a href="//www.sublimetext.com/2">Sublime Text 2 - Text Editor</a> [http://www.sublimetext.com/2/] - Recommended</li>
              <li><a href="//www.git-scm.com">Git Bash - DVCS Client</a> [http://www.git-scm.com/] - Recommended</li>
            </ul>
          </p>
          <h2 class="category">Instruction</h2>
          <ol>
            <li>Install Sublime and Git Client</li>
            <li>
              <ol type="a">
                <li>Run "Git Bash"</li>
                <li>Enter the following code:
                  <code>
                    echo 'alias subl="/c/Program\ Files/Sublime\ Text\ 2/sublime_text.exe"' >> ~/.profile
                    <br>
                    source ~/.profile
                  </code>
                  <blockquote>* by doing this, you created a shortcut for opening sublime text 2 in the command line(git bash). This configuration was saved in a file called ".profile" in your users directory</blockquote>
                </li>
                <li>
                  Set up global configuration of your Git
                  <code>
                    git config --global core.editor "C:/Program Files/Sublime Text 2/sublime_text.ext"
                    <br>
                    git config --global user.name "Your name goes here"
                    <br>
                    git config --global user.email your@email.com
                  </code>
                </li>
                <li>
                  Create a Github account [<a href="//www.github.com">http://github.com</a>]
                </li>
              </ol>
            </li>
          </ol>
        </article>
        <article id="exam-tasks">
          <h1 class="title">The Tasks</h1>
          <h2 class="category">Free Task (5pts) - REQUIRED</h2>
          <blockquote>You can do another 5 tasks, this is free!</blockquote>
          <section class="task-group">
            <ul class="general">
              <li><strong>Output Hello World <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-free">toggle advanced</button></strong>
                <ol>
                  <li>Following the instructions above, create a project named “helloworld”. Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>
                    Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.
                  </li>
                  <li>
                    Output "Hello World"
                  </li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-free"><strong>Output Hello World (Advanced) </strong>
                <ol>
                  <li>Video Instruction</li>
                  <li>
                    <iframe width="560" height="315" src="//www.youtube.com/embed/mfj7yXWIU8g" frameborder="0" allowfullscreen></iframe>
                  </li>
                  <li>Open Git Bash</li>
                  <li>
                    Type the following code to cd (go to) htdocs/www directory
                    <blockquote>If you are using xampp</blockquote>
                    <code>
                      cd /c/xampp/htdocs
                    </code>
                    <blockquote>If you are using wamp</blockquote>
                    <code>
                      cd /c/wamp/www
                    </code>
                  </li>
                  <li>Type the following code to create your project folder
                    <code>
                      mkdir helloworld<br>
                      mkdir helloworld/assets<br>
                      mkdir helloworld/assets/css<br>
                      mkdir helloworld/assets/img<br>
                      mkdir helloworld/assets/js
                    </code>
                  </li>
                  <li>Type the following code cd to your project directory
                    <code>
                      cd helloworld
                    </code>
                  </li>
                  <li>Type the following code to create and open an index.html file.
                    <code>
                      subl index.html
                    </code>
                    <blockquote>Press Save. Leaving it blank. Close Sublime Text 2.</blockquote>
                  </li>
                  <li>Type the following code to create and open a README.md file.
                    <code>subl README.md</code>
                    <blockquote>Press Save. Leaving it blank. Close Sublime Text 2.</blockquote>
                  </li>
                  <li>Type the following code to initialize version control over your project
                    <code>
                      git init
                    </code>
                  </li>
                  <li>
                    After creating both files. You need to tell git you have two new files by typing the following code:
                    <code>git add --all</code>
                    <blockquote>You just "staged" the files.</blockquote>
                    And then you need to describe what you did by typing the following code:
                    <code>
                      git commit -m "Create index.html and README.md file"
                    </code>
                    <blockquote>You "commit" the changes. Make sure to use present tense verbs like "create" instead of "created".</blockquote>
                  </li>
                  <li>Edit index.html file in your sublime text editor and accomplish the task. "Output Hello World!"
                  </li>
                  <li>Edit README.md file in your sublime text editor and type anything that describes the project such as including the copyright and the name of the developer</li>
                  <li>
                    After saving both files, you need to "commit" the changes you made.
                    <code>
                      git add --all
                      git commit -m "Finish index.html file and update README.md file"
                    </code>
                  </li>
                  <li>Now that you have created your local repository. Its time to create a remote repository. You can watch the videos below on how to do it (2nd Video).

                  </li>
                  <li>
                    <iframe width="560" height="315" src="//www.youtube.com/embed/Ca8ps1CgesM" frameborder="0" allowfullscreen></iframe>
                  </li>
                  <li>Create a Repository on your Github account. Locate the link on your own or watch the video.</li>
                  <li>Name your first repository as "helloworld". Add a description.</li>
                  <li>Open Git Bash again in case you have closed it earlier</li>
                  <li>CD to your project location by typing:
                    <code>cd /c/xampp/htdocs/helloworld/</code>
                  </li>
                  <li>Enter the following code to create a connection and sync your local repository and your remote repo.
                    <code>
                      git remote add origin https://github.com/username/helloworld.git<br>
                      git push -u origin master
                    </code>
                    or by just typing the similar code found when you created your repository.
                    <blockquote>This steps say : hey git add this link as a remote link and name it 'origin'<br>
                      and hey git push or copy the files from master to origin. ("Add Remote" & "Push")
                    </blockquote>
                  </li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Inserting an Image (5pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li><strong>Insert an image</strong> <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-img">toggle advanced</button>
                <ol>
                  <li>Create a project named "addingimage". Make sure to use the boilerplate or follow the folder structure defined in the Before Starting section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>Insert image. How do you do it is your test.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-img"><strong>Insert an image(Advanced)</strong>
                <ol>
                  <li>Create a project named "addingimage"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Horizontal Navigation (8pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Create a horizontal navigation. </strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-nav">toggle advanced</button>
                <ol>
                  <li>Create a project named "horizontalnav". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Develop the horizontal navigation that looks like this site's top navigation. Use unordered list to accomplish this task <span class="label">&lt;ul&gt;</span> & <span class="label">&lt;li&gt;</span>.
                    <img src="assets/img/web-div1.jpg" alt="Top Navigation">
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-nav"><strong>Creating a horizontal navigation(Advanced)</strong>
                <ol>
                  <li>Create a project named "horizontalnav"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Positioning Elements I. (8pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Center Positioning - Horizontal Only</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-pos1">toggle advanced</button>
                <ol>
                  <li>Create a project named "positioning1". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Construct a <span class="label">&lt;div&gt;</span> that spans from left to right of your html document (full width of the screen) and a height of <span class="label">200px</span>. We call this <span class="label label-info">parent</span>
                  </li>
                  <li>
                    Inside the <span class="label label-info">parent</span> <span class="label">&lt;div&gt;</span>. create another <span class="label">&lt;div&gt;</span> half the width of the <span class="label label-info">parent</span> <span class="label">&lt;div&gt;</span> and a height of <span class="label">200px</span> or <span class="label">100%</span>. We call this a <span class="label label-info">child</span> <span class="label">&lt;div&gt;</span>
                  </li>
                  <li>
                    Use any way you can think of in positioning the <span class="label label-info">child</span> <span class="label">&lt;div&gt;</span>.
                  </li>
                  <li>
                    Use #3498db background color for the <span class="label label-info">parent</span> <span class="label">&lt;div&gt;</span><br>
                    and use #e74c3c background color for the <span class="label label-info">child</span> <span class="label">&lt;div&gt;</span>
                    <img src="assets/img/web-div2.jpg" alt="Center Div">
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-pos1"><strong>Center Positioning - Horizontal Only(Advanced)</strong>
                <ol>
                  <li>Create a project named "centerhorizontally"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Positioning Elements II. (8pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Horizontal and Vertical Alignment</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-pos2">toggle advanced</button>
                <ol>
                  <li>Create a project named "positioning2". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Construct a <span class="label">&lt;div&gt;</span> that spans from left to right of your html document (full width of the screen) and a height of that spans from top to bottom of your html document (full height of the screen). We call this <span class="label label-info">parent</span>
                  </li>
                  <li>
                    Inside the <span class="label label-info">parent</span> <span class="label">&lt;div&gt;</span>. create another <span class="label">&lt;div&gt;</span> with a height of <span class="label">240px</span> and a height of <span class="label">320px</span>
                  </li>
                  <li>
                    Use any way you can think of in positioning the <span class="label label-info">child</span> <span class="label">&lt;div&gt;</span>.
                  </li>
                  <li>
                    Use #3498db background color for the <span class="label label-info">parent</span> <span class="label">&lt;div&gt;</span><br>
                    and use #e74c3c background color for the <span class="label label-info">child</span> <span class="label">&lt;div&gt;</span>
                    <img src="assets/img/web-div3.jpg" alt="Center and Middle Alignment">
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
            </ul>
            <ul class="advanced">
              <li id="exam-web-pos2"><strong>Horizontal and Vertical Alignment(Advanced)</strong>
                <ol>
                  <li>Create a project named "positioning2"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Positioning Elements III. (8pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Adjacent Div Containers</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-pos3">toggle advanced</button>
                <ol>
                  <li>Create a project named "positioning3". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Construct two <span class="label">&lt;section&gt;</span>  that spans from top to bottom of your html document (full height of the screen), both has a width of <span class="label">50%</span>.
                  </li>
                  <li>
                    Position them in such a way that they are adjacent to each other.
                  </li>
                  <li>
                    Use any way you can think of in positioning the two <span class="label">&lt;section&gt;</span>'s.
                  </li>
                  <li>
                    Use #3498db background color for the left <span class="label">&lt;section&gt;</span><br>
                    and use #e74c3c background color for the right <span class="label">&lt;section&gt;</span>
                    <img src="assets/img/web-div4.jpg" alt="Center and Middle Alignment">
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-pos3"><strong>Adjacent Div Containers(Advanced)</strong>
                <ol>
                  <li>Create a project named "positioning3"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Javascript: Output Hello World (10pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Writing Hello World using Javascript(JS)</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-js1">toggle advanced</button>
                <ol>
                  <li>Create a project named "jshelloworld". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Using Javascript, Output "Hello World" in the <span class="label">&lt;body&gt;</span> of your html document.
                    <blockquote>Using jquery to accomplish this will  give you <span class="label label-success">+1</span>.</blockquote>
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-js1"><strong>Writing Hello World using JS (Advanced)</strong>
                <ol>
                  <li>Create a project named "jshelloworld"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">JS: Event Handling I (10pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Alert Hello World On Click</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-js2">toggle advanced</button>
                <ol>
                  <li>Create a project named "jsalert". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>Create a button or a link that when clicked it will alert "Hello World"</li>
                  <li>
                    Using Javascript, you must "catch" the event of clicking the button/link you made in your html document.
                    <blockquote>Using jquery to accomplish this will  give you <span class="label label-success">+1</span>.</blockquote>
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-js2"><strong>Alert Hello World On Click (Advanced)</strong>
                <ol>
                  <li>Create a project named "jsalert"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">JS: Event Handling II (12pts)</h2>
          <section class="task-group">
            <ul class="general">
              <li>
                <strong>Changing Background on Mouse Hover</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-js2">toggle advanced</button>
                <ol>
                  <li>Create a project named "jsbackground". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>Create an html document with four <span class="label">&lt;div&gt;</span> - square blocks. A side is <span class="label">100px</span> in length.</li>
                  <li>Each block has a different background color, use the followin color codes : #1abc9c, #2ecc71 #3498db, #9b59b6
                  <li>
                    Using Javascript, you must "catch" the event of hovering over the blocks you made in your html document, and change the background color of your <span class="label">&lt;body&gt;</span> element to the same color as the block you hovered.
                    <blockquote>Using jquery to accomplish this will  give you <span class="label label-success">+1</span>.</blockquote>
                    <img src="assets/img/web-div6.jpg" alt="Changing Background Color">
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
              </li>
            </ul>
            <ul class="advanced">
              <li id="exam-web-js3"><strong>Changing Background on Mouse Hover (Advanced)</strong>
                <ol>
                  <li>Create a project named "jsbackground"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
              </li>
            </ul>
          </section>
          <h2 class="category">Intermediate Designing I (15pts)</h2>
          <section class="task-group">
            <ul class="general">
              <strong>Image to HTML & CSS</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-med1">toggle advanced</button>
                <ol>
                  <li>Create a project named "intermediate1". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Convert the image to a working web design. Use your Own Web Designing Knowledge to accomplish this. Use your techniques. Use your own resources.
                    <blockquote>Use the image below.</blockquote>
                    <img src="assets/img/web-div5.jpg" alt="Image to HTML">
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
            </ul>
            <ul class="advanced">
              <li id="exam-web-med1"><strong>Image to HTML & CSS (Advanced)</strong>
              <ol>
                  <li>Create a project named "intermediate1"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
            </ul>
          </section>
          <h2 class="category">Intermediate Designing II (18pts)</h2>
          <section class="task-group">
            <ul class="general">
              <strong>Freestyle Designing</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-med2">toggle advanced</button>
                <ol>
                  <li>Create a project named "intermediate2". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Design a website using any concept you wish. The amount of score you will receive upon completion of this task will depend on the complexity of the design. You may use or rework your existing project or website for this task, but make sure to follow the folder structure we provided.
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
            </ul>
            <ul class="advanced">
              <li id="exam-web-med2"><strong>Freestyle Designing (Advanced)</strong>
                <ol>
                  <li>Create a project named "intermediate2"</li>
                  <li>Create a repository in your account in Github using the same name as your local project name</li>
                  <li>Start building the project. Create an empty index.html file. Create an empty README.md file</li>
                  <li>Initialize Git</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>Edit index.html and do the task.</li>
                  <li>Edit README.md file and adding description of work</li>
                  <li>"Stage" all files</li>
                  <li>"Commit" changes</li>
                  <li>"Add Remote" the repository you created in Github</li>
                  <li>"Push" the project into the remote repository</li>
                </ol>
            </ul>
          </section>
          <h2 class="category">Intermediate Web Programming (20pts)</h2>
          <section class="task-group">
            <ul class="general">
              <strong>Creating a login script</strong>
                <button class="btn btn-mini btn-primary toggle-advanced" href="#exam-web-med2">toggle advanced</button>
                <ol>
                  <li>Create a project named "webprogramming". Make sure to use the boilerplate or follow the folder structure defined in the <a href="#exam-before">Before Starting</a> section of this document.</li>
                  <li>Make sure to use the proper html tags, html5 is recommended although not required. Just make sure to follow the syntax rules, old or new.</li>
                  <li>
                    Create a login form in index.php file that accepts username and password, and will then redirect the user to member.php file if the credentials are correct. You may use a dummy username and password to simulate a database interaction. You might need to create 3 files : index.php, login.php, and members.php.
                  </li>
                  <li>If you will use a stylesheet(css), create an external css file and save it in the <span class="label">css</span> folder.</li>
                  <li>If you will use javascript, create an external javascript file and save it in the <span class="label">js</span> folder.</li>
                </ol>
            </ul>
            <ul class="advanced">
              <p>Not required. Instant <span class="label label-success">+3pts</span> if the basic task was accomplished.</p>
            </ul>
          </section>
        </article>
        <article id="exam-end-notes">
          <h1 class="title">End Notes</h1>
          <h2 class="category">Division Head's Notes</h2>
          <p>Thank you for showing your willingness to be part of my division (Web Development Division). Sorry for this very long examination, although you are to choose only five, I know it is still scary when it is this long. Sorry.
          </p>
          <p>
            Don't hesitate to contact me if in case you have questions and need clarifications.
          </p>
        </article>
      </div>
    </section>
  </div>
  <script src="assets/js/jquery.js"></script>
</body>
</html>