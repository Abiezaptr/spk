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
                             <h4 class="header-title">Update Period</h4>
                             <br>


                             <ul class="nav nav-tabs nav-bordered mb-3">
                             </ul> <!-- end nav-->
                             <div class="tab-content">
                                 <div class="tab-pane show active" id="custom-styles-preview">
                                     <form method="post" action="">
                                         <div class="card-body col-md-6">
                                             <div class="row">
                                                 <div class="col mt-0 mb-3">
                                                     <p><b>Waktu Periode</b></p>
                                                     <input type="text" name="idadmin" value="<?= $periode['id_periode'] ?>" hidden>
                                                     <input id="waktu" name="waktu" type="text" class="form-control" value="<?= $periode['waktu'] ?>">
                                                     <?= form_error('waktu', '<small class="text-danger">', '</small>'); ?>
                                                 </div>
                                             </div>
                                             <div class="card-action">
                                                 <button type="submit" class="btn btn-primary mt-2" name="reset" onclick="return confirm('Are you sure want to update period?')">Reset</button>
                                                 <a href=" <?= base_url('periode/index') ?>" class="btn btn-danger mt-2">Batal</a>
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