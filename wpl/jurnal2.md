DEWANTARA. J. Tech., Vol. 01, No. 02 (Mei 2021), Hal. 118 - 123 E ISSN : 2776-6764
P ISSN : 2774-2032
Rancang Bangun Modul Laboratory Dual Voltage Power Supply
Risal Mantofani Arpin-1a*, Adriani-2b*
aProdi Teknik Elektronika, Akademi Teknologi Industri Dewantara Palopo, Jalan K.H.
Ahmad Razak 2 No. 7, Wara Selatan, Kota Palopo, Sulawesi Selatan, Indonesia bProdi Teknik
Sipil, Akademi Teknologi Industri Dewantara Palopo, Jalan K.H. Ahmad Razak 2 No. 7,
Wara Selatan, Kota Palopo, Sulawesi Selatan, Indonesia
*Email : risalmantofani@atidewantara.ac.id
*Email : adriani@atidewantara.ac.id
Abstrak
Modul Laboratory Dual Voltage Power Supply berhasil dirakit yang dimulai dengan proses
perancangan, pembuatan, dan pengetesan alat. Hasil yang didapatkan adalah berupa alat Modul
Laboratory Dual Voltage Power Supply dengan tegangan luaran positif dan negatif.
Perbandingan nilai tegangan luaran dan negatif tidak jauh berbeda. Tegangan luaran positif
bernilai 0,16VDC-24,5VDC sedangkan untuk tegangan luaran negatif bernilai
0,22VDC24,1VDC. Modul ini dapat digunakan dalam membantu praktek mahasiswa di
Program Studi Teknik Elektronika ATI Dewantara Palopo. Modul ini bisa digunakan pada
perakitan penguat amplifier yang membutuhkan dua tengangan masukan.
Kata Kunci : Modul Laboratory Dual Voltage Power Supply, Tegangan Luaran positif dan
negatif
1. Latar Belakang Rangkaian Laboratory Dual Voltage
Power Supply atau sering disebut juga Power Supply memiliki prinsip kerja yang
catu daya adalah sebuah perangkat yang sama dengan rangkaian penyearah
memasok listrik energi untuk satu atau lebih gelombang yaitu mengubah tegangan AC
beban listrik [1]. Catu daya adalah suatu alat menjadi tegangan DC. Rangkaian
listrik yang dapat menyediakan energi listrik penyearah ada dua macam, yaitu rangkaian
untuk perangkat listrik atau elektronik [2]. penyearah setengah gelombang dan
Laboratory Dual Voltage Power Supply rangkaian penyearah gelombang penuh.
merupakan catu daya yang telah Rangkaian penyearah dapat dibuat dengan
dikembangkan. Catu daya ini adalah tipe memanfaatkan dioda.
linear power supply dengan fungsi Penyearah setengah gelombang
adjustable power supply, yaitu power menggunakan satu dioda, sedangkan
supply dengan tegangan atau arusnya dapat penyearah gelombang penuh mengunakan
diatur sesuai kebutuhan dengan dioda bridge [11].
menggunakan sebuah potensiometer [2]. Dalam pembuatan rangkaiannya,
dibutuhkan komponen berupa resistor,
118

