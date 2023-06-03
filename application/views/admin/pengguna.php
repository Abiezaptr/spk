    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <br><br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">User List
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
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Akses</th>
                                                    <th style="width: 10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($pengguna as $p) {
                                                ?>
                                                    <tr>
                                                        <form action="<?= base_url('admin/ubah/' . $p['id_admin']) ?>" method="post">
                                                            <td><?= $no ?></td>
                                                            <td><?= $p['nama'] ?></td>
                                                            <td><?= $p['email'] ?></td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <select class="form-control" id="exampleFormControlSelect1" name="akses">
                                                                        <?php
                                                                        foreach ($akses as $a) {
                                                                            if ($p['akses'] != $a) {
                                                                        ?>
                                                                                <option value="<?= $a ?>"><?= $a ?></option>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <option value="<?= $a ?>" selected><?= $a ?></option>
                                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-button-action">
                                                                    <button type="submit" class="btn btn-sm btn-success mb-1">
                                                                        <i class="uil-edit"></i>
                                                                    </button>
                                                                    <a href="<?= base_url('admin/reset/' . $p['id_admin']) ?>" class="btn btn-sm btn-primary mb-1">
                                                                        <i class="uil-unlock"></i>
                                                                    </a>
                                                                    <a href="<?= base_url('admin/hapus/' . $p['id_admin']) ?>" class="btn btn-sm btn-danger mb-1" onclick="return confirmDelete(event, '<?php echo $p['id_admin'] ?>')">
                                                                        <i class="uil-trash"></i>
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

    <!-- add -->

    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create New User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nama User</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama user">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email address">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Konfirmasi Password</label>
                                    <input type="password" name="confirmpassword" class="form-control" placeholder="Konfirmasi password">
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
        function confirmDelete(event, id_admin) {
            event.preventDefault(); // Mencegah tautan terbuka secara langsung

            swal({
                title: "Konfirmasi",
                text: "Apakah Anda yakin ingin menghapus data?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
                closeOnConfirm: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?php echo base_url('admin/hapus/') ?>" + id_admin,
                        type: "POST",
                        success: function(response) {
                            if (response.status === 'success') {
                                swal({
                                    title: "Sukses",
                                    text: "Data berhasil dihapus.",
                                    type: "success"
                                }, function() {
                                    location.reload(); // Reload halaman setelah menghapus
                                });
                            } else {
                                swal("Error", "Terjadi kesalahan saat menghapus data.", "error");
                            }
                        },
                        error: function() {
                            swal("Error", "Terjadi kesalahan saat menghapus data.", "error");
                        }
                    });
                }
            });

            return false; // Mencegah tautan terbuka secara langsung
        }
    </script>