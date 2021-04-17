<?php include('auth.php') ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in to Twitter/Twitter</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="main">
      <form action="auth.php" method="post">
        <div class="content">
        <div class="logo">
          <img src="img/twitter.jpg" alt="">
        </div>
        <div class="label">
          <p>Log in to Twitter</p>
        </div>
        <div class="mail">
          <input type="text" class="input-box" name="username"
            value=""
            placeholder="Phone, email, or username"
            onfocus="this.className='input-box-focus'" onblur="this.className='input-box'" />
        </div>
        <div class="pass">
          <input type="password" class="pass-input-box"
            name="password" value=""
            placeholder="Password"
            onblur="this.className='pass-input-box'" onfocus="this.className='input-box-focus'"/>
        </div>
        <div class="butt">
          <input type="submit" class="submit" name="submit" value="Log in">
        </div>
        <div class="act">
          <div class="l_act">
            <a href="Registration.php">Forgot password?</a>
          </div>
          <div class="r_act">
            <a href="Registration.php">Sing up for Twitter</a>
          </div>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>
