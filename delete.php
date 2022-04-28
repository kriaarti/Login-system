<?php
$host="localhost";
$user="root";
$password="";
$db="create_login";
$conn=new mysqli($host,$user,$password,$db);
if(!$conn){
    echo"there is problem";
}
$name=$_POST['ename'];

$company_code=$_POST['name'];
if($company_code==123){
    $delete="DELETE FROM `create_account`WHERE name='$name'";

if(mysqli_query($conn,$delete)){

    echo'<script>alert("deleted")</script>';
}
else{
    echo"no";
}
}
mysqli_close($conn);
?>