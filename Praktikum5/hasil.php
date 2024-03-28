<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
</head>
<body>

<?php
// Periksa apakah data yang diterima melalui metode POST tidak kosong
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah data tertentu ada dalam POST request
    if (isset($_POST['name']) && isset($_POST['nim']) && isset($_POST['tglLahir']) && isset($_POST['jk']) && isset($_POST['email'])) {
        // Mengambil nilai dari POST request
        $name = $_POST['name'];
        $nim = $_POST['nim'];
        $tglLahir = $_POST['tglLahir'];
        $jk = $_POST['jk'];
        $email = $_POST['email'];

        // Menampilkan data yang diterima
        echo "<h2>Hasil Biodata:</h2>";
        echo "<p>Nama: $name</p>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Tanggal Lahir: $tglLahir</p>";
        echo "<p>Jenis Kelamin: $jk</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>Data yang diterima tidak lengkap.</p>";
    }
}
?>

</body>
</html>
