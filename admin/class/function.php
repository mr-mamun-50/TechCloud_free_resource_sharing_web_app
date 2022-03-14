<?php

class TechCloud
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', "", 'tech_cloud_resource_sharing_project');

        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }

    public function admin_login($data)
    {
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['admin_pass']);

        $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_password='$admin_pass'";

        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);

            if ($admin_info) {
                header("location: dashboard.php");
                $admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['admin_id'] = $admin_data['id'];
                $_SESSION['admin_name'] = $admin_data['admin_name'];
            }
        }
    }

    public function admin_logout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('location:index.php');
    }
}
