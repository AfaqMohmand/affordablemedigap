<?php 
    include "db.php";
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $emailAddress = $_POST['emailAddress'];
        $phoneNumber = $_POST['phoneNumber'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $comments = "NaN";
        $zipCode = $_POST['zipCode'];
        $leadId = $_POST['universal_leadid'];
        $sql = "INSERT INTO appointment_data (name, email_address, phone_number, zip_code, gender, age, comments, leadiD) VALUES ('$name', '$emailAddress', '$phoneNumber', '$zipCode', '$gender', '$age', '$comments', '$leadId')";
        if (mysqli_query($conn, $sql)){
            echo "Your appointment is Successful, we will get back to you as soon as possible.";
        }
        else {
            die("Connection Error!!!");
        }
    }
    mysqli_close($conn);

?>