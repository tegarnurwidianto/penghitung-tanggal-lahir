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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST["dob"];

    // Proses penghitungan tanggal lahir
    // (Anda dapat menyesuaikan proses sesuai kebutuhan)

    echo "Tanggal Lahir Anda adalah: " . $dob;
}
?>
