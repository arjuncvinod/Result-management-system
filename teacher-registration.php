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
?>
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
        .reg-form input[type=text], .reg-form input[type=email]{
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
    </video>
<div class="form-container">
    <br>
    <form action="" method="post" class="reg-form" >
        <!-- onsubmit="sendEmail(); reset(); return false;" -->
        <h1>Teacher Registration</h1>
       <span class="text-box-text">Teacher Name</span> <input type="text" name="tname" required>
       <span class="text-box-text"> Teacher Email</span> <input type="email" name="temail" required>
       <span class="text-box-text"> Teacher Password</span> <input type="text" name="tpassword" required >
       <p class="reg-button-container" ><input type="submit" value="Register" class="reg-button" name="reg" required> </p>
   
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
