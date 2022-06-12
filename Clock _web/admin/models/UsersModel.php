<?php
    trait UsersModel
    {
        //lay ve danh sach ban gih
        public function modelRead($recordPerPage) 
        {
            //lấy biến page truyền từ url
            $page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
            //lấy từ bản ghi nào
            $from = $page * $recordPerPage;
            //lấy biến kết nối csdl
            $conn = Connection::getinstance();
            //thực hiện truy vấn
            $query = $conn->query("select*from users order by id desc limit $from , $recordPerPage");
            //trả về nhiều bản ghi
            return $query->fetchAll();
        }
        //tinh tong so ban ghi
        public function modelTotalRecord()
        {
            $conn = Connection::getinstance();
            $query = $conn->query("select * from users");
            return $query->rowCount();
        }
        //lấy một bản ghi tương ứng với id truyền vào
        public function modelGetRecord(){
        $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
        //lấy biến kết nối csdl
        $conn = Connection::getInstance();
        //chuẩn bị truy vấn
        $query = $conn->prepare("select * from users where id=:var_id");
        $query->execute(["var_id"=>$id]);
        //trả về một bản ghi
        return $query->fetch();
        }
        public function modelUpdate(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $name = $_POST["name"];
            $password = $_POST["password"];
            //upadate name
            //lấy biến kết nối csdl
            $conn = Connection::getInstance();
            //chuẩn bị truy vấn
            $query = $conn->prepare("update users set name=:var_name where id=:var_id");
            //thực thi truy vấn, có truyền them số vào câu lệnh sql
            $query->execute(["var_id"=>$id, "var_name"=>$name]);
            //nếu password không rỗng thì update password
            if($password != ""){
                $password = md5($password);
            $query = $conn->prepare("update users set password=:var_password where id=:var_id");
            //thực thi truy vấn, có truyền them số vào câu lệnh sql
            $query->execute(["var_id"=>$id, "var_password"=>$password]);
            }
        }
        public function modelCreate(){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            //ma hoa password
            $password = md5($password);
            //update name
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            $queryUsers = $conn->prepare("select *from users where email=:var_email");
            $queryUsers->execute(["var_email"=>$email]);
            $result = $queryUsers->rowCount();
            if($result == 0){
                $query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password");
                // thực thi query
                $query->execute(["var_name"=>$name, "var_email"=>$email,"var_password"=>$password]);
                return true;
                //one like for you
            }
            else{
                return false;
            }
            
            // $queryEmail = $conn->prepare("select email from users where email=:var_email");
            // $queryEmail->execute(["var_email"=>$email]);
            // if($queryEmail->rowCount == 0){
            //     //chuan bi truy van
            //     $query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password");
            //     //thuc thi truy van, co truyen tham so vao cau lenh sql
            //     $query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password]); 
            // }else
            //     header("location:index.php?controller=users&action=create&")   
            
            //chuan bi truy van
            /*$query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password");
            //kiểm tra xem email đã tồn tại chưa
            $i=0;
            while($i<1) {
            $sql = $conn->prepare("select email from users where email=:var_email");
            $sql->execute(["var_email"=>$email]);
            $result = $sql->rowCount();
            
                if($result == 0){
                    //thuc thi truy van, co truyen tham so vao cau lenh sql
                    $query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password]);
                    break;
                            }
                else{
                    echo "<script>document('Email này đã tồn tại mời nhập email khác');</script>";
                    $i++;
                    $this->loadView("UsersFormView.php");
                }
            
            }*/
        }
        public function modelDelete(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //chuan bi truy van
            $query = $conn->prepare("delete from users where id=:var_id");
            //thuc thi truy van, co truyen tham so vao cau lenh sql
            $query->execute(["var_id"=>$id]);
        }
    }
?>   