<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['gmail']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$gmail = validate($_POST['gmail']);
	$pass = validate($_POST['password']);

	if (empty($gmail)) {
		header("Location: index2.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index2.php?error=Password is required");
	    exit();
	}
	

	
	else{
		$sql = "SELECT * FROM users WHERE email='$gmail' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $gmail && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: records.php");
		        exit();
		        
            }else{
				header("Location: index2.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: index2.php?error=Incorect Email or password");
	        exit();
		}
	}
	

	
}else{
	header("Location: index2.php");
	exit();
}
