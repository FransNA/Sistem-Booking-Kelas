<!-- Begin Page Content -->
<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 mt-5 text-center font-weight-bold">Tambah Mata Kuliah</h3>

    <div class="container col-lg-8 offset-lg-2">
        <form action="#" method="post">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="kode_matkul" placeholder="Masukkan Kode Mata Kuliah">
                <?= form_error('kode_matkul', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_matkul" placeholder="Masukkan Nama Mata Kuliah">
                <?= form_error('nama_matkul', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label>Dosen Pengajar</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="Masukkan Nama Dosen Pengajar Mata Kuliah">
                <?= form_error('nama_dosen', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="text" class="form-control" name="sks" placeholder="Masukkan SKS Mata Kuliah">
                <?= form_error('sks', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->