<!DOCTYPE html>
<html>

<head>
    <title>Detail Penerbangan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 100;
        padding: 0;
        /* display: center; */
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input,
    select {
        width: 100%;
        height: 70;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    a {
        text-decoration: none;
        color: #007BFF;
        font-weight: bold;
        margin-left: 10px;
    }

    a:hover {
        color: #0056b3;
    }

    .topnav {
        overflow: hidden;
        background-color: #f4f4f4;
    }

    .topnav a {
        float: left;
        color: #76a5af;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #76a5af;
        color: grey;
    }
</style>



<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asyst";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $idFlight = $_GET['id'];

    $sql = "SELECT idFlight, departure, destination, date, departTime, arrivalTime, Airline FROM Penerbangan WHERE idFlight = $idFlight";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<center>';
            echo '<div class="topnav">';
            echo '<a href="booking.php">Booking</a>';
            echo '<a href="flight_list.php">Flight List</a>';
            echo '<a href="booking_list.php">Booking List</a>';
            echo '</div>';

            echo '<h1>Detail Penerbangan</h1>';


            echo '<form>';
            echo '<h2>' . $row["Airline"] . '</h2>';
            echo '<p><b>Tanggal : </b>' . date('d F Y', strtotime($row["date"])) . '</p>';

            $departTime = new DateTime($row["departTime"]);
            $arrivalTime = new DateTime($row["arrivalTime"]);

            echo '<p><b>Waktu Keberangkatan : </b>' . $departTime->format('H:i') . ' WIB </p>';
            echo '<p><b>Waktu Kedatangan : </b>' . $arrivalTime->format('H:i') . ' WIB </p>';
            echo '<p><b>Rute : </b>' . $row["departure"] . ' - ' . $row["destination"] . '</p>';

            echo '<p><b>Bagasi : </b>' . ' 20 kg </p>';
            echo '<p><b>Kabin : </b>' . ' 7 kg </p>';
            echo '<p><b>Gratis makanan 🍽️ </b> </p>';

            echo '</form>';
        }
    } else {
        echo "Tidak ada data ditemukan";
    }


    $conn->close();
    ?>

</body>

</html>