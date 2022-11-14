<html lang="enmain-heading">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="form-style.css">
    <link rel="stylesheet" href="home-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
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
            <a href="#home" class="link-text">Home</a>
            <a href="login.php" class="link-text">login</a>
            <a href="#contact" class="link-text">contact</a>
        </div>
        </nav>
    </div>
    <!-----------------------------mainsection----------------------->
    <div class="main" id="home">
        <div class="main-content">
            <div class="main-heading">
                <p class="school-name"><h1>sree Vivekananda</h1>
                    <h2>Higher Secondary School</h2>   
                </p>
                <p class="exam-result">
                    <h3>
                        Examination <br>
                        <span class="result-text">Results
                <!----<span>R</span><span>E</span><span>S</span><span>U</span><span>L</span><span>T</span><span>S</span>--->
                        </span>
                    </h3>
                </p>
         </div>
           <div class="login-button-container">
             <a href="login.php"><button class="login-button"><b>Login</b></button> </a>
            </div>
       
        </div>
    </div>
    <!---------------------------contact section------------------>
    <div class="contact-container">
        <p class="contact-header">GET IN TOUCH</p>
        <div id="contact">
          <div class="contact-message-container">
            <div class="contact-message">
                    <p class="contact-note">Please fill out the form below to send us your feedback and complaints</p>
                <form action="" class="message-form">
                    <p><input type="text" class="contact-text-box" placeholder="Name" required></p>
                    <p><input type="text" class="contact-text-box" placeholder="Email" required></p>
                    <p><textarea name="message" class="contact-textarea" cols="80" rows="10" placeholder="Message" required></textarea></p>
                    <p class="send-button-container">
                    <!-- <input type="reset" class="send-button" value="Clear">-->
                        <input type="submit" class="send-button" value="Send Message"></p>
                </form>
            </div>
         </div>
         <div class="contact-details">
             <p class="contact-info">Contact Info</p>
                  <div>
                      <p><i class="fa-solid fa-location-dot"></i>Address</p>
                        <p> 
                            Sree Vivekananda <br>
                            Higher Secondary School <br>
                            Kochi, Kerala, India
                        </p>
                        <p class="contact-info-header">
                        <i class="fa-solid fa-phone"></i> Phone Number
                        </p>
                        <p>+91 98765 43210 <br>+91 94001 70003
                        </p>
                        <p class="contact-info-header"><i class="fa-solid fa-envelope"></i> Email</p>
                        <p>mail@sreevivekananda.com</p>
                 </div>
             </div>
         </div>
         <div class="social-media-container">
            <div class="social-media-icons">
               <a href=""><i class="fa-brands fa-facebook"></i></a> 
               <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
               <a href=""><i class="fa-brands fa-twitter"></i></a>
               <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    
</body>
</html>
