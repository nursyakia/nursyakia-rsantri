<?php
include "../lib/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];
    $sql = "INSERT INTO tbantrian (nama_pasien, nomor_antrian, waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrian);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);

    if ($stmt->execute()) {
        // echo "Data antrian berhasil ditambahkan!";
    } else {
        echo "Error: Gagal menambahkan data.";
        echo"coba";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Antrian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #28a745;  /* Mengganti biru menjadi hijau */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #f4f4f9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #28a745;  /* Mengganti biru menjadi hijau */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;  /* Warna hijau lebih gelap saat hover */
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Tambah Antrian</h2>
        <form method="POST" action="tambah_antrian.php">
            <label for="nama_pasien">Nama Pasien:</label>
            <input type="text" name="nama_pasien" id="nama_pasien" required>

            <label for="nomor_antrian">Nomor Antrian:</label>
            <input type="number" name="nomor_antrian" id="nomor_antrian" required>

            <label for="waktu_kedatangan">Waktu Kedatangan:</label>
            <input type="datetime-local" name="waktu_kedatangan" id="waktu_kedatangan" required>

            <input type="submit" value="Tambah Antrian">
        </form>
    </div>

</body>
</html>
