<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content ="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>PHP PARTNER</title>
    </head> 

    <body>
    <nav class ="navbar navbar-light justify-content-left fs-3 mb-5" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">
            <h2>
      <img src="RM.png" alt="RM" width="60" height="60">StudentApp
    </h2>
    </a></nav>
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
        <h2>Teacher</h2>
        <a href="add_teacher.php" class = "btn btn-outline-success float-end">Add teacher</a>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="student.php" class="btn btn float-start nav-link ">View Student</a>
            </li>
            <li class="nav-item">
                <a href="teacher.php" class="btn btn float-start nav-link active">View Teachers</a>
            </li>
            <li class="nav-item">
                <a href="subject.php" class="btn btn float-start nav-link ">View Subject</a>
            </li>
            <li class="nav-item">
                <a href="grades.php" class="btn btn float-start nav-link">View Grades</a>
            </li>
            <li class="nav-item">
                <a href="classes.php" class="btn btn float-start nav-link">View Class</a>
            </li>
        </ul>

        <table class="table table-hover table-striped columns text-left">
        
        <thead class ="table-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Subject Taught</th>
            <th scope="col">Address</th>
            <th scope="col">Contact Information</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
               
                include "config/db.php";
                include "config/config.php";
                $sql = "SELECT * FROM `teachers`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                     <tr>
                    <td> <?php echo $row['id_teacher'] ?> </td>
                    <td> <?php echo $row['firstname'] ?> </td>
                    <td> <?php echo $row['lastname'] ?> </td>
                    <td> <?php echo $row['dateOfBirth'] ?> </td>
                    <td> <?php echo $row['subjects_taught'] ?> </td>
                    <td> <?php echo $row['address'] ?> </td>
                    <td> <?php echo $row['contactInfo'] ?> </td>
                    <td>
                        <a href = "edit_teacher.php?id=<?php echo $row['id_teacher'] ?>" class="link-dark">
                        <button class= "btn btn-info" type = "submit">Edit</button></a>
                        <a href = "delete_teacher.php?id=<?php echo $row['id_teacher'] ?>" class="link-dark">
                        <button class= "btn btn-danger" type = "submit">Delete</button></a>
                            
                        </td>
                    </tr>
                    <?php
                }
            ?>
           
            
        </tbody>
        </table>
        
       </div>
         <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>