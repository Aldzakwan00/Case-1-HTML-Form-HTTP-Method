<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>

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
        <div class="text-center my-3 text-dark">
            <h1>Formulir Data Kartu Karyawan</h1>
        </div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="card shadow mx-5">
                <div class="card-body m-3" >

                    <form class="row g-3" action="output.php" method="post" enctype="multipart/form-data">
                        <!-- Bagian Nama -->
                        <div class="col-md-6">
                            <label class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" name="firstName" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>

                        <!-- Bagian Email -->
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control " name="email" placeholder="example@gmail.com" required>
                        </div>

                        <!-- Bagian Nomor HP -->
                        <div class="col-12">
                            <label class="form-label">Nomor Handphone</label>
                            <div class="input-group">
                                <span class="input-group-text">+62</span>
                                <input type="tel" class="form-control" name="phoneNumber" placeholder="8xxxxxxx" required>
                            </div>
                        </div>

                        <!-- Bagian Kota Asal -->
                        <div class="col-md-4">
                            <label class="form-label">Kota Asal</label>
                            <input type="text" class="form-control" name="inputCity" placeholder="Malang, East Java" required>
                        </div>

                        <!-- Bagian Jenis Kelamin -->
                        <div class="col-md-4">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="gender" class="form-select" required>
                            <option selected disabled value="">-</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                            </select>
                        </div>

                        <!-- Bagian Jabatan -->
                        <div class="col-md-4">
                            <label class="form-label">Jabatan</label>
                            <select name="jabatan" class="form-select" required>
                            <option selected disabled value="">-</option>
                            <option>Pekerja Magang (Intern)</option>
                            <option>Staf Junior</option>
                            <option>Staf Senior</option>
                            <option>Team Leader</option>
                            <option>Spesialis Departemen</option>
                            <option>Kepala Departemen</option>
                            <option>Asisten Eksekutif</option>
                            <option>Anggota Dewan</option>
                            <option>Direktur Utama</option>
                            <option>Direksi</option>
                            </select>
                        </div>

                        <!-- Bagian Upload Foto Profil -->
                        <div class="mb-3">
                            <label class="form-label">Upload Foto Profil</label>
                            <input class="form-control" type="file" accept="image/*" id="formFile" name="upFile" required>
                        </div>

                        <!-- Bagian Form Check -->
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label" for="invalidCheck">
                            Setuju dengan syarat dan ketentuan
                            </label>
                            </div>
                        </div>

                        <!-- Bagian Submit -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark text-light">Submit</button>
                        </div>
                    </form>
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
