<?php
$host="localhost";
$user="root";
$password="";
$db="create_login";
$conn=new mysqli($host,$user,$password,$db);
if(!$conn){
    echo"there is problem";
}
$name=$_POST['Ename'];

$company_code=$_POST['name'];
if($company_code==123){
   $select="SELECT `name`,`phone`,`email`,`company_code`,`password` FROM `create_account`WHERE name='$name'";
  if( $res=mysqli_query($conn,$select)){
if(mysqli_num_rows($res)>0){
    echo"<table>";
    echo"<tr>";
    echo"<th>firstname</th>";
    echo"<th>phone</th>";
    echo"<th>email</th>";
    echo"<th>company_code</th>";
    echo"<th>password</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res)){
    echo"<tr>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['phone']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['company_code']."</td>";
    echo"<td>".$row['password']."</td>";
    echo"</tr>";
    }
    echo"<table>";
    
}
else{
    echo"No matching records are found.";
}
}
else{
    echo"ERROR:could not able to execute $select."
    .mysqli_error($conn);
}
}
else{
    echo"OOps!....something went wrong";
}
mysqli_close($conn);
?>
