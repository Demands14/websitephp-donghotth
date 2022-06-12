<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<!-- <div class="product-detail" itemscope itemtype="http://schema.org/Product"> -->
<div class="top">
  <div class="row">

    <div class="col-xs-12 col-md-6 product-image ">
      <div class="media-body"> 
        <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%; height: 100%;" class="img-responsive"/>
      </div> 
    </div>

    <div class="col-xs-12 col-md-6 info">
       

      <h1 itemprop="name"><?php echo $record->name; ?></h1>
      <p class="vendor"> Category:&nbsp; <span> 
            <?php 
                $category = $this->modelGetCategory($record->category_id);
                echo isset($category->name) ? $category->name : "";
             ?>
         </span></p>
      <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - $record->price * $record->discount/100); ?>₫ </span></span></p>
    </p>
    <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
    <!-- rating -->
    <div style="border:1px solid #dddddd; margin-top: 15px;">
      <h4 style="padding-left: 10px;">Rating</h4>
      <table style="width: 100%;">
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-primary"style="background-color: darkblue; color: white; padding: 0 3px; border-radius: 10px;"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-warning" style="background-color: orange; color: white; padding: 0 3px; border-radius: 10px;"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-danger" style="background-color: green; color: white; padding: 0 3px; border-radius: 10px;"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-info"style="background-color: darkred; color: white; padding: 0 3px; border-radius: 10px;"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-success"style="background-color: blue; color: white; padding: 0 3px; border-radius: 10px;"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
          </tr>
        </table>
      <br>
    </div>
    <!-- /rating -->
    </div>
  </div>
</div>

<div class="middle" style="margin-top: 40px">
  <!-- chi tiet -->
  <!-- chi tiet -->
  <?php echo $record->about; ?>
  <?php echo $record->content; ?>
  <!-- chi tiet -->
  <!-- chi tiet -->
</div>