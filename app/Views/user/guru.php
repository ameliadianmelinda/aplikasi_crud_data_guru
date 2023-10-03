<?php $this->extend('layouts/user'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="card bg-glass" data-aos="flip-down">
            <div class="card-body px-4 py-5 px-md-5">
                <form method="post" action="/guru/save">
                    <?= csrf_field(); ?>

                    <div>
                        <?php if ($pesan) { ?>
                            <p style="color:green"><?php echo $pesan ?></p>
                        <?php } ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="nama_guru">Nama Guru :</label>
                        <input type="text" name="nama_guru" id="nama_guru" class="form-control" placeholder="Nama Guru" value="<?= old('nama_guru'); ?>" required />
                        <?= $validation->getError('nama_guru'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="jabatan">Jabatan :</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan Guru" value="<?= old('jabatan'); ?>" required />
                        <?= $validation->getError('jabatan'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="tempat_lahir">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir Guru" value="<?= old('tempat_lahir'); ?>" required />
                        <?= $validation->getError('tempat_lahir'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="tanggal_lahir">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir Guru" value="<?= old('tanggal_lahir'); ?>" required />
                        <?= $validation->getError('tanggal_lahir'); ?>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin :</label>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Laki-laki" id="jenis_kelamin">Laki-laki</option>
                            <option value="Perempuan" id="jenis_kelamin">Perempuan</option>
                        </select>
                        <?= $validation->getError('jenis_kelamin'); ?>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block btn-lg mb-4">
                        Tambah Data
                    </button>
                </form>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<?php $this->endSection(); ?>