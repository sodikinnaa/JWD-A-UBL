<?php

namespace App\Models\Wisata;

use CodeIgniter\Model;

class TbTransaksi extends Model
{
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $returnType = 'array';
    protected $allowedFields = ['id_transaksi','nm_pemesan', 'tgl_pemesanan', 'jmlh_pesan', 'durasi_pemesanan', 'total_harga', 'tlp_pelanggan'];

    function getbyid($id)
    {
        $builder = $this->table($this->table);
        $builder->where('id_transaksi', $id);

        return $builder->findAll();
    }
}


