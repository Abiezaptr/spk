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
                             <h4 class="header-title">Reset Password</h4>
                             <br>


                             <ul class="nav nav-tabs nav-bordered mb-3">
                             </ul> <!-- end nav-->
                             <div class="tab-content">
                                 <div class="tab-pane show active" id="custom-styles-preview">
                                     <div class="row">
                                         <div class="col-lg-5">
                                             <div class="card">
                                                 <div class="card-body">
                                                     <h4 class="header-title mb-3">Account Information</h4>

                                                     <h5><?= $pengguna['nama'] ?></h5>

                                                     <address class="mb-0 font-14 address-lg">
                                                         <i class="uil-envelope-minus"></i>&nbsp; <?= $pengguna['email'] ?><br>
                                                         <abbr title="Phone"> <i class="uil-info-circle"></i></abbr>&nbsp; <?= $pengguna['akses'] ?>
                                                     </address>

                                                 </div>
                                             </div>
                                         </div> <!-- end col -->

                                         <div class="col-lg-7">
                                             <form class="needs-validation" action="" method="post">

                                                 <div class="mb-3">
                                                     <label class="form-label" for="validationCustomUsername">New password</label>
                                                     <div class="input-group">
                                                         <span class="input-group-text" id="inputGroupPrepend"><i class="uil-lock"></i></span>
                                                         <input type="text" name="idadmin" value="<?= $pengguna['id_admin'] ?>" hidden>
                                                         <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="Password baru">
                                                     </div>
                                                 </div>

                                                 <div class="mb-3">
                                                     <label class="form-label" for="validationCustomUsername">Confirm password</label>
                                                     <div class="input-group">
                                                         <span class="input-group-text" id="inputGroupPrepend"><i class="uil-lock"></i></span>
                                                         <input id="confirmpassword" name="confirmpassword" type="password" class="form-control" placeholder="Konfirmasi password">
                                                         <?= form_error('newpassword', '<small class="text-danger">', '</small>'); ?>
                                                     </div>
                                                 </div>

                                                 <button class="btn btn-primary" type="submit">Submit form</button>
                                             </form>
                                         </div>
                                     </div>
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