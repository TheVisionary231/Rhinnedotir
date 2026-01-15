<?php
include 'koneksi.php';

// Ambil data dari database
try {
    $query = "SELECT * FROM siswa ORDER BY id DESC";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data_siswa = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Gagal mengambil data: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        img { border-radius: 4px; object-fit: cover; }
        .btn-tambah { padding: 10px 15px; background: #28a745; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

    <h2>Daftar Siswa</h2>
    <a href="tambah.php" class="btn-tambah">+ Tambah Siswa Baru</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Agama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($data_siswa) > 0): ?>
                <?php $no = 1; foreach ($data_siswa as $siswa): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td>
                        <?php if (!empty($siswa['foto'])): ?>
                            <img src="uploads/<?= htmlspecialchars($siswa['foto']); ?>" width="50" height="60" alt="Foto">
                        <?php else: ?>
                            <span>No Photo</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($siswa['nis']); ?></td>
                    <td><?= htmlspecialchars($siswa['nama']); ?></td>
                    <td><?= htmlspecialchars($siswa['tempat_lahir']) . ", " . htmlspecialchars($siswa['tanggal_lahir']); ?></td>
                    <td><?= htmlspecialchars($siswa['agama']); ?></td>
                    <td><?= htmlspecialchars($siswa['alamat']); ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align:center;">Belum ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>