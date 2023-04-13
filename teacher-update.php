<?php
session_start();
if(!isset($_SESSION['login']))  
{
  header("location:session-expired.php");
    
}
else
if($_SESSION['login']!="admin")
{
  header("location:session-expired.php");
}
else{

 $con=mysqli_connect("localhost","root","","result_db");
 if(!$con)
 {
   echo "could not connect";
 }


 
$s="delete from teacher_login where tname='".$_REQUEST['r']."'";
	echo $s;
mysqli_query($con,$s);
    mysqli_close($con);
	header("Location:teachers.php");
   
}
?>