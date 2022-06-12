<?php 
    trait FieldsModel{
        //lay ve danh sach cac ban ghi
        public function modelRead($recordPerPage){
            //lay bien page truyen tu url
            $page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
            //lay tu ban ghi nao
            $from = $page * $recordPerPage;
            //---
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //thuc hien truy van
            $query = $conn->query("select * from fields where field_id = 0 order by id desc limit $from, $recordPerPage");
            //tra ve nhieu ban ghi
            return $query->fetchAll();
        }
        //tinh tong so ban ghi
        public function modelTotalRecord(){
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //thuc hien truy van
            $query = $conn->query("select * from fields where field_id = 0");
            //tra ve so luong ban ghi
            return $query->rowCount();
        }
        //lay mot ban ghi tuong ung voi id truyen vao
        public function modelGetRecord(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //chuan bi truy van
            $query = $conn->prepare("select * from fields where id=:var_id");
            //thuc thi truy van, co truyen tham so vao cau lenh sql
            $query->execute(["var_id"=>$id]);
            //tra ve mot ban ghi
            return $query->fetch();
        }
        public function modelUpdate(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $name = $_POST["name"];
            $field_id = $_POST["field_id"];
            //update name
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //chuan bi truy van
            $query = $conn->prepare("update fields set name=:var_name,field_id=:var_field_id where id=:var_id");
            //thuc thi truy van, co truyen tham so vao cau lenh sql
            $query->execute(["var_id"=>$id,"var_name"=>$name,"var_field_id"=>$field_id]);
        }
        public function modelCreate(){
            $name = $_POST["name"];
            $field_id = $_POST["field_id"];
            //update name
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //chuan bi truy van
            $query = $conn->prepare("insert into fields set name=:var_name,field_id=:var_field_id");
            //thuc thi truy van, co truyen tham so vao cau lenh sql
            $query->execute(["var_name"=>$name,"var_field_id"=>$field_id]);
        }
        public function modelDelete(){
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            //chuan bi truy van
            $query = $conn->prepare("delete from fields where id=:var_id or field_id = $id");
            //thuc thi truy van, co truyen tham so vao cau lenh sql
            $query->execute(["var_id"=>$id]);
        }
        //liet ke cac danh muc cap 1 (cap con cua cap cha)
        public function modelFieldsSub($fields_id){
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            $query = $conn->query("select * from fields where field_id = $fields_id order by id desc");
            //tra ve tat ca cac ket qua lay duoc
            return $query->fetchAll();
        }
        //liet ke cac danh muc cap 0
        public function modelFields(){
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
            $query = $conn->query("select * from fields where field_id = 0 order by id desc");
            //tra ve tat ca cac ket qua lay duoc
            return $query->fetchAll();
        }
    }
 ?>