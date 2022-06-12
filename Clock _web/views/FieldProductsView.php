<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="products"  style="z-index:-1;">
      <div class="container">
      
      <div class="row">
       
         <div class="head-tabs head-tab1 col-lg-10" style="font-weight:bold; font-size:28px; border-bottom: 1px solid lightgray;">
          <?php 
                    $category = $this->modelGetField($id);
                    echo isset($category->name) ? $category->name : "";
                   ?>
       </div>
          <div class="col-lg-2 pull-left text-right" style="border-bottom: 1px solid lightgray;">
                <?php 
                    $order = isset($_GET["order"]) ? $_GET["order"] : "";
                 ?>
                <select class="form-control" onchange="location.href = 'index.php?controller=products&action=field&id=<?php echo $id; ?>&order='+this.value;" style="width: 150px;">
                  <option value="0">Sắp xếp</option>
                  <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                  <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                  <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                  <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                </select>
              </div>
           
     

                <!-- box product -->
             
        <?php foreach($data as $rows): ?>
          <div class="col-xl-4 col-lg-6" style="position:relative"> 
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
              <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-primary">Buy now</a>
              </div>
          </div> 
        </div>
        
        <!-- end box product -->
          <?php endforeach; ?>
          
          
</div>
<div style="clear: both;">
        <div style="margin-top: 30px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
          <nav aria-label="Page navigation example" style="margin-top: 60px;">
                  <ul class="pagination justify-content-right">
                    <li class="page-item" ><span style="margin-right:10px; margin-left: 15px">Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  <?php endfor; ?>
                  </ul>
                </nav>

                </div>
      </div>
      </div>
    </div>