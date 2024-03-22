# PHP-MYSQL
---
## POIN UTAMA
----
1. PDO
   1. Apa Itu PDO ?
     > PDO (PHP Data Objects) itu kayak alat serbaguna buat PHP yang bisa kita pakai buat ngobrol sama database. Jadi, bayangin aja, kamu punya temen dari berbagai macam jenis: MySQL, PostgreSQL, SQLite, dan lain-lain. Nah, PDO ini kayak jadi penerjemah yang bisa ngobrol sama semua temen-temenmu ini dengan gaya yang sama

   2. Jadi, buat apa sih ?
     > Ini bukan cuma soal bisa ngobrol aja, tapi juga soal keamanan. PDO ini bisa ngelindungin kita dari serangan-serangan seperti SQL injection, yang bisa ngerusak database kita. Terus, kamu bisa ngelakuin macem-macem sama PDO. Mulai dari buka obrolan (koneksi) sama teman-temanmu, ngirim pesan-pesan (query) buat minta data atau ngubah data, sampai ngurusin masalah-masalah kalo ada yang ga beres. Jadi, kalo lagi bikin aplikasi web dengan PHP, ini kayak alat wajib banget buat digunakan.

2. cara menyambung kan database ke file php
   1. Pilih Database: Pertama, pastiin kamu udah punya database yang mau kamu obrolin. Misalnya MySQL, PostgreSQL, atau SQLite.
    2. Bikin File PHP: Buat file PHP baru, misalnya `koneksi.php,` ini tempat kita bakal bikin koneksi sama database.
     3. Kode Koneksi: Sekarang, di file PHP tersebut, tulis kode buat koneksi ke database. Misalnya, kalo pake MySQL, kayak gini:
      
      ```
      <?php
      $host = 'localhost'; // alamat database, biasanya localhost kalo di development
      $dbname = 'nama_database'; // nama database yang kamu mau obrolin
      $username = 'username_database'; // username untuk login ke database
      $password = 'password_database'; // password untuk login ke database
      
      try {
          $koneksi = new PDO("mysql:host=$host;dbname=$dbn-ame", $username, $password);
          $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Yeay, berhasil terhubung ke database!";
      } catch(PDOException $e) {
          echo "Yah, gagal terhubung ke database: " . $e->getMessage();
      }
      ?>
      ```
     4. Nah, kalo udah, tinggal kamu include file `koneksi.php` ini di halaman-halaman PHP kamu yang butuh koneksi database.

3. Execute Sql
   - _"Execute SQL" adalah langkah di mana pernyataan SQL dieksekusi dalam kode program untuk berinteraksi dengan database. Ini melibatkan persiapan pernyataan dengan placeholder-parameter dan eksekusi pernyataan menggunakan nilai-nilai yang diberikan untuk mengisi placeholder-parameter tersebut. Proses ini memungkinkan operasi seperti menambah, mengambil, mengubah, atau menghapus data dari database._
4. Query Sql
   - _Query SQL adalah pernyataan atau perintah untuk berinteraksi dengan database, seperti menambahkan, mengambil, memperbarui, atau menghapus data dari tabel-tabel. Ini memungkinkan kontrol dan manipulasi data sesuai kebutuhan aplikasi._
5. SQL injection
   - _SQL injection adalah serangan keamanan di mana penyerang menyisipkan kode SQL berbahaya ke dalam input aplikasi web untuk mengeksploitasi kelemahan dalam cara aplikasi memproses input tersebut. Hal ini dapat mengakibatkan akses tidak sah ke data sensitif atau bahkan pengambilalihan kontrol atas sistem. Untuk mencegahnya, diperlukan praktik pengamanan seperti penggunaan parameterized queries dan validasi input._
6. Prepare Statement
   - _Prepare Statement adalah fitur dalam database yang memungkinkan pengguna untuk menyiapkan sebuah pernyataan SQL dengan parameter-placeholder sebelum dieksekusi. Ini meningkatkan keamanan dengan mencegah serangan SQL injection, meningkatkan kinerja dengan mengizinkan database untuk memproses pernyataan yang telah dipersiapkan sebelumnya, dan memberikan fleksibilitas dalam mengeksekusi pernyataan dengan nilai-nilai parameter yang berbeda_

    - **Keuntungan Menggunakan Prepare Statement**
    > Keamanan: Mencegah serangan SQL injection dengan mengisolasi nilai-nilai parameter dari pernyataan SQL utama.
    > 
    > Kinerja: Mempercepat kinerja aplikasi dengan mengizinkan database untuk memproses pernyataan yang telah dipersiapkan sebelumnya, sehingga mengurangi overhead yang terkait dengan parsing dan kompilasi pernyataan SQL setiap kali dieksekusi.
    > 
    > Fleksibilitas: Memungkinkan pengguna untuk mengeksekusi pernyataan SQL yang sama dengan nilai-nilai parameter yang berbeda tanpa harus membuat ulang pernyataan SQL secara keseluruhan.

7.  Fetch data
     - Fetch data adalah proses pengambilan data dari hasil eksekusi pernyataan SQL yang dilakukan terhadap database. Ini memungkinkan aplikasi untuk mengakses dan menggunakan informasi yang tersimpan dalam database sesuai kebutuhan.
     
8. Repository Pattern.
     -  Repository Pattern adalah pola desain perangkat lunak yang memisahkan logika bisnis aplikasi dari akses langsung ke basis data. Ini dilakukan dengan menyediakan antarmuka abstrak antara aplikasi dan penyimpanan data, sehingga memungkinkan operasi CRUD (Create, Read, Update, Delete) terhadap data tanpa tergantung pada detail implementasi penyimpanan. Hal ini meningkatkan pemisahan kepentingan, fleksibilitas, dan memfasilitasi pengujian dalam pengembangan aplikasi.
## KESIMPULAN
----
Kesimpulannya, PHP dan MySQL adalah kombinasi yang kuat dan serbaguna untuk pengembangan aplikasi web. Mereka memungkinkan pembuatan aplikasi web yang dinamis, interaktif, dan berkinerja tinggi dengan biaya yang rendah. Dengan memahami dan menguasai kedua teknologi ini, pengembang dapat membuat aplikasi web yang efisien dan efektif.
