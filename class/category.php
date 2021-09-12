<?php
    include'../lib/database.php';
    include'../helper/formats.php';
?>
<?php

    class category {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database;
            $this->fm = new Format;
        }
        public function insert_cate($cat_name){
            $cat_name = $this->fm->validation($cat_name);

            $cat_name = mysqli_real_escape_string($this->db->link,$cat_name);

            if(empty($cat_name)){
                $alert = "This must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_category(cat_name) VALUES('$cat_name')";
                $result = $this->db->select($query);
                if($result){
                    $alert = "<span class = 'success'>Thêm thành công </span>";
                    return $alert;
                }else{
                    $alert = "<span class = 'success'>Thêm thất bại</span>";
                    return $alert;
                }

            }

        }
    } 
?>