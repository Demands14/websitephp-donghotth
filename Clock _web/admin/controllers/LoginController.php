<?php 
	//load loginmodel.php
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//kế thừa class loginmodel
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
			//gọi hàm modellogin trong class loginmodel
			$this->modelLogin();
		}
		//đăng xuất
		public function logout(){
			//hủy biến session
			unset($_SESSION['email']);
			//di chuyển đến một url khác
			header("location:index.php");
		}
	}
 ?>
