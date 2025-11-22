# LAB7WEB

# Nama: Lola Seftyliani 
# Kelas: TI.24.A.4
# NIM: 312410339

# PHP DASAR
<img width="1916" height="498" alt="image" src="https://github.com/user-attachments/assets/b1538ac1-7dc0-4f98-922b-55f68cdbf197" />
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
echo "Hello World";
?>
</body>
</html>
```

<img width="1918" height="464" alt="image" src="https://github.com/user-attachments/assets/fe821ea3-c8b9-41ee-afa2-b6568a56e3da" />

Kode tersebut adalah sebuah halaman web sederhana yang menggunakan HTML dan PHP. Bagian paling atas `<!DOCTYPE html>` menunjukkan bahwa dokumen ini adalah HTML5. Lalu pada tag `<html lang="id">`, halaman diatur agar menggunakan bahasa Indonesia. Di dalam bagian `<head>`, terdapat `<meta charset="UTF-8">` yang berfungsi menentukan karakter encoding agar teks yang muncul dapat ditampilkan dengan benar, dan `<title>PHP Dasar</title>` yang akan tampil sebagai judul tab di browser.

Selanjutnya, bagian `<body>` adalah area yang tampil pada layar. Di sana terdapat tulisan “Belajar PHP Dasar” yang dibuat menggunakan tag `<h1>` sehingga tampil sebagai judul besar. Setelah itu terdapat bagian PHP yang ditandai dengan `<?php ... ?>`. Di dalamnya ada perintah `echo "Hello World";` yang digunakan untuk menampilkan teks ke halaman web. Jadi ketika file ini dijalankan di server yang mendukung PHP, halaman akan menampilkan judul “Belajar PHP Dasar” diikuti teks “Hello World”. Kode ini merupakan bentuk paling dasar dari kombinasi HTML dan PHP untuk menampilkan output pertama.

## VARIABEL PHP
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>

    <?php
    // Menampilkan teks Hello World
    echo "Hello World<br>";

    // Menampilkan subjudul di bawah Hello World
    echo "<h2>Menggunakan Variabel</h2>";

    // Deklarasi variabel
    $nim = "312410339";
    $nama = "Lola Seftyliani";

    // Menampilkan isi variabel
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama;
    ?>
</body>
</html>
```

<img width="1919" height="482" alt="image" src="https://github.com/user-attachments/assets/54e2fc45-efab-47ee-9bb4-cf1d05dbda54" />
Kode tersebut membuat halaman web sederhana yang menampilkan teks menggunakan PHP. Pada bagian HTML ditampilkan judul “Belajar PHP Dasar”. Di dalam tag PHP, pertama-tama kode menampilkan tulisan “Hello World”. Setelah itu ditampilkan subjudul “Menggunakan Variabel”. Dua variabel dibuat, yaitu `$nim` berisi “312410339” dan `$nama` berisi “Lola Seftyliani”. Kedua variabel ini kemudian ditampilkan ke halaman menggunakan echo, sehingga muncul teks NIM dan Nama sesuai isi variabel tersebut.

## Predefine PHP
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Predefine Variable</title>
</head>
<body>
    <h1>Predefine Variable</h1>

    <?php
    if (isset($_GET['nama'])) {
        echo 'Selamat Datang ' . $_GET['nama'];
    } else {
        echo 'Selamat Datang, Lola Seftyliani!';
    }
    ?>
</body>
</html>
```
<img width="1919" height="392" alt="image" src="https://github.com/user-attachments/assets/3ee4c311-51dd-48e4-a20b-0703773a2951" />
Kode tersebut membuat halaman web yang menampilkan sambutan menggunakan variabel bawaan PHP. Bagian HTML hanya menampilkan judul “Predefine Variable”. Pada bagian PHP, program mengecek apakah di URL terdapat data `nama` melalui `$_GET['nama']`. Jika ada, maka halaman akan menampilkan “Selamat Datang” diikuti nama yang dikirim lewat URL. Jika tidak ada data tersebut, maka akan muncul sambutan default yaitu “Selamat Datang, Lola Seftyliani!”. Dengan kata lain, halaman ini menampilkan nama sesuai input dari URL, tetapi tetap punya nama bawaan kalau tidak ada input.

## From Input
<img width="1919" height="417" alt="image" src="https://github.com/user-attachments/assets/6e0a04bb-9620-4d07-b391-144a9421c412" />

## Operator
<img width="1919" height="407" alt="image" src="https://github.com/user-attachments/assets/2df04120-eb65-4b75-b8a8-63162e15ee30" />

## Kondisi
<img width="1919" height="354" alt="image" src="https://github.com/user-attachments/assets/829ecc0b-59dd-4749-a6a0-08f4f89c8145" />

## Perulangan
## 1. for
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan for</title>
</head>
<body>
    <h2>Perulangan for (1 sampai 10)</h2>

    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Perulangan ke-$i<br>";
        }

        echo "<hr>";

        echo "Perulangan menurun dari 10 ke 1<br>";
        for ($i = 10; $i >= 1; $i--) {
            echo "Perulangan ke-$i<br>";
        }
    ?>
</body>
</html>
```
<img width="1919" height="1001" alt="image" src="https://github.com/user-attachments/assets/cf6a8854-94fc-4bec-993c-78e99a5694a9" />


## While
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan while</title>
</head>
<body>
    <h2>Perulangan while (1 sampai 10)</h2>

    <?php
        $i = 1;
        while ($i <= 10) {
            echo "Perulangan ke-$i<br>";
            $i++;
        }
    ?>
</body>
</html>
```
<img width="1919" height="619" alt="image" src="https://github.com/user-attachments/assets/88284ae7-7448-4aba-b9ce-a2f77f5aa6b0" />

## Do While
 ```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan do...while</title>
</head>
<body>
    <h2>Perulangan do...while (1 sampai 10)</h2>

    <?php
        $i = 1;
        do {
            echo "Perulangan ke-$i<br>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>
```
<img width="1919" height="617" alt="image" src="https://github.com/user-attachments/assets/7994d748-30e2-4922-85e0-2cb6a96aaaf5" />












