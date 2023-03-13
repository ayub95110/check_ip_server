<!-- Main Sidebar Container -->
<!-- http://fordev22.com/ -->
<aside class="main-sidebar sidebar-dark-gray elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="" class="brand-link bg-gray">
      <img src="../assets/img/FD22.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FD22 | POS System</span>
    </a> -->


    <a href="" class="brand-link bg-info">
        <img src="../assets/img/Server.png" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light">ระบบบริหารจัดการ server</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../all_img/users_img/<?php echo $row['photo'];?>" width="150px">

            </div>
            <div class="info">
                <a href="edit_profile.php" target=""
                    class="d-block">Welcome&nbsp;&nbsp;<?php echo $result['status_users'] ?></a>

                <span class="user-status">
                    <i class="fa fa-circle text-green"></i>
                    <span class="text-white">Online</span>
                </span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <!-- nav-compact -->
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">เมนู </li>
                <li class="nav-item">
                    <a href="index.php"
                        class="nav-link <?php if($menu=="index"){echo "active";} ?> ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>หน้าหลัก </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="list_researcher.php"
                        class="nav-link <?php if($menu=="list_researcher"){echo "active";} ?> ">
                        <i class="nav-icon fas fa-database"></i>
                        <p>จัดการข้อมูล IP Address </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="report.php" class="nav-link <?php if($menu=="report"){echo "active";} ?> ">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>รายงาน </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Line </li>
                <li class="nav-item">
                    <a target="_blank" href="..\line.php" class="nav-link <?php if($menu=="line"){echo "active";} ?> ">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>แจ้งเตือน Line </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">logout </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-green">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>ออกจากระบบ</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        <!-- http://fordev22.com/ -->
    </div>
    <!-- /.sidebar -->
</aside>