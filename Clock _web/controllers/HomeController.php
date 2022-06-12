<?php 
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//neu action khong duoc truyen len url thi mac dinh action=index
		use HomeModel;
		public function index(){
			//goi ham loadView cua class Controller de truyen du lieu
			
			$this->loadView("HomeView.php");
		}
	}
 ?>