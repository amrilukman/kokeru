<head>
    <?php $this->load->view("cs/__partials/head.php") ?>
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
    <!-- Page wrapper  -->
    <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
        <html dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display: none;">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative modal" no-repeat center center;">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center text-white text-truncate font-weight-medium">Login Cleaning Service</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <b class="logo-icon">
                                    <!-- Light Logo icon -->
                                    <img width="30px" height="40px" style="padding-bottom:10px" src="<?php echo base_url('/src/assets/images/clean.png') ?>" alt="homepage"/>
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- Light Logo text -->
                                    <b class="mt-3 text-center page-title text-grey text-truncate font-weight-bold mb-1" style="font-size:25px" alt="homepage" >KOKERU</b>
                                </span>
                            </div><br>
                        <form action="<?php echo site_url('cs/login/aksi_login'); ?>" method="post">
                            <!-- <div class="row">
                                <div class="col-lg-12"> -->
                                <?php if($this->session->flashdata('danger')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $this->session->flashdata('danger'); ?>
                                </div>
                                <?php endif; ?>
                                    <div class="form-group">
                                        <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                        name="email" id="email" type="email" placeholder="Email" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="col-lg-12"> -->
                                    <div class="form-group">
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                        name="password" id="password" type="password" placeholder="Password" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                <!-- </div>
                                <div class="col-lg-12 text-center"> -->
                                    <button type="submit" value="login" class="btn btn-primary w-100">Login</button>
                                <!-- </div>
                            </div> -->
                        </form>
                    </div>
                    <div><span><?php $this->load->view("cs/__partials/footer.php") ?></span></div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
            
        

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
        <?php $this->load->view("cs/__partials/js.php") ?>

</body>

</html>