# UAS PEMROGRAMAN WEB
----------------------------
## Nur Hikmah Juliyanti
## 121140137
----------------------------
## Deskripsi

## Fitur 

- **Fitur 1:** Client-side programming.
- ada tampilan Nama,NIM,Checkbox untuk validasi, ada jenis tugas UAS/UTS
- di implementasikan pada JS dan di proses pada PHP
- **Fitur 2:** Server-side programming.
- berhasil menginputkan data menggunakan $_POST atau $_GET yang kemudian jika berhasil di tampilkan di layar dan tampilan di terminal vscode
- **Fitur 3:** Database Management
- database menggunakan MySQL
- manipulasi data untuk menambahkan data
- **Fitur 4:** State Management.
- menggunakan session (dapat di cek melalui inspect)
- menggunakan cookies untuk menampilkan data yang di input (dapat di cek melalui inspect)

## Demo

[Link Demo Proyek](https://nurhikmah137.github.io/UAS-PEMWEB-nurhikmah-12140137/)


## Instalasi

### Langkah-langkah Instalasi

1. Git Clone
2. start menggunakan text editor (Vscode kemudian di demokan di localhost)
3. jika anda belum mengimpor file databasenya, maka saat anda mensubmit datanya tidak masuk pada database, hanya saja menampilkan data yang telah di input
4. jika anda ingin melihat file yang telah di submit, maka anda harus mengimpor databasenya terlebih dahulu seperti di bawah.
   
### Cara agar terkoneksi ke database local (procces.php)
1. anda harus mengimport database ke local php.myadmin pada file create_database.sql
2. jika telah di import maka anda bisa merefresh laman
3. kemudian akan muncul jika data telah di submit
4. maka akan terkirim ke procces.php (yang bisa di lihat pada link websitenya)

### BONUS
**point 1**
1. push semua file ke repository github 
2. klik setting pada repository github yang telah dibuat
3. ke menu pages cari tulisan build and deployment
4. ke menu branch, kemudian pilih branch dan file root
5. save branch nya, kemudian tunggu di deploy oleh sistem pada github
6. ketika selesai maka ada link hosting yang telah di deploy
   
**point 2**
--------------------------------------------------------------------------------------------------------------------
-dikarenakan saya hanya memiliki pengalaman untuk hosting di github, maka saya hosting di github saja, namun memiliki kekurangan dalam membaca file php pada hostingan github, namun data yang telah di submit tetap akan tampil
--------------------------------------------------------------------------------------------------------------------

**point 3**
website yang telah saya buat memiliki keamanan dikarenakan membuat system encrypty pada file script.js pada fungsi
escapeHTML untuk mencegah XSS atau serangan pada sisi client

