<p align="center">
  <a href="">
    
  </a>
  <p align="center">
      <h1 align="center"><img src="https://github.com/syukriyatulhanifa/testchat/blob/master/uploadgambar/doctor_medicine_theme-02-%201.png"></h1>
      <h2 align="center">Sistem Informasi Rekam Medis dan Konsultasi pada Poliklinik IPB</br>
    (Paralel 1 Kelompok 9)</h2>
    <br>
  </p>  
  
</p>

<table align="center">
<thead>
<tr>
<th align="center"><a href="#a-deskripsi-singkat-aplikasi">Deskripsi</a></th>
<th align="center"><a href="#b-user-analysis">User Analysis</a></th>
<th align="center"><a href="#c-spesifikasi-teknis-lingkungan-pengembangan">Spesifikasi</a></th>
<th align="center"><a href="#d-konsep-oop-yang-digunakan">Konsep OOP</a></th>
<th align="center"><a href="#e-tipe-desain-pengembangan-yang-digunakan">Tipe Desain</a></th>
<th align="center"><a href="#f-hasil-dan-pembahasan">Hasil dan Pembahasan</a></th>
<th align="center"><a href="#g-hasil-implementasi">Hasil Implementasi</a></th>
<th align="center"><a href="#h-saran-untuk-pengembangan-selanjutnya">Saran</a></th>
<th align="center"><a href="#i-developer-dan-job-desc">Developer</a></th>
</tr>
</thead>
    
</table align="center">

