<?php
session_start();
if(!isset($_SESSION['login']))  
{
echo "<h1 style=text-align:center;font-size:70px;>Session Expired :(</h1>
<p style=text-align:center;><a href='login.php'>Go to Login</a></p>";
// header("location:login.php");
    
}
else
if($_SESSION['login']!="admin")
{
    echo "<h1 style=text-align:center;font-size:70px;>Session Expired :(</h1>
    <p style=text-align:center;><a href='login.php'>Go to Login</a></p>";
    // header("location:login.php");
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