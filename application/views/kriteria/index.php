    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <br><br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Criteria List</h4>
                                <br>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Bobot</th>
                                                    <th>Keterangan</th>
                                                    <th style="width: 10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($kriteria as $k) {
                                                ?>
                                                    <tr>

                                                        <td><?= $no ?></td>
                                                        <td><?= $k['nama_kriteria'] ?></td>
                                                        <td><?= $k['jenis'] ?></td>
                                                        <td><?= $k['bobot'] ?></td>
                                                        <td><?= $k['keterangan'] ?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="<?= base_url('kriteria/ubah/') . $k['id_kriteria'] ?>" class="btn btn-sm btn-success">
                                                                    <i class="uil-edit"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        </form>
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