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
    <?php require_once 'header.php' ;?>
</head>

<body>
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
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-4">
                        <div class="d-flex flex-column justify-content-xxl-start product-container">
                            <div class="row" style="box-shadow: 2px 2px 5px 2px;">
                                <div class="col"><img class="rounded img-fluid d-block w-100 fit-cover" style="max-width: 100%;height: auto;" src="../MemberCenter_assets/img/商品照1.jpg"></div>
                                <div class="col-8 col-xxl-12 text-center col-12" style="text-overflow: ellipsis;">
                                    <h4 class="text-truncate text-center">這三小</h4>
                                </div>
                                <div class="col-12">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-5">
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
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-6">
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
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-7">
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
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 collection" id="collection" style="display: none;">
                <div class="row">
                    <div class="col text-center d-flex d-sm-flex justify-content-end justify-content-sm-end col-12" id="btn_collection_add"><button class="btn btn-success btn-lg" style="margin-left:5px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Add" title="scac"><i class="fas fa-plus" style="font-size:15px;"></i></button></div>
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
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;">乳霜</h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;">乳霜</h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-sm-center">
                                <div class="row" style="border-style: solid;border-color: var(--bs-gray-500);border-radius: 8px;box-shadow: inset -2px -2px 2px var(--bs-gray-500);">
                                    <div class="col text-end d-xxl-flex justify-content-xxl-end"><button class="btn btn-sm" style="margin-left: 5px;background: var(--blue);" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Edit"><i class="far fa-edit" style="font-size: 13px;"></i></button><button class="btn btn-sm" style="margin-left:5px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-Delete"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                                    <div class="col d-flex justify-content-center col-12">
                                        <ul class="nav">
                                            <li class="nav-item" href="#">
                                                <div class="row d-flex flex-column">
                                                    <div class="col btn_collection-1"><a href="#"><img class="img-thumbnail object-fit-fill" src="../MemberCenter_assets/img/swiftui.png"></a></div>
                                                    <div class="col">
                                                        <hr>
                                                    </div>
                                                    <div class="col btn_collection-1"><a href="#" style="text-decoration:none">
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;">乳霜</h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;">乳霜</h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;">乳霜</h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <h4 class="text-nowrap" style="text-align: center;color: var(--bs-gray-900);font-weight: bold;">乳霜</h4>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col product_for_collection gy-3 px-5" id="product_for_collection" style="display: none;">
                <div class="row g-4 gx-5 row-cols-1 row-cols-md-3">
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left">
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
                    <div class="col-12 col-md-4" data-aos="fade-up" id="product-item-animation-element-slide-top-left-3">
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
                    </div>
                </div>
            </div>
            <div class="col product_for_collection gy-3 gx-5 comment" id="comments" style="display: none;">
                <div class="row" id="commemt">
                    <div class="col-12 d-flex align-items-center align-items-lg-center" id="comment_date" style="background: #eceff2;border-radius: 11px;height: 45px;">
                        <h4 style="margin-bottom: 0px;">APR,12,2021</h4>
                    </div>
                    <div class="col-10" id="comment_ourlogo"><a class="navbar-brand" style="font-weight: bold;font-size: 28px;">YOFU</a></div>
                    <div class="col-2 d-flex justify-content-center align-items-center justify-content-xl-end" id="comment_close"><button class="btn btn-sm" data-bs-toggle="modal" data-bss-tooltip="" style="margin-left:5px;" type="submit" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                    <div class="col-8" id="comment_content">
                        <p>裡面雖然有酸類但不刺激，皮膚透亮有光澤<br></p>
                    </div>
                    <div class="col-4 d-xxl-flex justify-content-xxl-center" id="comment_product_image"><img width="100%" height="auto" src="../MemberCenter_assets/img/商品照1.jpg" style="max-width: 191.988px;"></div>
                    <div class="col-12" id="comment_product_name">
                        <h6 style="font-weight: bold;"><br><span style="color: rgb(68, 68, 68);">克蘭詩 漾采肌活美肌精華水 200m</span><br><br></h6>
                    </div>
                    <div class="col col-12" id="comment_time">
                        <h6 style="font-size: 12px;"><br>00:05:04<br><br></h6>
                    </div>
                </div>
                <div class="row" id="commemt-4">
                    <div class="col-12 d-flex align-items-center align-items-lg-center" id="comment_date-4" style="background: #eceff2;border-radius: 11px;height: 45px;">
                        <h4 style="margin-bottom: 0px;">APR,12,2021</h4>
                    </div>
                    <div class="col-10" id="comment_ourlogo-4"><a class="navbar-brand" style="font-weight: bold;font-size: 28px;">YOFU</a></div>
                    <div class="col-2 d-flex justify-content-center align-items-center justify-content-xl-end" id="comment_close-4"><button class="btn btn-sm" data-bs-toggle="modal" data-bss-tooltip="" style="margin-left:5px;" type="submit" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                    <div class="col-8" id="comment_content-4">
                        <p>裡面雖然有酸類但不刺激，皮膚透亮有光澤<br></p>
                    </div>
                    <div class="col-4 d-xxl-flex justify-content-xxl-center" id="comment_product_image-4"><img width="100%" height="auto" src="../MemberCenter_assets/img/商品照1.jpg" style="max-width: 191.988px;"></div>
                    <div class="col-12" id="comment_product_name-4">
                        <h6 style="font-weight: bold;"><br><span style="color: rgb(68, 68, 68);">克蘭詩 漾采肌活美肌精華水 200m</span><br><br></h6>
                    </div>
                    <div class="col col-12" id="comment_time-4">
                        <h6 style="font-size: 12px;"><br>00:05:04<br><br></h6>
                    </div>
                </div>
                <div class="row" id="commemt-3">
                    <div class="col-12 d-flex align-items-center align-items-lg-center" id="comment_date-3" style="background: #eceff2;border-radius: 11px;height: 45px;">
                        <h4 style="margin-bottom: 0px;">APR,12,2021</h4>
                    </div>
                    <div class="col-10" id="comment_ourlogo-3"><a class="navbar-brand" style="font-weight: bold;font-size: 28px;">YOFU</a></div>
                    <div class="col-2 d-flex justify-content-center align-items-center justify-content-xl-end" id="comment_close-3"><button class="btn btn-sm" data-bs-toggle="modal" data-bss-tooltip="" style="margin-left:5px;" type="submit" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                    <div class="col-8" id="comment_content-3">
                        <p>裡面雖然有酸類但不刺激，皮膚透亮有光澤<br></p>
                    </div>
                    <div class="col-4 d-xxl-flex justify-content-xxl-center" id="comment_product_image-3"><img width="100%" height="auto" src="../MemberCenter_assets/img/商品照1.jpg" style="max-width: 191.988px;"></div>
                    <div class="col-12" id="comment_product_name-3">
                        <h6 style="font-weight: bold;"><br><span style="color: rgb(68, 68, 68);">克蘭詩 漾采肌活美肌精華水 200m</span><br><br></h6>
                    </div>
                    <div class="col col-12" id="comment_time-3">
                        <h6 style="font-size: 12px;"><br>00:05:04<br><br></h6>
                    </div>
                </div>
                <div class="row" id="commemt-2">
                    <div class="col-12 d-flex align-items-center align-items-lg-center" id="comment_date-2" style="background: #eceff2;border-radius: 11px;height: 45px;">
                        <h4 style="margin-bottom: 0px;">APR,12,2021</h4>
                    </div>
                    <div class="col-10" id="comment_ourlogo-2"><a class="navbar-brand" style="font-weight: bold;font-size: 28px;">YOFU</a></div>
                    <div class="col-2 d-flex justify-content-center align-items-center justify-content-xl-end" id="comment_close-2"><button class="btn btn-sm" data-bs-toggle="modal" data-bss-tooltip="" style="margin-left:5px;" type="submit" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                    <div class="col-8" id="comment_content-2">
                        <p>裡面雖然有酸類但不刺激，皮膚透亮有光澤<br></p>
                    </div>
                    <div class="col-4 d-xxl-flex justify-content-xxl-center" id="comment_product_image-2"><img width="100%" height="auto" src="../MemberCenter_assets/img/商品照1.jpg" style="max-width: 191.988px;"></div>
                    <div class="col-12" id="comment_product_name-2">
                        <h6 style="font-weight: bold;"><br><span style="color: rgb(68, 68, 68);">克蘭詩 漾采肌活美肌精華水 200m</span><br><br></h6>
                    </div>
                    <div class="col col-12" id="comment_time-2">
                        <h6 style="font-size: 12px;"><br>00:05:04<br><br></h6>
                    </div>
                </div>
                <div class="row" id="commemt-1">
                    <div class="col-12 d-flex align-items-center align-items-lg-center" id="comment_date-1" style="background: #eceff2;border-radius: 11px;height: 45px;">
                        <h4 style="margin-bottom: 0px;">APR,12,2021</h4>
                    </div>
                    <div class="col-10" id="comment_ourlogo-1"><a class="navbar-brand" style="font-weight: bold;font-size: 28px;">YOFU</a></div>
                    <div class="col-2 d-flex justify-content-center align-items-center justify-content-xl-end" id="comment_close-1"><button class="btn btn-sm" data-bs-toggle="modal" data-bss-tooltip="" style="margin-left:5px;" type="submit" data-bs-target="#exampleModal-Delete" title="safas"><i class="fa fa-close" style="font-size: 21px;"></i></button></div>
                    <div class="col-8" id="comment_content-1">
                        <p>裡面雖然有酸類但不刺激，皮膚透亮有光澤<br></p>
                    </div>
                    <div class="col-4 d-xxl-flex justify-content-xxl-center" id="comment_product_image-1"><img width="100%" height="auto" src="../MemberCenter_assets/img/商品照1.jpg" style="max-width: 191.988px;"></div>
                    <div class="col-12" id="comment_product_name-1">
                        <h6 style="font-weight: bold;"><br><span style="color: rgb(68, 68, 68);">克蘭詩 漾采肌活美肌精華水 200m</span><br><br></h6>
                    </div>
                    <div class="col col-12" id="comment_time-1">
                        <h6 style="font-size: 12px;"><br>00:05:04<br><br></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

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
</body>


</html>
<?php require_once 'footer.php' ;?>