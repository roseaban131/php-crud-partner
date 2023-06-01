<?php
include "config/db.php";
include "config/config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE student_id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: student.php?msg=Delete Successfully");
}
else {
    echo "Failed: Error" . mysqli_error($conn);
}
?>