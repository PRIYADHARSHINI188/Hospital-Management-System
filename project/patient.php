<?php
$name=$_POST['name'];
$age=$_POST['age'];
$add=$_POST['add'];
$con=mysqli_connect("localhost","root","","patients");
$sql="DELETE FROM patients WHERE ".$name;
$r=mysqli_query($con,$sql);
if($r)
{ echo "connection successfull";
}
else{
  echo "unsuccessfull";
}
?>