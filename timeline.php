<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa | Universitas Jayabuana</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body id="body">
    <div id="web">
            <header id="kotak">
                <div  class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Data Mahasiswa</h3>
                                <h1>Universitas Jayabuana</h1>
                            </div>
                            <div class="col align-items-end">
                                <a href="logout.php" class="btn btn-secondary" style="background-color: red;">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body text-center">

                            <img class="img img-responsive rounded-circle mb-3" width="160" src="asset\image\profil.jpg" />
                    
                            <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                            <p><?php echo $_SESSION["user"]["email"] ?></p>

                        </div>
                    </div>

            
                </div>
            </header>

            <h4 id="kotak">Menu</h4>
            <nav id="kotak">
                <ul>
                    <li><a href="form-daftar.php" class="btn btn-secondary" style="margin-bottom: 1px; background-color: skyblue;">Tambah Data Mahasiswa</a></li>
                    <li><a href="list-siswa.php" class="btn btn-secondary" style="margin-bottom: 1px; background-color: skyblue;">Daftar Data Mahasiswa</a></li>
                </ul>
            </nav>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "data mahasiswa berhasil ditambahkan!";
            } else {
                echo "data gagal ditambahkan!";
            }
        ?>
    </p>
<?php endif; ?>

