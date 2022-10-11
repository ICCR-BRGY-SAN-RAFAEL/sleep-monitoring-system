<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['email'])) 
 $email = $_POST['email'];
 $email = $_SESSION['email'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleep Monitoring System</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" /> 
    <link rel="stylesheet" href="css/templatemo-style.css">
	
	<link rel="stylesheet" a href="css\style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="styletwo.css">
<!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
<style>
        tr, td, h1, h5, p
            {
			color: white;
			}
</style>
</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
      <div class="container-fluid">	
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="index.html"><h1>Sleep Monitoring System</h1></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-supported-content">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item selected">
                        <a class="nav-link" aria-current="page" href="#0" data-no="1">Record</a>
                        <div class="circle"></div>
                      </li>
                      

					  
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="3">Sync</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="4">Send</a>
                        <div class="circle"></div>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>          
        </div>        
      </div>      
      <div class="container-fluid tm-content-container">
        <ul class="cd-hero-slider mb-0 py-5">
		
		
		
		
  
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          <li class="px-3" data-page-no="1">
<body style="margin: 50px;">
    <h1><?php echo $_SESSION['name']; ?><?php echo "'s"?></h1> 
    <h1>Sleep Record</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>Number</th>
				<th>Email</th>
				<th>Oxygen Level</th>
				<th>Heart Rate</th>
				<th>Date</th>
				<th>Time Asleep</th>
				<th>Time Awake</th>
				<th>Total Hours of Sleep</th>
			</tr>
		</thead>
        <tbody>
<body>
     
     </body>
     

    <?php
            $servername = "localhost";
			$username = "id19557446_sleepmonitoringsystem";
			$password = "H!kari16WEBHOSTING";
			$database = "id19557446_sms";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM sleep_records WHERE email = '".$email."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo $row['*'];
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["number"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["oxygen_level"] . "</td>
                    <td>" . $row["heart_rate"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td>" . $row["time_asleep"] . "</td>
                    <td>" . $row["time_awake"] . "</td>
                    <td>" . $row["total_hours_of_sleep"] . "</td>
                </tr>";
            }
            
            $connection->close();
            ?>
            
     
        </tbody>
    </table>
</body>
 
              <div class="text-center">
                  
                  <a href="logout.php" class="btn btn-primary tm-intro-btn tm-page-link">
                    Logout
                  </a>
                
                <a href="#" data-page-no="3" class="btn btn-primary tm-intro-btn tm-page-link">
                  Send
                </a>
                
              </div>            
                  <br><br><br><br><p>The name is associated with the email: <?php echo $_SESSION['email']; ?></p>     
          </li>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <li data-page-no="3" class="px-3">
            <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom">
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="circle intro-circle-3"></div>
              <div class="circle intro-circle-4"></div>
        
	
            </div>
          </li>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <li data-page-no="4">
            <div class="mx-auto page-width-2">
              
              
            </div>            
          </li>
          
          
          
          
          
          
          
          
          
          
          
    
          
        </ul>
    </div>
    <div class="container-fluid">
      <footer class="row mx-auto tm-footer">
        <div class="col-md-6 px-0">
          Copyright 2022 Sleep Monitoring System. All rights reserved.
        </div>
        <div class="col-md-6 px-0 tm-footer-right">
          Designed by SMS
        </div>
      </footer>
    </div>
  </div>
  <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
  <div id="loader-wrapper">            
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>  
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/templatemo-script.js"></script>
</body>
</html>