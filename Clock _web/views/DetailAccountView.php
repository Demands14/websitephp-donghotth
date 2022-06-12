<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="template-customer">
          <h1>Hồ sơ của tôi</h1>
          <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <!-- <form method='post' action="index.php?controller=account&action=loginPost">
                  <p class="title"><span>Đăng nhập tài khoản</span></p>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="email" required="">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="password" required="">
                  </div>
                  <input type="submit" class="button" value="Đăng nhập">
                </form> -->
                <form method='post' action="index.php?controller=account&action=loginPost">
                
                  <legend>Thông tin</legend>
  <div class="form-group">
    <label for="exampleInputEmail1">Tên:&nbsp; </label>
      <input type="text" class="form-control" id="exampleInputNamel1" name="name" value=" <?php echo $record->name ?> ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Địa chỉ email: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $_SESSION['customer_email']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Địa chỉ đăng ký:</label>
    <input type="text" class="form-control" id="exampleInputAddress1" name="address" value="<?php echo $record->address; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Số điện thoại:</label>
    <input type="text" class="form-control" id="exampleInputPhone1" name="phone" value="<?php echo $record->phone; ?>">
  </div>
</form>

              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <form>
                  
                    <legend>Sửa thông tin</legend>
                    
                     <p>Nếu bạn có thông tin không đúng thì có thể sửa thông tin đăng ký để đồng bộ thông tin trong quá trình mua và giao hàng</p>
                      <a href="#" class="btn btn-primary">Sửa</a> </div>
             
                </form>
            </div>
          </div>
        </div>
