    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <br><br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Employment List
                                    <?php if ($admin['akses'] == "Administrator") { ?>
                                        <button style="float: right;" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"><i class="uil-plus"></i></button>
                                    <?php } ?>
                                </h4>
                                <br>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>NIP</th>
                                                    <th>Jabatan</th>
                                                    <th>Penempatan Kerja</th>
                                                    <th>Penilai</th>
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
                                                        <td><?= $g['jabatan'] ?></td>
                                                        <td><?= $g['lokasi'] ?></td>
                                                        <td><?= $g['nama'] ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <span class="caret"></span> </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="<?= base_url('karyawan/ubah/') . $g['id_karyawan'] ?>">Update</a>
                                                                    <a class="dropdown-item" href="<?= base_url('karyawan/hapus/') . $g['id_karyawan'] ?>" onclick="return confirmDelete('<?php echo $g['id_karyawan'] ?>')">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
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

    <!-- add -->

    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create New Employment</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Karyawan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">NIP</label>
                                    <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pekerja">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <select class="form-control" name="jabatan">
                                        <?php
                                        foreach ($jabatan as $p) {
                                        ?>
                                            <option value="<?= $p ?>"><?= $p ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-control" name="pendidikan">
                                        <?php
                                        foreach ($pendidikan as $p) {
                                        ?>
                                            <option value="<?= $p ?>"><?= $p ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Penempatan Kerja</label>
                                    <select class="form-control" name="lokasi">
                                        <?php
                                        foreach ($penempatan as $p) {
                                        ?>
                                            <option value="<?= $p ?>"><?= $p ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Assesor / Penilai</label>
                                    <select class="form-control" name="penilai">
                                        <?php
                                        foreach ($penilai as $p) {
                                        ?>
                                            <option value="<?= $p['id_admin'] ?>"><?= $p['nama'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <!-- update -->
    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create New Employment</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Karyawan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">NIP</label>
                                    <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pekerja">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <select class="form-control" name="jabatan">
                                        <?php
                                        foreach ($jabatan as $p) {
                                        ?>
                                            <option value="<?= $p ?>"><?= $p ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-control" name="pendidikan">
                                        <?php
                                        foreach ($pendidikan as $p) {
                                        ?>
                                            <option value="<?= $p ?>"><?= $p ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Penempatan Kerja</label>
                                    <select class="form-control" name="lokasi">
                                        <?php
                                        foreach ($penempatan as $p) {
                                        ?>
                                            <option value="<?= $p ?>"><?= $p ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Assesor / Penilai</label>
                                    <select class="form-control" name="penilai">
                                        <?php
                                        foreach ($penilai as $p) {
                                        ?>
                                            <option value="<?= $p['id_admin'] ?>"><?= $p['nama'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <script>
        function confirmDelete(orderId) {
            swal({
                title: "Konfirmasi",
                text: "Apakah Anda yakin ingin menghapus data?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
                closeOnConfirm: false
            }, function() {
                $.ajax({
                    url: "<?php echo base_url('karyawan/hapus/') ?>" + orderId,
                    type: "POST",
                    success: function() {
                        swal({
                            title: "Sukses",
                            text: "Data berhasil dihapus.",
                            type: "success"
                        }, function() {
                            location.reload(); // Reload halaman setelah menghapus
                        });
                    },
                    error: function() {
                        swal({
                            title: "Sukses",
                            text: "Data berhasil dihapus.",
                            type: "success"
                        }, function() {
                            location.reload(); // Reload halaman setelah menghapus
                        });
                    }
                });
            });

            return false; // Mencegah tautan terbuka secara langsung
        }
    </script>