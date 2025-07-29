<?php 
require_once("auth.php");
include("config.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiwa | Universitas Jayabuana</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body id="body">
<div id="web">  
    <header>
        <h3>Mahasiswa yang sudah terdaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php"  class="btn btn-secondary" style="background-color: blue;">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>IPK</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Semester</th>
            <th>SKS</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM profil_mahasiswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['ipk']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>".$siswa['fakultas']."</td>";
            echo "<td>".$siswa['semester']."</td>";
            echo "<td>".$siswa['sks']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <p>
        <a href="timeline.php" class="btn btn-secondary">Menu</a>
    </p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>
