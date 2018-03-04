<?php
include 'includes/dbh.inc.php';
session_start();




// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE user_uid='$uid' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


        echo "User ID: " . $row["user_uid"].  " Firstname: " .$row["user_first"].  " Lastname: "  .$row["user_last"]."<br>";
      }

} else {
    echo "0 results";
}
mysqli_close($conn);

?>
