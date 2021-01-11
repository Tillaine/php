<?php
$conn = mysqli_connect('localhost', 'root', '', 'phpBlog');

//check connection 
if(mysqli_connect_errno()){
    //conection failed 
    echo 'Failed to connect to MySQL' . mysqli_connect_errno();
}
 
?>