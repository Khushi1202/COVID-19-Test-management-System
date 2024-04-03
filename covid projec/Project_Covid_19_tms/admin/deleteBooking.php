<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "covidtestreg");

    $sql = "DELETE FROM usertable WHERE id = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>