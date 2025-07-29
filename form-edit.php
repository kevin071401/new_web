<?php 

require_once("auth.php");

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM profil_mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa | Universitas Jayabuana</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body id="body">
    <div id="form">
    <header>
        <h3>Edit Data Mahasiswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="ipk">IPK: </label>
            <input type="text" name="ipk" placeholder="jumlah ipk" value="<?php echo $siswa['ipk'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="alamat email" value="<?php echo $siswa['email'] ?>" />
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" placeholder="nama jurusan" value="<?php echo $siswa['jurusan'] ?>" />
        </p>
        <p>
            <label for="fakultas">Fakultas: </label>
            <input type="text" name="fakultas" placeholder="nama fakultas" value="<?php echo $siswa['fakultas'] ?>" />
        </p>
        <p>
            <label for="semester">Semester: </label>
            <?php $semester = $siswa['semester']; ?>
            <select name="semester">
                <option <?php echo ($$semester == 'Semester 1') ? "selected": "" ?>>Semester 1</option>
                <option <?php echo ($$semester == 'Semester 2') ? "selected": "" ?>>Semester 2</option>
                <option <?php echo ($$semester == 'Semester 3') ? "selected": "" ?>>Semester 3</option>
                <option <?php echo ($$semester == 'Semester 4') ? "selected": "" ?>>Semester 4</option>
                <option <?php echo ($$semester == 'Semester 5') ? "selected": "" ?>>Semester 5</option>
                <option <?php echo ($$semester == 'Semester 6') ? "selected": "" ?>>Semester 6</option>
                <option <?php echo ($$semester == 'Semester 7') ? "selected": "" ?>>Semester 7</option>
                <option <?php echo ($$semester == 'Semester 8') ? "selected": "" ?>>Semester 8</option>
                <option <?php echo ($$semester == 'Semester 9') ? "selected": "" ?>>Semester 9</option>
                <option <?php echo ($$semester == 'Semester 10') ? "selected": "" ?>>Semester 10</option>
                <option <?php echo ($$semester == 'Semester 11') ? "selected": "" ?>>Semester 11</option>
                <option <?php echo ($$semester == 'Semester 12') ? "selected": "" ?>>Semester 12</option>
                <option <?php echo ($$semester == 'Semester 13') ? "selected": "" ?>>Semester 13</option>
                <option <?php echo ($$semester == 'Semester 14') ? "selected": "" ?>>Semester 14</option>
                <option <?php echo ($$semester == 'Semester 15') ? "selected": "" ?>>Semester 15</option>
                <option <?php echo ($$semester == 'Semester 16') ? "selected": "" ?>>Semester 16</option>
                <option <?php echo ($$semester == 'Semester 17') ? "selected": "" ?>>Semester 17</option>
                <option <?php echo ($$semester == 'Semester 18') ? "selected": "" ?>>Semester 18</option>
                <option <?php echo ($$semester == 'Semester 19') ? "selected": "" ?>>Semester 19</option>
                <option <?php echo ($$semester == 'Semester 20') ? "selected": "" ?>>Semester 20</option>
                <option <?php echo ($$semester == 'Lebih Dari 20') ? "selected": "" ?>>Lebih Dari 20</option>
            </select>
        </p>
        <p>
            <label for="sks">SKS: </label>
            <input type="text" name="sks" placeholder="jumlah sks" value="<?php echo $siswa['sks'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        
        <div class="row">
            <div class="col-md-4">
                <a href="timeline.php" class="btn btn-secondary">Menu</a>
                <a href="list-siswa.php" class="btn btn-success">list</a>
            </div>
        </div>

        </fieldset>


    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>

?>