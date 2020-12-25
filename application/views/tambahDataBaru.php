<div class="main-content" style="min-height: 614px;">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Tamu</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Masukkan Data Baru</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('DataTamu/tambahDataBaru_action'); ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" value="<?= $nik; ?>" disabled>
                                    <input type="hidden" name="nik" class="form-control" value="<?= $nik; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="4" cols="50"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input name="no_telp" type="text" class="form-control phone-number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Keperluan Dengan</label>
                                    <select name="keperluan" class="form-control">
                                        <option>---Pilih Nama Pegawai---</option>
                                        <?php foreach ($pegawai as $p) : ?>
                                            <option value="<?= $p->nama; ?>"><?= $p->nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>