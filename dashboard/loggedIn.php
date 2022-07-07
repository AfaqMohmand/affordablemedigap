<?php 
session_start();
include "db.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

}

$sql = "SELECT user_name, password FROM users WHERE user_name = '$username' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
    $user_data = mysqli_fetch_assoc($result);
    $db_user = $user_data['user_name'];
    $db_pwd = $user_data['password'];
    if ($username === $db_user && $password === $db_pwd){
        $_SESSION['loggedIn'] = 'true';
        $_SESSION['name'] = $db_user;
        $_SESSION['logUser'] = true;
        // Redirect to index file after successful login
        header("location:index.php");
    }
    else {
        echo "please check your information";
    }
}
else {
    echo "Please Check your information";
}
mysqli_close($conn);
?>