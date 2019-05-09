<?php

include 'navbar.php';
require_once 'config.php';
// Process delete operation after confirmation
$sql = "DELETE FROM users WHERE id=10";

if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
        header("location: read.php");
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
        header("location: welcome.php");
}

mysqli_close($mysqli);
?>
