<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangChu.php";
 ?>
<div class="content">
	<style type="text/css">
		.content .banner_content{
	width: 100%;
	
	text-align: center;
	z-index: 1;
	margin-top: 70px;
}
.banner_content p{
	font-size: 25px;
}
.banner_content div{
	font-size: 50px;
	font-weight: bold;
}
	</style>
		<div class="banner_content">
			<p>360° COLLECTION</p>
			<div style="color: #FFCC00">FEATURED <span class="color" style="color: black;">PRODUCTS</span></div>
		</div>
		<div class="more-contact" style="  font-size:35px;display: flex; flex-wrap: wrap; width: 40px;">
				<a href="#"><i class="fab fa-facebook-messenger"></i></a>
				<a href="#" style="color: orange;"><i class="fas fa-phone-alt"></i></a>
				<a href="#" style="color: green;"><i class="fas fa-envelope"></i></a>
				<a href="#"><i class="fas fa-map-marker-alt"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
</div>
		<div class="products">
			<div class="container" style="padding:0;">
			
			<div class="row">
				<?php 
                  $hotProduct = $this->modelHotProduct();
               ?>
               <style type="text/css">
                 .discount{
                  position: absolute;
                  width: 50px;
                  line-height: 50px;
                  text-align: center;
                  background-color: black;
                  color: white;
                  border-radius: 50px;
                 }
               </style>
               <?php foreach($hotProduct as $rows): ?>
                <!-- box product -->
				
					<div class="col-xl-4 col-lg-6" style="position: relative;"> 
						<!-- discount -->
                    <div class="discount" style="z-index:1; margin-top: 20px;">
                      <?php echo $rows->discount; ?> %
                    </div>
                  <!-- /discount -->
					<div class="card">
						<a href="products/detail/<?php echo $rows->id; ?>" style="text-decoration:none; color: black;">
  						<div class="image"><img class="card-img-top" style="height: 300px;" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></div></a>
  						<div class="card-body">
  							
    					<h5 class="card-title"><a style="text-decoration: none; color: black;" href="products/detail/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h5>
    					<!-- <p class="card-text"><a style="text-decoration: none; color: black;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->about; ?></a></p> -->
    					<p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
               <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
    					<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-primary">Add to Cart</a>
  						</div>
					</div> 
				</div>
				
				<!-- end box product -->
                <?php endforeach; ?>
				
			</div>

			</div>
		</div>
		<nav aria-label="Page navigation example" style="margin-top: 30px;">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<div class="container" style="height:140px; margin-bottom: 40px; border:1px solid black; padding: 4px;">
	<img width="100%" height="100%" src="assets/frontend/images/banner.jpg">
</div>
<?php 
            $categories = $this->modelCategories();
         ?>
         <?php foreach($categories as $itemCategories): ?>
<div class="representation"style="margin-bottom: 20px;">
	<div class="container" >
		<div class="header-representation" >
			<b><h2><?php echo $itemCategories->name; ?></h2></b>
		<hr>
		</div>
		</div>
		<div class="container" style="padding:0;">
			
			<div class="row">
				 <?php 
                $products = $this->modelProducts($itemCategories->id);
             ?>  
             <?php foreach($products as $rows): ?>
				
					<div class="col-xl-4 col-lg-4 col-md-6" style="position: relative;">
						<!-- discount -->
                    <div class="discount" style="z-index:1; margin-top: 20px;">
                      <?php echo $rows->discount; ?> %
                    </div>
                  <!-- /discount -->
					<div class="card">
						<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" style="text-decoration:none; color: black;">
  						<div class="image"><img class="card-img-top" style="height: 300px;" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></div></a>
  						<div class="card-body">
  							
    					<h5 class="card-title"><a style="text-decoration: none; color: black;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
    					<!-- <p class="card-text"><a style="text-decoration: none; color: black;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->about; ?></a></p> -->
    					<p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
               <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
    					<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-primary">Add to Cart</a>
  						</div>
					</div> 
				 </div>
				<?php endforeach; ?>		 
			</div>

			</div>
</div>

<?php endforeach; ?>	
<div class="container" style="height:140px;  margin-bottom:40px; margin-top: 50px; border: 1px solid black; padding: 4px;">
	<img width="100%" height="100%" src="assets/frontend/images/banner2.jpg">
</div>
		<div class="blog" style="padding-bottom: 40px">
			<div class="banner_blog">
				<p>HAPPENINGS AROUND</p>
				<div style="color: #FFCC00">OUR <span class="color" style="color: black;">BLOG</span></div>
			</div>
			<div class="content_blog">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" style="padding:0;">
			
			<div class="row">
				<?php 
                $news = $this->modelHotNews();
               ?>
               <?php foreach($news as $rows): ?>
				<div class="col-xl-4 col-lg-4"> 
					<div class="card">
  						<img class="card-img-top" style="height: 300px;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>">
  						<div class="card-body">
    					
    					<p class="card-text" style="margin: 0;"><div  style="font-size: 14px; height: 229px; overflow: hidden;" class="info">
                    <h3 style="line-height: 16px;height: 60px;"><a style="text-decoration:none; font-size: 17px; color:black;" class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div></p>
    					
    					<a style="text-decoration:none;" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="btn-primary">Đọc thêm >></a>
  						</div>
					</div> 
				</div>
				<?php endforeach; ?>
			</div>

			</div>
    </div>
    <div class="carousel-item">
      <div class="container"style="padding:0;">
			
			<div class="row">
				<?php 
                $news = $this->modelHotNews();
               ?>
               <?php foreach($news as $rows): ?>
				<div class="col-xl-4 col-lg-4"> 
					<div class="card">
  						<img class="card-img-top" style="height: 300px;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>">
  						<div class="card-body">
    					
    					<p class="card-text" style="margin: 0;"><div  style="font-size: 14px; height: 229px; overflow: hidden;" class="info">
                    <h3 style="line-height: 16px;height: 60px;"><a style="text-decoration:none; font-size: 17px; color:black;" class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div></p>
    					
    					<a style="text-decoration:none;" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="btn-primary">Đọc thêm >></a>
  						</div>
					</div>  
				</div>
				<?php endforeach; ?>
			</div>

			</div>
    </div>
    <div class="carousel-item">
      <div class="container"style="padding:0;">
			
			<div class="row">
				<?php 
                $news = $this->modelHotNews();
               ?>
               <?php foreach($news as $rows): ?>
				<div class="col-xl-4 col-lg-4"> 
					<div class="card">
  						<img class="card-img-top" style="height: 300px;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>">
  						<div class="card-body">
    					
    					<p class="card-text" style="margin: 0;"><div  style="font-size: 14px; height: 229px; overflow: hidden;" class="info">
                    <h3 style="line-height: 16px;height: 60px;"><a style="text-decoration:none; font-size: 17px; color:black;" class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div></p>
    					
    					<a style="text-decoration:none;" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="btn-primary">Đọc thêm >></a>
  						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

			</div>
    </div>
  </div>
  <div >
  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>
				
			</div>
		</div>

	</div>