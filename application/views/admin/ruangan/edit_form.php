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
                        <a href="<?php echo site_url('admin/ruangan/') ?>"><i data-feather="arrow-left" class="feather-icon"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $ruangan->idruang ?>" />

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('noruang') ? 'is-invalid':'' ?>"
                                type="text" name="noruang" placeholder="No Ruang" value="<?php echo $ruangan->noruang ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('noruang') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('lantai') ? 'is-invalid':'' ?>"
                                type="number" name="lantai" min="0" placeholder="Lantai" value="<?php echo $ruangan->lantai ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('lantai') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('gedung') ? 'is-invalid': '' ?>"
                                type="text" name="gedung" placeholder="Gedung" value="<?php echo $ruangan->gedung ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('gedung') ?>
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