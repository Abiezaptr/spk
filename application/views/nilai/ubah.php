 <div class="content-page">
     <div class="content">

         <!-- Start Content-->
         <div class="container-fluid">

             <br>
             <br>

             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-body">
                             <div class="dropdown float-end">
                                 <!-- <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                     <i class="mdi mdi-dots-vertical"></i>
                                 </a> -->
                                 <!-- <div class="dropdown-menu dropdown-menu-end">
                                     <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> Edit</a>
                                    
                                     <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> Remove</a>
                                 </div> -->
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

                             <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">Assesment Proccess</span>
                             <span class="font-12 fw-semibold text-muted"><i class="uil-list-ul me-1"></i>14 Aspects of Assessment</span>

                         </div>
                     </div>
                 </div> <!-- end col -->
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="header-title text-muted">Start Calculation</h4>
                             <br>


                             <ul class="nav nav-tabs nav-bordered mb-3">
                             </ul> <!-- end nav-->
                             <div class="tab-content">
                                 <div class="tab-pane show active" id="custom-styles-preview">
                                     <form method="POST" action="<?= base_url('nilai/simpan/') . $guru['0']['id_karyawan'] ?>">
                                         <div class="row g-2">
                                             <div class="row g-2">
                                                 <input type="text" name="idadmin" value="<?= $periode['id_periode'] ?>" hidden>
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['0']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C1" value="<?= $n ?>" <?php if ($guru['0']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['1']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C2" value="<?= $n ?>" <?php if ($guru['1']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['2']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C3" value="<?= $n ?>" <?php if ($guru['2']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['3']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C4" value="<?= $n ?>" <?php if ($guru['3']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['4']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C5" value="<?= $n ?>" <?php if ($guru['4']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div><!-- 
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['5']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C6" value="<?= $n ?>" <?php if ($guru['5']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['6']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C7" value="<?= $n ?>" <?php if ($guru['6']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['7']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C8" value="<?= $n ?>" <?php if ($guru['7']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['8']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C9" value="<?= $n ?>" <?php if ($guru['8']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['9']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C10" value="<?= $n ?>" <?php if ($guru['9']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['10']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C11" value="<?= $n ?>" <?php if ($guru['10']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['11']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C12" value="<?= $n ?>" <?php if ($guru['11']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['12']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C13" value="<?= $n ?>" <?php if ($guru['12']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div>
                                             <div class="row g-2">
                                                 <div class="col mb-12">
                                                     <label for="dobBasic" class="form-label"><?= $kriteria['13']['keterangan'] ?></label><br>
                                                     <?php
                                                        foreach ($nilai as $n) {
                                                        ?>
                                                         <label class="form-radio-label">
                                                             <input class="form-radio-input" type="radio" name="C14" value="<?= $n ?>" <?php if ($guru['13']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                                             <span class="form-radio-sign"><?= $n ?></span>
                                                         </label>
                                                     <?php } ?>
                                                 </div>
                                             </div> -->
                                         </div>
                                         <div class="col mt-4">
                                             <button type="submit" class="btn btn-primary mr-3">Ubah Data</button>
                                             <a href="<?= base_url('admin') ?>" class="btn btn-danger">Kembali</a>
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