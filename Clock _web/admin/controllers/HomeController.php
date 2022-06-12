<?php 
	class HomeController extends Controller{
		public function __construct(){
			//kiểm tra xme user đăng nhập chưa
			$this->authentication();
		}
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>