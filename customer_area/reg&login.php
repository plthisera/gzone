<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register/Login </title>
  <link rel="stylesheet" href="../css/reg&login.css">


</head>

<body>
<div class="form">

  <ul class="tab-group">
    <li class="tab active"><a href="#login">Log In</a></li>
    <li class="tab "><a href="#signup">Register</a></li>
  </ul>

  <div class="tab-content">

    <div id="login">
      <h1>Welcome!</h1>

      <form action="/" method="post">

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email"required autocomplete="off"/>
        </div>

        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password"required autocomplete="off"/>
        </div>

        <p class="forgot"><a href="#">Forgot Password?</a></p>

        <button class="button button-block"/>Log In</button>

      </form>

    </div>

    <div id="signup">
      <h1>Register For Free</h1>

      <form action="/" method="post">

        <div class="top-row">
          <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
        </div>

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email"required autocomplete="off"/>
        </div>

        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password"required autocomplete="off"/>
        </div>

        <div class="field-wrap">
          <label>
            Confirm Password<span class="req">*</span>
          </label>
          <input type="password"required autocomplete="off"/>
        </div>

        <button type="submit" class="button button-block"/>Register Now</button>

      </form>

    </div>



  </div><!-- tab-content -->

</div> <!-- /form -->

<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<script src="../js/reg&login_jquery.js"></script>
<script src="../js/reg&login.js"></script>

</body>
</html>
