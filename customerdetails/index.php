<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.php" method="POST">
				<img src="img/avatar.svg">
				<h3 class="title">Customer details
				</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Full name</h5>
           		   		<input type="text" name="name" class="input">
           		   </div>
				   </div>
				   <div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>EMAIL</h5>
							<input type="text" name="email" class="input">
					</div>
					</div>
					<div class="input-div one">
						<div class="i">
								<i class="fas fa-user"></i>
						</div>
						<div class="div">
								<h5>Contact no.</h5>
								<input type="text" name="contact" class="input">
						</div>
						</div>
						<div class="input-div one">
							<div class="i">
									<i class="fas fa-user"></i>
							</div>
							<div class="div">
									<h5>city</h5>
									<input type="text" name="city" class="input">
							</div>
							</div>
							<div class="input-div one">
								<div class="i">
										<i class="fas fa-user"></i>
								</div>
								<div class="div">
										<h5>Property name</h5>
										<input type="text" name="propertyname" class="input">
								</div>
								</div>
            	<button type="submit" class="btn"> submit </button>
			</form>
			
			<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // $query = $_POST['query'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $propertyname = $_POST['propertyname'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "booknow";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `book`(`name`,`email`,`contact`,`city`,`propertyname`) VALUES ('$name','$email','$contact','$city','$propertyname')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> We will contact you shortly!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue unsuccessfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }
    

    
                ?>













        </div>
	</div>
</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
