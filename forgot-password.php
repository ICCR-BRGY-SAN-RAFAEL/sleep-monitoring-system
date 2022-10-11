<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="styletwo.css">

</head>
<body>
    
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    
   
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h1 class="text-center">Forgot Password</h1><br>
                    <p class="text-center">Enter your email address</p>
                    
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    
                        <input type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    
                        <input type="submit" name="check-email" value="Continue">
                        <a href="login.php">↩ Back to Login</a>
                    
                </form>
            
    
</body>
</html>