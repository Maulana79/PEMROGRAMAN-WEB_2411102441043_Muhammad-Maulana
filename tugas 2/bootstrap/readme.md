# Studi Kasus: Desain Halaman Profil Instagram dengan Bootstrap

## 1. Pendahuluan

Bootstrap merupakan framework CSS yang memudahkan pembuatan tampilan web yang responsif dan modern. Studi kasus ini membahas implementasi halaman profil Instagram sederhana menggunakan Bootstrap versi 5.3, Bootstrap Icons, dan Google Fonts.

## 2. Struktur Halaman

### 2.1. Header

Bagian `<head>` memuat:
- Meta tag untuk karakter dan viewport.
- Link ke Bootstrap CSS, Bootstrap Icons, dan Google Fonts (Rubik).
- Favicon Instagram.

### 2.2. Body

Body menggunakan latar belakang gelap dan font Rubik. Terdapat dua bagian utama:

#### a. Profil Pengguna

- Foto profil bulat di tengah.
- Nama pengguna, tombol "Edit Profile" dan "Lihat Arsip", serta ikon pengaturan.
- Statistik: jumlah kiriman, pengikut, dan diikuti.
- Deskripsi singkat: nama dan profesi.

#### b. Navigasi dan Galeri

- Navigasi berupa ikon grid, bookmark, dan profil.
- Galeri gambar 3 kolom yang menampilkan foto dari folder `img/`.

### 2.3. Responsivitas

- Menggunakan kelas flex dan grid Bootstrap agar layout tetap rapi di berbagai perangkat.
- Ukuran foto profil menyesuaikan lebar layar.

## 3. Implementasi CSS

CSS tambahan digunakan untuk:
- Mengatur font dan warna latar.
- Membuat foto profil dan gambar galeri berbentuk bulat dan proporsional.
- Efek hover pada ikon navigasi.

## 4. Kesimpulan

File `studikasus-bootstrap.html` menunjukkan cara membangun halaman profil Instagram yang responsif dan menarik dengan Bootstrap. Fitur utama meliputi tampilan profil, statistik, navigasi ikon, dan galeri gambar, yang semuanya diatur agar mudah diakses dan nyaman dilihat di berbagai perangkat.