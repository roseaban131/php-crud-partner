<?php
include "config/db.php";
include "config/config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `subject` WHERE id_subject = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: subject.php?msg=Delete Successfully");
}
else {
    echo "Failed: Error" . mysqli_error($conn);
}
?>