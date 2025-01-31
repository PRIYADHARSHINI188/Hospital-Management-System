<?php
$name=$_POST['name'];
$age=$_POST['age'];
$add=$_POST['add'];
$con=mysqli_connect("localhost","root","","patients");
$sql="INSERT INTO patient values('$name','$age','$add')";
$r=mysqli_query($con,$sql);
if($r)
{ echo "<center><h1>Details are successfully added</h1></center>";
}
else{
  echo "unsuccessfull";
}
?>