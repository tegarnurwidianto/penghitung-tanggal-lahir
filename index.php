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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="dob">Masukkan Tanggal Lahir:</label>
            <input type="date" id="dob" name="dob[]" required>
            <button type="button" onclick="tambahInput()">Tambah Input</button>
            <button type="submit">Hitung</button>
        </form>
    </div>

    <script>
        function tambahInput() {
            var container = document.querySelector('.calculator');
            var input = document.createElement('input');
            input.type = 'date';
            input.name = 'dob[]';
            container.insertBefore(input, container.lastChild);
        }
    </script>
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
    if (isset($_POST["dob"])) {
        $tanggals_lahir = $_POST["dob"];

        // Menampilkan hasil dengan menggunakan perulangan
        foreach ($tanggals_lahir as $dob) {
            $usia = hitungUsia($dob);
            echo "Tanggal Lahir Anda adalah: " . $dob . "<br>";
            echo "Usia Anda adalah: " . $usia . " tahun.<br><br>";
        }
    }
}
?>
