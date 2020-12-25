# Aplikasi Buku Tamu

Ini adalah sebuah aplikasi buku tamu berbasis web, yang berfungsi merekam data diri dari tamu yang mengunjungi sebuah perusahaan untuk menemui seorang pegawai dalam perusahaan tersebut.
Berikut adalah fitur-fitur yang tersedia didalam aplikasi ini.

Saat user pertama kali membuka aplikasi ini, aplikasi ini akan menampilkan halaman login. Untuk menggunakan aplikasi ini lebih jauh, seorang user pertama kali harus terlebih dahulu memasukkan kombinasi username dan password yang dimiliki masing-masing pegawai.

![Gambar Login Page](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/01_login.JPG)


Setelah login berhasil, user akan langsung dibawa ke halaman utama aplikasi. Didalam halaman utama aplikasi ini tabel halaman buku tamu ditampilkan. Di halaman buku tamu ini ditampilkan siapa saja tamu yang mendaftar di buku tamu, lengkap dengan data diri dan siapa yang ingin ditemui. Data diri tamu yang ditampilkan antara lain NIK, nama, pekerjaan, alamat, no. telp, keperluan bertemu dengan siapa, dan foto diri. Tabel ini akan menampilkan terlebih dahulu entri data yang dimasukkan terakhir kali.

![Gambar Dashboard Page](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/02_dashboard.JPG)


Kemudian, dalam halaman ini seorang user dapat menambahkan data tamu baru. Hal ini dapat dilakukan dengan menekan tombol "Tambah Data". Tombol ini jika ditekan akan menampilkan form untuk mengisi NIK tamu yang berkunjung.

![Gambar Form NIK](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/03_tambah-data-NIK.JPG)


Jika NIK yang dimasukkan baru atau belum pernah ada di tabel data tamu sebelumnya, aplikasi akan menampilkan halaman form kosong, dengan kolom NIK yang sudah terisi terlebih dahulu oleh masukkan NIK yang sebelumnya sudah dilakukan.

![Gambar Form Data Baru](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/04_tambah-data-baru.JPG)


Namun, jika misal NIK yang dimasukkan ternyata sudah pernah terekam oleh tabel sebelumnya, yang berarti menunjukkan bahwa ini adalah tamu sudah pernah berkunjung dan mengisi tabel data buku tamu sebelumnya, aplikasi akan menampilkan halaman form yang sudah terisi oleh data tamu itu, hanya kolom keperluan dan upload foto yang masih dikosongkan. Kedua kolom ini masih dikosongkan dengan asumsi keperluan tamu saat berkunjung kemungkinan berbeda-beda dan foto seharusnya foto terbaru saat tamu tersebut berkunjung.

![Gambar Form Data Lama](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/05_tambah-data.JPG)


Setelah entri data tamu berhasil ditambahkan, aplikasi akan kembali ke halaman utama, dengan pesan yang menunjukkan bahwa entri data baru berhasil ditambahkan.

![Gambar Entri Data Berhasil](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/06_tambah-data-berhasil.JPG)


Kemudian, saat dirasa pemakaian aplikasi untuk hari itu tidak diperlukan lagi, seorang user dapat melakukan Logout untuk menutup aplikasi. Aksi ini dapat dilakukan dengan menekan tombol "Logout" pada bagian samping aplikasi. Saat Logout, seorang user tidak dapat lagi mengakses halaman utama aplikasi, atau halaman apapun yang membutuhkan login terlebih dahulu. Jika seseorang yang belum login mencoba mengakses halaman itu, aplikasi hanya akan menampilkan kembali halaman login dengan pesan bahwa hanya admin yang dapat masuk ke halaman tersebut.


![Gambar Coba Akses Halaman](https://github.com/BeniTama/BukuTamuProject/blob/master/img-docs/07_mencoba-akses-non-login.JPG)


Berikut adalah fitur-fitur yang terdapat dalam aplikasi buku tamu berbasis web ini.
