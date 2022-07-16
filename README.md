# UAS_SBD_TI.20.D1

<table>
  <tr>
    <td>Nama</td>
    <td>Ema Rosida</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312010062</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>TI.20.D1</td>
  </tr>
  <tr>
    <td>Mata Kuliah</td>
    <td>Sistem Basis Data</td>
  </tr>
 </table>
  
  <hr/>

## Dari database ketika UTS kemarin, saya membuat menu login untuk mengakses ke halaman dashboard yang menampilkan data klinik.

![1](https://user-images.githubusercontent.com/101863671/179366332-bb53facb-975c-4098-8450-dfe3b9b8f4dd.png)

## Tampilan dashboard dari data klinik setelah berhasil login.

![2](https://user-images.githubusercontent.com/101863671/179366450-679fefeb-d1b7-454b-a57b-964333bc10bb.png)

## Mengimplementasikan modul CRUD (Create, Update, dan Delete)

- Contoh menambahkan pada modul pasien (CREATE)

```Cara menambahkannya yaitu dengan meng klik tombol tambah lalu input data pada form tambah pasien tersebut.```

![3](https://user-images.githubusercontent.com/101863671/179367578-5b734b19-7e19-4392-9cac-2026b3227c9a.png)

- Data pasien berhasil ditambahkan 

![15](https://user-images.githubusercontent.com/101863671/179369407-f7000541-1ac5-429a-96c2-7c78ea291de3.png)

- Contoh mengubah pada modul dokter (UPDATE)

```Cara mengubahnya yaitu dengan meng klik tombol ubah, disini saya ingin mengubah zidni menjadi nana.```

![13](https://user-images.githubusercontent.com/101863671/179369278-0c6e8bad-568f-429a-91b0-8deedb959979.png)

![6](https://user-images.githubusercontent.com/101863671/179367975-0e1f04e4-c171-423e-aedf-b97d88a87a28.png)

- Berhasil diubah menjadi nana

![14](https://user-images.githubusercontent.com/101863671/179369346-da2afe86-efe4-4826-835a-b3b3805979b1.png)

- Contoh menghapus pada modul pasien (DELETE)

```Cara menghapus nya yaitu dengan cara meng klik tombol hapus lalu klik ok. Disini saya ingin menghapus pasien yang bernama rita```

![16](https://user-images.githubusercontent.com/101863671/179369442-c8737ec5-463f-486d-90dc-af3b1b3dea6c.png)

- Berhasil terhapus 

![9](https://user-images.githubusercontent.com/101863671/179368184-000548fb-71b8-4d22-a552-2350d007f70d.png)

## Modul data user

Modul data user digunakan untuk proses log in menuju halaman dashboard.

![Menampilkan data dari database - Google Chrome 17_07_2022 01_55_03](https://user-images.githubusercontent.com/101863671/179368467-beb5a1a0-d2b8-4f94-8e02-e4744fdc588f.png)

## Mengimplementasikan Trigger

Saya mengimplementasikan TRIGGER pada data obat yang fungsinya untuk menampilkan perubahan nama obat setelah dilakukan proses update.

```create table log_obat(id_log int(100) auto_increment primary key, id_obat int(10), nama_obat_lama varchar(100), nama_obat_baru varchar(100), waktu date not null) // trigger```

```create trigger update_nama_obat before update on obat for each row insert into log_obat set id_obat=old.id_obat, nama_obat_lama = old.nama_obat, nama_obat_baru=new.nama_obat, waktu = now();```

![10](https://user-images.githubusercontent.com/101863671/179368349-bae1ce2c-9a10-4bba-9180-4cb2318eace6.png)

![11](https://user-images.githubusercontent.com/101863671/179368354-594a5d42-cc27-4da3-9086-fa45c553e51d.png)

## Mengimplementasikan view

Saya mengimplementasikan view untuk menampilkan data total berobat laki-laki.

```CREATE VIEW viewPenyakit AS SELECT a.id_berobat, b.nama_pasien, b.jenis_kelamin, b.umur, a.keluhan_pasien, a.hasil_diagnosa, a.tgl_berobat, c.nama_dokter FROM berobat a JOIN pasien b ON a.id_pasien=b.id_pasien JOIN dokter c ON a.id_dokter=c.id_dokter WHERE b.jenis_kelamin='L'```

![12](https://user-images.githubusercontent.com/101863671/179368810-1f2e0514-7256-4766-b25a-85da2e69aeef.png)

## Mengimplementasikan fungsi

Saya menggunakan fungsi sum untuk menjumlahkan data di setiap tabelnya.

![2](https://user-images.githubusercontent.com/101863671/179368918-cf83f9d8-751c-4fb3-95ab-c179214dedc7.png)









