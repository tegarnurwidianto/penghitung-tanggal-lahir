<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal Lahir Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            text-align: center;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
        }

        input {
            padding: 8px;
            font-size: 1em;
        }

        button {
            padding: 8px 20px;
            font-size: 1em;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form action="calculate.php" method="post">
            <label for="dob">Masukkan Tanggal Lahir:</label>
            <input type="date" id="dob" name="dob" required>
            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>

<?php
function hitungUsia($tanggal_lahir) {
    $tanggal_lahir = new DateTime($tanggal_lahir);
    $sekarang = new DateTime('now');
    $usia = $sekarang->diff($tanggal_lahir);
    return $usia->y;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST["dob"];

    // Memanggil fungsi hitungUsia untuk mendapatkan usia
    $usia = hitungUsia($dob);

    // Menampilkan hasil dengan menggunakan perulangan
    echo "Tanggal Lahir Anda adalah: " . $dob . "<br>";
    echo "Usia Anda adalah: " . $usia . " tahun.";
}
?>

