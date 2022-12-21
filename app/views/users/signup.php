<?php
header("content-type:text/html;charset=utf-8");


// if(isset($_SESSION['user_name']) || isset($_SESSION['user_email'])){
//    header('Location: ./class/dashboard?error=none');
//    exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>註冊介面</title>
      <link rel="stylesheet" href="<?php echo URLROOT; ?>/login_assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alumni+Sans+Inline+One&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Angkor&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bakbak+One&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barrio&amp;display=swap">
      <link rel="stylesheet" href="<?php echo URLROOT; ?>/login_assets/css/styles.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,1,0" />
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
   </head>
   
  <body>
      <section class="position-relative py-4 py-xl-5">
         <div class="container" style="height: 33px;">
            <div class="row">
               <div class="col">
                  <nav class="navbar navbar-light navbar-expand-md fixed-top text-bg-light navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;height: 48px;padding-bottom: 0px;margin-top: 3px;">
                     <div class="container">
                        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div><a class="navbar-brand" href="#"><span class="fw-bold">YOFU</span> </a></div>
                        <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                           <ul class="navbar-nav nav-right">
                              <li class="nav-item"><a class="nav-link active link-dark" href="D:/SA/httpdoc/index.php" style="color: rgba(224,217,217,0.9);">首頁</a></li>
                              <li class="nav-item"><a class="nav-link link-dark" href="../about.php" style="color: rgba(224,217,217,0.9);">產品</a></li>
                              <li class="nav-item"><a class="nav-link link-dark" href="../faq.php" style="color: rgba(224,217,217,0.9);">FAQ</a></li>
                              <li class="nav-item"></li>
                           </ul>
                           <div class="dropdown">
                              <a class="dropdown-toggle link-dark d-xl-flex justify-content-xl-start align-items-xl-center" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgba(224,217,217,0.9);">服務</a>
                              <div class="dropdown-menu"><a class="dropdown-item" href="services.php">膚質分析</a><a class="dropdown-item" href="#">商品比價</a></div>
                           </div>
                           <p class="ms-auto navbar-text actions" style="padding-left: 0px;padding-bottom: 11px;padding-top: 8px;margin-right: -31px;"><a href="javascript:void(0);" role="button" aria-expanded="false" data-bs-toggle="dropdown"><span id="profile-name-header"></span><img id="user-img-id" src="<?php echo URLROOT; ?>/login_assets/img/avatar-placeholder.png" style="width: 2rem;" width="32" height="32"><img class="chevron" src="<?php echo URLROOT; ?>/login_assets/img/icon_chevron-down.svg"></a> </p>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
         <div class="container">
            <?php //print_r($data); ?>
            <div class="row d-flex justify-content-center">
               <div class="col-md-11 col-lg-5 col-xl-4">
                  <div class="card mb-5">
                     <div class="card-body d-flex flex-column align-items-center" style="padding-bottom: 42px;margin-bottom: 24px;margin-top: 16px;padding-top: 12px;height: 663.5px;">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: var(--bs-card-bg);width: 257px;color: var(--bs-card-bg);">
                           <h1 style="background: var(--bs-card-bg);color: #97aee8;font-family: 'Alumni Sans Inline One', serif;width: 292.475px;height: 82.225px;text-align: center;padding: 1px;font-size: 71.52px;">YO FU</h1>
                        </div>
                        <div style="margin-left: 1px;width: 258.375px;"></div>
                        <div class="btn-group item" role="group" style="margin-bottom: 25px;width: 330px;height: 54px;">
                          <button class="btn btn-primary button_signup button_signup_cs" type="button" style="font-size: 26px;margin-right: 2px;border-radius: 10px;height: 55px;background: var(--bs-card-bg);color: var(--bs-black);font-weight: bold;font-family: Barrio, serif;border-style: none;border-color: var(--bs-black); " value="註冊">會員註冊</button>
                          <button class="btn btn-primary button_login button_login_cs" type="button" style="font-size: 26px;margin-left: 2px;border-radius: 10px;height: 55px;color: var(--bs-black);background: var(--bs-card-bg);font-weight: bold;border-style: none;border-color: var(--bs-gray-900);" value="註冊介面.bsdesign">立即登入</button></div>
                        <div class="content">
                           <div id = "content_signup" style="display: none ;">

                              <form class="text-center form_signup" action="<?php echo URLROOT; ?>/users/signup" name="signup-form" method="post" style="width: 376px;padding-left: 0px; ">
                                
                                <input id = "name" class="form-control" type="name" name="name" placeholder="姓名" style="font-size: 18px;margin-bottom: 15px;padding-right: 206px;margin-right: -237px;">
                                
                                <?php echo !empty($data['username_err']) ? '<span style="color:red;"><b>'.$data['username_err'].'</b> </span>': '';?>

                                <!-- <input class="form-control" type="text" name="address" placeholder="住址" style="font-size: 18px;margin-bottom: 15px;">
                                <input class="form-control" type="phone" name="phone" placeholder="電話" style="font-size: 18px;margin-bottom: 15px;"> -->
                                <input class="form-control" type="email" name="email" placeholder="信箱" style="font-size: 18px;margin-bottom: 15px;">
                                <?php echo !empty($data['email_err']) ? '<span style="color:red;"><b>'.$data['email_err'].'</b> </span>': '';
                                ?> 
                                
                                 <div class = "relative ">
                                    <div class="fas fa-eye eye"></div>   
                                    <input class="form-control password" type="password" name="pwd" placeholder="密碼" style="font-size: 18px;margin-bottom: 17px;">             
                                 </div>                             
                                 <?php echo !empty($data['password_err']) ? '<span style="color:red;"><b>'.$data['password_err'].'</b> </span>': '';?>
                                 <div class = "relative ">
                                    <div class="fa fa-eye eye1"></div>
                                    <input class="form-control password1" type="password" name="repwd" placeholder="再次輸入密碼" style="font-size: 18px;margin-bottom: 17px;">                        
                                    <?php //echo 'test' ;?>
                                 </div>
                                 <?php echo !empty($data['passwordConfirmation_err']) ? '<span style="color:red;"><b>'.$data['passwordConfirmation_err'].'</b> </span>  <br>': '';?>
                                <button class="btn btn-primary test" type="submit" name="submit" style="width: 267px;font-size: 33px;height: 55.5px;padding-top: 5px;padding-bottom: 6px;background: #63686d;font-family: Barrio, serif;font-weight: bold;">註冊</button>
                              </form>
                           </div>
                           
                              <div id = "content_login">
                                 <form class="text-center form_login" action="<?php echo URLROOT; ?>/users/login" name="signin-form" method="post"style="width: 376px;padding-left: 0px;">
                                    <input class="form-control" type="email" name="email" placeholder="電子信箱" style="font-size: 18px;margin-bottom: 15px;">
                                    
                                    <?php //echo !empty($data['email_err']) ? '<span style="color:red;"><b>信箱輸入錯囉 !</b> </span>': '';?>
                                    
                                    <div class = "relative ">
                                       <div class="fas fa-eye eye2"></div>
                                       <input class="form-control password2" type="password" name="pwd" placeholder="密碼" style="font-size: 18px;margin-bottom: 17px;">                                  
                                    </div> 
                                    <?php //echo !empty($data['password_err']) ? '<span style="color:red;"><b>密碼輸入錯囉 ! </b>': '';?>                                    
                                    <p class="text-muted" style="margin-top: 10px;">忘記密碼?</p>
                                    <button class="btn btn-primary" name="submit" type="submit" style="width: 267px;font-size: 33px;height: 55.5px;padding-top: 5px;padding-bottom: 6px;background: #63686d;">登入</button>
                                 </form>
                              </div>
                              <!-- php code here  -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="text-center bg-dark">
         <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
               <li class="list-inline-item me-4"><a class="link-light" href="#">Web design</a></li>
               <li class="list-inline-item me-4"><a class="link-light" href="#">Development</a></li>
               <li class="list-inline-item"><a class="link-light" href="#">Hosting</a></li>
            </ul>
            <ul class="list-inline">
               <li class="list-inline-item me-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                     <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                  </svg>
               </li>
               <li class="list-inline-item me-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                     <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                  </svg>
               </li>
               <li class="list-inline-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                     <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                  </svg>
               </li>
            </ul>
            <p class="text-muted mb-0">Copyright © 2022 Brand</p>
         </div>
      </footer>
      <script src="<?php echo URLROOT; ?>/login_assets/bootstrap/js/bootstrap.min.js"></script><script src="<?php echo URLROOT; ?>/login_assets/js/script.min.js"></script>
   </body>
</html>