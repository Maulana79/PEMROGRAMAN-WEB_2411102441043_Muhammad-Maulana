# Studi Kasus: Desain Halaman Profil Instagram dengan Tailwind CSS

## 1. Pendahuluan

Tailwind CSS adalah framework utility-first yang memudahkan pembuatan tampilan web yang fleksibel dan responsif. Studi kasus ini membahas implementasi halaman profil Instagram sederhana menggunakan Tailwind CSS, Bootstrap Icons, dan Google Fonts.

## 2. Struktur Halaman

### 2.1. Header

Bagian `<head>` memuat:
- Meta tag untuk karakter dan viewport.
- Link ke Tailwind CSS melalui CDN.
- Link ke Bootstrap Icons dan Google Fonts (Rubik).
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
- Terdapat fitur tambahan berupa ikon "Baru" untuk menambah kiriman baru.

### 2.3. Responsivitas

- Menggunakan utility Tailwind seperti `flex`, `grid`, dan responsive classes agar layout tetap rapi di berbagai perangkat.
- Ukuran foto profil dan grid gambar menyesuaikan lebar layar.

## 3. Implementasi CSS

CSS tambahan digunakan untuk:
- Mengatur font dan warna latar.
- Menyesuaikan tampilan agar konsisten dengan tema Instagram.

## 4. Kesimpulan

File `studikasus-tailwind.html` menunjukkan cara membangun halaman profil Instagram yang responsif dan modern dengan Tailwind CSS. Fitur utama meliputi tampilan profil, statistik, navigasi ikon, galeri gambar, dan tombol tambah kiriman baru, yang semuanya diatur agar mudah diakses dan nyaman dilihat di berbagai perangkat.
