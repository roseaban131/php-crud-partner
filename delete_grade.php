<?php
include "config/db.php";
include "config/config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `grades` WHERE id_grade = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: grades.php?msg=Deleted Successfully");
}
else {
    echo "Failed: Error" . mysqli_error($conn);
}
?>