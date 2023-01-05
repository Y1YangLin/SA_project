<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>評論_管理者</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/admin_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&amp;display=swap">
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

<body style="background: rgb(250, 233, 186);font-weight: bold;">
    <ul class="nav flex-column shadow d-flex sidebar mobile-hid" style="background: #894e18;">
        <li class="nav-item logo-holder" style="background: rgb(250, 233, 186);">
            <div class="text-center text-white logo py-4 mx-4"><a class="text-white text-decoration-none" id="title" href="<?php echo URLROOT;?>/admins/YOFU" style="color: rgb(0,0,0);"><span style="color: rgb(0, 0, 0);">YOFU</span></a><a class="text-white float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle" style="color: rgb(0,0,0);"></i></a></div>
        </li>
        <li class="nav-item"></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Product" style="background: #894e18;"><i class="fas fa-archive mx-3"></i><span class="text-nowrap mx-2">商品</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Member" style="background: #894e18;"><i class="fas fa-user mx-3"></i><span class="text-nowrap mx-2">會員</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Comment" style="background: rgb(137,78,24);"><i class="fas fa-pen-alt mx-3"></i><span class="text-nowrap mx-2">評論</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Questionnaire" style="background: #894e18;"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">問卷</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Manager" style="background: #894e18;"><i class="far fa-star mx-3"></i><span class="text-nowrap mx-2">管理者</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="<?php echo URLROOT; ?>/admins/Logout" style="background: #894e18;"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">登出</span></a></li>
    </ul>
    <div class="container article-clean">
        <div class="row">
            <div class="col" style="background: rgb(250, 233, 186);">
                <h1 class="text-center" style="margin-top: 40px;margin-bottom: 40px;font-size: 30px;font-family: 'Akaya Kanadaka', serif;"><strong><span style="color: rgb(113, 65, 9);">COMMENT</span></strong></h1>
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col-4 col-md-4 col-xl-2" style="background: rgb(250, 233, 186);"><button class="btn btn-success" style="margin-left: 5px;background: rgb(222,174,117);" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Add"><i class="fas fa-plus" style="font-size:15px;"></i></button></div>
            <div class="col-8 col-md-8 col-lg-8 col-xl-10" style="background: rgb(250, 233, 186);border-color: rgb(0,0,0);border-top-color: rgb(86,;border-right-color: 88,;border-bottom-color: 91);border-left-color: 88,;">
                <div class="form-group d-inline-flex pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search!" style="background: rgb(255,255,255);border-color: rgb(211,222,232);color: rgb(237,240,242);"></div>
            </div>
        </div>
        <div class="row font-weight-bolder">
            <div class="col" style="background: rgb(250, 233, 186);">
                <div class="table-responsive table table-hover table-bordered results">
                    <table class="table table-hover table-bordered">
                        <thead class="bill-header cs">
                            <tr>
                                <th id="trs-hd-1" class="col-1" style="background: #894e18;">ID</th>
                                <th id="trs-hd-2" class="col-1" style="background: #894e18;">Member_ID</th>
                                <th id="trs-hd-3" class="col-1" style="background: #894e18;">Product_ID</th>
                                <th id="trs-hd-4" class="col-6" style="background: #894e18;">Content</th>
                                <th id="trs-hd-5" class="col-2" style="background: #894e18;">Date</th>
                                <th id="trs-hd-6" class="col-1" style="background: #894e18;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            </tr>
                            
                            <?php foreach($data as $arr){ ?>
                                            <tr>
                                            <td class="text-nowrap text-center" style="background: #ffffff;"> <?php echo $arr->ProductComment_id ;?> </td>
                                            <td class="text-nowrap text-center" style="background: #ffffff;"> <?php echo  $arr->ProductComment_Member_id ;?> </td>
                                            <td class="text-nowrap text-center" style="background: #ffffff;"> <?php echo  $arr->ProductComment_Product_id ;?> </td>
                                            <td class="text-break text-left" style="font-size: 8px;background: #ffffff;"> <?php echo  $arr->ProductComment_content ;?> </td>
                                            <td class="text-nowrap text-center" style="background: #ffffff;"> <?php echo  $arr->ProductComment_date ;?> </td>
                                            
                                            <td class="text-nowrap" style="background: #ffffff;">
                                            <button class="btn btn-success" style="margin-left: 5px;background: #a4aedc;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Edit"><i class="far fa-edit" style="font-size:11px;"></i></button>
                                            <button class="btn btn-danger" style="margin-left: 5px;background: rgb(227,120,131);" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Delete"><i class="fa fa-trash" style="font-size:15px;"></i></button></td>
                                            </tr>
                                    <?php 
                                        }
                                        

                                    ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Add" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="font-weight: bold;text-align: center;color: var(--green);font-family: 'Akaya Kanadaka', serif;"><span style="color: rgb(222, 174, 117);">ADD</span></h4>
                    <hr>
                    <form action="<?php echo URLROOT; ?>/admins/addComment" method="POST">
                        <div class="form-group"><input class="form-control item" name="id" type="text" id="ID" placeholder="ID"></div>
                        <div class="form-group"><input class="form-control item" name="member_id" type="text" id="Member_ID" placeholder="Member_ID"></div>
                        <div class="form-group"><input class="form-control item" name="product_id" type="text" id="Product_ID" placeholder="Product_ID"></div>
                        <div class="form-group"><input class="form-control item" name="content" type="text" id="Content" placeholder="Content"></div>
                        <div class="form-group"><input class="form-control item" name="date" type="datetime-local" id="Date" placeholder="Date"></div>
                    
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="font-family: 'Akaya Kanadaka', serif;">CLOSE</button><button class="btn btn-primary btn-success" type="submit" style="background: #deae75;font-family: 'Akaya Kanadaka', serif;">CONFIRM</button></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Edit" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: #a4aedc;font-weight: bold;text-align: center;font-family: 'Akaya Kanadaka', serif;">EDIT</h4>
                    <hr>
                    <form action="<?php echo URLROOT; ?>/admins/modifyComment" method="POST">
                        <div class="form-group"><input class="form-control item" name="id" type="text" id="ID2" placeholder="ID"></div>
                        <div class="form-group"><input class="form-control item" name="member_id" type="text" id="Member_ID2" placeholder="Member_ID"></div>
                        <div class="form-group"><input class="form-control item" name="product_id" type="text" id="Product_ID2" placeholder="Product_ID"></div>
                        <div class="form-group"><input class="form-control item" name="content" type="text" id="Content2" placeholder="Content"></div>
                        <div class="form-group"><input class="form-control item" name="date" type="date" id="Date2" placeholder="Date"></div>
                        
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="font-family: 'Akaya Kanadaka', serif;">CLOSE</button><button class="btn btn-primary" type="submit" style="color: #ffffff;background: #a4aedc;font-family: 'Akaya Kanadaka', serif;">COMFIRM</button></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Delete" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: #e37883;font-weight: bold;text-align: center;font-family: 'Akaya Kanadaka', serif;">DELETE</h4>
                    <hr>
                    <form action="<?php echo URLROOT; ?>/admins/deleteComment" method="POST">
                        <div class="form-group">
                            <h4 style="color: var(--red);font-weight: bold;text-align: center;font-family: 'Akaya Kanadaka', serif;"><span style="color: rgb(51, 51, 51);">ARE YOU SURE?</span></h4>
                        </div>
                        <input type="hidden" name="id" id="ready_to_delete" value="">

                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="font-family: 'Akaya Kanadaka', serif;">CLOSE</button><button class="btn btn-primary btn-danger" type="submit" style="background: #e37883;font-family: 'Akaya Kanadaka', serif;">DELETE</button></div>
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
            $('#ID2').val($button.closest('td').prev().prev().prev().prev().prev().text().trim());
            $('#Member_ID2').val($button.closest('td').prev().prev().prev().prev().text().trim());
            $('#Product_ID2').val($button.closest('td').prev().prev().prev().text().trim());
            $('#Content2').val($button.closest('td').prev().prev().text().trim());
            $('#Date2').val($button.closest('td').prev().text().trim());
            
            
        
        });

        $('#exampleModal-Delete').on('show.bs.modal', e => {
            var $button = $(e.relatedTarget);
            $('#ready_to_delete').val($button.closest('td').prev().prev().prev().prev().prev().text().trim());
        
        });

    </script>

</body>

</html>