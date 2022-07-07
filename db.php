<?php 
    $conn = mysqli_connect("localhost:3306", "wwwaffordablemed_nextgentech", "nextGenTech2022", "wwwaffordablemed_admin_sys");
    if (!$conn){
        echo "Error Connecting With Database";
    }
    // For local host
    // $conn = mysqli_connect("localhost", "root", "", "final_affordable");
    // if (!$conn){
    //     echo "Error Connecting With Database";
    // }
?>

