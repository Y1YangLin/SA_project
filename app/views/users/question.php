<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>問卷調查</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/question_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/question_assets/css/aos.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/question_assets/css/Features-Cards-icons.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/question_assets/css/Footer-with-social-media-icons.css">
</head>

<body class="text-bg-dark">
    <nav class="bg-light navbar navbar-expand-lg sticky-top">
        <div class="container d-lg-flex align-items-lg-center"><a class="navbar-brand" href="#" style="font-weight: bold;font-size: 28px;">YOFU</a><button class="navbar-toggler Triger" data-bs-toggle="offcanvas" type="button" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg"><span class="navbar-toggler-icon"></span></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                <ul class="nav d-flex justify-content-lg-start align-items-lg-center flex-column flex-lg-row navmove" style="font-weight: bold;font-size: 21px;">
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT;?>/users/signed" style="color:var(--bs-navbar-hover-color);font-weight:bold;">產品</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT;?>/users/q" style="color:var(--bs-navbar-hover-color);font-weight:bold;">膚質分析</a></li>
                    <li class="nav-item" style="height: 47.5px;"><button class="btn text-bg-light d-flex align-items-center" type="submit" data-bs-toggle="modal" data-bs-target="#Modal-Customerservice" style="font-size: 21px;width: 100%;height: 100%;padding: 8px 16px;font-weight: bold;"><br><strong><span style="color: var(--bs-navbar-hover-color); background-color: rgb(248, 249, 250);">客戶服務</span></strong><br><br></button></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" aria-expanded="false" href="#" data-bs-toggle="dropdown" style="color: var(--bs-navbar-brand-hover-color);">會員中心</a>
                        <ol class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo URLROOT;?>/users/membercenter">我的帳戶</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">登出</a></li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div data-bss-parallax-bg="true" style="height: 600px;background-image: url(<?php echo URLROOT;?>/question_assets/img/beauty-products-and-makeup-on-black-background.jpg);background-position: center;background-size: cover;margin-top: -10px;padding-bottom: 0px;margin-bottom: 0px;"></div>
    </section>
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">膚質分析調查</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Quisque quis elit pharetra justo, consequat cubilia. Nulla fames consequat sapien, fames tempus. Vulputate porta orci diam sem. Neque posuere egestas, taciti metus interdum. Tellus elementum etiam, sit quisque posuere.</p>
            </div>
        </div>
    </div>
    <div class="container d-md-flex flex-column justify-content-md-center align-items-md-center px-3">
        <div class="row" data-aos="fade-up" id="Q-1" style="max-width: 720px;margin-top: 50PX;margin-bottom: 400px;">
            <div class="col-12 text-center mb-2">
                <p class="fs-1 w-lg-50">1. 請問您洗完澡後不塗任何保養品30分鐘後臉部皮膚會出油<br></p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-inline-flex justify-content-around" style="margin:0px;margin-left:0px;">
                        <div class="text-center d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin:0px;padding-left:0px;text-align:center;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-2" name="Q-1" style="margin:0px;"><label class="form-label form-label form-check-label" for="flexRadioDefault2" style="color:var(--bs-gray-200);margin-bottom:0px;font-weight:bold;margin-left:8px;">非常不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin:0px;padding-left:0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-3" name="Q-1" style="margin:0px;"><label class="form-label form-label form-check-label" for="flexRadioDefault2" style="color:var(--bs-gray-200);margin-bottom:0px;font-weight:bold;margin-left:8px;">不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin:0px;padding-left:0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-4" name="Q-1" style="margin:0px;"><label class="form-label form-label form-check-label" for="flexRadioDefault2" style="color:var(--bs-gray-200);margin-bottom:0px;font-weight:bold;margin-left:8px;">還好</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin:0px;padding-left:0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-5" name="Q-1" style="margin:0px;"><label class="form-label form-label form-check-label" for="flexRadioDefault2" style="color:var(--bs-gray-200);margin-bottom:0px;font-weight:bold;margin-left:8px;">同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin:0px;padding-left:0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-26" name="Q-1" style="margin:0px;"><label class="form-label form-label form-check-label" for="flexRadioDefault2" style="color:var(--bs-gray-200);margin-bottom:0px;font-weight:bold;margin-left:8px;">非常同意</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" id="Q-2" style="max-width: 720px;margin-bottom: 400px;">
            <div class="col-12 text-center mb-2">
                <p class="fs-1 w-lg-50">2. 您冬天T字區域容易出油<br></p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-inline-flex justify-content-around" style="margin: 0px;margin-left: 0px;" role="radiogroup">
                        <div class="text-center d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;text-align: center;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-16" name="Q-2" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-17" name="Q-2" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-18" name="Q-2" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">還好</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-19" name="Q-2" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-20" name="Q-2" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常同意</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" id="Q-3" style="max-width: 720px;margin-bottom: 400px;">
            <div class="col-12 text-center mb-2">
                <p class="fs-1 w-lg-50">3. 您平時喜歡光澤底妝產品<br></p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-inline-flex justify-content-around" style="margin: 0px;margin-left: 0px;" role="radiogroup">
                        <div class="text-center d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;text-align: center;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-11" name="Q-3" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-12" name="Q-3" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-13" name="Q-3" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">還好</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-14" name="Q-3" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-15" name="Q-3" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常同意</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" id="Q-4" style="max-width: 720px;margin-bottom: 400px;">
            <div class="col-12 text-center mb-2">
                <p class="fs-1 w-lg-50">4. 請問您平時會因出油產生荳荳<br></p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-inline-flex justify-content-around" style="margin: 0px;margin-left: 0px;">
                        <div class="text-center d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;text-align: center;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-6" name="Q-4" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-7" name="Q-4" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-8" name="Q-4" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">還好</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-9" name="Q-4" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-10" name="Q-4" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常同意</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" id="Q-5" style="max-width: 720px;margin-bottom: 400px;">
            <div class="col-12 text-center mb-2">
                <p class="fs-1 w-lg-50">5. 一起床就可以用臉煎蛋<br></p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-inline-flex justify-content-around" style="margin: 0px;margin-left: 0px;">
                        <div class="text-center d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;text-align: center;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-21" name="Q-5" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-22" name="Q-5" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">不同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-23" name="Q-5" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">還好</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-24" name="Q-5" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">同意</label></div>
                        <div class="d-flex d-sm-flex align-items-center justify-content-sm-center align-items-sm-center form-check" style="margin: 0px;padding-left: 0px;"><input class="d-sm-flex form-check-input" type="radio" id="flexRadioDefault-25" name="Q-5" style="margin: 0px;"><label class="form-label form-check-label" for="flexRadioDefault2" style="color: var(--bs-gray-200);margin-bottom: 0px;font-weight: bold;margin-left: 8px;">非常同意</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="d-grid gap-2 d-sm-flex justify-content-sm-center" style="margin-bottom: 400px;"><button class="btn btn-outline-info btn-lg fw-bold text-bg-dark border-white px-4 me-sm-3 fw-bold" type="button" data-bs-target="#Model-Rewrite" data-bs-toggle="modal">重新填寫</button><button class="btn btn-outline-light btn-lg fw-bold text-bg-light px-4" type="submit" data-bs-target="#Modal-Confirm" data-bs-toggle="modal">送出</button></div>
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
                    <li class="list-inline-item list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></li>
                    <li class="list-inline-item list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></li>
                    <li class="list-inline-item list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path></svg></li>
                    <li class="list-inline-item list-inline-item"><a class="btn" type="button" href = "<?php echo URLROOT ?>/Admins/login"><i class="far fa-user text-light" style="height: 16px;width: 16px;"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="modal fade" role="dialog" tabindex="-1" id="Modal-Confirm" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 style="font-weight: bold;text-align: center;color: var(--green);"><span style="color: rgb(44, 62, 80);">您的膚質</span></h4>
                    <hr><img class="img-thumbnail" width="" height="auto" src="<?php echo URLROOT;?>/question_assets/img/type.jpg" style="max-width: 466px;">
                </div>
                <div class="modal-footer"><a class="btn btn-secondary" href="<?php echo URLROOT;?>">關閉</a></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="Model-Rewrite" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="color: var(--red);font-weight: bold;text-align: center;">刪除</h4>
                    <hr>
                    <form>
                        <div class="form-group mb-3">
                            <h4 style="color: var(--red);font-weight: bold;text-align: center;"><span style="color: rgb(51, 51, 51);">確定要重填?</span></h4>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-primary btn-danger" type="button">確定</button></div> -->
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><a class="btn btn-secondary" href="<?php echo URLROOT;?>/users/q">確定</a></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="Modal-Customerservice" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 style="font-weight: bold;text-align: center;color: var(--green);">聯絡我們</h4>
                    <hr>
                    <form class="text-dark" data-bss-recipient="12223ac6677c1d072c3a5614f27bf1e1">
                        <div class="form-group mb-3"><input class="form-control" type="text" name="name" placeholder="您的姓名" required=""></div>
                        <div class="form-group mb-3"><input class="form-control" type="email" name="email" placeholder="您的信箱" required=""></div>
                        <div class="form-group mb-3"><textarea class="form-control" name="message" placeholder="想說的話" rows="14" required="" minlength="10"></textarea></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">關閉</button><button class="btn btn-success" type="button" data-bs-dismiss="modal">確認送出</button></div>
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT;?>/question_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT;?>/question_assets/js/aos.min.js"></script>
    <script src="<?php echo URLROOT;?>/question_assets/js/bs-init.js"></script>
    <script src="<?php echo URLROOT;?>/question_assets/js/button.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js&quot; integrity=&quot;sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4&quot; crossorigin=&quot;anonymous"></script>
    
</body>

</html>