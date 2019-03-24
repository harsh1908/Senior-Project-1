<?php
$id = $_GET['id'];

$dbname = "f6team8_exsplitz";
$conn = mysqli_connect("localhost", "", "", $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM hostedrides WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: profile.php');
    exit;
} else {
    echo "Error deleting record";
}
?>