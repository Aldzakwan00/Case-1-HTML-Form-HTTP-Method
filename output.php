<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Content</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="body-utama">
        <!-- Bagian Header -->
        <?php include 'header.php'; ?>
        
        <!-- Bagian Main/Form -->
        <div class="text-center my-5 text-dark">
            <h1>Data Kartu Karyawan</h1>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card mb-3 shadow" style="max-width: 1040px;">
                <div class="row g-5 p-5">

                    <!-- Bagian Foto -->
                    <div class="col-md-4 d-flex align-items-center">
                        <?php
                            $temp = $_FILES['upFile']['tmp_name']; 
                            $dest = getcwd()."/uploads/".$_FILES['upFile']['name'];
                            move_uploaded_file($temp, $dest);
                        ?>
                        <img src="uploads/<?php echo $_FILES['upFile']['name']; ?>" class="img-fluid rounded-start w-100 h-100" alt="Profile Picture">
                    </div>

                    <!-- Bagian Informasi -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Kartu Tanda Karyawan</h2>
                            <br>
                            <?php
                                // Bagian Nama
                                $namaDepan = $_POST['firstName'];
                                $namaBelakang = $_POST['lastName'];
                                echo "<p><span class='data-tampil''>Nama</span>: $namaDepan $namaBelakang</p>";

                                // Bagian Email
                                $email = $_POST['email'];
                                echo "<p><span class='data-tampil''>Email</span>: $email </p>";

                                // Bagian Nomor HP
                                $nomorHP = $_POST['phoneNumber'];
                                echo "<p><span class='data-tampil''>Nomor HP</span>: 0$nomorHP </p>";

                                // Bagian Kota
                                $city = $_POST['inputCity'];
                                echo "<p><span class='data-tampil''>Kota Asal</span>: $city</p>";

                                //Bagian Gender
                                $gender = $_POST['gender'];
                                echo "<p><span class='data-tampil''>Jenis Kelamin</span>: $gender</p>";

                                //Bagian Jabatan
                                $jabatan = $_POST['jabatan'];
                                echo "<p><span class='data-tampil''>Jabatan</span>: $jabatan</p>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
            
        <!-- Bagian Footer -->
        <?php include 'footer.php'; ?>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