DEWANTARA. J. Tech., Vol. 01, No. 02 (Mei 2021), Hal. 118 - 123 E ISSN : 2776-6764
P ISSN : 2774-2032
potensiometer, kapasitor, dioda, led, IC LED (Light Emiting Diode) adalah salah
regulator positif LM317 dan IC regulator satu komponen elektronika yang dapat
negative LM337, fuse, display modul memancarkan chaya monokromatik ketika
voltmeter, transformator. diberi tegangan maju. LED merupakan
Resistor adalah komponen elektronik keluarga dioda yang terbuat dari bahan
dua kutub yang didesain untuk menahan semikonduktor yang terdiri dari sebuah chip
arus listrik dengan memproduksi tegangan semikonduktor yang didoping sehingga
listrik di antara kedua kutubnya [3]. menciptakan junction P dan N. selama ini
Dengan resistor, arus listrik apat LED banyak digunakan pada perangkat
didistribusikan sesuai dengan kebutuhan. elektronik karena ukuran yang kecil, cara
Sesuai dengan namanya resistor bersifat pemasangan praktis, serta konsumsi listrik
resistif dan umumnya terbuat dari bahan yang rendah. Salah satu kelebihan LED
karbon [4]. adalah usia relative panjang, yaitu lebih dari
Potensiometer merupakan jenis resistor 30.000 jam [7].
variable yang nilai resistansinya dapat IC LM317 merupakan chip IC yang
berubah-ubah dengan cara memutar didesain khusus sebagai regulator tegangan
porosnya melalui sebuah tuas yang terdapat positif yang dapat diatur. Rangkaian Power
pada potensiometer [5]. Supply yang menggunakan LM317 ini
Kapasitor adalah komponen elektronik memiliki tegangan output yang dapat diatur
yang berfungsi sebagai filter. Tegangan dari 1,25VDC sampai 25VDC [8].
keluaran dari suatu rangkaian penyearah IC LM337 merupakan chip IC yang
pada umumnya akan menimbulkan didesain khusus sebagai regulator tegangan
tegangan ripple (misal: tegangan yang positif yang dapat diatur. LM337 untuk
diinginkan keluar dari rangkaian penyearah regulator variable negative [9].
adalah berupa tegangan DC murni, tetapi Fuse adalah komponen pengaman
masih ada sedikit tegangan AC yang ikut listrik yang berfungsi sebagai pengaman
terbawa, tegangan itulah yang dinamakan arus lebih dan hubung singkat, didalam
tegangan ripple) maka dibutuhkan sebuah fuse terdapat kawat lebur yang berfungsi
komponen elektronika berupa kapasitor sebagai penghantar arus dan juga sebagai
yang digunakan untuk mengecilkan atau pengaman dari beban lebih dan hubung
bahkan menghilangkan tegangan tersebut singkat. Apabila terjadi arus lebih atau
karena dapat mempengaruhi keluaran dari hubung singkat, kawat lebur tersebut akan
charger yang dibuat [6]. Struktur sebuah mengalami kenaikan suhu dan akan
kapasitor terbuat dari 2 buah plat metal yang melebur (putus), sehingga arus listrik yang
dipisahkan oleh suatu bahan dielektrik [4]. melalui Fuse akan terputus. Apabila kawat
Dioda merupakan komponen lebur sudah terputus maka fuse sudah tidak
elektronika yang mempunyai dua elektroda berfungsi dan harus diganti.
(terminal) P dan N, yang berfungsi sebagai Display modul voltmeter adalah
penyearah arus listrik. Sambungan komponen yang digunakan untuk
semikonduktor P-N hanya dapat mengukur tegangan yang dihasilkan dari
mengalirkan arus listrik pada saat diberi suatu rangkaian elektronika.
prasikap maju. Dengan kata lain sambungan Transformator adalah suatu peralatan
semikonduktor P-N hanya dapat listrik elektromagnetik statis yang
mengalirkan arus ke satu arah. Dioda berfungsi untuk memindahkan/mengubah
semikonduktor dibuat dari sambungan P-N energi listrik dari satu rangkaian listrik ke
ini. Terminal P disebut anoda, terminal N rangkaian yang lain [10].
disebut katoda [4].
119

 E ISSN : 2776-6764
