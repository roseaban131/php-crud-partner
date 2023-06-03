<?php
include "config/db.php";
include "config/config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM `grades` WHERE id_grade = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    $grades = $_POST['grade'];

    $sql = "UPDATE `grades` SET `grade` = '$grades' 
    where id_grade = $id";
    

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: grades.php?msg=New record updated successfully");
        exit();
    } else {
        echo "Failed: Error" . mysqli_error($conn);
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
    <div class="container">
        <div class="text-left mb-4">
            <h3>Add subject</h3>
        </div>

        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Grade:</label>
                    <input type="text" class="form-control" name="grade" 
                        value="<?php echo $row['grade'] ?>">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="grades.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
