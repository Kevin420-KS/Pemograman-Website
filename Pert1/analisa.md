9:00 - 12:00
Pertanyaan:
1. Apa itu aplikasi Docker?
Docker adalah platform untuk mengemas, mendistribusikan, dan menjalankan aplikasi dalam container, yang berisi kode dan dependensinya agar bisa berjalan konsisten di berbagai lingkungan.

2. Mengapa Docker masih digunakan walaupun masih banyak error?
Docker tetap populer karena:

Portabilitas: Aplikasi bisa dijalankan di berbagai sistem tanpa perubahan.

Efisiensi: Lebih ringan dibanding VM karena berbagi kernel OS.

Skalabilitas & Deployment Cepat: Bisa di-cluster dengan Kubernetes dan di-deploy hanya dengan satu perintah.

Dukungan Luas: Banyak digunakan di DevOps, cloud computing, dan CI/CD pipelines.

Error Bisa Dikontrol: Sebagian besar error berasal dari konfigurasi yang bisa diperbaiki.

3. Apa peran .env dalam proyek Docker ini?
File .env menyimpan variabel lingkungan (nama proyek, repository, dan tag image) agar konfigurasi lebih fleksibel tanpa mengubah docker-compose.yml.

4. Mengapa dalam docker-compose.yml, port 80:80 digunakan?
Agar container Nginx bisa menerima request HTTP dari browser tanpa menambahkan port di URL (http://localhost).

5. Bagaimana peran volumes dalam konfigurasi Docker ini?
Memetakan file konfigurasi nginx.conf dari host ke dalam container agar perubahan bisa dilakukan tanpa rebuild image.

Analisis SWOT:
A. Strengths (Kekuatan):
1. Portabilitas Tinggi: Docker memungkinkan aplikasi berjalan di berbagai sistem operasi tanpa perlu menyesuaikan konfigurasi ulang.
2. Efisiensi Sumber Daya: Container lebih ringan dibandingkan Virtual Machine karena berbagi kernel OS.
3. Kemudahan Deployment: Proses deployment lebih cepat dan konsisten dengan docker-compose.yml.

B. Weaknesses (Kelemahan): 
1. Terkadang Rentan terhadap Error: Kesalahan konfigurasi, dependency yang tidak cocok, atau masalah jaringan dapat menyebabkan error.
2. Keterbatasan di Sistem Operasi Tertentu: Windows membutuhkan konfigurasi tambahan untuk menjalankan Docker secara optimal.
3. Keamanan: Jika tidak dikonfigurasi dengan baik, container dapat menjadi celah keamanan (misalnya, jika volume yang dipetakan memiliki izin akses yang terlalu luas).

C. Opportunities (Peluang) : 1. Integrasi dengan Cloud Computing: Docker semakin banyak digunakan di layanan cloud seperti AWS, Google Cloud, dan Azure.
2. Dukungan dari Kubernetes: Docker dapat dengan mudah diskalakan dengan Kubernetes untuk manajemen container yang lebih besar.
3. Penggunaan dalam DevOps & CI/CD: Banyak tim pengembang menggunakan Docker dalam pipeline CI/CD untuk testing dan deployment otomatis.

D. Threats (Ancaman) : 
1. Kompetisi dengan Alternatif Teknologi: Ada beberapa alternatif seperti Podman dan LXC yang menawarkan fitur serupa tanpa beberapa keterbatasan Docker.
2. Kurangnya Keahlian dalam Konfigurasi: Jika tidak memahami cara kerja Docker dengan baik, bisa menyebabkan masalah dalam pengelolaan aplikasi.
3. Perubahan dalam Kebijakan Docker: Docker Inc. kadang mengubah kebijakan lisensi atau fitur yang dapat berdampak pada komunitas pengembang.


13:00 - 15:30
Pertanyaan:
1.
2.
3.
4.
5.

16:00 - 18:00