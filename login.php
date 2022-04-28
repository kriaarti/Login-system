<?php
$host="localhost";
$user="root";
$password="";
$db="create_login";
$conn=new mysqli($host,$user,$password,$db);
if(!$conn){
    echo'<script>alert("Error...")</script>';
}
$name=$_POST['name'];
$password=$_POST['password'];
$result="SELECT`name`,`password`from`create_account`where name='$name'&&password=$password";
if($res=mysqli_query($conn,$result)){
   if(mysqli_num_rows($res)>0){
       echo'<script>alert("login successfully")</script>';
}
else{
    echo'<script>alert("username or password")</script>';
}
}
else{
    echo'<script>alert("please fill required information")</script>';
}
mysqli_close($conn);
?>