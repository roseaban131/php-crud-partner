<?php
include "config/db.php";
include "config/config.php";

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $subjects_taught = $_POST['subjects_taught'];
    $address = $_POST['address'];
    $contactInfo = $_POST['contactInfo'];

    $sql = "UPDATE `teachers` SET `firstname`='$firstname',`lastname`='$lastname',`dateOfBirth`='$dateOfBirth',`subjects_taught`='$subjects_taught',`address`=' $address',`contactInfo`='$contactInfo' 
    WHERE id_teacher = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: teacher.php?msg=New record created successfully");
        exit;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP CRUD PARTNER</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-left fs-3 mb-5" style="background-color: lightblue;">
        WEB APPLICATION
    </nav>
    <div class="container">
        <div class="text-left mb-4">
            <h3>Add</h3>
        </div>

        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Firstname:</label>
                    <input type="text" class="form-control" name="firstname" 
                        value="<?php echo $row['firstname'] ?>">
                </div>

                <div class="col">
                    <label class="form-label">Lastname:</label>
                    <input type="text" class="form-control" name="lastname" 
                        value="<?php echo $row['lastname'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="dateOfBirth" 
                        value="<?php echo $row['dateOfBirth'] ?>">
                </div>

                <div class="col">
                    <label class="form-label">Subjects Taught:</label>
                    <input type="text" class="form-control" name="subjects_taught" 
                        value="<?php echo $row['subjects_taught'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" 
                        value="<?php echo $row['address'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Information:</label>
                    <input type="text" class="form-control" name="contactInfo" 
                        value="<?php echo $row['contactInfo'] ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">
                        Update
                    </button>
                    <a href="student.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
