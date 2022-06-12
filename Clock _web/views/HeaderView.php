<style type="text/css">  
    .top-header .container{
      padding: 6px 0;
      font-size: 13px;
    }
    .top-header .container .row{
      margin: auto;
      display: flex;
      flex-wrap: wrap;
    }
    .mid-header{
      height: 115px;
      background-color: white;
    }

    .mid-header .container .logo {
      height: 115px;
    }
    .mid-header .container .logo a{
      text-decoration: none;
    }
    .mid-header .container .logo a .up{
      font-size: 45px;
      font-weight: bold;
      margin: 20px 0 0 0;
      color: #FFCC00;
    }
    .mid-header .container .logo a .up span{
      color: black;
    }
    .mid-header .container .logo a .down{
      margin-top: -10px;
      font-size: 18px;
      color: #FFCC00;
    }
     html{
      scroll-behavior: smooth;
    }
    .menu li{
      margin-right: 10px;
    }
    .menu li a:hover{
      color: orange;
    }
    .top-header{
      color: white;
      background-color: black;
    }
</style>
<div class="header">
<!-- top header -->
    <div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8"> <span style="margin-right: 10px;"><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fas fa-envelope"></i> <a href="mailto:hieunadal2411@mail.com"style="color:white; text-decoration:none;">hieunadal2411 @mail.com</a></span> </div>
      <div class="col-xs-12 col-sm-12 col-md-4 customer" style="text-align:right;">
        <?php if(isset($_SESSION['customer_email'])): ?>
        <a href="index.php?controller=account&action=detail" style="color:white; text-decoration: none;">Xin chào <?php echo $_SESSION['customer_email']; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout" style="color:white; text-decoration: none;">Đăng xuất</a>
      <?php else: ?>
       <a href="index.php?controller=account&action=login" style="color:white;text-decoration:none;">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register"style="color:white;text-decoration:none;">Đăng ký</a> </div>
       <?php endif; ?>
    </div>
  </div>
</div>
<!-- end top header --> 
<!-- middle header -->
<div class="mid-header">
<div class="container">
  <div class="row">
    <div class=" col-9 col-sm-9 col-md-9 logo "> <a href="index.html"> 
      <p class="up">TTH<span>STORE</span></p>
      <p class="down">Thế giới đồng hồ</p>
     </a> 
    </div>
    <div class=" header-search">
    </div> 
    <?php 
        $ProductNumberInCart = 0;
         if(isset($_SESSION['cart']) != NULL)
          foreach($_SESSION["cart"] as $product)
            $ProductNumberInCart++;
     ?>
    <div class=" col-3 col-sm-3 col-md-3 mini-cart" style="text-align:right; margin-top: 40px;">
      <div class="wrapper-mini-cart" style="display: flex; float: right;"> 
        <span class="icon" style="border-radius: 50%; background-color: #FFCC00;padding: 10px;"><a href="cart" style="color: black;"><i class="fa fa-shopping-cart"></i></a></span> <span><!-- <a href="index.php?controller=cart" style="color: black; text-decoration: none; font-size: 16px;">  -->
        <!--<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="">
          <span class="mini-cart-count"> <?php echo $ProductNumberInCart; ?> </span> sản phẩm <i class="fa fa-caret-down"></i>
        </button> -->
       
         <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">
          <?php echo $ProductNumberInCart; ?>  sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="padding: 15px;">
          <div class="content-mini-cart">
          <div class="has-items">
            <ul class="list-unstyled" >
              <?php if(isset($_SESSION['cart']) != NULL): ?>
                <?php foreach($_SESSION['cart'] as $product): ?>
              <li class="clearfix mt-2" id="item-1853038" style="display: flex;">
                <div class="image mr-2" style="width: 80px; height:80px; border:1px solid black;"> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img alt="<?php echo $product["name"]; ?>" src="assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive" style="width: 100%; height: 100%;"> </a> </div>
                <div class="info" style="font-size:15px">
                  <h6><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>" style="text-decoration: none; color:black; margin-right: 5px"><?php echo $product["name"]; ?></a></h6>
                  <p><?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>₫</p>
                </div>
                <div> <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" style="float: right; color: red;"> <i class="fa fa-times"></i></a> </div>
              </li>
              <div class="dropdown-divider"></div>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
            <?php if(isset($_SESSION['cart']) != NULL): ?>
            <a href="index.php?controller=cart&action=checkout" class="btn btn-primary">Thanh toán</a> </div>
            <?php endif; ?>
        </div>
        </div>
      </div> 
      <!-- 
      </a> -->
      </span>
        
      </div>
    </div>
  </div>

