<?php
include '../lib/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE tbantrian SET status = 'Selesai' WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        $message = "Status pasien berhasil diubah menjadi Selesai!";
        $alert_class = "alert-success";
    } else {
        $message = "Error: Gagal mengubah status.";
        $alert_class = "alert-danger";
    }
}
$conn = null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Status Pendaftaran Pasien</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            background-color: #007bff;
            color: white;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
            font-size: 1.1rem;
            padding: 10px 20px;
            width: 100%;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #00408f;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #007bff;
        }

        .alert {
            font-size: 1rem;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Status Change Form -->
    <div class="card">
        <div class="card-header">Ubah Status Pendaftaran Pasien</div>
        <div class="card-body">
            <?php if (isset($message)) { ?>
                <div class="alert <?php echo $alert_class; ?> mt-3"><?php echo $message; ?></div>
            <?php } ?>

            <p>Anda dapat mengubah status pendaftaran pasien menjadi "Selesai" setelah pasien selesai melakukan proses.</p>

            <form method="GET" action="">
                <div class="form-group">
                    <label for="id">ID Pasien</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan ID Pasien" required>
                </div>

                <button type="submit" class="btn btn-primary">Ubah Status</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
