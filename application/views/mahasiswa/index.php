<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Daftar Mahasiswa</h3>

            <div class="row mt-1 mb-2">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data mahasiswa..." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary btn-sm float-right">Tambah Data Mahasiswa</a>
                </div>
            </div>
            <ul class="list-group">
                <?php if (empty($mahasiswa)) : ?>
                    <div class="mt-3">
                        <li class="list-group-item">
                            <div class="alert alert-danger" role="alert">
                                Ooops..! data mahasiswa tidak ditemukan.
                            </div>
                            <div class="text-center mt-2">
                                <a class="btn btn-primary btn-float" href="<?= base_url(); ?>mahasiswa">Reload</a>
                            </div>
                        </li>
                    </div>
                <?php endif; ?>
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"
                        class="btn btn-danger btn-sm float-right mr-2 tombol-hapus">hapus</a>&nbsp;
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>"
                        class="btn btn-success btn-sm float-right mr-2">ubah</a>&nbsp;
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>"
                        class="btn btn-primary btn-sm float-right mr-2">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>