DEWANTARA. J. Tech., Vol. 01, No. 02 (Mei 2021), Hal. 118 - 123
|     |     |     |     |     |     |     |     |     |  P ISSN : 2774-2032   |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --------------------- | --- | --- |
2. Metodologi   diperlukan proses yang baik dan terstruktur.
| Bahan dan alat   |     |     |     |     |     |     | Sebagai      | tahap  | awal    | dalam       | langkah  |
| ---------------- | --- | --- | --- | --- | --- | --- | ------------ | ------ | ------- | ----------- | -------- |
|                  |     |     |     |     |     |     | perencanaan  |        | adalah  | menentukan  | bentuk   |
Bahan utama yang dibutuhkan dalam
|     |     |     |     |     |     |     | sistem  | yang  | akan  | dibuat.  | Kemudian  |
| --- | --- | --- | --- | --- | --- | --- | ------- | ----- | ----- | -------- | --------- |
pembuatan modul power supply ini adalah
resistor (3k3, 2k2, 220), potensiometer 5k,  membuat  diagram  blok.  Blok  diagram
kapasitor  kondensator  (3300uF/50V,  dalam penelitian ini adalah:
| 10uF/50V,  | 470uF/50V)  |           | kapasitor  |     | milar  |     |     |     |     |     |     |
| ---------- | ----------- | --------- | ---------- | --- | ------ | --- | --- | --- | --- | --- | --- |
| 100nF,     | dioda       | (1N5408,  | 1N4007),   |     | LED    |     |     |     |     |     |     |
warna merah 3mm, LM317, LM337, fuse,
display modul voltmeter, transformator CT  Gambar 1 Blok Diagram Perancangan
3A/18V. Bahan pendukung konektor white
|     |     |     |     |     |     |     | Blok  | diagram  | di  | atas  | menunjukkan  |
| --- | --- | --- | --- | --- | --- | --- | ----- | -------- | --- | ----- | ------------ |
housing (3 pin, 4 pin), specer PCB, pin
PCB, saklar AC, soket banana 8mm, soket  bahwa tegangan yang diterima dari sumber
AC cord angka 8/2 lubang, kabel AC cord  AC  akan  dibawa  ke  transformator  CT,
angka 8/2 lubang, kabel pita 16 pin, kabel  kemudian  ditransmisikan  ke  penyearah
yang akan mengubah tegangan AC menjadi
| banana  | ke  capit  | buaya  | (merah,  |     | kuning,  |     |           |     |                |     |             |
| ------- | ---------- | ------ | -------- | --- | -------- | --- | --------- | --- | -------------- | --- | ----------- |
|         |            |        |          |     |          |     | DC,  dan  | ke  | IC  regulator  |     | LM317  dan  |
hitam), kabel serabut, selang bakar, kaki
LM337 dibagi menjadi dua tegangan DC
karet, mur baut.
yaitu tegangan positif pada jalur LM317
| Alat  | yang  | dibutuhkan  |     | dalam  | proses  |     |     |     |     |     |     |
| ----- | ----- | ----------- | --- | ------ | ------- | --- | --- | --- | --- | --- | --- |
pembuatan modul ini adalah tool kit yang  dan tegangan negatif pada jalur LM337.
terdiri dari, solder, penghisap timah, obeng,  Dan terakhir akan dikeluarkan melalui jalur
| tang, pinset, multimeter digital.   |     |     |     |     |     |     | output di soket.   |     |     |     |     |
| ----------------------------------- | --- | --- | --- | --- | --- | --- | ------------------ | --- | --- | --- | --- |
| Pembuatan Modul Laboratory Dual     |     |     |     |     |     |     |                    |     |     |     |     |
Voltage Power Supply

| Pembuatan  |               | modul  | ini  dimulai  |              | dengan  |     |     |     |     |     |     |
| ---------- | ------------- | ------ | ------------- | ------------ | ------- | --- | --- | --- | --- | --- | --- |
| tahap      | perancangan.  |        |               | Perancangan  |         |     |     |     |     |     |     |

| merupakan    | proses  | yang         | dianggap  |         | paling  |       |     |     |     |     |     |
| ------------ | ------- | ------------ | --------- | ------- | ------- | ----- | --- | --- | --- | --- | --- |
| penting      | dalam   | pembuatan    |           | alat    | untuk   |       |     |     |     |     |     |
| mendapatkan  |         | hasil  yang  |           | sesuai  | dengan  |       |     |     |     |     |     |
| kebutuhan.   | Dalam   | merancang    |           | suatu   |         | alat  |     |     |     |     |     |

Gambar 2 Rangkaian Rancang Bangun Modul Laboratory Dual Voltage Power Supply
120

