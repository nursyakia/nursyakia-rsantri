<?php   
$host = "localhost";
$username = "root";
$password = "nrsykia19";
$dbname = "rumahsakit";

try{

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi berhasil";

} catch (PDOException $e){

    echo "Koneksi gagal: "  . $e->getMessage();
}
?>