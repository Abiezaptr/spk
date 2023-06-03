 <div class="content-page">
     <div class="content">

         <!-- Start Content-->
         <div class="container-fluid">

             <br>
             <br>

             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="header-title">Update Criteria</h4>
                             <br>


                             <ul class="nav nav-tabs nav-bordered mb-3">
                             </ul> <!-- end nav-->
                             <div class="tab-content">
                                 <div class="tab-pane show active" id="custom-styles-preview">
                                     <form method="post" action="">
                                         <div class="card-body col-md-12">
                                             <div class="row">
                                                 <div class="row">
                                                     <div class="col mt-2 mb-3">
                                                         <p>Nama Kriteria</p>
                                                         <input type="text" name="idadmin" value="<?= $kriteria['id_kriteria'] ?>" hidden>
                                                         <input id="kriteria" name="kriteria" type="text" class="form-control" value="<?= $kriteria['nama_kriteria'] ?>">
                                                         <?= form_error('kriteria', '<small class="text-danger">', '</small>'); ?>
                                                     </div>
                                                     <div class="col mt-2 mb-3">
                                                         <p>Jenis</p>
                                                         <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                                                             <?php
                                                                foreach ($jenis as $j) {
                                                                    if ($kriteria['jenis'] != $j) {
                                                                ?>
                                                                     <option value="<?= $j ?>"><?= $j ?></option>
                                                                 <?php
                                                                    } else {
                                                                    ?>
                                                                     <option value="<?= $j ?>" selected><?= $j ?></option>
                                                             <?php
                                                                    }
                                                                }
                                                                ?>
                                                         </select>
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col mt-2 mb-3">
                                                         <p>Bobot</p>
                                                         <select class="form-control" id="exampleFormControlSelect1" name="bobot">
                                                             <?php
                                                                foreach ($bobot as $b) {
                                                                    if ($kriteria['bobot'] != $b) {
                                                                ?>
                                                                     <option value="<?= $b ?>"><?= $b ?></option>
                                                                 <?php
                                                                    } else {
                                                                    ?>
                                                                     <option value="<?= $b ?>" selected><?= $b ?></option>
                                                             <?php
                                                                    }
                                                                }
                                                                ?>
                                                         </select>
                                                     </div>
                                                     <div class="col mt-2 mb-3">
                                                         <p>Nama Kriteria</p>
                                                         <textarea id="kriteria" name="keterangan" type="text" class="form-control" rows="3"><?= $kriteria['keterangan'] ?></textarea>
                                                         <?= form_error('kriteria', '<small class="text-danger">', '</small>'); ?>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card-action">
                                                 <button type="submit" class="btn btn-primary mt-2" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                                                 <a href=" <?= base_url('kriteria') ?>" class="btn btn-danger mt-2">Batal</a>
                                             </div>
                                         </div>
                                     </form>
                                 </div> <!-- end preview-->
                             </div> <!-- end tab-content-->

                         </div> <!-- end card-body-->
                     </div> <!-- end card-->
                 </div> <!-- end col-->
             </div>
             <!-- end row -->

         </div> <!-- container -->

     </div> <!-- content -->

 </div>