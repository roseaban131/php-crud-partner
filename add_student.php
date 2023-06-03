<?php
include "config/db.php";
include "config/config.php";
if (isset($_POST['submit'])){
    $firstName =$_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dateOfBirth= $_POST['dateOfBirth'];
    $gender =$_POST['gender'];
    $email = $_POST['email'];
    

    $sql = "INSERT INTO `student`(`firstName`, `lastName`, `dateOfBirth`, `gender`, `email`) 
    VALUES ('$firstName','$lastName','$dateOfBirth','$gender','$email')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: student.php?msg=New record created successfully");
    }
    else {
        echo "Failed: Error" . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content ="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>PHP CRUD PARTNER</title>
    </head> 

    <body>
    <nav class ="navbar navbar-light justify-content-left fs-3 mb-5" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">
            <h2>
      <img src="RM.png" alt="RM" width="60" height="60">StudentApp
    </h2>
    </a>
 </nav>
        <div class = "container">
            <div class ="text-left mb-4"><h3>Add new</h3></div>
           
            <form action="" method ="post" style= "width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class = "col">
                        <label class = "form-label">Firstname:</label>
                        <input type ="text" class = "form-control" name="firstName" placeholder = "Albert">
                    </div>

                    <div class = "col">
                        <label class = "form-label">Lastname:</label>
                        <input type ="text" class = "form-control" name="lastName" 
                        placeholder = "Cruz">
                    </div>

                    <div class = "mb-3">
                        <label class = "form-label">Date of Birth:</label>
                        <input type ="date" class = "form-control" name="dateOfBirth" 
                        placeholder = "mm/dd/yy">
                    </div>

                    <div class= "form-group mb-3">
                        <label>Gender:</label> &nbsp;
                        <input type ="radio" class = "form-check-input" name = "gender" 
                        id = "Male" value = "Male">
                        <label for = "male" class= "form-input-label"> MALE</label>
                        &nbsp;
                        <input type ="radio" class = "form-check-input" name = "gender" 
                        id = "Female" value = "Female">
                        <label for = "Female" class= "form-input-label"> FEMALE</label>
                    </div>

                    <div class = "mb-3">
                        <label class = "form-label">Email:</label>
                        <input type ="text" class = "form-control" name="email" 
                        placeholder = "name@example.com">
                    </div>

                    <div>
                        <button type ="submit" class="btn btn-success" name="submit">
                            Save changes
                        </button>
                        <a href="add_student.php" class="btn btn-danger">Cancel</a>
                    </div>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>