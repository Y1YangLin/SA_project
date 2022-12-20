<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>評論_管理者</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/Article-Clean.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/Plus_Input.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/sidebar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/Table-With-Search.css">
</head>

<body>
<ul class="nav flex-column shadow d-flex sidebar mobile-hid">
        <li class="nav-item logo-holder">
            <div class="text-center text-white logo py-4 mx-4"><a class="text-white text-decoration-none" id="title" href="YOFU.html"><strong>YOFU</strong></a><a class="text-white float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle"></i></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Product"><i class="fas fa-archive mx-3"></i><span class="text-nowrap mx-2">商品</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Member"><i class="fas fa-user mx-3"></i><span class="text-nowrap mx-2">會員</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Commit"><i class="fas fa-pen-alt mx-3"></i><span class="text-nowrap mx-2">評論</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Questionnaire"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">問卷</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Manager"><i class="far fa-star mx-3"></i><span class="text-nowrap mx-2">管理者</span></a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">設定</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
            <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Change password</span></a><a class="dropdown-item text-white" href="#"><span>Change email</span></a><a class="dropdown-item text-white" href="#"><span>More</span></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Logout"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">登出</span></a></li>
    </ul>
    <script src="<?php echo URLROOT; ?>/admin_assets/js/jquery.min.js"></script>
    <script src="<?php echo URLROOT; ?>/admin_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT; ?>/admin_assets/js/bs-init.js"></script>
    <script src="<?php echo URLROOT; ?>/admin_assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URLROOT; ?>/admin_assets/js/sidebar.js"></script>
    <script src="<?php echo URLROOT; ?>/admin_assets/js/Table-With-Search.js"></script>
</body>

</html>