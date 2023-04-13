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
    <title>Edit result</title>
    <link rel="stylesheet" href="home-style.css">
    <link rel="stylesheet" href="student-result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/eabac940d1.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-----------------------------navbar--------------------------->
    <div class="nav-container">
        <nav class="nav-bar">
        <span class="logo" >SVHSS</span>
        <div class="links"> 
            <a href="index.php" class="link-text">Home</a>
            <a href="index.php#contact" class="link-text">contact</a>
            <a href="logout.php" class="link-text">log out</a>
        </div>
        </nav>
    </div>
    <!-----------------------------mainsection----------------------->
    <div id="result-page">
   <a href="students.php"><button class="back-btn" name="back-btn"><i class="fa-solid fa-circle-arrow-left"></i></button></a> 
        <div class="result-container">
            
            <form action="" method="post" name="form1">
            <h3>
                <?php echo $_REQUEST['r']; ?>
            </h3>
            <div class="semester-selection">
                <p>Exam Result of&nbsp</p>
                <?php
                $sname=$_REQUEST['r'];
                $sem=$_REQUEST['s'];
                
                // $_SESSION['sem']="sem_1";
                // $sem="sem_1"
                ?>
                    <select name="semester" id="semester">
                        <option value="sem_1" >Semester 1</option>
                        <option value="sem_2"<?php if($sem=="sem_2"){
                            echo "selected";} ?>>Semester 2</option>
                        <!-- <option value="sem3">Semester 3</option> -->
                    </select> 
                    <span class="get-btn-container"><input type="submit" value="Get Result" class="get-btn" name="getres"> </span> 
                </form>
            </div>

            <?php
                $con=mysqli_connect("localhost","root","","result_db");
                if(!$con)
                {
                    echo "could not connect";
                }
                // -------------------

                if(isset($_REQUEST['getres']))
                {
                // $_SESSION['sem']=$_REQUEST['semester'];
                // $sem=$_REQUEST['semester'];
                header("location:edit-result.php?r=".$sname."&s=".$_REQUEST['semester']);

                }
                $result=mysqli_query($con,"select * from ".$sem." where sname='".$sname."'");
                while($row=mysqli_fetch_array($result))
                {
            ?>  
            <?php
                function grade($mark) {
                    if($mark>=95)
                        echo "S";
                    elseif($mark>=85&&$mark<95)
                    echo "A+";
                    elseif($mark>=75&&$mark<85)
                    echo "A";
                    elseif($mark>=65&&$mark<75)
                    echo "B+";
                    elseif($mark>=55&&$mark<65)
                    echo "B";
                    elseif($mark>=45&&$mark<55)
                    echo "C+";
                    elseif($mark>=35&&$mark<45)
                    echo "C";
                    else
                    echo "<span style='color:red' > Failed </span>";
                }
            ?>
            <div class="result-table-container">
                <table class="result-table" >
                    <form action="" method="POST" name="form">
                    <tr>
                        <th>Subject</th>
                        <th>Marks obtained</th>
                        <th>Max.Marks</th>
                        <th>Grade</th> 
                    </tr>
                    <tr> 
                        <td class="sub">C++</td>
                        <td><input type="number" value="<?php echo $row['mark1'];?>" class="col-text-box" name="m1" min="0" max="100"> </td>
                        <td><input type="text" value="100" class="col-text-box"readonly></td>
                        <td><p class="col-text"><?php grade($row['mark1']);?></p></td>
                    </tr>
                    <tr>
                        <td class="sub">Java</td>
                        <td><input type="number" value="<?php echo $row['mark2'];?>" class="col-text-box" name="m2" min="0" max="100"></td>
                        <td><input type="text" value="100" class="col-text-box" readonly></td>
                        <td><p class="col-text"><?php grade($row['mark2']);?></p></td>
                    </tr>
                    <tr>
                        <td class="sub">Linux</td>
                        <td><input type="number" value="<?php echo $row['mark3'];?>" class="col-text-box" name="m3" min="0" max="100"></td>
                        <td><input type="text" value="100" class="col-text-box" readonly></td>
                        <td><p class="col-text"><?php grade($row['mark3']);?></p></td>
                    </tr>
                    <tr>
                        <td class="sub">PHP</td>
                        <td><input type="number" value="<?php echo $row['mark4'];?>" class="col-text-box" name="m4" min="0" max="100"></td>
                        <td><input type="text" value="100" class="col-text-box" readonly></td>
                        <td><p class="col-text"><?php grade($row['mark4']);}?></p></td>
                    </tr>
                </table>
                   <p class="save-btn-container"><input type="submit" value="Save" name="save"></p>
                
                
            </div>
        
        </div>
    </div>
    <?php
    $result2=mysqli_query($con,"select * from student_review where sname='".$sname."'");
                while($row2=mysqli_fetch_array($result2))
                {
    ?>
    <p class="review-heading">REVIEW</p>
    <p class="review-box"> <textarea name="review" id="review" cols="70" rows="15"><?php echo $row2['review']?></textarea></p>
    </form>
    <?php 
                if(isset($_REQUEST['save']))
                {
                    $s="update ".$sem." set mark1='".$_REQUEST['m1']."',mark2='".$_REQUEST['m2']."',mark3=".$_REQUEST['m3'].",mark4=".$_REQUEST['m4']." where sname='".$sname."'";
                    $a="update student_review set review='".$_REQUEST['review']."' where sname='".$sname."'";
                    mysqli_query($con,$s);
                    mysqli_query($con,$a);
                    header("location:edit-result.php?r=".$sname."&s=".$_REQUEST['semester']);
                    mysqli_close($con);
                  
                }
            
                ?>
    <?php
                }
}
    ?>
    
</body>
</html>