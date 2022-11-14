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
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home-style.css">
    <link rel="stylesheet" href="student-reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body{
            overflow-y:hidden;
        }
        .form-container{
            padding-top:100px;
        }
        .reg-form{
            height:50%;
        }
        .reg-form input[type=text]{
            height:10%;
        }
    </style>
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
    <!-- <video autoplay loop muted plays-inline class="video-bg">
        <source src="BG.mp4" type="video/mp4"> -->
    </video>
<div class="form-container">
    <br>
    <form action="" method="post" class="reg-form" >
        <!-- onsubmit="sendEmail(); reset(); return false;" -->
        <h1>Teacher Registration</h1>
       <span class="text-box-text">Teacher Name</span> <input type="text" name="tname">
       <span class="text-box-text"> Teacher Email</span> <input type="text" name="temail">
       <span class="text-box-text"> Teacher Password</span> <input type="text" name="tpassword" >
       <p class="reg-button-container" ><input type="submit" value="Register" class="reg-button" name="reg"> </p>
   
</form>
</div>
<?php
if(isset($_REQUEST['reg']))
{
$con=mysqli_connect("localhost","root","","result_db");
if(!$con)
{
	echo "could not connect";
}
$tname=$_REQUEST['tname'];
$temail=$_REQUEST['temail'];
$tpassword=$_REQUEST['tpassword'];

mysqli_query($con,"insert into teacher_login(tname,temail,tpassword)values('".$tname."','".$temail."','".$tpassword."')");
header("location:teachers.php");
}
}
?>
 </div>
 
 <!-- <script src=https://smtpjs.com/v3/smtp.js></script>
 <script>
    function sendEmail(){
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "sreevivekananda.school@yahoo.com",
            Password : "04844CBF0790DE8FD3D73231DC69E0527DCD",
            To : 'arjuncvinod7@gmail.com',
            From :"sreevivekananda.school@yahoo.com",
            Subject : "Login Credentials",
            Body : "And this is the body"
        }).then(
        message => alert(message)
        );
    }
 </script> -->
</body>
</html>
