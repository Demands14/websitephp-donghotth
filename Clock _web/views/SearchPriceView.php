<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px; margin-bottom:20px">
              <div class="head-tabs head-tab1 col-lg-9">
                <h3>
                	Giá từ <?php echo number_format($fromPrice); ?> VNĐ - đến <?php echo number_format($toPrice); ?> VNĐ
                </h3>
              </div>
              <div class="col-lg-3 pull-right text-right">
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" >
              <div class="clearfix" style="display: flex; flex-wrap:wrap;"> 
              	<?php foreach($data as $rows): ?>
                <!-- box product -->
                <div class="col-xl-4 col-lg-6" style="margin-bottom:20px"> 
          <div class="card">
            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" style="text-decoration:none; color: black;">
              <div class="image"><img class="card-img-top" style="height: 300px;" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></div></a>
              <div class="card-body">
                
              <h5 class="card-title"><a style="text-decoration: none; color: black;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
              <!-- <p class="card-text"><a style="text-decoration: none; color: black;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->about; ?></a></p> -->
              <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
               <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
              <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-primary">Buy now</a>
              </div>
          </div> 
        </div>
                <!-- end box product -->
            	<?php endforeach; ?>
    
              </div>
            </div>
          </div>
          <!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: 50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                  <ul class="pagination pull-right">
                    <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=search&action=name&key=<?php echo $key; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  <?php endfor; ?>
                  </ul>
                </div>
                <!-- end paging -->
        </div>