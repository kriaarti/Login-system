<?php
$host="localhost";
$user="root";
$password="";
$db="create_login";
$conn=new mysqli($host,$user,$password,$db);
if(!$conn){
    echo"there is problem";
}
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$company_code=$_POST['company_code'];
$password=$_POST['password'];
$qry="INSERT INTO `create_account`(`name`,`phone`,`email`,`company_code`,`password`)VALUES('$name',$phone,'$email',$company_code,$password)";
$insert=mysqli_query($conn,$qry);
if(!$insert){
    echo'<script>alert("Incorrect data")</script>';
}
else{
    echo'<script>alert("created successfully")</script>';
}
?>