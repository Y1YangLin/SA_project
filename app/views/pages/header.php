

<nav class="bg-light navbar navbar-expand-lg sticky-top">
    <div class="container d-lg-flex align-items-lg-center"><a class="navbar-brand" href="<?php echo URLROOT;?>" style="font-weight: bold;font-size: 28px;">YOFU</a><button class="navbar-toggler Triger" data-bs-toggle="offcanvas" type="button" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg"><span class="navbar-toggler-icon"></span></button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <ul class="nav d-flex justify-content-lg-start align-items-lg-center flex-column flex-lg-row navmove" style="font-weight: bold;font-size: 21px;">
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT;?>/users/product" style="color:var(--bs-navbar-hover-color);font-weight:bold;">產品</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT;?>/users/q" style="color:var(--bs-navbar-hover-color);font-weight:bold;">膚質分析</a></li>
                <li class="nav-item" style="height: 47.5px;"><button class="btn text-bg-light  d-flex align-items-center" type="submit" data-bs-toggle="modal" data-bs-target="#Modal-Customerservice" style="font-size: 21px;width: 100%;height: 100%;padding: 8px 16px;font-weight: bold;"><br><strong><span style="color: var(--bs-navbar-hover-color); background-color: rgb(248, 249, 250);">客戶服務</span></strong><br><br></button></li>
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




