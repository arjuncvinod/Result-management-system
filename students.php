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
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="home-style.css">
<link rel="stylesheet" href="student-list.css">
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
            <h1>STUDENTS</h1>
            
           <p class="add-btn-container">
            <a href="student-registration.php">
                <button class="add-btn"><i class="fa-sharp fa-solid fa-plus"></i>&nbsp Add Student</button>
            </a>
            </p>
            
            <div class="student-grid-container">

            <?php
            $con=mysqli_connect("localhost","root","","result_db");
            if(!$con)
            {
	            echo "could not connect";
            }

            $result=mysqli_query($con,"select * from student_login");
            while($row=mysqli_fetch_array($result))
            {
        ?>

                <div class="student-info">
                <a href="student-delete.php?r=<?php echo $row['sname'];?>" class="delete-icon">
                    <i class="fa-solid fa-trash-can"></i></a>
                <a href="edit-result.php?s=sem_1&r=<?php echo $row['sname'];?>"> <img src="images/student-icon.png" alt="student" class="student-img"></a>
                    <p class="student-name"><?php echo $row['sname'];?></p>
                </div>
        <?php
            }
        ?>

                <div class="student-info">
                <a href="student-registration.php" >
                <div class="add-student">
                    <p>
                <i class="fa-sharp fa-solid fa-plus"></i> <br> Add <br> New student
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