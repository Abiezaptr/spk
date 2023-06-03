<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="<?= base_url('assets') ?>/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="<?= base_url('assets') ?>/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header py-4 text-center bg-primary">
                            <a href="index.html">
                                <span><img src="<?= base_url('assets') ?>/images/logo.png" alt="logo" height="22"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <form action="<?= base_url(); ?>" method="post">

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email" value="<?= set_value('email'); ?>">
                                </div>

                                <div class="mb-3">
                                    <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <br>
                                <div class="d-grid mb-1">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="<?= base_url('assets') ?>/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url('assets') ?>/js/app.min.js"></script>

</body>

</html>