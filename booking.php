<!DOCTYPE html>
<html>

<head>
    <title>Booking Penerbangan</title>
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


    <center>
        <div class="topnav">
            <a href="booking.php">Booking</a>
            <a href="flight_list.php">Flight List</a>
            <a href="booking_list.php">Booking List</a>
        </div>

        <h1>Booking Pemesanan</h1>

        <form action="insert_booking.php" method="post">

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br>

            <label for="departCity">From :</label>
            <select id="departCity" name="departCity" required>
                <option value="Jakarta">Jakarta</option>
                <option value="Yogyakarta">Yogyakarta</option>
                <option value="Medan">Medan</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Balikpapan">Balikpapan</option>
                <option value="Bali">Bali</option>
                <option value="Pontianak">Pontianak</option>
            </select><br><br>

            <label for="arrivalCity">To :</label>
            <select id="arrivalCity" name="arrivalCity" required>
                <option value="Yogyakarta">Yogyakarta</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Medan">Medan</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Balikpapan">Balikpapan</option>
                <option value="Bali">Bali</option>
                <option value="Pontianak">Pontianak</option>
            </select><br><br>

            <input type="submit" value="Save">
        </form>
    </center>

</body>

</html>