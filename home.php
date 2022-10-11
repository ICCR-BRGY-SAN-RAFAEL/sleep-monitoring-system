<?php 
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['name'])) 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
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
    
     <h1>🎉Congratulations! You are now a <span class="highlight">verified user</span> of<br>Sleep Monitoring System</h1>
     <br>
     <h2>We have successfully created and verified your account, <br>you can now Log in by clicking the button below.</h2>
     <a href="login.php">🎉 Log-in 🎉</a>
</body>
</html>