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
Peran sebagai pengguna yang ingin bergabung dalam kegiatan kampus melalui UKM
| **Fitur**                    | **Deskripsi**                                                                 |
|-----------------------------|------------------------------------------------------------------------------|
| Mendaftar Akun              | Pengguna dapat membuat akun baru untuk mendapatkan akses awal ke dalam sistem. |
| Login                       | Otentikasi pengguna untuk masuk ke dalam sistem dengan akun yang telah terdaftar. |
| Melihat Daftar UKM          | Pengguna dapat menelusuri daftar UKM yang aktif di lingkungan kampus.        |
| Mendaftar UKM               | Pengguna dapat mendaftar sebagai anggota UKM yang diminati.                  |
| Melihat dan Daftar Kegiatan | Pengguna dapat melihat daftar kegiatan dari UKM yang diikuti dan melakukan pendaftaran. |


### 2. Pengurus UKM
| **Fitur**                        | **Deskripsi**                                                                   |
|----------------------------------|---------------------------------------------------------------------------------|
| Login                           | Pengurus dapat melakukan otentikasi untuk masuk ke sistem sebagai pengurus UKM. |
| Mengelola Data UKM              | Pengurus dapat mengedit profil UKM, mengubah deskripsi, dan memperbarui informasi lainnya. |
| Membuat Kegiatan UKM            | Pengurus dapat memasukkan data kegiatan, seperti nama, deskripsi, dan tanggal kegiatan. |
| Melihat Anggota UKM            | Pengurus dapat melihat daftar anggota yang telah mendaftar di UKM yang dikelola. |


### 3. Admin
| **Fitur**                        | **Deskripsi**                                                                   |
|----------------------------------|---------------------------------------------------------------------------------|
| Login                           | Admin dapat melakukan otentikasi untuk masuk ke dalam sistem sebagai admin.     |
| Mengelola Semua UKM             | Admin dapat melakukan CRUD (Create, Read, Update, Delete) terhadap data UKM tanpa batasan. |
| Mengelola Semua User            | Admin dapat mengelola data pengguna dan menentukan peran masing-masing pengguna. |
| Mengelola Kegiatan              | Admin memiliki akses penuh untuk mengelola seluruh kegiatan di semua UKM yang ada. |


---

## Tabel-Tabel Database Beserta Field dan Tipe Datanya

### Tabel `user`

| Field       | Tipe Data | Keterangan                            |
|-------------|-----------|----------------------------------------|
| id          | int       | Primary Key, auto increment            |
| name        | varchar   | Nama lengkap pengguna                  |
| email       | varchar   | Unik, digunakan untuk login            |
| password    | varchar   | Password terenkripsi                   |
| role        | varchar   | 'mahasiswa' / 'pengurus' / 'admin'     |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `ukm`

| Field        | Tipe Data | Keterangan                                 |
|--------------|-----------|--------------------------------------------|
| id           | int       | Primary Key, auto increment                |
| nama_ukm     | varchar   | Nama UKM                                   |
| deskripsi    | text      | Penjelasan tentang UKM                     |
| pengurus_id  | int       | Foreign Key ke `user.id` (pengurus)        |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `anggota_ukm`

| Field     | Tipe Data | Keterangan                                   |
|-----------|-----------|----------------------------------------------|
| id        | int       | Primary Key, auto increment                  |
| user_id   | int       | Foreign Key ke `user.id`                    |
| ukm_id    | int       | Foreign Key ke `ukm.id`                     |
| status    | varchar   | 'menunggu', 'diterima', dll.                 |
| created_at      | TIMESTAMP | Waktu dibuat                                   |
| updated_at      | TIMESTAMP | Waktu diubah                                   |

### Tabel `kegiatan`

| Field          | Tipe Data | Keterangan                        |
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

| Field           | Tipe Data | Keterangan                                     |
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


