<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php $this->load->view("admin/__partials/head.php") ?>
</head>

<body  id="page-top">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        
        <?php $this->load->view("admin/__partials/navbar.php") ?>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
                <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

            <?php $this->load->view("admin/__partials/sidebar.php") ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/dashboard') ?>"><i data-feather="arrow-left" class="feather-icon"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $this->session->userdata('id'); ?>" />

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                type="text" name="nama" placeholder="Nama" value="<?php $this->session->userdata('nama'); ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid': '' ?>"
                                type="email" name="email" placeholder="Email" value="<?php $this->session->userdata('email'); ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid': '' ?>"
                                type="password" name="password" placeholder="Password" value="<?php $this->session->userdata('password'); ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control <?php if (isset($error_password)) echo form_error('repassword') ? 'is-invalid': '' ?>"
                                type="password" name="repassword" placeholder="Verify Password" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('repassword') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
                <?php $this->load->view("admin/__partials/footer.php") ?>

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
        <?php $this->load->view("admin/__partials/js.php") ?>

</body>

</html>