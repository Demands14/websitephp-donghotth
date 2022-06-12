<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="assets/frontend/css/csss/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/frontend/css/csss/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body style="background-image: url(assets/frontend/css/csss/Banner1.jpg)">

<h1 class="w3ls">Signup Account</h1>
<?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
          <p style="color:red; text-align: center;">Registration failed, please check information again !</p>
 <?php endif; ?>
<div class="content-w3ls">
  <div class="content-agile1" style="    background: url(assets/frontend/css/csss/content.jpg) no-repeat;">
    <h2 class="agileits1">Clock</h2>
    <p class="agileits2">High quality.</p>
  </div>
  <div class="content-agile2">
    <form action="index.php?controller=account&action=registerPost" method="post">
      <div class="form-control w3layouts"> 
        <input type="text" id="firstname" name="name" placeholder="First Name" title="Please enter your First Name" required="">
      </div>

      <div class="form-control w3layouts">  
        <input type="email" id="email" name="email" placeholder="email@example.com" title="Please enter a valid email" required="">
      </div>

      <div class="form-control agileinfo">  
        <input type="text" class="lock" name="address" placeholder="Address" id="password1" required="">
      </div>  

      <div class="form-control agileinfo">  
        <input type="text" class="lock" name="phone" placeholder="Phone" id="password1" required="">
      </div>  

      <div class="form-control agileinfo">  
        <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
      </div>  

          
      
      <input type="submit" class="register" value="Register">
    </form>
    <p class="wthree w3l">If you had had a account, you could login</p>
    <a href="index.php?controller=account&action=login">
      <input type="submit" class="register" value="Login" >
    </a>
    <p class="wthree w3l">If you don't want and try to see the website</p>
    <a href="index.php">
      <input type="submit" class="register" value="Go to the home page" >
    </a>
  </div>
  <div class="clear"></div>
</div>

</body>
</html>