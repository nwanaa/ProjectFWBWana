# 🎓 WEBSITE PENCATATAN DAN PENDAFTARAN UKM KAMPUS

<img src="https://github.com/user-attachments/assets/6ea20b1c-762f-4fc2-98b8-fb3785782673" width="100%" alt="Gambar Proyek UKM"/>

> **NIRWANA**  
> D0223330  
> Framework Web Based – 2025

---

## 📌 Role dan Fitur-Fiturnya

### 👤 Mahasiswa
- Mendaftar akun *(register)*
- Login *(otentikasi pengguna)*
- Melihat daftar UKM
- Mendaftar UKM
- Melihat dan mendaftar kegiatan

### 👨‍💼 Pengurus UKM
- Login sebagai pengurus
- Mengelola data UKM (profil, deskripsi)
- Membuat kegiatan UKM
- Melihat anggota UKM

### 🛠️ Admin
- Login sebagai admin
- Mengelola semua UKM *(CRUD)*
- Mengelola semua user dan perannya
- Mengelola seluruh kegiatan di semua UKM

---

## 🗃️ Struktur Database

### 📄 Tabel `users`

| Kolom       | Tipe Data | Keterangan                            |
|-------------|-----------|----------------------------------------|
| id          | int       | Primary Key, auto increment            |
| name        | varchar   | Nama lengkap pengguna                  |
| email       | varchar   | Unik, digunakan untuk login            |
| password    | varchar   | Password terenkripsi                   |
| role        | varchar   | 'mahasiswa' / 'pengurus' / 'admin'     |
| created_at  | timestamp |                                        |
| updated_at  | timestamp |                                        |

### 📄 Tabel `ukms`

| Kolom        | Tipe Data | Keterangan                                 |
|--------------|-----------|--------------------------------------------|
| id           | int       | Primary Key, auto increment                |
| nama_ukm     | varchar   | Nama UKM                                   |
| deskripsi    | text      | Penjelasan tentang UKM                     |
| logo         | varchar   | Path gambar logo                           |
| pengurus_id  | int       | Foreign Key ke `users.id` (pengurus)       |
| created_at   | timestamp |                                            |
| updated_at   | timestamp |                                            |

### 📄 Tabel `anggota_ukm`

| Kolom     | Tipe Data | Keterangan                                   |
|-----------|-----------|----------------------------------------------|
| id        | int       | Primary Key, auto increment                  |
| user_id   | int       | Foreign Key ke `users.id`                    |
| ukm_id    | int       | Foreign Key ke `ukms.id`                     |
| status    | varchar   | 'menunggu', 'diterima', dll.                 |
| created_at| timestamp |                                              |

### 📄 Tabel `kegiatan`

| Kolom          | Tipe Data | Keterangan                        |
|----------------|-----------|-----------------------------------|
| id             | int       | Primary Key, auto increment       |
| ukm_id         | int       | Foreign Key ke `ukms.id`          |
| nama_kegiatan  | varchar   | Nama kegiatan                     |
| deskripsi      | text      | Detail kegiatan                   |
| tanggal        | date      | Tanggal pelaksanaan               |
| lokasi         | varchar   | Lokasi kegiatan                   |
| created_at     | timestamp |                                   |
| updated_at     | timestamp |                                   |

### 📄 Tabel `pendaftaran_kegiatan`

| Kolom           | Tipe Data | Keterangan                                     |
|-----------------|-----------|------------------------------------------------|
| id              | int       | Primary Key, auto increment                    |
| user_id         | int       | Foreign Key ke `users.id`                      |
| kegiatan_id     | int       | Foreign Key ke `kegiatan.id`                   |
| status          | varchar   | 'terdaftar', 'hadir', 'tidak hadir'            |
| created_at      | timestamp |                                                |

---

## 🔁 Relasi Antar Tabel

- **`user → ukm`**  
  *One-to-Many*: Satu user (pengurus) bisa mengelola banyak UKM.

- **`users → anggota_ukm ← ukms`**  
  *Many-to-Many*: Mahasiswa bisa gabung lebih dari satu UKM, satu UKM punya banyak anggota.

- **`ukms → kegiatan`**  
  *One-to-Many*: Satu UKM bisa punya banyak kegiatan.

- **`users → pendaftaran_kegiatan ← kegiatan`**  
  *Many-to-Many*: Mahasiswa bisa mendaftar banyak kegiatan, dan satu kegiatan bisa diikuti banyak mahasiswa.

---

## 👨‍💻 Dibuat oleh

> **Nirwana**  
> D0223330  
> Proyek Mata Kuliah: Framework Web Based (2025)

---

## 📄 Lisensi

This project is licensed under the MIT License.

