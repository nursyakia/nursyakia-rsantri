<?php
session_start();
  include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

.bg-img {
    background: url(asset/img/rs.jpg);
    height: 150vh;
    background-size: cover;
    background-position: center;
}


    </style>
</head>
<body>
<!-- Background image -->
<div id="intro" class="bg-img shadow-2-strong">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">
            <!-- Form login -->
            <form method="POST" class="bg-white rounded shadow-5-strong p-5">
              <!-- Username input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="text" id="nama" class="form-control" name="nama" required>
                <label for="nama">Username</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="email" id="email" class="form-control" name="email" required>
                <label for="email">Email</label>
              </div>

              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label for="form1Example3">
                      Remember me
                    </label>
                  </div>
                </div>

                <div class="col text-center">
                  <!-- Simple link -->
                  <a href="#!">Forgot password?</a>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init name="btn">Sign in</button>
            </form>

            <?php
            

            
            if (isset($_POST['btn'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
            
                
                if (empty($email)) {
                    echo "Email tidak boleh kosong.";
                } else {
                   
                    $sqluser = $conn->prepare("SELECT * FROM tbuser WHERE LOWER(email) = LOWER(:email)");
                    $sqluser->bindparam(':email', $email);
            
                   
                    if ($sqluser->execute()) {
                        $row = $sqluser->rowCount();
            
                        if ($row > 0) {
                            $resultuser = $sqluser->fetch(PDO::FETCH_ASSOC);
                            $_SESSION['id'] = $resultuser['id'];
                            $_SESSION['username'] = $resultuser['username'];
            
                            
                            header('location: index.php');
                            exit;
                        } else {
                            echo "User tidak ditemukan.";
                        }
                    } else {
                        
                        print_r($sqluser->errorInfo());
                    }
                }
            }
            ?>
         
  <!-- Background image -->	
</body>
</html>
