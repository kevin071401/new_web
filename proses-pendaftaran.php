<?php

include("config.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $ipk = $_POST['ipk'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['fakultas'];
    $semester = $_POST['semester'];
    $sks = $_POST['sks'];
    $sql = "INSERT INTO profil_mahasiswa (nama, ipk, email, jurusan, fakultas, semester, sks) Value ('$nama', '$ipk', '$email', '$jurusan', '$fakultas', '$semester', '$sks')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: timeline.php?status=sukses');
    } else {
        header('Location: timeline.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>