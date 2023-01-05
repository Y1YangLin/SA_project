<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>會員中心</title>
    <link rel="stylesheet" href="../MemberCenter_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../MemberCenter_assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../MemberCenter_assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../MemberCenter_assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../MemberCenter_assets/css/aos.min.css">
    <link rel="stylesheet" href="../MemberCenter_assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="../MemberCenter_assets/css/NZTextbox---Date.css">
    <link rel="stylesheet" href="../MemberCenter_assets/css/styles.css">
</head>

<body>
    <nav class="bg-light navbar navbar-expand-lg sticky-top">
        <div class="container d-lg-flex align-items-lg-center"><a class="navbar-brand" href="#" style="font-weight: bold;font-size: 28px;">YOFU</a><button class="navbar-toggler Triger" data-bs-toggle="offcanvas" type="button" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg"><span class="navbar-toggler-icon"></span></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                <ul class="nav d-flex justify-content-lg-start align-items-lg-center flex-column flex-lg-row navmove" style="font-weight: bold;font-size: 21px;">
                    <li class="nav-item"><a class="nav-link" href="#" style="color:var(--bs-navbar-hover-color);font-weight:bold;">產品</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:var(--bs-navbar-hover-color);font-weight:bold;font-family:Acme, sans-serif;">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:var(--bs-navbar-hover-color);font-weight:bold;">膚質分析</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:var(--bs-navbar-hover-color);font-weight:bold;">商品比價</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" aria-expanded="false" href="#" data-bs-toggle="dropdown" style="color: var(--bs-navbar-brand-hover-color);">會員中心</a>
                        <ol class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">我的帳戶</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT;?>/users/logout">登出</a></li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container gy-5">
        <div class="row gutter">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3" id="sidecol">
                <div class="card h-100">
                    <div class="card-body" style="font-weight: bold;">
                        <div class="row">
                            <div class="col col-12">
                                <div class="account-settings">
                                    <div class="user-profile" style="padding-bottom: 0px;">
                                        <div class="user-avatar">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center col-12">
                                                    <div class="mainpicture"><img data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" class="img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" title="您的大頭貼">
                                                        <div class="facetype" style="position: absolute;margin-left: 58px;margin-top: -43px;"><img data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" class="img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" width="30" height="30" title="您的膚質"></div>
                                                    </div>
                                                </div>
                                                <div class="col col-12">
                                                    <h5 class="user-name"><?php echo $data['user']->Member_name ;?></h5>
                                                    <h6 class="user-email"><?php echo $data['user']->Member_email ;?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="d-lg-flex justify-content-lg-center about">
                                    <div class="row row-cols-2 row-cols-lg-1">
                                        <div class="col d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center">
                                            <ul class="nav flex-lg-column flex-row">
                                                <li class="nav-item btn_memberdata"><a class="nav-link text-start py-1 px-0" href="#"><i class="fas fa-user mx-3" style="color: #63686d;"></i><span class="text-nowrap mx-2" style="color: var(--bs-gray-900);font-weight: bold;">會員資料</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center">
                                            <ul class="nav flex-lg-column flex-row">
                                                <li class="nav-item btn_changepassword"><a class="nav-link text-start py-1 px-0" href="#"><i class="fas fa-lock mx-3" style="margin-right: 7px;color: #63686d;"></i><span class="text-nowrap mx-2" style="color: var(--bs-gray-900);font-weight: bold;">更改密碼</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center">
                                            <ul class="nav flex-lg-column flex-row">
                                                <li class="nav-item btn_pressgood"><a class="nav-link text-start py-1 px-0" href="#"><i class="fas fa-heart mx-3" style="color: #63686d;"></i><span class="text-nowrap mx-2" style="color: var(--bs-gray-900);font-weight: bold;">按讚紀錄</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center">
                                            <ul class="nav flex-lg-column flex-row">
                                                <li class="nav-item btn_collection"><a class="nav-link active text-start py-1 px-0" href="#"><i class="fas fa-archive mx-3" style="color: #63686d;"></i><span class="text-nowrap mx-2" style="color: var(--bs-gray-900);font-weight: bold;">我的收藏</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center">
                                            <ul class="nav flex-lg-column flex-row">
                                                <li class="nav-item btn_comment"><a class="nav-link text-start py-1 px-0" href="#"><i class="fas fa-pen-alt mx-3" style="color: #63686d;"></i><span class="text-nowrap mx-2" style="color: var(--bs-gray-900);font-weight: bold;">我的評論</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col d-sm-flex d-xxl-flex justify-content-sm-center justify-content-xxl-center">
                                            <ul class="nav flex-lg-column flex-row">
                                                <li class="nav-item mb"><a class="nav-link text-start py-1 px-0" href="<?php echo URLROOT;?>/users/logout" style="color: var(--bs-gray-900);"><i class="fas fa-sign-out-alt mx-3" style="color: #63686d;"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2" style="font-weight: bold;">登出</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 memberdata" id="memberdata" style="display: none;">
                <div class="card h-100" id="memberdata">
                    <div class="card-body d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center">
                        <div class="row gy-1">
                        
                            <div>
                                <form action="<?php echo URLROOT ;?>/users/editMemberData" method="POST" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h6 class="mb-2" style="color: var(--bs-gray-900);font-weight: bold;font-size: 25px;">個人資料</h6>
                            </div>
                            
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group"><label class="form-label" for="fullName">用戶名稱</label><input type="text" id="fullName" name="name" class="form-control" placeholder="請輸入姓名" value="<?php echo $data['user']->Member_name ;?>"></div>
                                </div>
                                
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group"><label class="form-label" for="eMail">生日</label><input type="date" id="bd" name="bd" class="form-control" placeholder="請輸入生日" value="<?php echo $data['user']->Member_birthday;?>"></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label class="form-label" for="eMail">信箱</label><input type="email" id="eMail" name="email" class="form-control" placeholder="請輸入信箱" value="<?php echo $data['user']->Member_email ;?>"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><label class="form-label" for="eMail">地址</label><input type="email" id="address" name="address" class="form-control" placeholder="請輸入地址" value="<?php //echo $data->Member_name ;?>"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><label class="form-label" for="eMail">個人頭像</label><label class="form-label" for="Street"></label><label class="form-label form-label" for="customFile"></label><input type="file" class="form-control" id="customFile"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="d-flex justify-content-end"><button class="btn btn-secondary" type="button" id="submit" name="submit">取消</button><button class="btn btn-primary liveToastBtn" type="submit" name="submit">更新</button></div>
                                </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 changepassword" id="changepassword" style="display: none;">
                <div class="card h-100" id="changepassword">
                    <div class="card-body d-lg-flex d-xl-flex align-items-lg-center align-items-xl-center">
                        <div class="row gy-1">
                            <div>
                                <form action="<?php echo URLROOT ;?>/users/editMemberPwd" method="post" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h6 class="mb-2" style="font-size: 25px;color: var(--bs-gray-900);font-weight: bold;">密碼更新</h6>
                            </div>
                            <div class="col-12 offset-xxl-0">
                                <?php //echo empty($data['pwd_err']) ?$data['pwd_err'] :'' ;?>
                                <div class="form-group"><label class="form-label" for="fullName">請輸入原密碼</label><input type="password" id="fullName" class="form-control" name="oldPwd" placeholder="請輸入舊密碼"></div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><label class="form-label" for="eMail">請輸入新密碼</label><input type="password" id="eMail" class="form-control" name="newPwd" placeholder="請輸入新密碼"></div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><label class="form-label" for="eMail">再次輸入新密碼</label><input type="password" id="eMail-1" class="form-control" name="newPwd2" placeholder="再次輸入新密碼"></div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="d-flex justify-content-end"><button class="btn btn-secondary" type="button" id="submit" name="submit">取消</button><button class="btn btn-primary liveToastBtn" type="submit" name="submit">更新</button></div>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 pressgood gy-3 px-5" id="pressgood" style="display: none;">
                <div class="row g-4 gx-5 row-cols-1 row-cols-md-3">

                <?php foreach($data['like'] as $arr) { ?>
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-4">
                        <div class="d-flex flex-column justify-content-xxl-start product-container">
                            <div class="row" style="box-shadow: 2px 2px 5px 2px;">
                                <div class="col"><img class="rounded img-fluid d-block w-100 fit-cover" style="max-width: 100%;height: auto;" src="<?php echo 'http://34.81.132.111/html' . substr($arr->Product_imglocation, 2) ;?>"></div>
                                <div class="col-8 col-xxl-12 text-center col-12" style="text-overflow: ellipsis;">
                                    <h4 class="text-truncate text-center"><?php echo $arr->Product_name ;?></h4>
                                </div>
                                <div class="col-12">
                                    <p class="text-truncate product-description"><?php echo $arr->Product_intro?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <?php }?>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 collection" id="collection" style="display: none;">
                <div class="row">
                    <div class="col text-center d-flex d-sm-flex justify-content-end justify-content-sm-end col-12" id="btn_collection_add"><button class="btn btn-success btn-lg" style="margin-left:5px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Add" title="scac"><i class="fas fa-plus" style="font-size:15px;"></i></button></div>
                    <?php echo empty($data['collection']) ? "沒有收藏 快去收 ! " : '' ;?>
                    
                    <?php foreach($data['collection'] as $arr) { ?>
                    <div class="col-6 col-sm-6 col-md-4 col-4">
                    
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-sm-center">
                                <div class="row" style="border-style: solid;border-color: var(--bs-gray-500);border-radius: 8px;box-shadow: inset -2px -2px 2px var(--bs-gray-500);">
                                    <div class="col text-end d-xxl-flex justify-content-xxl-end"><button class="btn btn-sm" style="margin-left: 5px;background: var(--blue);" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Edit"><i class="far fa-edit" style="font-size: 13px;"></i></button><button class="btn btn-sm" style="margin-left:5px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                                    <div class="col d-flex justify-content-center col-12">
                                        <ul class="nav">
                                            <li class="nav-item" href="#">
                                                <div class="row d-flex flex-column">
                                                    <div class="col btn_collection-1"><a href="#"><img class="img-thumbnail object-fit-fill" src="../MemberCenter_assets/img/swiftui.png"></a></div>
                                                    <div class="col">
                                                        <hr>
                                                    </div>
                                                    <div class="col btn_collection-1"><a href="#" style="text-decoration:none">
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;"><?php echo $arr->ProductCategory_type?></h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    
                    
                </div>
            </div>

            
            <div class="col product_for_collection gy-3 px-5 col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9" id="product_for_collection" style="display: none;">
                <div class="row g-4 gx-5 row-cols-1 row-cols-md-3">
                <?php echo empty($data['collection']) ? "沒有收藏 快去收 ! " : '' ;?>
                <?php foreach($data['collection'] as $arr) { ?>

                
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left">
                        <div class="d-flex flex-column justify-content-xxl-start product-container">
                            <div class="row" style="box-shadow: 2px 2px 5px 2px;">
                                <div class="col"><img class="rounded img-fluid d-block w-100 fit-cover" style="max-width: 100%;height: auto;" src="<?php echo 'http://34.81.132.111/html' . substr($arr->Product_imglocation, 2) ;?>"></div>
                                <div class="col-8 col-xxl-12 text-center col-12" style="text-overflow: ellipsis;">
                                    <h4 class="text-truncate text-center"><?php echo $arr->Product_name?></h4>
                                </div>
                                <div class="">
                                    <p class="text-truncate product-description"><?php echo $arr->Product_intro?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <!-- <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-3">
                        <div class="d-flex flex-column justify-content-xxl-start product-container">
                            <div class="row" style="box-shadow: 2px 2px 5px 2px;">
                                <div class="col"><img class="rounded img-fluid d-block w-100 fit-cover" style="max-width: 100%;height: auto;" src="../MemberCenter_assets/img/商品照1.jpg"></div>
                                <div class="col-8 col-xxl-12 text-center col-12" style="text-overflow: ellipsis;">
                                    <h4 class="text-truncate text-center">dffefsedfesfesfefef</h4>
                                </div>
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-2">
                        <div class="d-flex flex-column justify-content-xxl-start product-container">
                            <div class="row" style="box-shadow: 2px 2px 5px 2px;">
                                <div class="col"><img class="rounded img-fluid d-block w-100 fit-cover" style="max-width: 100%;height: auto;" src="../MemberCenter_assets/img/商品照1.jpg"></div>
                                <div class="col-8 col-xxl-12 text-center col-12" style="text-overflow: ellipsis;">
                                    <h4 class="text-truncate text-center">dffefsedfesfesfefef</h4>
                                </div>
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-1">
                        <div class="d-flex flex-column justify-content-xxl-start product-container">
                            <div class="row" style="box-shadow: 2px 2px 5px 2px;">
                                <div class="col"><img class="rounded img-fluid d-block w-100 fit-cover" style="max-width: 100%;height: auto;" src="../MemberCenter_assets/img/商品照1.jpg"></div>
                                <div class="col-8 col-xxl-12 text-center col-12" style="text-overflow: ellipsis;">
                                    <h4 class="text-truncate text-center">dffefsedfesfesfefef</h4>
                                </div>
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            
            
            <div class="col product_for_collection gy-3 gx-5 comment" id="comments" style="display: none;">

                <?php echo empty($data['comment']) ? "沒有評論 快去留 ! " : '' ;?>
                <?php foreach($data['comment'] as $arr) { ?>
                <div class="row" id="commemt">
                    <div class="col-12 d-flex align-items-center align-items-lg-center" id="comment_date" style="background: #eceff2;border-radius: 11px;height: 45px;">
                        <h4 style="margin-bottom: 0px;"><?php echo $arr->ProductComment_date ;?></h4>
                    </div>
                    <div class="col-10" id="comment_ourlogo"><a class="navbar-brand" style="font-weight: bold;font-size: 28px;">YOFU</a></div>
                    <div class="col-2 d-flex justify-content-center align-items-center justify-content-xl-end" id="comment_close"><button class="btn btn-sm" data-bs-toggle="modal" data-bss-tooltip="" style="margin-left:5px;" type="submit" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                    <div class="col-8" id="comment_content">
                        <p><?php echo $arr->ProductComment_content ;?><br></p>
                    </div>
                    <div class="col-4 d-xxl-flex justify-content-xxl-center" id="comment_product_image"><img width="100%" height="auto" src="<?php echo 'http://34.81.132.111/html' . substr($arr->Product_imglocation, 2) ;?>" style="max-width: 191.988px;"></div>
                    <div class="col-12" id="comment_product_name">
                        <h6 style="font-weight: bold;"><br><span style="color: rgb(68, 68, 68);"><?php echo $arr->Product_name ;?></span><br><br></h6>
                    </div>
                    <div class="col col-12" id="comment_time">
                        <h6 style="font-size: 12px;"><br><br><br></h6>
                    </div>
                </div>
                <?php } ?>

                

            </div>
        </div>
    </div>
    <footer class="text-white bg-dark">
        <div class="container py-4 py-lg-5" style="margin-top: 54px;">
            <div class="row justify-content-center">
                <div class="col-12 text-center text-lg-start d-flex flex-column align-items-center align-items-lg-center item social">
                    <div class="fw-bold d-flex align-items-center mb-2"><span style="font-size: 35px;">YOFU</span></div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12 d-sm-flex d-md-flex justify-content-sm-start align-items-md-start col-12">
                            <h3 class="d-flex justify-content-center" style="font-size: 26px;font-weight: bold;">Products</h3>
                        </div>
                        <div class="col-6 text-center text-lg-start d-flex flex-column align-items-sm-start item">
                            <ul class="list-unstyled">
                                <li><a class="link-light" href="#" style="text-decoration:none">化妝水</a></li>
                                <li><a class="link-light" href="#" style="text-decoration:none">精華液</a></li>
                                <li><a class="link-light" href="#" style="text-decoration:none">乳液</a></li>
                                <li><a class="link-light" href="#" style="text-decoration:none">定裝噴霧</a></li>
                            </ul>
                        </div>
                        <div class="col-6 text-center text-lg-start d-flex flex-column align-items-sm-start item">
                            <ul class="list-unstyled">
                                <li style="padding-top:0px;margin-top:0px;"><a class="link-light" href="#" style="text-decoration:none">乳霜</a></li>
                                <li><a class="link-light" href="#" style="text-decoration:none">妝前乳</a></li>
                                <li><a class="link-light" href="#" style="text-decoration:none">粉底液</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <div class="row">
                        <div class="col d-sm-flex justify-content-sm-start col-12">
                            <h3 style="font-size: 26px;font-weight: bold;">Services</h3>
                        </div>
                        <div class="col d-sm-flex justify-content-sm-start col-12">
                            <ul class="list-unstyled">
                                <li><a class="link-light" href="#" style="text-decoration:none">膚質分析</a></li>
                                <li><a class="link-light" href="#" style="text-decoration:none">商品比價</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">2022 SA&nbsp; No.15</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></li>
                    <li class="list-inline-item list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></li>
                    <li class="list-inline-item list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path></svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="toast-container position-fixed bottom-0 end-0 p-3 data-bs-autohide=&quot;true&quot;">
        <div class="toast hide" role="alert" data-bs-animation="false" id="liveToast" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><img class="rounded d-none me-2" src="..." alt="..."><strong class="me-auto">YOFU</strong><small>11 mins ago</small><button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button></div>
            <div class="toast-body" role="alert"><span class="text-warning">已經更新完成!</span></div>
        </div>
        <div class="toast hide" role="alert" data-bs-animation="false" id="liveToast-1" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><img class="rounded d-none me-2" src="..." alt="..."><strong class="me-auto">YOFU</strong><small>11 mins ago</small><button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button></div>
            <div class="toast-body" role="alert"><span class="text-success">已經新增完成!</span></div>
        </div>
        <div class="toast hide" role="alert" data-bs-animation="false" id="liveToast-2" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><img class="rounded d-none me-2" src="..." alt="..."><strong class="me-auto">YOFU</strong><small>11 mins ago</small><button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button></div>
            <div class="toast-body" role="alert"><span class="text-danger">已經刪除完成!</span></div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Add" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="font-weight: bold;text-align: center;color: var(--green);">新增收藏分類</h4>
                    <hr>
                    <form>
                        <div class="form-group mb-3"><input class="form-control item" type="text" id="collection_name" placeholder="收藏分類名稱"></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary btn-success liveToastBtn-1" type="button">確定新增</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Edit" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: var(--blue);font-weight: bold;text-align: center;">重新命名</h4>
                    <hr>
                    <form>
                        <div class="form-group mb-3"><input class="form-control item" type="text" id="ID-1" placeholder="名字"></div>
                    </form>
            </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary" type="button">確定更改</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-Delete" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: var(--red);font-weight: bold;text-align: center;">刪除</h4>
                    <hr>
                    <form>
                        <div class="form-group mb-3">
                            <h4 style="color: var(--red);font-weight: bold;text-align: center;"><span style="color: rgb(51, 51, 51);">確定要刪除?</span></h4>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary btn-danger liveToastBtn-2" type="button">確定刪除</button></div>
            </div>
        </div>
    </div>
    <script src="../MemberCenter_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../MemberCenter_assets/js/aos.min.js"></script>
    <script src="../MemberCenter_assets/js/bs-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js&quot; integrity=&quot;sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4&quot; crossorigin=&quot;anonymous"></script>
    <script src="../MemberCenter_assets/js/Offcanvasjustifiy.js"></script>
    <script src="../MemberCenter_assets/js/page.js"></script>
    <script src="../MemberCenter_assets//js/Toasts.js"></script>
    <script>



        var product_for_collection = document.querySelector(".product_for_collection");

        for (var i = 0; i < button_collection_1.length; i++){ //按下我的收藏內的資料夾
            button_collection_1[i].addEventListener('click', function(){
         // button_memberdata.style.display = "none";
        if (product_for_collection.style.display === "none"){
            // button_memberdata.style.display = "none";
            product_for_collection.style.display = "block";///商品出現

            changepassword.style.display = "none";
            memberdata.style.display = "none";
            pressgood.style.display = "none";
            collection.style.display = "none";
            comment.style.display = "none";

        }
    })
  }


    </script>

</body>

</html>