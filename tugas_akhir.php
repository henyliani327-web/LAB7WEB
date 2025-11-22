<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program PHP - Data Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f2f2f2;
        }
        h2 {
            color: #333;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .result {
            margin-top: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<h2>Form Input Data Diri</h2>

<form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required>

    <label>Pekerjaan:</label>
    <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Data Analyst">Data Analyst</option>
        <option value="Guru">Guru</option>
        <option value="Dokter">Dokter</option>
    </select>

    <button type="submit" name="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Hitung umur
    $lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();
    $umur = $hari_ini->diff($lahir)->y;

    // Tentukan gaji berdasarkan pekerjaan
    switch ($pekerjaan) {
        case "Programmer":
            $gaji = 10000000;
            break;
        case "Desainer":
            $gaji = 8000000;
            break;
        case "Data Analyst":
            $gaji = 12000000;
            break;
        case "Guru":
            $gaji = 6000000;
            break;
        case "Dokter":
            $gaji = 15000000;
            break;
        default:
            $gaji = 0;
    }

    echo "<div class='result'>";
    echo "<h3>Hasil Data Diri</h3>";
    echo "Nama: <b>$nama</b><br>";
    echo "Tanggal Lahir: <b>" . date("d-m-Y", strtotime($tgl_lahir)) . "</b><br>";
    echo "Umur: <b>$umur tahun</b><br>";
    echo "Pekerjaan: <b>$pekerjaan</b><br>";
    echo "Gaji: <b>Rp " . number_format($gaji, 0, ',', '.') . "</b>";
    echo "</div>";
}
?>

</body>
</html>