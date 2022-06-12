<!DOCTYPE html>
<html>
<head>
  <base href="http://localhost/php56/Clock%20_rewrite/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WEBSITE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/web.css">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/Product.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script type="text/javascript" src="assets/frontend/js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--   <script type="text/javascript" src="assets/frontend/js/script1.js"></script> -->
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
<header style="z-index:1; margin-bottom: 40px;">
<?php 
  include "views/HeaderView.php";
 ?>
</header>
<!-- end header -->
<br>
	<div class="content" style="margin-top: 0; z-index: -1;">
    <div class="container" style="z-index:-1">
      <div class="row" style="z-index:-1">
        <div class="col-xs-12 col-md-3"> 
                <!-- end support -->
                <div style="border: 1px solid black; font-size: 14px;" class="online_support block">
                  <div class="new_title">
                    <h3>Hỗ trợ trực tuyến</h3>
                  </div>
                  <div class="block-content">
                    <div class="sp_1">
                    	<i class="fas fa-phone-volume"></i>
                      <p>Tư vấn bán hàng 1</p>
                      <p>Mrs. Dung: (04) 3786 8904</p>
                    </div>
                    <div class="sp_1">
                    	<i class="fas fa-phone-volume"></i>
                      <p>Tư vấn bán hàng 2</p>
                      <p>Mr. Tuấn: (04) 3786 8904</p>
                    </div>
                    <div class="sp_1">
                    	<i class="fas fa-phone-volume"></i>
                      <p>Email liên hệ</p>
                      <p>support@mail.com</p>
                    </div>
                  </div>
                </div>
                <!-- end support online --> 
                <!-- box search -->
                <div class="panel panel-default" style="margin-top:30px;border: 1px solid black;">
                  <div class="panel-heading"> <p>Tìm theo mức giá </p></div>
                  <div class="panel-body">
                    <ul class="list-group" style="border:0px;">
                      <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                        <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                      </li>
                      <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
                      </li>
                      <li class="list-group-item" style="border:0px; text-align:center">
                        <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- end box search --> 
                <!--news-->
                <style>
* {box-sizing: border-box}
.mySlides1{display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
    position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  width: auto;
  padding: 1px 6px;
  top: -10%;
  color: black;
  font-weight: bold;
  font-size: 15px;
  transition: 0.6s ease;
  margin-top: -20px;
  user-select: none;
  border: 1px solid gray;
}

/* Position the "next button" to the right */
.next {
  right: 0px;

}
.prev {
right: 25px;
}
/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;

}
</style>
        <div class="new-bar">

<p  style="margin: 40px 0 10px 0">Tin tức</p>
<hr id="a" style="margin-top: 0px">
<div class="slideshow-container col-xs-12">
  <div class="mySlides1">
    <div class="card">
        <img src="assets/upload/news/anh1.jpg" style="width:100%; min-height: 141px;">
        <div class="card-body">
        <p class="card-text">Henry watch is a famous brand in the world with the high quality and automatic machine.</p>
        </div>
    </div>
  </div>

  <div class="mySlides1">
    <div class="card">
        <img src="assets/upload/news/anh2.jpg" style="width:100%; min-height: 141px;">
        <div class="card-body">
        <p class="card-text">Henry watch is a famous brand in the world with the high quality and automatic machine.</p>
        </div>
    </div>
  </div>

  <div class="mySlides1">
    <div class="card">
        <img src="assets/upload/news/anh4.jpg" style="width:100%; min-height: 141px;">
        <div class="card-body">
        <p class="card-text">Henry watch is a famous brand in the world with the high quality and automatic machine.</p>
        </div>
    </div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
</div>
<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

                <!-- end news -->
          <div style="margin-top: 50px">
            <img src="assets/upload/news/anh7.jpg" width="100%">
          </div>
        </div>

        <div class="col-xs-12 col-md-9"> 
                <!-- main -->
                 <?php echo $this->view; ?>
                <!-- end main -->
        </div>
      </div>      
    </div>
  </div>
<!-- 	<div class="inform">
	<div class="media">
  <img class="mr-3" src="./images/anh6.jpg" alt="Generic placeholder image">
  <div class="media-body">
    <h3 class="mt-0">OMEGA SEAMASTER 39MM</h3>
    <br>
    <h5>
    	238,700,000 ₫
    </h5>
    › Sản phẩm nhập khẩu chính hãng.
    <br>
		› Vận chuyển miễn phí toàn quốc.
		<br>
		› Giao hàng trong ngày.<br>
		› Thanh toán sau khi nhận hàng.<br>
		› Bảo hành 5 năm tại Công ty.<br>
		› Bảo hành chính hãng toàn cầu.<br>
		<br>
		<input type="number" name="" value="1"> <button type="submit">Thêm vào giỏ hàng</button>
  </div>

</div>
<br>
  <h4>Mô tả</h4>
  <div>Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.</div>
  <li>Ballon Bleu de Cartier watch.</li>
  <li>Mechanical movement with automatic winding.</li>
  <li>Steel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.</li>
  <li>Sapphire crystal.</li>
  <li>Steel bracelet.</li>
  <li>Case dimensions diameter: 33 mm.</li>
  <li>Thickness: 9.96 mm.</li>
  <li>Water-resistant to 3 bar (approx. 30 meters/100 feet).</li>
</div> -->
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
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
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
	<footer style="background-image: url('assets/frontend/images/anh13.jpg'); padding:25px 0">
    <div class="container">
		<div class="content_footer">
			<div class="left_footer" style="width: calc(30%);">
				<h3>CONTACT</h3>
				<br>
					<li><a href="#">319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</a></li>
					<li><a href="#">076 922 0162</a></li>
					<li><a href="#">demonhunterg@gmail.com</a></li>
					<li><a href="#">mon@mona.meida</a></li>
					<li><a href="#">demonhunterp</a></li>
			</div>
			<div class="center_footer" style="width: calc(30%);">
				<h3>FOLLOW US</h3>
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
			<div class="right_footer" style="width: calc(30%);">
				<h3>ĐĂNG KÍ</h3>
				<br>
				<li>
					Đăng kí để nhận được nhiều thông tin mới nhất từ chúng tôi.
				</li>
				
			</div>
		</div>
  </div>
	</footer>

</body>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</html>