<?php
include "config/config.php";
include "config/db.php";


  if(isset($_POST['submit'])){
      
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
      $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
      $dateOfBirth= mysqli_real_escape_string($conn,$_POST['dateOfBirth']);
      $gender =mysqli_real_escape_string($conn,$_POST['gender']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);

      $sql = "INSERT INTO `student`(`firstName`, `lastName`, `dateOfBirth`, `gender`, `email`) 
      VALUES ('$firstName','$lastName','$dateOfBirth','$gender','$email')";

      $result = mysqli_query($conn, $sql);

      if(mysqli_query($conn, $sql)){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Register</title>
  </head>
  <style>

  </style>
  <body>
    
  <br/>
  <div class ="p-3 mb-2 bg-primary-subtle text-emphasis-primary" id = "form-floating mb-3" style="width:55%; margin: auto; text-align: justify;">
  <form action="" method="post" style="width: 50vw; min-width: 300px;">
    <h2>Registration</h2>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="@name" required>
        </div>
        <div class="col">
            <label class="form-label">Password:</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="********" pattern=".{8,}" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Firstname:</label>
            <input type="text" class="form-control" name="firstName" placeholder="Albert" required>
        </div>
        <div class="col">
            <label class="form-label">Lastname:</label>
            <input type="text" class="form-control" name="lastName" placeholder="Cruz" required>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Date of Birth:</label>
        <input type="date" class="form-control" name="dateOfBirth" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Gender:</label> &nbsp;
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="gender" id="Male" value="Male">
            <label for="Male" class="form-check-label">MALE</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="gender" id="Female" value="Female">
            <label for="Female" class="form-check-label">FEMALE</label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="name@example.com" required>
    </div>
    <div>
        <a href="login.php" class="btn btn-secondary"> < </a>
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
        <a href="#" class="btn btn-danger">Cancel</a>
    </div>
</form>

  </div>
  </body>
  </html>
  
