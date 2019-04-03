<?php
$connect = mysqli_connect("localhost","root","","test_db");
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
 $query = "SELECT username FROM tbl_user WHERE username = '".$username."'";
    $result = mysqli_query($connect,$query) or die($connect->error);
        if(mysqli_num_rows($result) > 0){
            echo '<div class="alert alert-danger" role="alert">ชื่อ ซ้ำ น่ะครับ</div>';
        }else{
            echo '<div class="alert alert-success" role="alert">ชื่อนี้ใช้ได้ครับ</div>';
        }
}
?>