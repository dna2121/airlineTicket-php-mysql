<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asyst";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$departCity = $_POST['departCity'];
$arrivalCity = $_POST['arrivalCity'];
$date = $_POST['date'];

$sql = "INSERT INTO Pemesanan (departCity, arrivalCity, date) VALUES ('$departCity', '$arrivalCity', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";

    header("Location: booking.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>