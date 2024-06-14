<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Dashboard Admin Wisata</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Wisata
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Pesanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Paket</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="TbPemesanan" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id Transaksi</th>
                                                <th>Nama </th>
                                                <th>No Hp/Telp</th>
                                                <th>Tanggal Pesanan</th>
                                                <th>Jumlah Hari</th>
                                                <th>Total Harga</th>
                                                <th>Durasi Pesanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_pesanan as $list) { ?>
                                                <tr>
                                                    <td><?= $list['id_transaksi'] ?></td>
                                                    <td><?= $list['nm_pemesan'] ?></td>
                                                    <td><?= $list['tlp_pelanggan'] ?></td>
                                                    <td> <?= $list['tgl_pemesanan'] ?></td>
                                                    <td><?= $list['jmlh_pesan'] ?></td>
                                                    <td><?= $list['total_harga'] ?></td>
                                                    <td><?= $list['durasi_pemesanan'] ?></td>
                                                    <td>
                                                        <a href="/wisata/update-data/?idTransansi=<?= $list['id_transaksi'] ?>&namaPemesan=<?= $list['nm_pemesan'] ?>&noHp=<?= $list['tlp_pelanggan'] ?>&jmlh_pesan=<?= $list['jmlh_pesan'] ?>&tanggalPemesanan=<?= $list['tgl_pemesanan'] ?>&durasiPemesanan=<?= $list['durasi_pemesanan'] ?>&total_harga=<?= $list['total_harga'] ?>"><button class="btn btn-primary" data-toggle="modal"
                                                            >Edit</button></a>
                                                        <!-- <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#editModal">Edit</button> -->
                                                        <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#hapusModal">Hapus</button>
                                                        <button class="btn btn-success" data-toggle="modal"
                                                            data-target="#detailmodal">Detail</button>
                                                    </td>
                                                </tr>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit Data
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Isi form edit di sini -->
                                                                <form method="GET" action="/wisata/update-data">

                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="idTransansi">id Transaksi</label>
                                                                            <input type="text" class="form-control"
                                                                                id="idTransansi" name="idTransansi"
                                                                                value="<?= $list['id_transaksi'] ?>">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="namaPemesan">Nama
                                                                                Pemesan</label>
                                                                            <input type="text" class="form-control" name="namaPemesan"
                                                                                id="namaPemesan"
                                                                                value="<?= $list['nm_pemesan'] ?>">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                            <label for="noHp">No HP / Telp</label>
                                                                            <input type="text" class="form-control"
                                                                                id="noHp" name="noHp"
                                                                                value="<?= $list['tlp_pelanggan'] ?>">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="jmlh_pesan">Jumlah
                                                                                Pemesan</label>
                                                                            <input type="number" class="form-control"
                                                                                id="jmlh_pesan" name="jmlh_pesan"
                                                                                value="<?= $list['jmlh_pesan'] ?>">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="tanggalPemesanan">Tanggal
                                                                                Pemesanan</label>
                                                                            <input type="date" class="form-control"
                                                                                id="tanggalPemesanan" name="tanggalPemesanan"
                                                                                value="<?= $list['tgl_pemesanan'] ?>">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="durasiPemesanan">Durasi
                                                                                Pemesanan (hari)</label>
                                                                            <input type="number" class="form-control"
                                                                                id="durasiPemesanan" name="durasiPemesanan"
                                                                                value="<?= $list['durasi_pemesanan'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="total_harga">Total</label>
                                                                            <input type="number" class="form-control"
                                                                                id="total_harga" name="total_harga"
                                                                                value="<?= $list['total_harga'] ?>">
                                                                        </div>
                                                                        
                                                                        <!-- output hasil -->
                                                                    </div>

                                                                    <!-- Tambah field-field edit lainnya sesuai kebutuhan -->
                                                                    <button type="submit" class="btn btn-primary">Simpan
                                                                        Perubahan</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- modal detail -->
                                                <div class="modal fade" id="detailmodal" tabindex="-1" role="dialog"
                                                    aria-labelledby="hapusModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mt-5" id="ringkasan" style="display: block;">
                                                                    <div class="card">
                                                                        <div
                                                                            class="card-header text-center bg-warning text-dark">
                                                                            Rangkuman Reservasi Paket Wisata
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p>Nama : <span id="ringkasanNama"><?= $list['nm_pemesan'] ?></span></p>
                                                                            <p>Jumlah Peserta : <span
                                                                                    id="ringkasanPeserta"><?= $list['jmlh_pesan'] ?></span></p>
                                                                            <p>Waktu Perjalanan : <span
                                                                                    id="ringkasanWaktu"><?= $list['durasi_pemesanan'] ?></span> hari</p>
                                                                            <p>Layanan Paket : <span
                                                                                    id="ringkasanLayanan">...</span>
                                                                            </p>
                                                                            <p>Harga Paket : Rp <span
                                                                                    id="ringkasanHarga">..</span></p>
                                                                            <p>Jumlah Tagihan : Rp <span
                                                                                    id="ringkasanTagihan"><?= $list['total_harga'] ?></span>
                                                                            </p>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Hapus -->
                                                <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="hapusModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapusModalLabel">Hapus Data
                                                                    Pengguna
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Apakah Anda yakin ingin menghapus data pengguna ini?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Batal</button>
                                                                <a href="/wisata/hapus/<?= $list['id_transaksi'] ?>"><button
                                                                        type="button"
                                                                        class="btn btn-danger">Hapus</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>No</th>
                                                <th>Nama </th>
                                                <th>No Hp/Telp</th>
                                                <th>Tanggal Pesanan</th>
                                                <th>Jumlah Hari</th>
                                                <th>Jumalh Peserta</th>
                                                <th>Jumalh Peserta</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <!-- modal -->

                                    <!-- end modal -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#TbPemesanan").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#TbPemesanan_wrapper .col-md-6:eq(0)');

        });
    </script>
</body>

</html>