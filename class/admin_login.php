<?php
    include'../lib/session.php';
    Session::checkLogin();
    include'../lib/database.php';
    include'../helper/formats.php';
?>
<?php

    class adminlogin {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database;
            $this->fm = new Format;
        }
        public function login_admin($admin_user,$admin_pass) {
            $admin_user = $this->fm->validation($admin_user);
            $admin_pass = $this->fm->validation($admin_pass);

            $admin_user = mysqli_real_escape_string($this->db->link,$admin_user);
            $admin_pass = mysqli_real_escape_string($this->db->link,$admin_pass);

            if(empty($admin_pass)||empty($admin_user)){
                $alert = "Please enter your User or password";
                return $alert;
            }else{
                $query = "SELECT * FROM tbl_admin WHERE admin_user = $admin_user AND admin_pass = $admin_pass limit 1";
                $result = $this->db->select($query);
            }

        }
    } 
?>