DEWANTARA. J. Tech., Vol. 01, No. 02 (Mei 2021), Hal. 118 - 123 E ISSN : 2776-6764
P ISSN : 2774-2032
Gambar 3 Tata Letak Komponen Modul Laboratory Dual Voltage Power Supply
3. Hasil dan Pembahasan LM337. Baik tegangan positif maupun
Hasil dari pembuatan alat ini adalah tegangan negatif masingmasing dapat
berupa Modul Laboratory Dual Voltage diatur dengan menggunakan
Power Supply yang memiliki dua tegangan potensiometer, VR1 untuk mengatur
luaran yaitu tegangan positif dan tegangan tegangan luaran LM317 sedangkan VR2
negatif. Tegangan positif dihasilkan dari untuk mengatur tegangan luaran LM337.
adanya IC regulator LM317 dan tengan Berikut ini adalah gambar modul
negatif dihasilkan dari adanya IC regulator Laboratory Dual Voltage Power Supply
yang telah selesai dirakit:
Gambar 4 Modul Laboratory Dual Voltage Power Supply
Gambar 5 Tampak Belakang Belakang
121

 E ISSN : 2776-6764
DEWANTARA. J. Tech., Vol. 01, No. 02 (Mei 2021), Hal. 118 - 123
|     |     |     |     |     |     |     |  P ISSN : 2774-2032   |     |     |
| --- | --- | --- | --- | --- | --- | --- | --------------------- | --- | --- |

Gambar 6 Tampak Atas Modul

Gambar 7 Tampak Depan Modul

Berikut adalah tegangan luaran yang dihasilkan dari modul Laboratory Dual Voltage
Power Supply ini:
Tabel 1
|              |     | Tegangan Positif   |            |     | Tegangan Negatif   |            |     |            |       |
| ------------ | --- | ------------------ | ---------- | --- | ------------------ | ---------- | --- | ---------- | ----- |
|              |     | Minimum            | Maksimum   |     | Minimum            | Maksimum   |     |            |       |
|              |     | 0,16VDC            | 24,5VDC    |     | 0,22VDC            | 24,1VDC    |     |            |       |
| Kesimpulan   |     |                    |            |     | perakitan          | penguat    |     | amplifier  | yang  |
Modul Laboratory Dual Voltage Power  membutuhkan dua tengangan masukan.
| Supply berhasil dirakit yang dimulai dengan  |     |             |     |      |                  |     |     |     |     |
| -------------------------------------------- | --- | ----------- | --- | ---- | ---------------- | --- | --- | --- | --- |
| proses  perancangan,                         |     | pembuatan,  |     | dan  | Daftar Pustaka   |     |     |     |     |
pengetesan  alat.  Hasil  yang  didapatkan  [1]  Sitohang,  E.P.,  Mamahit,  D.J.,
adalah berupa alat Modul Laboratory Dual
|     |     |     |     |     |     | Tulung,  | N.S.,  | Rancang  | Bangun  |
| --- | --- | --- | --- | --- | --- | -------- | ------ | -------- | ------- |
Voltage  Power  Supply  dengan  tegangan  Catu  Daya  DC  Menggunakan
luaran  positif  dan  negatif.  Perbandingan  Mikrokontroler  ATmega  8535,
nilai tegangan luaran dan negatif tidak jauh  Jurnal  Teknik  Elektro  dan
berbeda. Modul ini dapat digunakan dalam  Komputer, 7(2), 135-142, 2018.
membantu praktek mahasiswa di Program  [2]  Balai   Besar  Pengembangan
Studi Teknik  Elektronika ATI Dewantara  Penjaminan  Mutu  Pendidikan
| Palopo.  Modul  | ini  | bisa  digunakan  | pada  |     |     |         |         |           |      |
| --------------- | ---- | ---------------- | ----- | --- | --- | ------- | ------- | --------- | ---- |
|                 |      |                  |       |     |     | Vokasi  | Bidang  | Otomotif  | dan  |
122

 E ISSN : 2776-6764
