<?php

if(isset($_SESSION['user_id']) || isset($_SESSION['user_email'])){
    redirect('page/dashboard');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>首頁_登入前</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Full-Height-Hero.css">
    <link rel="stylesheet" href="assets/css/Gamanet_Header_v1.css">
    <link rel="stylesheet" href="assets/css/Hero-Carousel-images.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology-.css">
    <link rel="stylesheet" href="assets/css/Ludens-Client---Login-Dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <section data-aos="fade-up" data-aos-duration="800" id="hero">
        <nav class="navbar navbar-dark navbar-expand-md">
            <div class="container"><button class="navbar-toggler" data-bs-toggle="collapse"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        </nav>
        <h1 class="text-uppercase fs-2 fw-bold text-center text-white LandingTitle" style="margin-bottom: 16px;margin-top: 261px;">化妝品比價推薦平台</h1>
        <h6 class="display-6 text-capitalize fs-5 fw-lighter text-center text-white LandingSubtitle" style="margin-bottom: 0px;padding-bottom: 0px;">Cosmetics price comparison recommendation platform</h6>
    </section>
    <nav class="navbar navbar-light navbar-expand-md fixed-top text-bg-light navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-bottom: 0px;padding-top: 0px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div><a class="navbar-brand" href="#"><span class="fw-bold">YOFU</span> </a></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item" style="margin-left: 4px;margin-right: -1px;"><a class="nav-link active link-dark" href="index.html" style="color: rgba(224,217,217,0.9);padding-left: 8px;margin-left: 8px;padding-right: 5px;">首頁</a></li>
                    <li class="nav-item"><a class="nav-link link-dark" href="about.html" style="color: rgba(224,217,217,0.9);padding-left: 11px;margin-left: 9px;padding-right: 7px;">產品</a></li>
                    <li class="nav-item"><a class="nav-link link-dark" href="faq.html" style="color: rgba(224,217,217,0.9);margin-right: 9px;">FAQ</a></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="dropdown show" style="margin-left: 763px;"><a class="dropdown-toggle fs-4 link-dark" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="padding-bottom: 0px;margin-bottom: -1px;padding-top: 0px;margin-left: 44px;"><i class="fa fa-user"></i>&nbsp;</a>
                    <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">

                        
                        <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/login">註冊/登入</a>
                            

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-light border rounded hero-technology jumbotron h1 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Lotion">
        <h1 class="fs-2 fw-bold hero-title">化妝水</h1>
        <p class="hero-subtitle">Lotion</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h2 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Essence">
        <h1 class="fs-2 fw-bold hero-title">精華液</h1>
        <p class="hero-subtitle">Essence</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h3 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Lotion2">
        <h1 class="fs-2 fw-bold hero-title">乳液</h1>
        <p class="hero-subtitle">Lotion</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h4 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Cream">
        <h1 class="fs-2 fw-bold hero-title">乳霜</h1>
        <p class="hero-subtitle">cream</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h5 py-5 px-4" data-aos="fade-up" id="Primer">
        <h1 class="fs-2 fw-bold hero-title">妝前乳</h1>
        <p class="hero-subtitle">Primer</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h6 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Foundation">
        <h1 class="fs-2 fw-bold hero-title">粉底液</h1>
        <p class="hero-subtitle">foundation</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h7 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Setting-Powder">
        <h1 class="fs-2 fw-bold hero-title">蜜粉/蜜粉餅</h1>
        <p class="hero-subtitle">setting powder</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-light border rounded hero-technology jumbotron h8 py-5 px-4" data-aos="fade-up" data-aos-duration="800" id="Setting-Spray">
        <h1 class="fs-2 fw-bold hero-title">定裝噴霧</h1>
        <p class="hero-subtitle">setting spray</p>
        <p><a class="btn btn-primary btn-lg fs-6 fw-bold text-center text-bg-light border-0 border-white hero-button" role="button" href="#">瀏覽更多</a></p>
    </div>
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h5 class="fs-3 display-5 fw-bold text-white">目標理念</h5>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4" style="margin-bottom: 0px;margin-top: 1px;padding-bottom: 0px;padding-top: 41px;">藉由顧客的問卷、瀏覽紀錄、喜愛商品等資料，推薦適合使用者膚質與臉型的化妝品與保養品</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"></div>
            </div>
            <div class="container" style="margin-bottom: -72px;margin-top: 63px;">
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <p class="text-muted my-2">2022 SA&nbsp; No.15</p>
                    </div>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary text-bg-dark bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg></div>
                            </li>
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary text-bg-dark bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg></div>
                            </li>
                            <li class="list-inline-item">
                                <div class="bs-icon-circle bs-icon-primary text-bg-dark bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                    </svg></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item"><a class="link-secondary" href="#">Cosmetic</a></li>
                            <li class="list-inline-item"><a class="link-secondary" href="#" style="margin-left: 18px;">Care Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Gamanet_Header_v1.js"></script>
</body>

</html>