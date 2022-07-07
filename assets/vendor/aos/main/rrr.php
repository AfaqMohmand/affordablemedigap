<?php 

include "db.php";

$sql = "DELETE FROM get_quote";

if (mysqli_query($conn, $sql)){
    echo "Successfully Deleted All Records";
}
else {
    echo "Problem with this thing";
}
?>