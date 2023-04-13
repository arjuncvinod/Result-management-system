<?php
session_start();
?>
<html>
    <head>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="form-style.css">
        <link rel="stylesheet" href="home-style.css">
        <title>Login</title>
    </head>
    <body>
        <div class="nav-container">
            <nav class="nav-bar">
            <span class="logo" >SVHSS</span>
            <div class="links"> 
                <a href="index.php">Home</a>
                <a href="login.php">login</a>
                <a href="index.php#contact">Contact</a>
            </div>
            </nav>
        </div>
        <div class="login-main">
        <div class="container">
            <div class="login-box">
                <div class="login-wrapper"> 
                    <p class="login-type-header">
                        <span>Login Here</span> 
                    </p>
                    
                        <div class="form-container">
                            <form action="" method="post" class="form">
                                <p class="select-box-container">
                      <span>Login as</span><select name="logintype" id="login-type">
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                            <option value="teacher">Teacher</option>
                            <option value="admin">Admin</option>
                        </select>
                    </p>
                                <p><input type="text" placeholder="Name" name="username" class="text-box" required></p>
                                <p><input type="password" placeholder="Password" name="password" class="text-box" required></p>
                                
                                <p class="submit-container"><input type="submit" value="Login" name="login"class="submit-button"></p>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    if(isset($_REQUEST['login']))
    {
    $ltype=$_REQUEST['logintype'];
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $flag=0;
    $con=mysqli_connect("localhost","root","","result_db");
    if(!$con)
    {
        echo "could not connect";
    }
    // ---------------admin login-------------------
    if($ltype=="admin")
    {
       $result=mysqli_query($con,"select*from admin_login");
        while ($row=mysqli_fetch_array($result)) {
        if (($row['username']==$username) && ($row['password']==$password))
        {
            
            $_SESSION['login']=$ltype;
            header("Location:teachers.php");
        }
        else
        {
            echo "<script> alert('Incorrect Username or Password') </script>"  ;      }
     }
    }
    //---------------teacher login --------------------

    if($ltype=="teacher")
    {
       $result=mysqli_query($con,"select*from teacher_login");
        while ($row=mysqli_fetch_array($result)) {
        if (($row['tname']==$username) && ($row['tpassword']==$password))
        {
            $flag=1; 
        }
        }
        if($flag==1)
        {
            $_SESSION['login']=$ltype;
            header("Location:students.php"); 
        }
        else
        {
            echo "<script> alert('Incorrect Username or Password') </script>"  ;      
        }
     
    }
    // ---------------------------parent login------------------

    if($ltype=="parent")
    {
       $result=mysqli_query($con,"select*from parent_login");
        while ($row=mysqli_fetch_array($result)) {
        if (($row['pname']==$username) && ($row['ppassword']==$password))
        {
            $flag=1; 
        }
        }
        if($flag==1)
        {
            $_SESSION['login']=$ltype;
            $str="select * from parent_login where pname='".$username."'";
            echo $str;
            $result=mysqli_query($con,$str);
            while($row=mysqli_fetch_array($result))
            {
                $_SESSION['username']=$row['sname'];
            header("Location:result.php?s=sem_1&r=".$row['sname']); 
            }
        }
        else
        {
            echo "<script> alert('Incorrect Username or Password') </script>"  ;      
        }
     
    }

    // ----------------------------student login----------------------
    if($ltype=="student")
    {
       $result=mysqli_query($con,"select*from student_login");
        while ($row=mysqli_fetch_array($result)) {
        if (($row['sname']==$username) && ($row['spassword']==$password))
        {
            $flag=1; 
        }
        }
        if($flag==1)
        {
            $_SESSION['login']=$ltype;
            $_SESSION['username']=$username;
            $str="select * from student_login where sname='".$username."'";
            echo $str;
            $result=mysqli_query($con,$str);
            while($row=mysqli_fetch_array($result))
            {
            header("Location:student-result.php?s=sem_1&r=".$username); 
            }
        }
        else
        {
            echo "<script> alert('Incorrect username or password ! ')</script>" ;      
        }
     
    }


} 
    ?>
    <footer>
        <div class="wave wave1" ></div>  
        <div class="wave wave2" ></div> 
        <div class="wave wave3" ></div> 
        <div class="wave wave4" ></div> 
    </footer>
    </body>
</html>