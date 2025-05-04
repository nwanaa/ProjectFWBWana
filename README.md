<h3 align="center">WEBSITE PENCATATAN DAN PENDAFTARAN UKM KAMPUS</h3>

---

<p align="center">
  <img src="https://github.com/user-attachments/assets/6ea20b1c-762f-4fc2-98b8-fb3785782673" alt=" " width="200"/>
</p>

<p align="center">
  <strong>NIRWANA</strong><br/><br/>
  <strong>D0223330</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

---

## Role dan Fitur-Fiturnya

### 1. Mahasiswa
- Mendaftar akun *(register)*
- Login *(otentikasi pengguna)*
- Melihat daftar UKM
- Mendaftar UKM
- Melihat dan mendaftar kegiatan

### 2. Pengurus UKM
- Login sebagai pengurus
- Mengelola data UKM (profil, deskripsi)
- Membuat kegiatan UKM
- Melihat anggota UKM

### 3. Admin
- Login sebagai admin
- Mengelola semua UKM *(CRUD)*
- Mengelola semua user dan perannya
- Mengelola seluruh kegiatan di semua UKM

---

## Tabel-Tabel Database Beserta Field dan Tipe Datanya

### Tabel `user`

| Kolom       | Tipe Data | Keterangan                            |
|-------------|-----------|----------------------------------------|
| id          | int       | Primary Key, auto increment            |
| name        | varchar   | Nama lengkap pengguna                  |
| email       | varchar   | Unik, digunakan untuk login            |
| password    | varchar   | Password terenkripsi                   |
| role        | varchar   | 'mahasiswa' / 'pengurus' / 'admin'     |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `ukm`

| Kolom        | Tipe Data | Keterangan                                 |
|--------------|-----------|--------------------------------------------|
| id           | int       | Primary Key, auto increment                |
| nama_ukm     | varchar   | Nama UKM                                   |
| deskripsi    | text      | Penjelasan tentang UKM                     |
| pengurus_id  | int       | Foreign Key ke `user.id` (pengurus)        |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `anggota_ukm`

| Kolom     | Tipe Data | Keterangan                                   |
|-----------|-----------|----------------------------------------------|
| id        | int       | Primary Key, auto increment                  |
| user_id   | int       | Foreign Key ke `user.id`                    |
| ukm_id    | int       | Foreign Key ke `ukm.id`                     |
| status    | varchar   | 'menunggu', 'diterima', dll.                 |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `kegiatan`

| Kolom          | Tipe Data | Keterangan                        |
|----------------|-----------|-----------------------------------|
| id             | int       | Primary Key, auto increment       |
| ukm_id         | int       | Foreign Key ke `ukm.id`           |
| nama_kegiatan  | varchar   | Nama kegiatan                     |
| deskripsi      | text      | Detail kegiatan                   |
| tanggal        | date      | Tanggal pelaksanaan               |
| lokasi         | varchar   | Lokasi kegiatan                   |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `pendaftaran_kegiatan`

| Kolom           | Tipe Data | Keterangan                                     |
|-----------------|-----------|------------------------------------------------|
| id              | int       | Primary Key, auto increment                    |
| user_id         | int       | Foreign Key ke `user.id`                       |
| kegiatan_id     | int       | Foreign Key ke `kegiatan.id`                   |
| status          | varchar   | 'terdaftar', 'hadir', 'tidak hadir'            |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |
---

## Jenis Relasi dan Tabel yang Berelasi

- **`user → ukm`**  
  *One-to-Many*: Satu user (pengurus) bisa mengelola banyak UKM.

- **`user → anggota_ukm ← ukm`**  
  *Many-to-Many*: Mahasiswa bisa gabung lebih dari satu UKM, satu UKM punya banyak anggota.

- **`ukm → kegiatan`**  
  *One-to-Many*: Satu UKM bisa punya banyak kegiatan.

- **`user → pendaftaran_kegiatan ← kegiatan`**  
  *Many-to-Many*: Mahasiswa bisa mendaftar banyak kegiatan, dan satu kegiatan bisa diikuti banyak mahasiswa.