### **Link Trello & Figma**
[Trello - Kelompok 9](https://trello.com/b/Gtt8YCw4/psbo-9)  
[Figma - Kelompok 9](https://www.figma.com/file/KPnWBMGaQEHFGnMSIZRCVg/PSBO_Kel_9)


## A. Deskripsi Singkat Aplikasi 
[`^ kembali ke atas ^`](#)

SIK-POLI merupakan aplikasi untuk Poliklinik IPB berbasis _website_ yang bertujuan untuk mempermudah mahasiswa IPB dalam menggunakan fasilitas Poliklinik IPB dalam akses _online_. Fitur pelayanan yang tersedia, seperti:
- **Rekam medis** mahasiswa selama berobat di Poliklinik untuk memantau kesehatan mahasiswa dalam sebulan/setahun terakhir.
- Tersedia pula **jadwal dokter** di website SIK-POLI sehingga mahasiswa dapat melakukan kunjungan ke Poliklinik sesuai jadwal dokter yang ada.
- Adanya **konsultasi _online_** dengan dokter Poliklinik untuk membantu mahasiswa yang mengalami masalah kesehatan dalam jarak jauh, sehingga BPJS yang terdaftar di Poliklinik masih tetap dapat digunakan. 

## B. User Analysis
[`^ kembali ke atas ^`](#)

### User Story
> "Sebagai mahasiswa IPB, saya ingin mendapatkan data rekam medis saya selama berobat di Poliklinik IPB untuk keperluan berobat di rumah sakit lain."  

> "Sebagai mahasiswa IPB, saya membutuhkan transparansi jadwal praktek dokter dan pelayanannya agar memudahkan saya dalam menentukan jadwal konsultasi."  

> "Sebagai mahasiswa IPB, saya ingin memanfaatkan BPJS saya yang sudah terdaftar di Poliklinik IPB agar saya tidak perlu konsultasi di rumah sakit lain selama pandemi ini."  

## C. Spesifikasi Teknis Lingkungan Pengembangan
[`^ kembali ke atas ^`](#)

### 1. Software
![Software](https://user-images.githubusercontent.com/57716837/122116041-52b0f880-ce4f-11eb-9ee6-dd32a7dc5558.png)  

### 2. Hardware
- Processor : Intel(R) Core(TM) i7-8750H CPU @ 2.20GHz
- Memory : 8,00 GB
- VGA : Nvidia GTX 1050Ti GeForce

### 3. Tech Stack
![techstack](https://user-images.githubusercontent.com/57716837/122115778-05cd2200-ce4f-11eb-8b28-2db4e4c79e10.png)  

## D. Konsep OOP yang Digunakan
[`^ kembali ke atas ^`](#)

### 1. _Encapsulation_
_Encapsulation_ adalah konsep fundamental pada pemrograman berorientasi objek yang menggambarkan suatu ide untuk membungkus _property_ dan _method_ pada suatu _class_ sehingga tidak sembarangan diakses oleh _class_ lainnya. Untuk menjaga hal tersebut, dalam _Encapsulation_ dikenal nama Hak Akses Modifier yang terdiri dari: _Public_, _Private_, dan _Protected_. Di sini, contohnya kami menggunakan hak akses _public_ pada _method_ `rekammedis` yang artinya seluruh kode program di luar _class_ bisa mengaksesnya termasuk _class_ turunan.  

```text
...
class RekamMedisController extends Controller
{
    public function rekammedis()
    {
        $data_rekammedis = \App\RekamMedis::all();
        return view('rekam-medis',['data_rekammedis' => $data_rekammedis]);
    }
    ...
}
```

### 2. _Inheritance_
_Inheritance_ merupakan konsep pemrograman di mana sebuah _class_ dapat menurunkan _property_ dan _method_ yang dimilikinya kepada _class_ lain. Di sini, contohnya adalah _class_ `authenticatable` diwariskan ke _class_ `dokter`.  

```text
...
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dokter extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'dokter';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
```

## E. Tipe Desain Pengembangan yang Digunakan
[`^ kembali ke atas ^`](#)
  
Dalam projek kami, kami menerapkan _design pattern_ MVC (_Model_, _View_, _Controller_). MVC adalah suatu pola arsitektur yang digunakan dalam rekayasa perangkat lunak, prinsipnya bahwa _logic_ suatu aplikasi harus dipisahkan dari _presentation code_-nya. Sehingga, _design pattern_ ini membagi suatu aplikasi menjadi tiga bagian yang saling berhubungan. 

### 1. Model
_Model_ mewakili stuktur data, yang biasanya berhubungan langsung dengan _database_. _Model_ biasanya berisikan fungsi-fungsi untuk memanipulasi data, seperti _create_, _read_, _update_, _delete_, dan juga menangani validasi dari bagian _Controller_.  

Penerapan pada sistem :
- Model Mahasiswa : Pada model mahasiswa terdapat informasi mengenai ID pasien, nama, NIM, jenis kelamin, umur, dan golongan darah yang akan dibutuhkan ketika mendata rekam medis pasien saat konsultasi _online_ atau kunjungan langsung ke Poliklinik IPB
- Model Dokter : Pada model dokter terdapat informasi mengenai ID dokter dan nama dokter yang akan dibutuhkan ketika membuat jadwal dokter untuk ditampilkan di SIK-POLI IPB
- Model Admin : Pada model admin terdapat informasi mengenai nama admin/staff yang akan dibutuhkan ketika melakukan manipulasi data rekam medis pasien Poliklinik IPB
- Model Rekam Medis : Pada model rekam medis terdapat informasi mengenai ID pasien, berat badan, tinggi badan, tekanan darah, keluhan, diagnosis, dan lain-lain yang akan dibutuhkan ketika mahasiswa atau dokter dalam memantau kesehatan mahasiswa dalam beberapa hari terakhir
- Model Jadwal Dokter : Pada model jadwal dokter terdapat informasi mengenai nama dokter dan hari kerjanya yang akan dibutuhkan ketika mahasiswa ingin melakukan kunjungan ke Poliklinik IPB sesuai jadwal dokter yang ada

### 2. View
_View_ merupakan bagian yang langsung berhubungan dengan pengguna. _View_ sendiri memiliki fungsi untuk merepresentasikan data yang diperoleh dari _Model_ dan telah diolah oleh _Controller_ kepada _user_. Untuk tampilan, kami menggunakan bahasa pemrograman `PHP`. Pada _framework_ Laravel terdapat fitur `Blade`. `Blade` berfungsi untuk menampilkan _output_ pada _View_. `Blade` juga digunakan untuk membuat _layout_ website.  

Penerapan pada sistem untuk Mahasiswa :
- Halaman Welcome : merupakan halaman pertama yang akan ditampilkan ketika mahasiswa belum melakukan login
- Form Login : merupakan form login untuk masuk ke dalam _website_
- Halaman Home : merupakan halaman pertama yang akan ditampilkan ketika mahasiswa sudah melakukan login
- Rekam Medis : berisi profil dan rekam medis dari mahasiswa
- Jadwal Dokter : merupakan halaman yang berisi informasi mengenai jadwal dokter
- Konsultasi : berupa halaman _chat_ konsultasi dengan dokter

Penerapan pada sistem untuk Admin :
- Form Login : merupakan form login untuk masuk ke dalam sistem
- Dashboard : berisi informasi mengenai _traffic_ dari _website_
- Jadwal Dokter : berisi jadwal dokter dan pilihan untuk mengedit atau menghapus jadwal dokter tertentu
- Rekam Medis : berisi daftar rekam medis dan pilihan untuk mengedit atau menghapus rekam medis dari mahasiswa tertentu

### 3. Controller
_Controller_ merupakan bagian yang menjadi jembatan penghubung antara _Model_ dan _View_. Data yang diperoleh dari _Model_ harus melalui _Controller_ agar dapat dipetakan dan ditampilkan di _View_. _Controller_ juga berfungsi untuk menerima _request_ dan data dari _user_ kemudian menentukan apa yang akan diproses oleh aplikasi.  

Penerapan pada sistem :
- _Auth Controller_ digunakan untuk mengatur autentikasi saat login sehingga hanya admin dan mahasiswa yang bisa mengakses SIK-POLI IPB
- _Controller_ untuk setiap model 

## F. Hasil dan Pembahasan
[`^ kembali ke atas ^`](#)

### 1. Use Case Diagram
![Diagram Kelompok 9-Use Case](https://user-images.githubusercontent.com/60166588/121620205-1ae33300-ca94-11eb-8092-3a97bb74a0ad.png)

### 2. Activity Diagram
#### a. Mahasiswa
#### - Melihat Rekam Medis atau Jadwal Dokter
![Diagram Kelompok 9-AD 1 - melihat rekam medis](https://user-images.githubusercontent.com/60166588/121620404-77dee900-ca94-11eb-8d2f-30ff19fabc53.png)

#### b. Admin
#### - Menambah Jadwal Dokter
![Diagram Kelompok 9-AD 2 - menambah jadwal](https://user-images.githubusercontent.com/60166588/121620518-aeb4ff00-ca94-11eb-836e-d3012f82ad93.png)
#### - Mengupdate Jadwal Dokter
![Diagram Kelompok 9-AD 4 - mengubah jadwal](https://user-images.githubusercontent.com/60166588/121620705-fc316c00-ca94-11eb-8a6d-23cdbadae2da.png)
#### - Mengupdate Rekam Medis
![update rekam medis](https://user-images.githubusercontent.com/60166588/121625901-9518b500-ca9e-11eb-90b0-2d1c6cb16183.png)
#### - Menghapus Jadwal Dokter
![Diagram Kelompok 9-AD 3 - menghapus jadwal](https://user-images.githubusercontent.com/60166588/121620630-de640700-ca94-11eb-8840-c0037ec47985.png)

### 3. Class Diagram
![class](https://user-images.githubusercontent.com/57716837/122177645-04801180-ceb0-11eb-82b3-a72f58f0e78a.png) 

### 4. Entity Relationship Diagram
![erd](https://user-images.githubusercontent.com/57716837/122177681-0ba71f80-ceb0-11eb-8f8c-71d59203550f.png)  

### 5. Arsitektur Sistem
![arsitektur sistem](https://user-images.githubusercontent.com/57716837/122124519-9577ce00-ce59-11eb-9e0e-6d16af6ed734.png)

### 6. Fungsi Utama yang Dikembangkan
Fungsi-fungsi utama pada aplikasi SIK-POLI yaitu :
- **Rekam Medis**  
Pada fitur **Rekam Medis** mahasiswa dapat melihat data rekam medisnya secara _online_ di SIK-POLI dengan mudah. Informasi yang disampaikan pada fitur **Rekam Medis** meliputi profil pasien, tanggal pemeriksaan, berat badan, tinggi badan, tekanan darah, keluhan, diagnosis, sistole, diastole, respirasi, nadi, dan pemberian obat.  

- **Jadwal Dokter**  
Pada fitur **Jadwal Dokter** mahasiswa dapat melihat jadwal dokter perharinya beserta jam kerjanya. Fitur ini membantu mahasiswa ketika ingin melakukan kunjungan ke Poliklinik secara langsung sesuai dengan jadwal dokter yang ada.  

### 7. Fungsi CRUD
**a. Create**  
- Admin dapat memasukkan data rekam medis milik mahasiswa
- Admin dapat membuat jadwal dokter yang baru sesuai dengan jam kegiatan dokternya yang terdiri dari hari dan jam kerjanya  

**b. Read**  
- Mahasiswa dapat melihat data rekam medis milikinya pada fitur **Rekam Medis**  
- Mahasiswa dapat melihat jadwal dokter perharinya pada fitur **Jadwal Dokter**  

**c. Update**  
- Admin dapat mengupdate data rekam medis milik mahasiswa bila terjadi perubahan data  
- Admin dapat mengupdate jadwal dokter sesuai jam kegiatan dokter yang ada    

**d. Delete**  
- Admin dapat menghapus data rekam medis milik mahasiswa yang sudah didata sebelumnya  
- Admin dapat menghapus jadwal dokter berdasarkan nama dokternya  

## G. Hasil Implementasi
[`^ kembali ke atas ^`](#)
 
### 1. Tampilan untuk Mahasiswa  
#### - Halaman Welcome  

![Screenshot (1952)](https://user-images.githubusercontent.com/57716837/122128443-e50cc880-ce5e-11eb-8ab4-4aa7c57cb3a5.png)  
  
#### - Form Login  

![Screenshot (1955)](https://user-images.githubusercontent.com/57716837/122128489-f48c1180-ce5e-11eb-9d1e-846187c3ed24.png)  
  
#### - Halaman Home  

![Screenshot (1956)](https://user-images.githubusercontent.com/57716837/122128506-f950c580-ce5e-11eb-97cf-e44bf912377e.png)  
  
#### - Rekam Medis  

![Screenshot (1957)](https://user-images.githubusercontent.com/57716837/122128566-0f5e8600-ce5f-11eb-9edf-a3254b86fd3d.png)  
![Screenshot (1958)](https://user-images.githubusercontent.com/57716837/122128568-11284980-ce5f-11eb-814b-a1e4fff3a4df.png)    
  
#### - Jadwal Dokter  

![Screenshot (1959)](https://user-images.githubusercontent.com/57716837/122128587-1a191b00-ce5f-11eb-9318-3cfbf012f4c9.png)    

### 2. Tampilan untuk Admin  
#### - Halaman Welcome  

![Screenshot (1953)](https://user-images.githubusercontent.com/57716837/122129106-d2df5a00-ce5f-11eb-944d-977d3cdc1e6c.png)
  
#### - Form Login  

![Screenshot (1961)](https://user-images.githubusercontent.com/57716837/122129123-d7a40e00-ce5f-11eb-9c35-c3f7716e7114.png)
  
#### - Daftar Jadwal Dokter  

![Screenshot (1962)](https://user-images.githubusercontent.com/57716837/122129138-dbd02b80-ce5f-11eb-9bb4-41e27b532368.png)
  
#### - Tambah Jadwal Dokter  

![Screenshot (1963)](https://user-images.githubusercontent.com/57716837/122129151-dffc4900-ce5f-11eb-86f2-8227c394a536.png)
  
#### - Edit Jadwal Dokter  

![Screenshot (1964)](https://user-images.githubusercontent.com/57716837/122129172-e985b100-ce5f-11eb-9a1d-0366d8b1e48c.png)
  
#### - Daftar Mahasiswa  

![Screenshot (1965)](https://user-images.githubusercontent.com/57716837/122129185-ed193800-ce5f-11eb-8a51-e9eba08a305d.png)
  
#### - Tambah Rekam Medis  

![Screenshot (1966)](https://user-images.githubusercontent.com/57716837/122129202-f4d8dc80-ce5f-11eb-9994-2820df93f9d2.png)
  
#### - Daftar Rekam Medis Per Mahasiswa  

![Screenshot (1967)](https://user-images.githubusercontent.com/57716837/122129221-f99d9080-ce5f-11eb-984e-54b295a8e48b.png)
  
#### - Edit Rekam Medis Per Mahasiswa  

![Screenshot (1968)](https://user-images.githubusercontent.com/57716837/122129232-fdc9ae00-ce5f-11eb-94eb-30b465677762.png)
  
#### - Detail Rekam Medis Per Mahasiswa  

![Screenshot (1969)](https://user-images.githubusercontent.com/57716837/122129255-0326f880-ce60-11eb-9e9e-0dfb076512b3.png)

## H. Saran untuk Pengembangan Selanjutnya
[`^ kembali ke atas ^`](#)

Saran untuk pengembangan aplikasi SIK-POLI selanjutnya, diantaranya :
1. Disarankan menggunakan API
2. Diharapkan website yang telah dikembangkan memiliki tampilan yang lebih _responsive_ dan _interactive_
3. Pengembangan lebih lanjut adanya fitur konsultasi

## I. Developer dan Job Desc
[`^ kembali ke atas ^`](#)

| NIM       | NAMA                          | JOB DESC                  |
| --------- | ----------------------------- | ------------------------- |
| G64180029 | Sabrina Diza Melinda          | Front-End, Back-End       |
| G64180030 | Zahra Aulia Firdausi          | Project Manager, Back-End |
| G64180053 | Putri Melanita Londong Bua    | System Analyst            |
| G64180062 | Syukriyatul Hanifa            | UI/UX Designer, Front-End |
| G64180077 | Alwi Miftahul Karomi          | Front-End                 |



# SIKPOLI-IPB
