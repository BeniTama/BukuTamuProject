<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Utama Buku Tamu</h1>
        </div>

        <div class="section-body">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahTamu">
                <i class="fas fa-plus"></i>
                Tambah Data
            </button>
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat</th>
                                    <th>No. Telp</th>
                                    <th>Keperluan dgn.</th>
                                    <th>Foto</th>
                                </tr>
                                <?php foreach ($tamu as $t) : ?>
                                    <tr>
                                        <td><?= $t->id; ?></td>
                                        <td><?= $t->nik; ?></td>
                                        <td><?= $t->nama; ?></td>
                                        <td><?= $t->pekerjaan; ?></td>
                                        <td><?= $t->alamat; ?></td>
                                        <td><?= $t->no_telp; ?></td>
                                        <td><?= $t->keperluan; ?></td>
                                        <td><?= $t->foto; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahTamu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() . 'DataTamu/tambahData' ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Masukkan NIK</label>
                        <input type="text" name="nik" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>