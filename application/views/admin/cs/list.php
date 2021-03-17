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
                    <div class="card-header bg-info"><h3 class="page-title text-white text-truncate font-weight-medium mb-1">Data Karyawan</h3></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10 align-self-center">
                                    <a class="btn btn-primary" href="<?php echo site_url('admin/cs/tambah')?>">+ Tambah Karyawan</a><br><br>
                                </div>
                                <div class="cor-2 align-self-center">
                                    <div class="customize-input float-right">
                                        <select class="custom-select custom-select-set form-control text-dark text-truncate bg-white border-0 custom-shadow custom-radius">
                                            <option selected>Sort by</option>
                                            <option value="1">ID</option>
                                            <option value="2">Nama</option>
                                            <option value="3">Email</option>
                                        </select><br><br>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover">
                            <thread>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thread>
                            <tbody>
                                <?php $i=0; ?>
                                <?php foreach ($cs as $cs): $i++;?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $cs->idcs ?></td>
                                    <td><?php echo $cs->nama ?></td>
                                    <td><?php echo $cs->email ?></td>
                                    <td><a href="<?php echo site_url('admin/cs/edit/'.$cs->idcs) ?>"
                                        class="btn btn-circle btn-secondary "><i data-feather="edit" class="feather-icon"></i></a>
                                        <a onclick="deleteConfirm('<?php echo site_url('admin/cs/delete/'.$cs->idcs) ?>')"
                                        href="#!" class="btn btn-circle btn-danger"><i data-feather="trash" class="feather-icon"></i></a></td>
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