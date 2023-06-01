<?php
include "config/db.php";
include "config/config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `teachers` WHERE id_teacher = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: teacher.php?msg=Delete Successfully");
}
else {
    echo "Failed: Error" . mysqli_error($conn);
}
?>