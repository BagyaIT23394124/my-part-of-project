<?php

 if (isset($_POST['delete_btn']) && isset($_POST['delete_id'])) {
    include 'config.php';
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    
    $sql = "DELETE FROM contact WHERE contactid = '$delete_id'";
    if (mysqli_query($conn, $sql)) 
        echo "Record deleted successfully";
        header("Location: show.php");
        exit();
    } else {
       
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);




?>