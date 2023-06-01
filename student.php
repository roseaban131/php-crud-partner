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
      <img src="RM.png" alt="RM" width="60" height="60">
      <h2 class = "student justify-content">StudentApp</h2>
    </a>
           
         
            <form class ="d-flex" role="search" action="filter_student.php" method="GET">
                    <br>
                    
                    <select class="form-select form-select-lg me-2" aria-label=".form-select-lg example" id="search" name="gender">
                        <option value="Male">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            
        </nav>
       <div class = "container">
        <?php
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    '.$msg.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }        
        ?>
        <h2>Student Information</h2>
       
        <a href="add_student.php" class = "btn btn-success float-end">Add Student</a>
        <a href="teacher.php" class = "btn btn-outline-primary float-start">View Teachers </a>
       
        <a href="subject.php" class = "btn btn-outline-primary float-start">View Subject</a>
       
        <a href="grades.php" class = "btn btn-outline-primary float-start">View Grades</a>
        
        <a href="classes.php" class = "btn btn-outline-primary float-start">View Class</a>
        
        <table class="table table-hover table-striped">
    <thead class="table-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "config/db.php";
        include "config/config.php";
        $sql = "SELECT * FROM `student`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['student_id'] ?></td>
                <td><?php echo $row['firstName'] ?></td>
                <td><?php echo $row['lastName'] ?></td>
                <td><?php echo $row['dateOfBirth'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <a href="edit_student.php?id=<?php echo $row['student_id'] ?>" class="btn btn-info">Edit</a>
                    <a href="delete_student.php?id=<?php echo $row['student_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

        <a href="login.php" class = "btn btn-outline-danger float-start">Logout</a>
       </div>
         <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
</body>
</html>