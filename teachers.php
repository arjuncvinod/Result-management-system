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
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers </title>
<link rel="stylesheet" href="home-style.css">
<link rel="stylesheet" href="student-list.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/eabac940d1.js" crossorigin="anonymous"></script>
</head>
<body>
     <!-----------------------------navbar--------------------------->
    <div class="nav-container">
        <nav class="nav-bar">
        <span class="logo" > SVHSS</span>
        <div class="links"> 
            <a href="index.php" class="link-text">Home</a>
            <a href="logout.php" class="link-text">logout</a>
            <a href="index.php#contact" class="link-text">contact</a>
        </div>
        </nav>
    </div>
    <!-- ------------------main section---------------- -->
    <main id="main-container">
        <div class="student-container">
            <h1>Teachers</h1>
            
           <p class="add-btn-container">
            <a href="student-registration.html">
                <button class="add-btn"><i class="fa-sharp fa-solid fa-plus"></i>&nbsp Add Teacher</button>
            </a>
            </p>
            
            <div class="student-grid-container">
        <?php
            $con=mysqli_connect("localhost","root","","result_db");
            if(!$con)
            {
	            echo "could not connect";
            }

            $result=mysqli_query($con,"select * from teacher_login");
            while($row=mysqli_fetch_array($result))
            {
        ?>


                <div class="student-info">
                    <a href="teacher-update.php?r=<?php echo $row['tname'];?>" class="delete-icon">
                    <i class="fa-solid fa-trash-can"></i></a>
                    <img src="images/user-default.jpg" alt="image of <?php echo $row['tname'];?>" class="student-img">
                    <p class="student-name"><?php echo $row['tname'];?></p>
                </div>
                <?php
                    }
                ?>
                <div class="student-info">
                <a href="teacher-registration.php" >
                <div class="add-student">
                    <p>
                <i class="fa-sharp fa-solid fa-plus plus-icon"></i> <br> Add <br> New Teacher
                </p>
                
                </div> </a></div>

                
            </div>
        </div>
        <?php
        }
        ?>
    </main>
</body>
</html>