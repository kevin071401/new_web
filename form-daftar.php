
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Data Mahasiswa | Universitas Jayabuana</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body id="body">
    <header id="header">
        <h3>Formulir Pendaftaran Data Mahasiswa </h3>
    </header>

    <form id="form" action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="ipk">IPK: </label>
            <input type="text" name="ipk" placeholder="jumlah IPK" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="alamat email" />
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" placeholder="nama jurusan" />
        </p>
        <p>
            <label for="fakultas">Fakultas: </label>
            <input type="text" name="fakultas" placeholder="nama fakultas" />
        </p>
        <p>
            <label for="semester">Semester: </label>
            <select name="semester">
                <option>Semester 1</option>
                <option>Semester 2</option>
                <option>Semester 3</option>
                <option>Semester 4</option>
                <option>Semester 5</option>
                <option>Semester 6</option>
                <option>Semester 7</option>
                <option>Semester 8</option>
                <option>Semester 9</option>
                <option>Semester 10</option>
                <option>Semester 11</option>
                <option>Semester 12</option>
                <option>Semester 13</option>
                <option>Semester 14</option>
                <option>Semester 15</option>
                <option>Semester 16</option>
                <option>Semester 17</option>
                <option>Semester 18</option>
                <option>Semester 19</option>
                <option>Semester 20</option>
                <option>Lebih Dari 20</option>
            </select>
        </p>
        <p>
            <label for="sks">SKS: </label>
            <input type="text" name="sks" placeholder="jumlah sks" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        <div class="row">
            <div class="col-md-4">
                <a href="timeline.php" class="btn btn-secondary">Menu</a>
                <a href="list-siswa.php" class="btn btn-success">list</a>
            </div>
        </div>

        </fieldset>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>
