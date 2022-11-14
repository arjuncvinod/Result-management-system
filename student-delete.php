<?php
session_start();
if(!isset($_SESSION['login']))  
{
echo "<h1 style=text-align:center;font-size:70px;>Session Expired :(</h1>
<p style=text-align:center;><a href='login.php'>Go to Login</a></p>";
// header("location:login.php");
    
}
else
if(!(($_SESSION['login']=="teacher") || ($_SESSION['login']=="admin")))
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


 
$a="delete from student_login where sname='".$_REQUEST['r']."'";
$b="delete from sem_1 where sname='".$_REQUEST['r']."'";
$c="delete from sem_2 where sname='".$_REQUEST['r']."'";
$d="delete from parent_login where sname='".$_REQUEST['r']."'";
$e="delete from student_review where sname='".$_REQUEST['r']."'";
mysqli_query($con,$a);
mysqli_query($con,$b);
mysqli_query($con,$c);
mysqli_query($con,$d);
mysqli_query($con,$e);

    mysqli_close($con);
	header("Location:students.php");
   
}
?>