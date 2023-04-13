<?php
session_start();
if(!isset($_SESSION['login']))  
{
    header("location:session-expired.php");
    
}
else
if(!(($_SESSION['login']=="teacher") || ($_SESSION['login']=="admin")))
{
    header("location:session-expired.php");
}
else{
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="home-style.css">
    <link rel="stylesheet" href="student-reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
   <!-----------------------------navbar--------------------------->
    <nav class="nav-bar">
    <span class="logo" >SVHSS</span>
    <div class="links"> 
        <a href="index.php" class="link-text">Home</a>
        <a href="logout.php" class="link-text">logout</a>
        <a href="index.php#contact" class="link-text">contact</a>
    </div>
    </nav>
 <!-- student registration section -->
 <div id="registration"> 
    </video>
<div class="form-container">
    <br>
    <form action="" method="post" class="reg-form">
        <h1> Student Registration</h1>
       <span class="text-box-text">Student Name</span> <input type="text"  name="sname"  class="input-text" required >
       <span class="text-box-text"> Student Email</span> <input type="email" name="semail" class="input-text" required >
       <span class="text-box-text"> Student Password</span> <input type="text" name="spassword"  class="input-text" required >
       <span class="text-box-text">Parent Name</span> <input type="text" name="pname" class="input-text" required >
       <span class="text-box-text">Parent Email</span> <input type="email" name="pemail" class="input-text" required >
       <span class="text-box-text">Parent Password</span> <input type="text" name="ppassword" class="input-text" required >
     <p class="reg-button-container" ><input type="submit" value="Register" class="reg-button" name="sreg"> </p>
   
</form>
</div>
 </div>
 <?php
        if(isset($_REQUEST['sreg']))
        {
        $con=mysqli_connect("localhost","root","","result_db");
        if(!$con)
        {
            echo "could not connect";
        }
        $sname=$_REQUEST['sname'];
        $semail=$_REQUEST['semail'];
        $spassword=$_REQUEST['spassword'];
        $pname=$_REQUEST['pname'];
        $pemail=$_REQUEST['pemail'];
        $ppassword=$_REQUEST['ppassword'];
        mysqli_query($con,"insert into student_login(sname,semail,spassword,pname,pemail)values('".$sname."','".$semail."','".$spassword."','".$pname."','".$pemail."')");
        mysqli_query($con,"insert into parent_login(sname,semail,pname,pemail,ppassword)values('".$sname."','".$semail."','".$pname."','".$pemail."','".$ppassword."')"); 
        mysqli_query($con,"insert into sem_1(sname,mark1,mark2,mark3,mark4)values('".$sname."',0,0,0,0)");
        mysqli_query($con,"insert into sem_2(sname,mark1,mark2,mark3,mark4)values('".$sname."',0,0,0,0)");
        mysqli_query($con,"insert into student_review(sname,review)values('".$sname."','No Reviews Available')");
        header("location:students.php") ;
        }
}
 ?>
</body>
</html>