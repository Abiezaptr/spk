    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <br><br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Appraisal Process</h4>
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
                                                    <th>NIP</th>
                                                    <th style="width: 10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($guru as $g) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $g['nama_karyawan'] ?></td>
                                                        <td><?= $g['nip'] ?></td>
                                                        <td>
                                                            <div class="card-header-elements ms-auto">
                                                                <div class="btn-group">
                                                                    <a href="<?= base_url('nilai/hitung/') . $g['id_karyawan'] ?>" class="btn btn-success"><i class="uil-search"></i></a>
                                                                </div>
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