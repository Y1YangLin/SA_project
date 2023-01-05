<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>註冊介面</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/adminlogin_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/adminlogin_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,1,0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/adminlogin_assets/css/styles.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col d-md-flex justify-content-md-center">
                    <div class="card" style="max-width: 516px;">
                        <div class="card-body d-flex d-sm-flex flex-column align-items-center align-items-sm-center mx-4">
                            <div class="row pt-4">
                                <div class="col d-flex justify-content-center col-12">
                                    <h1 style="background:var(--bs-card-bg);color:#97aee8;font-family:'Alumni Sans Inline One', serif;width:292.475px;height:82.225px;text-align:center;padding:1px;font-size:71.52px;"><span style="color: rgb(0, 0, 0);">YO FU</span></h1>
                                </div>
                                <div class="col justify-content-sm-center content col-12 mt-4" id="content_login">
                                    <form class="text-center form_login" method="post" style="width: 100%;">
                                        <p class="text-muted">管理者登入入口</p><input class="form-control form-control mb-3 mt-4" type="email" name="email" placeholder="電子信箱" style="font-size: 18px;">
                                        <div class="relative">
                                            <div class="fas fa-eye eye1"></div><input class="form-control form-control password1 mb-3" type="password" name="password1" placeholder="密碼" style="font-size: 18px;">
                                        </div><button class="btn btn-primary mb-4" type="button" style="font-size: 33px;background: #63686d;width: 100%;">登入</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo URLROOT;?>/adminlogin_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT;?>/adminlogin_assets/js/script.min.js"></script>
</body>

</html>