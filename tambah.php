<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    // Logika Upload Foto
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $path = "uploads/" . $nama_foto;

    if (move_uploaded_file($tmp_foto, $path)) {
        // Query Insert
        $sql = "INSERT INTO siswa (nis, nama, tempat_lahir, tanggal_lahir, agama, alamat, foto) 
                VALUES (:nis, :nama, :tempat, :tgl, :agama, :alamat, :foto)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nis'    => $nis,
            ':nama'   => $nama,
            ':tempat' => $tempat_lahir,
            ':tgl'    => $tanggal_lahir,
            ':agama'  => $agama,
            ':alamat' => $alamat,
            ':foto'   => $nama_foto
        ]);

        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal mengunggah foto.";
    }
}
?>

<form action="simpan.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nis" placeholder="NIS" required><br>
    <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"><br>
    <input type="date" name="tanggal_lahir"><br>
    <select name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
    </select><br>
    <textarea name="alamat" placeholder="Alamat"></textarea><br>
    <input type="file" name="foto"><br>
    <button type="submit">Simpan Data</button>
</form>