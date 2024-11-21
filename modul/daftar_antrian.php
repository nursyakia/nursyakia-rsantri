<?php
include "../lib/koneksi.php";

$sql = "SELECT * FROM tbantrian";
$stmt = $conn->prepare($sql);
$stmt->execute();

echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Daftar Antrian Pasien</title>
    <style>
        body {
            font-family: Garamond, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px;
            overflow-x: auto;
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;  
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        td a {
            color: #007bff; 
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
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

<div class='container'>
    <h2>Daftar Antrian Pasien</h2>";

echo "<table>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Nomor Antrian</th>
            <th>Waktu Kedatangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>";

$antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($antrian) > 0) {

    $no = 1;
    foreach ($antrian as $row) {
        echo "<tr>
                <td>".$no."</td>
                <td>".$row["nama_pasien"]."</td>
                <td>".$row["nomor_antrian"]."</td>
                <td>".$row["waktu_kedatangan"]."</td>
                <td>".$row["status"]."</td>
                <td>
                    <a href='ubah_status.php?id=".$row["id"]."'>Ubah Status</a> |
                    <a href='hapus_antrian.php?id=".$row["id"]."'>Hapus</a>
                </td>
              </tr>";
        $no++;
    }

    echo "</table>";
} else {
    echo "<p>Tidak ada antrian.</p>";
}

echo "</div>

</body>
</html>";

$conn = null;
?>
