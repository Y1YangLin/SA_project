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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/css/animate.min.css">
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
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Comment"><i class="fas fa-pen-alt mx-3"></i><span class="text-nowrap mx-2">評論</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Questionnaire"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">問卷</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Manager"><i class="far fa-star mx-3"></i><span class="text-nowrap mx-2">管理者</span></a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">設定</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
            <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Change password</span></a><a class="dropdown-item text-white" href="#"><span>Change email</span></a><a class="dropdown-item text-white" href="#"><span>More</span></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Logout"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">登出</span></a></li>
    </ul>
    <div class="container article-clean">
        <div class="row">
            <div class="col-lg-11 col-xl-8 offset-lg-1 offset-xl-2 rubberBand animated">
                <div class="text-center intro">
                    <h1 class="text-center"><strong>管理者介面</strong></h1>
                </div>
                <div class="text">
                    <div class="col-md-12 search-table-col"><button class="btn btn-success" style="margin-left:5px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Add"><i class="fas fa-plus" style="font-size:15px;"></i></button>
                        <div class="d-inline-flex form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search!"></div><span class="counter pull-right"></span>
                        <div class="table-responsive table table-hover table-bordered results">
                            <table class="table table-hover table-bordered">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd-1" class="col-lg-1">ID</th>
                                        <th id="trs-hd-2" class="col-lg-2">Name</th>
                                        <th id="trs-hd-3" class="col-lg-3">Email</th>
                                        <th id="trs-hd-4" class="col-lg-2">Birthday</th>
                                        <!-- <th id="trs-hd-5" class="col-lg-2">Password</th> -->
                                        <th id="trs-hd-6" class="col-lg-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="warning no-result">
                                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                    </tr>
                                    

                                    <?php foreach($data as $arr){ ?>
                                             <tr>
                                             <td> <?php echo $arr->Manager_id ;?> </td>
                                             <td> <?php echo $arr->Manager_name ;?> </td>
                                             <td> <?php echo $arr->Manager_email ;?> </td>
                                            
                                             <td> <?php echo $arr->Manager_birthday ;?> </td>
                                            
                                             <td>
                                             <div class="btn-group">
                                                <button class="btn btn-success" style="margin-left:5px;background:var(--blue);" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Edit"><i class="far fa-edit" style="font-size:11px;"></i></button>
                                             
                                                <button class="btn btn-danger" style="margin-left:5px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Delete"><i class="fa fa-trash" style="font-size:15px;"></i></button>
                                             </div>
                                            </td>
                                             </tr>
                                        
                                        <?php }
                                        

                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Add" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="font-weight: bold;text-align: center;color: var(--green);">新增</h4>
                    <hr>
                    <form action="<?php echo URLROOT; ?>/admins/addManager" method="POST">
                        <!-- <div class="form-group"><input class="form-control item" name="id" type="text" id="ID" placeholder="ID"></div> -->
                        <div class="form-group"><input class="form-control item" name="name" type="text" id="Name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control item" name="email" type="text" id="Email" placeholder="Email"></div>
                        <div class="form-group"><input class="form-control item" name="password" type="text" id="Password" placeholder="Password"></div>
                        <div class="form-group"><input class="form-control item" name="date" type="date" id="Date" placeholder="Birthday"></div>
                    
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary btn-success" type="submit">確定新增</button></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Edit" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: var(--blue);font-weight: bold;text-align: center;">編輯</h4>
                    <hr>
                    <form action="<?php echo URLROOT; ?>/admins/modifyManager" method="POST">
                        <div class="form-group"><input class="form-control item" name="id" type="text" id="ID2" placeholder="ID"></div>
                        <div class="form-group"><input class="form-control item" name="name" type="text" id="Name2" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control item" name="email" type="text" id="Email2" placeholder="Email"></div>
                        <!-- <div class="form-group"><input class="form-control item" name="password" type="text" id="Password2" placeholder="Password"></div> -->
                        <div class="form-group"><input class="form-control item" name="date" type="date" id="Date2" placeholder="Birthday"></div>
                    
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary" type="submit">確定更改</button></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Delete" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: var(--red);font-weight: bold;text-align: center;">刪除</h4>
                    <hr>
                    <form action="<?php echo URLROOT; ?>/admins/deleteManager" method="POST">
                        <div class="form-group">
                            <h4 style="color: var(--red);font-weight: bold;text-align: center;"><span style="color: rgb(51, 51, 51);">確定要刪除?</span></h4>
                        </div>
                        <input type="hidden" name="id" id="ready_to_delete" value="">
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary btn-danger" type="submit">確定刪除</button></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
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

    <script>

        $('#exampleModal-Edit').on('show.bs.modal', e => {
            var $button = $(e.relatedTarget);
            $('#ID2').val($button.closest('td').prev().prev().prev().prev().text().trim());
            
            $('#Name2').val($button.closest('td').prev().prev().prev().text().trim());
            $('#Email2').val($button.closest('td').prev().prev().text().trim());
            $('#Date2').val($button.closest('td').prev().text().trim());
            
            
        
        });

        $('#exampleModal-Delete').on('show.bs.modal', e => {
            var $button = $(e.relatedTarget);
            $('#ready_to_delete').val($button.closest('td').prev().prev().prev().prev().text().trim());
        
        });

    </script>


</body>

</html>