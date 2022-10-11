<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="styletwo.css">

<style>
h2, label
{
    color: white;
}
</style>
	
</head>
<body>
    
     <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>

     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="gmail" placeholder="Email">

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
     	<button type="submit">Login</button>
     	
        <p><a href="index.html" class="n">↩</a><a href="forgot-password.php">Forgot Password?</a><br><br>
        <a href="signup-user.php">Don't have an account ?</a></p>
        
     </form>
     
</body>
</html>