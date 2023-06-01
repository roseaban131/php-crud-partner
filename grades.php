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
      <img src="RM.png" alt="RM" width="60" height="60">
      <h2 class = "student justify-content">StudentApp</h2>
    </a> </nav>
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
        <h2>Student Grades</h2>
       
        <a href="add_grades.php" class = "btn btn-success float-end">Add grades</a>
        
        <a href="student.php" class = "btn btn-outline-primary float-start">View Student</a>

        <table class="table table-hover table-striped columns text-left">
        
        <thead class ="table-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Grade</th>
            
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                include "config/db.php";
                include "config/config.php";
                $sql = "SELECT * FROM `grades`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                     <tr>
                    <td> <?php echo $row['id_grade'] ?> </td>
                    <td> <?php echo $row['grade'] ?> </td>
                    
                   
                    <td>
                        <a href = "edit_grade.php?id=<?php echo $row['id_grade'] ?>" class="link-dark">
                        <button class= "btn btn-info" type = "submit">Edit</button></a>
                        <a href = "delete_grade.php?id=<?php echo $row['id_grade'] ?>" class="link-dark">
                        <button class= "btn btn-danger" type = "submit">Delete</button></a>
                            
                        </td>
                    </tr>
                    <?php
                }
            ?>
           <br><br>
           

        </tbody>
        </table>
        

       </div>
         <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
</body>
</html>