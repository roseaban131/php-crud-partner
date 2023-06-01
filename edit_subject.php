<?php
include "config/db.php";
include "config/config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM `subject` WHERE id_subject = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    $subject_name = $_POST['subject_name'];

    $sql = "UPDATE `subject` SET `subject_name` = '$subject_name' 
    where id_subject = $id";
    

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: subject.php?msg=New record created successfully");
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
    <nav class="navbar navbar-light justify-content-left fs-3 mb-5" style="background-color: lightblue;">
        WEB APPLICATION
    </nav>
    <div class="container">
        <div class="text-left mb-4">
            <h3>Add subject</h3>
        </div>

        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Subject name:</label>
                    <input type="text" class="form-control" name="subject_name" 
                        value="<?php echo $row['subject_name'] ?>">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="subject.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
