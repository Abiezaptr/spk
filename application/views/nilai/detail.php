    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <br><br>

                <div class="row">
                    <?php if ($this->session->flashdata('belum')) { ?>
                    <?php } else { ?>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="<?= base_url('nilai/print/') . $guru['0']['id_karyawan'] ?>" class="btn btn-sm btn-danger">
                                            <i class="uil uil-print"></i>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-success-lighten text-success rounded">
                                                    <i class="mdi mdi-account-network font-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <a href="javascript:void(0);" class="font-16 fw-bold text-secondary"><?= $guru['0']['nama_karyawan'] ?> <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                            <p class="text-muted mb-0"><?= $guru['0']['jabatan'] ?></p>
                                        </div>
                                    </div>

                                    <span class="badge badge-lg bg-primary text-white rounded-pill me-1"><?= $kinerja['nama_alternatif'] ?></span>
                                    <span class="font-12 fw-semibold text-muted"><i class="uil-file-check-alt me-1"></i>It has been rated in the current period</span>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    <?php } ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <?php
                                                    foreach ($kriteria as $k) {
                                                    ?>
                                                        <th><?= $k['nama_kriteria'] ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <tr>
                                                    <?php
                                                    foreach ($nilai_karyawan as $n) {
                                                    ?>
                                                        <td><?= $n['nilai_karyawan'] ?></td>
                                                    <?php }  ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Rating Kinerja</h4>
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th style="width: 10%">Alternatif</th>
                                                    <?php
                                                    foreach ($kriteria as $k) {
                                                    ?>
                                                        <th><?= $k['nama_kriteria'] ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $index = 0;
                                                foreach ($alternatif as $a) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $a['nama_alternatif'] ?></td>
                                                        <?php
                                                        foreach ($kriteria as $k) {
                                                            if ($nilai == null) {
                                                        ?>
                                                                <td>0</td>
                                                            <?php } else { ?>
                                                                <td><?= $nilai[$index]['nilai'] ?></td>
                                                            <?php } ?>
                                                        <?php
                                                            $index = $index + 1;
                                                        }
                                                        ?>
                                                    </tr>
                                                <?php
                                                    $no = $no + 1;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Nilai Normalisasi</h4>
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active table-responsive" id="basic-datatable-preview">
                                        <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th style="width: 10%">Nama</th>
                                                    <?php
                                                    foreach ($kriteria as $k) {
                                                    ?>
                                                        <th><?= $k['nama_kriteria'] ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $index = 0;
                                                foreach ($alternatif as $a) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $a['nama_alternatif'] ?></td>
                                                        <?php
                                                        foreach ($kriteria as $k) {
                                                            if ($nilai == null) {
                                                        ?>
                                                                <td>0</td>
                                                            <?php } else { ?>
                                                                <td><?= $nilai[$index]['normalisasi'] ?></td>
                                                            <?php } ?>
                                                        <?php
                                                            $index = $index + 1;
                                                        }
                                                        ?>
                                                    </tr>
                                                <?php
                                                    $no = $no + 1;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Nilai Terbobot</h4>
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active table-responsive" id="basic-datatable-preview">
                                        <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th style="width: 10%">Nama</th>
                                                    <?php
                                                    foreach ($kriteria as $k) {
                                                    ?>
                                                        <th><?= $k['nama_kriteria'] ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $index = 0;
                                                foreach ($alternatif as $a) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $a['nama_alternatif'] ?></td>
                                                        <?php
                                                        foreach ($kriteria as $k) {
                                                            if ($nilai == null) {
                                                        ?>
                                                                <td>0</td>
                                                            <?php } else { ?>
                                                                <td><?= $nilai[$index]['terbobot'] ?></td>
                                                            <?php } ?>
                                                        <?php
                                                            $index = $index + 1;
                                                        }
                                                        ?>
                                                    </tr>
                                                <?php
                                                    $no = $no + 1;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Nilai A+</h4>
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active table-responsive" id="basic-datatable-preview">
                                        <table id="example5" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <?php
                                                    foreach ($kriteria as $k) {
                                                    ?>
                                                        <th><?= $k['nama_kriteria'] ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <tr>
                                                    <?php
                                                    foreach ($A_plus as $a) {
                                                    ?>
                                                        <td><?= $a['nilai_a'] ?></td>
                                                    <?php }  ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Nilai A-</h4>
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active table-responsive" id="basic-datatable-preview">
                                        <table id="example6" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <?php
                                                    foreach ($kriteria as $k) {
                                                    ?>
                                                        <th><?= $k['nama_kriteria'] ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <tr>
                                                    <?php
                                                    foreach ($A_min as $a) {
                                                    ?>
                                                        <td><?= $a['nilai_a'] ?></td>
                                                    <?php }  ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Hasil Keseluruhan</h4>
                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active table-responsive" id="basic-datatable-preview">
                                        <table id="example7" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th style="width: 10%">Nama</th>
                                                    <th>Jarak Solisi Ideal Positif (D+)</th>
                                                    <th>Jarak Solisi Ideal Negatif (D-)</th>
                                                    <th>Nilai Preferensi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $index = 0;
                                                foreach ($alternatif as $a) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $a['nama_alternatif'] ?></td>
                                                        <td><?= $hasil[$index][0] ?></td>
                                                        <td><?= $hasil[$index][1] ?></td>
                                                        <td><?= $hasil[$index][2] ?></td>
                                                        <?php
                                                        $index = $index + 1;
                                                        ?>
                                                    </tr>
                                                <?php
                                                    $no = $no + 1;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->


                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->

        </div> <!-- content -->

    </div>