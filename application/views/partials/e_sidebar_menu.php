    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">steakhouse</li>

                    <li class="<?= check_permit_menu('dashboard') ?>">
                        <a href="javascript: void(0);">
                            <i class="fe-airplay"></i>
                            <span> รายงาน </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= site_url('dashboard/ctl_dashboard') ?>">Dashboard</a></li>
                            <li> <a href="dashboard-2.html">ตารางข้อมูล</a></li>
                        </ul>
                    </li>

                    <li class="<?= check_permit_menu('calendar') ?>">
                        <a href="javascript: void(0);">
                            <i class="fe-sidebar"></i>
                            <span> E-leave </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="<?= site_url('calendar/event_calendars') ?>">ปฏิทินลา</a></li>
                            <li><a href="layouts-menucollapsed.html">ปฏิทินลาชดเชย</a></li>
                        </ul>
                    </li>

                        <li class="<?= check_permit_menu('admin') ?>">
                            <a href="#">
                                <i class="fe-plus-square"></i>
                                <span>ผู้ดูแล</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= site_url('admin/ctl_register') ?>">ลงทะเบียน</a></li>
                                <li><a href="<?= site_url('admin/ctl_user') ?>">ผู้ใช้งาน</a></li>
                            </ul>
                        </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
