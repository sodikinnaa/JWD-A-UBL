# Pemesanan Paket Wisata

## Instalasi? Codeigniter 4

Jalankan Xampp pada bagian phpmyadmin pasitikan database pemesananwisata sudah ada di database dan datanya sesuai dengan databaese.sql
Pasitkan di komputer sudah terinstall aplikasi composer untuk update project codeigniter
buka project pada visual studio code, kemudian buka terminal pada vscode
kemudian ketikan perintah pada terminal : php spark serve

## Penggunaan

## Perbaikan 
1. Logic edit pemesanan menyesuaikan form input
    Penyesuaian form dilakukan dengan cara menambahakan route dan juga function baru pada codeigniter yang saya buat 
    $routes->get('update-data', 'Wisata\PaketWisata::showEditTrnasaksi');
    pada functionya di return kedalam view edit dan pemrosessan edit diubah melalui form dari view baru bukan dari modal.
2. Logic control soal no. 5 di perbaiki
    perbaikan dilakukan dengnan cara menambahkan kode java script pada function tombol hitung :
     var simpan = document.getElementById("nextStep");
     simpan.disabled = false;
    itu merupakan code yang digunakan untuk mengaktifkan tombol simpan yang di disable
3. Pembuatan file ReadmeMD
    ....


# Pejelasan Codingan
