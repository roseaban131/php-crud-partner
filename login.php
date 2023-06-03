<?php 
  include "config/config.php";
  include "config/db.php";

	if(isset($_POST['submit'])){
		
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

        $query= "INSERT INTO `useraccount`( `username`, `password`) VALUES ('$username','$password')";

		if(mysqli_query($conn, $query)){
        header('Location: student.php'.' ');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-xz+9/A8s4smTw3A/FDQbs+xpjAmil0MApMQzQRxMvPG0E2sls5fDadQCBt0Ik5kMqCJ3cEmEjQg6Ii8dY1T2Fg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <title>Sign in</title>
  </head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #FFDAB9;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group input[type="submit"] {
      background-color: #FFDAB9;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
    .custom-background {
  background-image: url('minimalist.jpg');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
 
}

  </style>
  <body class = "custom-background">
  <br/>
  
  <div class ="card shadow" id = "form-floating mb-1" style="width:30%; padding: 50px; margin: auto; text-align: left;">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-signin">

      
      
      <img class = "mx-auto justify-center" src="RM.png" alt="RM" width="100" height="100">
      <h1 class="h2 mb-3 font-weight-normal">Sign in</h1>
      
      <label for="inputEmail" class="sr-only">Username</label>
      <div class = "input-group">
      <span class="input-group-text" id="basic-addon1"></span>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username"   required="" autofocus="">
  
      
    </div>
      <br/><label for="inputPassword" class="sr-only">Password</label>
      <div class = "input-group">
      <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
      <input type="password" id="password" name="password" class="form-control" placeholder="********" pattern=".{8,}" required>
  </div>
  <br>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      
      <button type="submit" name="submit" value="Submit" class="btn btn-success ">Sign in</button>
      <a href name = "cancel" value = "cancel" class="btn btn-danger">Cancel</a>
      <br> <br>
      <label>
         Don't have an account?
        </label>
      <a href="register.php" class = "btn btn-outline-primary">Register</a>
    </form>
    
  </div> 
  </div>

  
  </body>
  </html>
  