DEWANTARA. J. Tech., Vol. 01, No. 02 (Mei 2021), Hal. 118 - 123
|     |     |     |     |     |     |     |  P ISSN : 2774-2032   |
| --- | --- | --- | --- | --- | --- | --- | --------------------- |
Elektronika, Modul Diklat Berbasis
Kompetensi untuk Dosen PTV, 3,
2021.
| [3]  | Zain,      | R.H.,     | Yatra, A.R., Aplikasi  |       |           |     |     |
| ---- | ---------- | --------- | ---------------------- | ----- | --------- | --- | --- |
|      | Pagar      | Elektrik  |                        | Pada  | Keamanan  |     |     |
|      | Fasilitas  |           |                        |       | Lembaga   |     |     |
Permasyarakatan Dilengkapi Alarm
|     | Deteksi  |     | Pemutusan  |     | Arus  | Listrik  |     |
| --- | -------- | --- | ---------- | --- | ----- | -------- | --- |
dan Sensor Menggunakan Jaringan
Koputer, Jurnal Momentum, 13(2),
8197, 2012.
[4]  Thamin, A.F., Allo, E.K., Mamahit.
|     | D.J.,  | Rancang  |     | Bangun  |     | Alat  |     |
| --- | ------ | -------- | --- | ------- | --- | ----- | --- |
Pemotong Singkong Otomatis, E-
|     | Journal  |     | Teknik  |     | Elektro  | dan  |     |
| --- | -------- | --- | ------- | --- | -------- | ---- | --- |
Komputer, 29-36, 2015
| [5]  | Basri,  | I.Y.,  | Irfan,  | D.,  | Komponen  |     |     |
| ---- | ------- | ------ | ------- | ---- | --------- | --- | --- |
Elektronika, 6, 2018.
[6]  Saptadi, A.H., Arifin. J., Nugraha,
W.D., Perancangan dan Pembuatan
|     | Charger       |     | Handphone  |         |             | Portable  |     |
| --- | ------------- | --- | ---------- | ------- | ----------- | --------- | --- |
|     | Menggunakan   |     |            | Sistem  | Penggerak   |           |     |
|     | Generator AC  |     |            | dengan  | Penyearah,  |           |     |
Jurnal Infotel, 2(2), 2010.
| [7]  | Suhardi,     |     | D.,  Prototipe  |     | Controller  |          |     |
| ---- | ------------ | --- | --------------- | --- | ----------- | -------- | --- |
|      | Lampu        |     | Penerangan      |     |             | LED      |     |
|      | Independent  |     | Bertenaga       |     |             | Surya.,  |     |
Jurnal Gamma, 116122.
[8]  Brown., Practical Switching Power
Supply Design., Academic Press.
| [9]  | Yanis,       | R.,  | Mahamit,  |       | D.J.,      | Allo,     |     |
| ---- | ------------ | ---- | --------- | ----- | ---------- | --------- | --- |
|      | E.K.,        |      | Sompie,   |       | S.R.U.A.,  |           |     |
|      | Perancangan  |      | Catu      | Daya  |            | Berbasis  |     |
Up-Down Binary Counter dengan
|     | 32  | Keluaran,  |     | E-Jurnal  |     | Teknik  |     |
| --- | --- | ---------- | --- | --------- | --- | ------- | --- |
Elektro dan Komputer, 1-12, 2013.
| [10]  | Badaruddin,  |     |         | Firdianto,  |                | F.A.,  |     |
| ----- | ------------ | --- | ------- | ----------- | -------------- | ------ | --- |
|       | Analisa      |     | Minyak  |             | Transformator  |        |     |
pada Transformator Tiga Fasa di PT
X, Jurnal Teknologi Elektro, 7(2),
75-83, 2016.
[11]  Arpin, R.M., Skematik Rangkaian
|     | Penyearah  |     | Setengah   |     | Gelombang    |     |     |
| --- | ---------- | --- | ---------- | --- | ------------ | --- | --- |
|     | pada       |     | Rangkaian  |     | Elektronika  |     |     |
|     | Analog.,   |     | Dewantara  |     | Journal      | of  |     |
Technology, 1(1), 22-24, 2020.
123