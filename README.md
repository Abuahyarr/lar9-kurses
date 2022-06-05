<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Nama Projek : Kurses 

Sebuah aplikasi Web Apps utk menyimpan Materi dan Tugas dari hasil pembelajaran antara Guru sbg Pemberi Materi dan Murid sbg Penerima Materi. 
Selanjutnya Guru memberikan Tugas kepada Murid, Tugas dikumpulkan dalam bentuk File dan akan ada koreksi jika Tugas tsb sudah diupload/selesai dikerjakan.

### Lebih Detail:
- Dimulai: Pertengahan Apr-2022
- Dibuat menggunakan PHP Framework: Laravel versi 9.
- Menggunakan DB-MySQL (root/database/kurses-db-utf8.sql).
- Admin template: AdminLTE3.
- FrontEnd template: EduStage dari ColorLib.
- Login/Logout/Daftar Pengguna (MultiUser -- Admin, Guru, Murid)
- Menambahkan Materi Belajar dan Tugas Otorisasi oleh Guru ato Admin
- Murid, hanya bisa akses Materi Belajar dan Tugas saja.
- Guru, bisa melihat Tugas mana yang sudah/belum di kerjakan oleh Muridnya.
- Guru, bisa memberikan nilai dari Tugas yg sudah dikerjakan oleh Muridnya.
- User sbg admin, gunakan: admin // pass123
- User sbg guru, gunakan: spv_1 // pass123
- User sbg murid, gunakan: user_1 // pass123, atau: staff_1 // pass123
- dll.

## Snapshots:
![Frontpage](public/images/1-frontpage.png)
<hr>

!["Login page"](public/images/2-login.png)
<hr>

![User Profile](public/images/3-profile-login.png)
<hr>

![Murid--List Tugas](public/images/4-list-tugas-murid.png)
<hr>

![Murid--List Tugas 2](public/images/5-detail-tugas-murid-2.png)
<hr>

![Murid--Detail Tugas](public/images/5-detail-tugas-murid.png)
<hr>

![Murid--Update/Kerjain Tugas](public/images/6-update-tugas-murid.png)
<hr>

![Guru--Koreksi Tugas Murid](public/images/7-update-tugas-guru.png)
<hr>
