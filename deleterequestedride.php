<?php
$id = $_GET['id'];

$dbname = "f6team8_exsplitz";
$conn = mysqli_connect("localhost", "", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM requestedrides WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: profile.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>