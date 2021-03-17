<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php $this->load->view("admin/__partials/head.php") ?>
</head>

<body>
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
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="judul" style="margin-top: 35px; margin-left: 35px; margin-right: text-align: center;">
                <div class="align-self-center" style="align-items=center;">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Monitoring Kebersihan dan Kerapihan Ruang Gedung Harapan</h3>
                    <div class="d-flex">
                        <div class="timestamp" style="align-self:center">
                        <?php 
                            $tanggal = mktime(date('m'), date("d"), date('Y'));
                            echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
                            date_default_timezone_set("Asia/Jakarta");
                            $jam = date ("H:i");
                            echo " | Pukul : <b> " . $jam . " " ." </b> ";
                            $a = date ("H");
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="row">
                <?php foreach ($pengerjaan as $row):?>
                <div class="col-3">
                    <?php if($row->status=="Sudah"){
                        echo '<div class="card bg-success">';
                    }elseif($row->status=="Belum"){
                        echo '<div class="card bg-warning">';
                    }?>
                    <!-- <div class="card"> -->
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-white mb-1 font-weight-medium"><?php echo $row->noruang ?></h2>
                                    </div>
                                    <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate"><?php echo $row->nama ?></h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="badge bg-primary font-14 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"><?php echo $row->status ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-inline-flex align-items-center">
                                <a class="btn" href="#">
                                    <span class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endforeach; ?>
                </div>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                
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