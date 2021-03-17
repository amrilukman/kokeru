<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php $this->load->view("admin/__partials/head.php") ?>
</head>

<body id="page-top">
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
                <div class="card">
                    <div class="card-header bg-info"><h3 class="page-title text-white text-truncate font-weight-medium mb-1">Print Laporan</h3></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10 align-self-center">
                                    <div class="d-inline-flex p-2">
                                        <div class="customize-input float-right">
                                            <select class="custom-select custom-select-set form-control text-dark text-truncate bg-white border-0 custom-shadow custom-radius">
                                                <option selected>Tanggal</option>
                                                <option value="1">No. Ruang</option>
                                                <option value="2">Lantai</option>
                                                <option value="3">Gedung</option>
                                            </select><br><br>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex p-2">
                                        <div class="customize-input float-right">
                                            <select class="custom-select custom-select-set form-control text-dark text-truncate bg-white border-0 custom-shadow custom-radius">
                                                <option selected>Status</option>
                                                <option value="1">Semua</option>
                                                <option value="2">Sudah</option>
                                                <option value="3">Belum</option>
                                            </select><br><br>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                
                                <div class="p-2">
                                    <div class="dropdown">
                                        <a class="btn btn-success    dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Download
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="<?php echo site_url('admin/printing/mpdf')?>">PDF</a>
                                            <a class="dropdown-item"  href="<?php echo site_url('admin/printing/excel')?>">Excel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover">
                            <thread>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>No. Ruang</th>
                                    <th>Cleaning Service</th>
                                    <th>Status</th>
                                </tr>
                            </thread>
                            <tbody>
                                <?php $i=0; ?>
                                <?php foreach ($pengerjaan as $row): $i++;?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row->tglpengerjaan ?></td>
                                    <td><?php echo $row->noruang ?></td>
                                    <td><?php echo $row->nama ?></td>
                                    <td><?php echo $row->status ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
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
        <?php $this->load->view("admin/__partials/modal.php") ?>
        <?php $this->load->view("admin/__partials/js.php") ?>

        <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href',url);
                $('#deleteModal').modal();
            }
        </script>
</body>

</html>