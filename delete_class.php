<?php
include "config/db.php";
include "config/config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `classes` WHERE id_class = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: classes.php?msg=Deleted Successfully");
}
else {
    echo "Failed: Error" . mysqli_error($conn);
}
?>