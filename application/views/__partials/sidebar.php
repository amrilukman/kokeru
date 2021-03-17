        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> 
                        <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/dashboard') ?>"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>"> 
                        <a class="sidebar-link" href="<?php echo site_url('jadwal') ?>"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Atur Jadwal</span></a>
                        </li>
                        <li class="sidebar-item <?php echo $this->uri->segment(2) == 'admin/ruangan' ? 'active': '' ?>">
                        <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/ruangan') ?>"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Ruangan</span></a></li>

                        <li class="sidebar-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
                        <a class="sidebar-link sidebar-link" href="<?php echo site_url('karyawan') ?>"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Karyawan</span></a></li>

                        <li class="sidebar-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
                        <a class="sidebar-link sidebar-link" href="<?php echo site_url('print') ?>"
                                aria-expanded="false"><i data-feather="printer" class="feather-icon"></i><span
                                    class="hide-menu">Print Laporan</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->