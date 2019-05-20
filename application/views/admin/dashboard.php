<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Data Kelas</h3>

    <table class="table table-bordered bg-white mb-5">
        <thead>
            <tr>
                <th scope="col" class="bg-primary text-light">No.</th>
                <th scope="col" class="bg-primary text-light">Nama Kelas</th>
                <th scope="col" class="bg-primary text-light">Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data_kelas as $kelas) { ?>
                <tr>
                    <th scope="row" class="text-gray-800"><?= $i; ?></th>
                    <td class="text-gray-800"><?= $kelas->nama_ruangan; ?></td>
                    <td class="text-gray-800"><?= $kelas->kapasitas; ?></td>
                </tr>
                <?php $i++;
            } ?>
        </tbody>
    </table>

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Mata Kuliah</h3>

    <table class="table table-bordered bg-white mb-5">
        <thead>
            <tr>
                <th scope="col" class="bg-primary text-light">No.</th>
                <th scope="col" class="bg-primary text-light">Kode Matkul</th>
                <th scope="col" class="bg-primary text-light">Nama Matkul</th>
                <th scope="col" class="bg-primary text-light">Nama Dosen Pengajar</th>
                <th scope="col" class="bg-primary text-light">SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data_matkul as $matkul) { ?>
                <tr>
                    <th scope="row" class="text-gray-800"><?= $i; ?></th>
                    <td class="text-gray-800"><?= $matkul->kode_matkul; ?></td>
                    <td class="text-gray-800"><?= $matkul->nama_matkul; ?></td>
                    <td class="text-gray-800"><?= $matkul->nama_dosen; ?></td>
                    <td class="text-gray-800"><?= $matkul->sks; ?></td>
                </tr>
                <?php $i++;
            } ?>
        </tbody>
    </table>

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Jadwal Kuliah</h3>

    <table class="table table-bordered bg-white mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <div class=" row mb-5">
        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 badge badge-success">Kosong</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->