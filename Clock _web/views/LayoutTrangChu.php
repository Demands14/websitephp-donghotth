<!DOCTYPE html>
<html>
<head>
	 <base href="http://localhost/php56/Clock%20_rewrite/">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>WEBSITE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/web.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script type="text/javascript" src="assets/frontend/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/613c98dc25797d7a89fe6db3/1ffaba7bm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<!-- header -->
	<header style="margin-bottom:40px">
	<?php include "views/HeaderView.php";?>
	</header>
	<!-- end header -->
	<br>

	<div class="container" style="padding:0; z-index: -1;" >
<div class="row">
      <div class="col-xs-12 col-md-3"  style="z-index:-1;">
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/images/anh2.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/images/anh5.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row">
          <div class="col-md-12"><img src="assets/frontend/images/anh3.jpg" class="img-thumbnail"></div>
        </div>
      </div>
      <div class="col-md-9"> 
        <!-- slide -->
        <style>
.mySlides {display:none}
.w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0; border: 1px solid white;}

</style>
        <div class="w3-container">

<div class="w3-content w3-display-container" style="max-width:800px; z-index: -1;">
  <img class="mySlides" src="assets/frontend/images/anh1.jpg" style="width:100%; height:100%">
  <img class="mySlides" src="assets/frontend/images/anh16.jpg" style="width:100%; height:100%">
  <img class="mySlides" src="assets/frontend/images/anh17.jpg" style="width:100%; height:100%">
  <img class="mySlides" src="assets/frontend/images/anh15.jfif" style="width:100%; height:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);
var myIndex = 0;
carousel();
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1500); // Change image every 2 seconds
}
</script>
        <!-- end slide --> 
      </div>
    </div></div>
      </div>
	<div class="row" style="margin: 0;">
      <div class="col-xs-12 col-md-12" style="padding:0;"> 
        <!-- main -->
        
        <?php echo $this->view; ?>
        
        <!-- end main --> 
        
      </div>
    </div>
    <style>
			#myBtn {
			display: none;
			position: fixed;
			bottom: 250px;
			left: 60px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #b2b2b2;
			color: white;
			cursor: pointer;
			padding: 15px 20px;
			border-radius: 4px;
			}

			#myBtn:hover {
			background-color: #555;
			}
		</style>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
    	<i class="fas fa-angle-double-up"></i>
    </button>
    <script>
//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
</script>
	<footer style="background-image: url('assets/frontend/images/anh13.jpg'); padding: 25px 0;">
		<div class="container">
		<div class="content_footer">
			<div class="left_footer" style="width: calc(28%);">
				<h4>CONTACT</h4>
				<br>
					<li><a href="#">319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</a></li>
					<li><a href="#">076 922 0162</a></li>
					<li><a href="#">demonhunterg@gmail.com</a></li>
					<li><a href="#">mon@mona.meida</a></li>
					<li><a href="#">demonhunterp</a></li>
			</div>
			<div class="center_footer" style="width: calc(28%);">
				<h4>FOLLOW US</h4>
				<br>
				<li><a href="">Follow để không bỏ lỡ bất kì ưu đãi nào từ chúng tôi</a></li>
				<li>
					<div class="icon">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-pinterest"></i></a>
						<a href="#"><i class="fab fa-youtube">	</i></a>
					</div>
				</li>
			</div>
			<div class="right_footer" style="width: calc(28%);">
				<h4>ĐĂNG KÍ</h4>
				<br>
				<li>
					Đăng kí để nhận được nhiều thông tin mới nhất từ chúng tôi.
				</li>
				
			</div>
		</div>
	</div>
	</footer>

</body>
<!-- <script type="text/javascript" src="assets/frontend/js/script1.js"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</html>