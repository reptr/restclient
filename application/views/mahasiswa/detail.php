<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <p class="card-title"><?= $mahasiswa['nama']; ?></p>
                    <p class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></p>
                    <p class="card-text"><?= $mahasiswa['nrp']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>