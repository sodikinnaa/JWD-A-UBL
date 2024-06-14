<?php

namespace App\Controllers\Wisata;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Wisata\TbTransaksi;

class PaketWisata extends BaseController
{

    function __construct()
    {
        $this->m_transaksi = new TbTransaksi();
    }
    public function index()
    {
        //
        $data = ['data_pesanan' => $this->m_transaksi->findAll()];
        return view('admin/v_pesanan_wisata', $data);
    }

    function addDataTransaksi()
    {
        // ternary operator
        $nm_pemesan = isset($_GET['nama_peserta']) ? $_GET['nama_peserta'] : '';
        $tlp_pelanggan = isset($_GET['nomor_hp']) ? $_GET['nomor_hp'] : '';
        $tgl_pemesanan = isset($_GET['tgl_pesan']) ? $_GET['tgl_pesan'] : '';
        $durasi_pemesanan = isset($_GET['durasi_pesan']) ? $_GET['durasi_pesan'] : '';
        $jmlh_pesan = isset($_GET['jmlh_pesan']) ? $_GET['jmlh_pesan'] : '';
        $total_harga = isset($_GET['total_tagihan']) ? $_GET['total_tagihan'] : '';

        $data = [
            'nm_pemesan' => $nm_pemesan,
            'tlp_pelanggan' => $tlp_pelanggan,
            'tgl_pemesanan' => $tgl_pemesanan,
            'durasi_pemesanan' => $durasi_pemesanan,
            'jmlh_pesan' => $jmlh_pesan,
            'total_harga' => $total_harga
        ];

        $save = $this->m_transaksi->insert($data);
        if ($save) {
            header("Location: /wisata/daftar-pesanan");
            exit;
        }

    }

    function showEditTrnasaksi()
    {
        $id_transaksi = isset($_GET['idTransansi']) ? $_GET['idTransansi'] : '';
        $nm_pemesan = isset($_GET['namaPemesan']) ? $_GET['namaPemesan'] : '';
        $tlp_pelanggan = isset($_GET['noHp']) ? $_GET['noHp'] : '';
        $tgl_pemesanan = isset($_GET['tanggalPemesanan']) ? $_GET['tanggalPemesanan'] : '';
        $durasi_pemesanan = isset($_GET['durasiPemesanan']) ? $_GET['durasiPemesanan'] : '';
        $jmlh_pesan = isset($_GET['jumlahPemesan']) ? $_GET['jumlahPemesan'] : '';
        $total_harga = isset($_GET['total_harga']) ? $_GET['total_harga'] : '';

        $data = [
            'data_transaksi' => [
                'id_transaksi'=>$id_transaksi,
                'nm_pemesan' => $nm_pemesan,
                'tgl_pemesanan' => $tgl_pemesanan,
                'jmlh_pesan' => $jmlh_pesan,
                'durasi_pemesanan' => $durasi_pemesanan,
                'total_harga' => $total_harga,
                'tlp_pelanggan' => $tlp_pelanggan
            ]
        ];
        return
            view('depan/templates/v_header', $data)
            . view('depan/v_edit_data')
            . view('depan/templates/v_footer');
    }


    function updateDataTransaksi()
    {
        $id_transaksi = isset($_GET['idTransansi']) ? $_GET['idTransansi'] : '';
        $nm_pemesan = isset($_GET['namaPemesan']) ? $_GET['namaPemesan'] : '';
        $tlp_pelanggan = isset($_GET['noHp']) ? $_GET['noHp'] : '';
        $tgl_pemesanan = isset($_GET['tanggalPemesanan']) ? $_GET['tanggalPemesanan'] : '';
        $durasi_pemesanan = isset($_GET['durasiPemesanan']) ? $_GET['durasiPemesanan'] : '';
        $jmlh_pesan = isset($_GET['jumlahPemesan']) ? $_GET['jumlahPemesan'] : '';
        $total_harga = isset($_GET['total_harga']) ? $_GET['total_harga'] : '';

        $data = [
            'nm_pemesan' => $nm_pemesan,
            'tgl_pemesanan' => $tgl_pemesanan,
            'jmlh_pesan' => $jmlh_pesan,
            'durasi_pemesanan' => $durasi_pemesanan,
            'total_harga' => $total_harga,
            'tlp_pelanggan' => $tlp_pelanggan
        ];

        $update = $this->m_transaksi->update($id_transaksi, $data);

        if ($update) {
            header("Location: /wisata/daftar-pesanan");
            exit;
        } else {
            alert('gatal');
        }
        dd($total_harga);
        echo "hallo";
    }

    function hapusDataTransaksi($param)
    {
        $delete = $this->m_transaksi->delete($param);
        if ($delete) {
            header("Location: /wisata/daftar-pesanan");
            exit;
        }

    }
}
