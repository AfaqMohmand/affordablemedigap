<?php 
    session_start();
    if ($_SESSION['loggedIn'] === 'true'){
    $uname = $_SESSION['name'];
    include "db.php";
    // $conn = mysqli_connect("localhost", "root", "", "adminsys");
    $sql = "SELECT * FROM get_quote";
    $res = mysqli_query($conn, $sql);
    $html = "<table><tr><th>Date</th><th>Time</th><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Phone Number</th><th>Zip Code</th><th>DOB</th><th>Gender</th><th>Lead ID</th></tr>";
    while($row = mysqli_fetch_assoc($res)){
    $html.= '<tr><td>'.$row['dateAdded'].'</td><td>'.$row['timeAdded'].'</td><td>'.$row['f_name'].'</td><td>'.$row['l_name'].'</td><td>'.$row['email_address'].'</td><td>'.$row['phone_number'].'</td><td>'.$row['zip_code'].'</td><td>'.$row['dob'].'</td><td>'.$row['gender'].'</td><td>'.$row['leadiD'].'</td></tr>';
    }
    
    $html.='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment; filename=report.xls');
    echo $html;
    mysqli_close($conn);
    }
    else {
        header("location:login.php");
    }
?>