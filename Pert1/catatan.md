9:00 - 12:00
Website memiliki yang namanya address, contoh: facebook.com
Setiap kali ingin mempublish website akan memiliki domainnya sendiri-sendiri.
Biasakan apabila mengambil kodingan orang lain harus diberitahu dari mana kodingan itu diambil dan berikan sumber/link tersebut di "Readme.md".

Dibagian .env:

COMPOSE_PROJECT_NAME=esgul //Menentukan nama proyek Docker Compose yang di inginkan. 
REPISTORY_NAME=pemweb //ini menentukan nama repository proyek. 
IMAGE_TAG=latest //Menentukan tag dari image Docker yang akan digunakan. latest berarti menggunakan versi terbaru yang tersedia dari image terkait.

Dibagian "docker-compose.yml":
version: '3' //untuk menjalankan aplikasi docker dengan versi yang terbaru/sesuai dengan docker yang dimiliki.

services: //Bagian ini mendeklarasikan layanan yang akan dijalankan dalam container Docker.
  web: // Layanan ini akan menjalankan server berbasis Nginx.
    image: nginx:latest // Menggunakan image nginx versi terbaru dari Docker Hub untuk menjalankan server web.
    ports: //Menghubungkan port 80 dari container ke port 80 di host, sehingga aplikasi dapat diakses melalui localhost.
      - 80:80
    volumes: //Menggunakan konfigurasi Nginx dari file lokal nginx.conf yang dipetakan ke dalam container di lokasi default /etc/nginx/conf.d/default.conf.
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf

Dibagian src :
a. div.html:
<!DOCTYPE html> //Menandakan dokumen menggunakan HTML5.
<html lang="en">
<head>
    <meta charset="UTF-8"> //Menentukan encoding UTF-8 agar mendukung karakter internasional.
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> //Menyesuaikan tampilan agar responsif di berbagai perangkat.
    <title>Document</title>
</head>
<body>
    <div>//container yang dapat digunakan untuk mengelompokkan elemen lainnya.
        This is a div element.
        <p>This is a paragraph inside the div.</p> //Paragraf yang berada di dalam <div>, menunjukkan struktur hirarki dalam HTML.
    </div>
</body>
</html>

b. indext.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sample HTML</h1> //Judul utama halaman yang digunakan untuk heading tingkat 1.
</body>
</html>

Docker
Projectnya bikin portofolio dengan catatan: //Untuk portofolio akan dibahas di kelas
a. Dibagian Header menampilkan Profile, media sosial, dan biodata pribadi.
b.

13:00 - 15:30
Jenis-jenis tag yang ada di HTML:
1. Struktur Dasar HTML
<html> → Menandai awal dan akhir dokumen HTML.

<head> → Berisi metadata seperti judul, link stylesheet, dan script.

<body> → Berisi konten utama halaman web.

2. Elemen Teks
<h1> - <h6> → Heading (judul) dengan ukuran dari besar (h1) ke kecil (h6).

<p> → Paragraf teks.

<br> → Baris baru (line break).

<hr> → Garis horizontal.

<strong> → Teks tebal (bold).

<em> → Teks miring (italic).

3. Elemen List (Daftar)
<ul> → Unordered list (daftar tanpa nomor).

<ol> → Ordered list (daftar bernomor).

<li> → List item (digunakan dalam <ul> atau <ol>).

4. Elemen Tabel
<table> → Membuat tabel.

<tr> → Baris tabel.

<td> → Sel tabel (isi data).

<th> → Sel header tabel.

<thead>, <tbody>, <tfoot> → Bagian tabel (kepala, isi, kaki).

5. Elemen Formulir
<form> → Form untuk input data.

<input> → Elemen input (teks, password, checkbox, radio, dll.).

<textarea> → Kotak input teks panjang.

<select> → Dropdown list.

<option> → Opsi dalam <select>.

<button> → Tombol interaktif.

6. Elemen Multimedia
<img> → Menampilkan gambar.

<audio> → Memutar audio.

<video> → Memutar video.

<iframe> → Menyisipkan halaman web lain.

7. Elemen Link & Navigasi
<a> → Link (anchor) ke halaman lain.

<nav> → Navigasi utama halaman web.

8. Elemen Layout & Struktur
<div> → Blok elemen untuk mengelompokkan konten.

<span> → Elemen inline untuk styling teks.

<header> → Bagian atas halaman.

<footer> → Bagian bawah halaman.

<section> → Bagian terpisah dalam halaman.

<article> → Artikel atau konten mandiri.

<aside> → Sidebar atau konten sampingan.

16:00 - 18:00
