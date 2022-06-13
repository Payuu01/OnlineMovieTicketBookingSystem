<?php
require('config.php');
$username = $_POST['uname'];
$uphone = $_POST['uphone'];
$ucity = $_POST['ucity'];
$ubirth = $_POST['ubirth'];
$ugender = $_POST['ugender'];
$uemail = $_POST['uemail'];

$sql = "insert into tbl_registration(name, email, phone, age, gender) 
values('$username','$uemail','$uphone','$ubirth','$ugender')";
//echo $sql;
mysqli_query( $con, $sql);

header('location:book.php');
?>