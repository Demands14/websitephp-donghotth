<?php
    include "models/UsersModel.php";
    class UsersController extends controller
    {
        //ke thua class users model
        use UsersModel;
        public function index()
        {
            //quy đinh số bản ghitrong 1 trang
            $recordPerPage = 4 ;
            // tinh so trang is
            $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
            //LAY DU LIEU TU MODEL
            $data = $this->modelRead($recordPerPage);
            //goi view truyen du lieu ra view
            $this->loadView("UsersView.php",["data"=>$data,"numPage"=>$numPage]);
        }
        public function update(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            //lấy một bản ghi
            $record = $this->modelGetRecord();
            //tạo biến $action để biến khi ấn nút thì trang sẽ submit về đâu
            $action  = "index.php?controller=users&action=updatePost&id=$id";
            //gọi view, truyền dữ liệu ra view
            $this->loadView("UsersFormView.php",["record"=>$record,"action"=>$action]);
        }
        public function updatePost(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            //gọi hàm modelUpdate để update bản ghi
            $this->modelUpdate();
            //quay trở lại trang users
            header("location:index.php?controller=users");
        }
        public function create(){
            $action ="index.php?controller=users&action=createPost";
            //gọi view truyền dữ liệu ra view
            $this->loadView("UsersFormView.php", ["action"=>$action]);
        }
        public function createPost(){
            //gọi hàm modelcreate để create bản ghi
            $result = $this->modelCreate();
            session_start();
            if($result){
                $_SESSION['users-success'] = "Tạo tài khoản thành công !";
                header("location:index.php?controller=users");
            }
            else{
                $_SESSION['users-fail'] = "Email đã tồn tại! Vui lòng kiểm tra lại";
                 header("location:index.php?controller=users&action=create");
            }
        }
        public function delete(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            //gọi hàm modelUpdate để update bản ghi
            $this->modelDelete();
            //quay trở lại trang
            header("location:index.php?controller=users");
        }
    }
?>