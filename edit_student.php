<?php
include "config/db.php";
include "config/config.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $sql = "UPDATE `student` SET `firstName`='$firstName', `lastName`='$lastName', `dateOfBirth`='$dateOfBirth', `gender`='$gender', `email`='$email' WHERE student_id =$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: student.php?msg=Record updated successfully");
        exit;
    } else {
        echo "Failed: Error" . mysqli_error($conn);
    }
}

// Retrieve student data
$sql = "SELECT * FROM `student` WHERE student_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
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
            <h3>Update</h3>
        </div>

        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Firstname:</label>
                    <input type="text" class="form-control" name="firstName"
                        value="<?php echo $row['firstName'] ?>">
                </div>

                <div class="col">
                    <label class="form-label">Lastname:</label>
                    <input type="text" class="form-control" name="lastName"
                        value="<?php echo $row['lastName'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="dateOfBirth"
                        value="<?php echo $row['dateOfBirth'] ?>">
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="Male" value="Male"
                        <?php echo ($row['gender'] == 'Male') ? "checked" : ""; ?>>
                    <label for="Male" class="form-input-label"> MALE</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="Female" value="Female"
                        <?php echo ($row['gender'] == 'Female') ? "checked" : ""; ?>>
                    <label for="Female" class="form-input-label"> FEMALE</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">
                        Update
                    </button>
                    <a href="edit_student.php" class="btn btn-danger">Cancel</a>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>
