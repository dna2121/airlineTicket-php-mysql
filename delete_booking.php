<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asyst";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$idBooking = $_GET['idBooking'];
$sql = "DELETE FROM Pemesanan WHERE idBooking = '$idBooking' ";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";

    header("Location: booking_list.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}


$conn->close();
?>