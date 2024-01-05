<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penerbangan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 0;
            /* display: center; */
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card-container {
            display: flex;
            /* flex-wrap: wrap; */
            justify-content: space-between;
        }

        .card {
            flex: 0 0 calc(33.33% - 20px);
            box-sizing: border-box;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 20px;
        }

        h2 {
            color: #333;
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
</head>

<body>
    <div class="topnav">
        <a href="booking.php">Booking</a>
        <a href="flight_list.php">Flight List</a>
        <a href="booking_list.php">Booking List</a>
    </div>

    <br>
    <br>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asyst";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }


    $sql = "SELECT idBooking, date, departCity, arrivalCity FROM Pemesanan ORDER BY date ASC";


    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<div class="container">';

            $dateOriginal = $row["date"];
            $dateFormatted = date('d F Y', strtotime($dateOriginal));
            echo '<h1>' . $dateFormatted . '</h1>';

            echo $row["departCity"];
            echo "  ––– ";
            echo $row["arrivalCity"];

            echo '<a href="javascript:void(0);" onclick="confirmDelete(' . $row["idBooking"] . ')">Hapus</a>';


            echo '</div>';
            echo '</div>';

        }
    } else {
        echo "Tidak ada data ditemukan";
    }


    $conn->close();
    ?>
    <script>
        function confirmDelete(idBooking) {
            var result = confirm("Batalkan pesanan tiket pesawat?");
            if (result) {
                window.location.href = 'delete_booking.php?idBooking=' + idBooking;
            }
        }
    </script>
    <br>
    <br>

</body>

</html>