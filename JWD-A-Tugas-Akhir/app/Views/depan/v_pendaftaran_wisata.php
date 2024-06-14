<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <style>
                body {
                    background-color: #f8f9fa;
                }

                .container {
                    background-color: white;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .card-footer .btn {
                    width: 100px;
                    margin: 10px;
                }
            </style>

            <div class="container mt-5">
                <form id="formPemesanan">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaPemesan">Nama Pemesan</label>
                            <input type="text" class="form-control" id="namaPemesan" placeholder="Isi Nama Pemesan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="noHp">No HP / Telp</label>
                            <input type="text" class="form-control" id="noHp" placeholder="Isi No HP / Telp">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggalPemesanan">Tanggal Pemesanan</label>
                            <input type="date" class="form-control" id="tanggalPemesanan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="durasiPemesanan">Durasi Pemesanan (hari)</label>
                            <input type="number" class="form-control" id="durasiPemesanan"
                                placeholder="Isi Durasi Pemesanan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jumlahPemesan">Jumlah Pemesan</label>
                            <input type="number" class="form-control" id="jumlahPemesan" placeholder="Jumlah Pemesan">
                        </div>
                        <!-- output hasil -->
                        

                        <div class="form-group col-md-6">
                            <label for="paketPerjalanan">Pelayanan Paket Perjalanan</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="penginapan" value="1000000">
                                    <label class="form-check-label" for="penginapan">Penginapan (Rp1.000.000)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="transportasi" value="1200000">
                                    <label class="form-check-label" for="transportasi">Transportasi
                                        (Rp1.200.000)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="makanan" value="500000">
                                    <label class="form-check-label" for="makanan">Makanan (Rp500.000)</label>
                                </div>
                            </div>
                        </div>

                        <label for="hargaPaket">Harga Paket</label>
                        <div class="input-group">                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">RP. </span>
                            </div>
                            <input type="text" class="form-control" id="hargaPaket" disabled>                            
                        </div>
                        <label for="jumlahTagihan">Jumlah Tagihan</label>
                        <div class="input-group">                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">RP. </span>
                            </div>
                            <input type="text" class="form-control" id="jumlahTagihan" disabled>                            
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="hitungTotal()">Hitung</button>
                    <button id="nextStep" type="button" class="btn btn-primary" onclick="nextChoice()" disabled>Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                <div class="mt-5" id="ringkasan" style="display: none;">
                    <div class="card">
                        <div class="card-header text-center bg-warning text-dark">
                            Rangkuman Reservasi Paket Wisata
                        </div>
                        <div class="card-body">
                            <p>Nama : <span id="ringkasanNama"></span></p>
                            <p>Jumlah Peserta : <span id="ringkasanPeserta"></span></p>
                            <p>Waktu Perjalanan : <span id="ringkasanWaktu"></span> hari</p>
                            <p>Layanan Paket : <span id="ringkasanLayanan"></span></p>
                            <p>Harga Paket : Rp <span id="ringkasanHarga"></span></p>
                            <p>Jumlah Tagihan : Rp <span id="ringkasanTagihan"></span></p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-success" onclick="pesanLagi(true)">Ya</button>
                            <button class="btn btn-danger" onclick="pesanLagi(false)">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function hitungTotal() {
                    const namaPemesan = document.getElementById('namaPemesan').value;
                    const durasiPemesanan = parseInt(document.getElementById('durasiPemesanan').value);
                    const jumlahPemesan = parseInt(document.getElementById('jumlahPemesan').value);
                    if (!namaPemesan || !durasiPemesanan || !jumlahPemesan) {
                        alert("Semua field harus diisi!");
                        return;
                    }

                    var simpan = document.getElementById("nextStep");
                    simpan.disabled = false;
                    const layanan = [];
                    let totalHarga = 0;

                    if (document.getElementById('penginapan').checked) {
                        layanan.push('Penginapan');
                        totalHarga += parseInt(document.getElementById('penginapan').value);
                    }
                    if (document.getElementById('transportasi').checked) {
                        layanan.push('Transportasi');
                        totalHarga += parseInt(document.getElementById('transportasi').value);
                    }
                    if (document.getElementById('makanan').checked) {
                        layanan.push('Makanan');
                        totalHarga += parseInt(document.getElementById('makanan').value);
                    }

                    const totalTagihan = totalHarga * durasiPemesanan * jumlahPemesan;
                    const hargaPaket = totalHarga;
                    console.log(totalTagihan);
                    console.log(totalHarga)

                    document.getElementById('jumlahTagihan').value = totalTagihan
                    document.getElementById('hargaPaket').value = totalHarga

                    

                }
                function nextChoice() {
                    const namaPemesan = document.getElementById('namaPemesan').value;
                    const durasiPemesanan = parseInt(document.getElementById('durasiPemesanan').value);
                    const jumlahPemesan = parseInt(document.getElementById('jumlahPemesan').value);
                    const tanggalPemesanan = document.getElementById('tanggalPemesanan').value;
                    const noHp = parseInt(document.getElementById('noHp').value);

                    if (!namaPemesan || !durasiPemesanan || !jumlahPemesan) {
                        alert("Semua field harus diisi!");
                        return;
                    }

                    const layanan = [];
                    let totalHarga = 0;

                    if (document.getElementById('penginapan').checked) {
                        layanan.push('Penginapan');
                        totalHarga += parseInt(document.getElementById('penginapan').value);
                    }
                    if (document.getElementById('transportasi').checked) {
                        layanan.push('Transportasi');
                        totalHarga += parseInt(document.getElementById('transportasi').value);
                    }
                    if (document.getElementById('makanan').checked) {
                        layanan.push('Makanan');
                        totalHarga += parseInt(document.getElementById('makanan').value);
                    }

                    const totalTagihan = totalHarga * durasiPemesanan * jumlahPemesan;

                    document.getElementById('ringkasanNama').innerText = namaPemesan;
                    document.getElementById('ringkasanPeserta').innerText = jumlahPemesan;
                    document.getElementById('ringkasanWaktu').innerText = durasiPemesanan;
                    document.getElementById('ringkasanLayanan').innerText = layanan.join(', ');
                    document.getElementById('ringkasanHarga').innerText = totalHarga.toLocaleString();
                    document.getElementById('ringkasanTagihan').innerText = totalTagihan.toLocaleString();

                    document.getElementById('ringkasan').style.display = 'block';
                    endpoint = "/wisata/add-transaksi?nama_peserta="+namaPemesan+"&nomor_hp="+namaPemesan+"&tgl_pesan="+tanggalPemesanan+"&durasi_pesan="+durasiPemesanan+"&jmlh_pesan="+jumlahPemesan+"&total_tagihan="+totalTagihan+"layanan="+layanan+"&noHp="+noHp

                    console.log(endpoint)
                    window.location.href =endpoint
                }

                function pesanLagi(isPesanLagi) {
                    if (isPesanLagi) {
                        document.getElementById('formPemesanan').reset();
                        document.getElementById('ringkasan').style.display = 'none';
                    } else {
                        alert("Terima kasih telah menggunakan layanan kami!");
                    }
                }

            </script>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata 1</h5>
                    <div class="video-container">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/goAsIC5eJMs?si=wU8Kj5_xLZ4WXkyX"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata 2</h5>
                    <div class="video-container">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/goAsIC5eJMs?si=wU8Kj5_xLZ4WXkyX"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>