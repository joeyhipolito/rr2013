<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recruitment Examination | 2013 R&D Recruitment | University of the East - Manila</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div class="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top nav-logged-out">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a id="lnk-submit" href="#">Submit</a>
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
        <button id="btn-login" class="submit btn-rnd">Login</button>
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
        <button id="btn-register" class="submit btn-rnd">Register</button>
        <p class="note">Already Registered?</p>
        <p><a id="already-registered" href="#">← Click Here</a></p>
        <img class="rnd-logo" src="assets/img/rnd-logo.webp" alt="Research and Development Unit Logo" width="80px" height="72px">
      </form>
    </div>