</div>
</div>
<!-- end mid header -->
<!-- end-header -->
    <div class="end-header" style="z-index:1">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="container" style="padding:0; color: white;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto" style="font-size:17px">
      <li class="nav-item active">
        <a class="nav-link" href="home">TRANG CHỦ<span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          DANH MỤC
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 0">
          <ul class="list-unstyled level1">
          <?php 
              $conn = Connection::getInstance();
              $query = $conn->query("select * from fields where field_id = 0 order by id desc");
              $categories = $query->fetchAll();
           ?>  
           <?php foreach($categories as $rows): ?>
            <li><a class="dropdown-item" href="index.php?controller=products&action=field&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php 
                $querySub = $conn->query("select * from fields where field_id = {$rows->id} order by id desc");
                $categoriesSub = $querySub->fetchAll();
             ?>
                  <?php foreach($categoriesSub as $rowsSub): ?>
                      <li class="nav-link" style="padding-left:40px;"><a style="text-decoration: none; color: black;" href="index.php?controller=products&action=field&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                      
                  <?php endforeach ?>
                  <div class="dropdown-divider"></div>
                   <?php endforeach;?>
          </ul>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          THƯƠNG HIỆU
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 0">
          <ul class="list-unstyled level1">
          <?php 
              $conn = Connection::getInstance();
              $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
              $categories = $query->fetchAll();
           ?>  
           <?php foreach($categories as $rows): ?>
            <li><a class="dropdown-item" href="products/category/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></li>
            <?php 
                $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                $categoriesSub = $querySub->fetchAll();
             ?>
                  <?php foreach($categoriesSub as $rowsSub): ?>
                      <li class="nav-link" style="padding-left:40px;"><a style="text-decoration: none; color: black;" href="products/category/<?php echo $rowsSub->id; ?>/<?php echo $rowsSub->name; ?>"><?php echo $rowsSub->name; ?></a></li>
                      
                  <?php endforeach; ?>
                  <div class="dropdown-divider"></div>
            <?php endforeach; ?>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news">TIN TỨC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">LIÊN HỆ</a>
      </li>
    </ul>
 
    <div class="form-inline my-2 my-lg-0" style="position: relative;">
      <input class="form-control mr-sm-2" type="search" placeholder="Tìm..." id="key" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnSearch">TÌM KIẾM</button>
      <div class="smart-search">
          <ul>
            <li>
              <img src="assets/upload/products/anh11.jpg"> <a href="#">EMPOR VARMANI</a>
            </li>
            <li>
              <img src="assets/upload/products/anh12.jpg"> <a href="#">EMPOR VARMANI</a>
            </li>
            <li>
              <img src="assets/upload/products/anh10.jpg"> <a href="#">EMPOR VARMANI</a>
            </li>
          </ul>
        </div>
    </div>
  
    <style type="text/css">
      .smart-search{
        position: absolute;
        width: 100%;
        background-color: white;
        height: 350px;
        overflow: scroll;
        z-index: 1;
        display: none;
        top: 40px;
      }
      .smart-search ul{
        padding: 0px;
        margin: 0px;
        list-style: none;
      }
      .smart-search ul li{
        border-bottom: 1px solid #dddddd;
      }
      .smart-search img{
        width: 70px;
        margin-right: 5px;
      }
    </style>
    <script type="text/javascript">
      //tính năng này phải dùng kết hợp với jquery -> phải load thư viện jquery
      //phải load jquery xem jquery có haojt động hay không thì phải thêm alert("oki") vào bên trong tag $(document).ready(function(){alert("oki");});
      $(document).ready(function(){
        //bắt sự kiện ckick của id=btnSearch
        $("#btnSearch").click(function(){
          var key = $("#key").val();
          //di chuyển đến url tìm kiếm
          location.href = "index.php?controller=search&action=name&key="+key;
        });
        //---------------------------
        $(".input-control").keyup(function(){
            var strKey = $("#key").val();
            if(strKey.trim() != "")
              $(".smart-search").attr("style","display:block");
            else{
              $(".smart-search").attr("style","display:none");
              //--
              //sử dụng ajax để lấy dữ liệu
              $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                //clear cac thẻ li bên trong thẻ ul
                $(".smart-search ul").empty();
                //thêm dữ liệu vừa lấy được bằng ajax vòa thẻ ul
                $(".smart-search ul").append(data);
              });
            }
        });
        //---------------------------
      });
    </script>
  </div>
</div>
</nav>
</div>
<!-- end end-header -->
</div>

  