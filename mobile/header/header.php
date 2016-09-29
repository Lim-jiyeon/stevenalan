<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>stevenalan</title>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <link rel="icon" href="../images/common/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../images/common/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../images/common/favicon.png">
    <link rel="stylesheet" href="../include/css/fontello.css">
    <script type="text/javascript" src="../include/js/min/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../include/js/min/slick.min.js"></script>
    <script type="text/javascript" src="../include/js/custom.js"></script>
    <link rel="stylesheet" href="../include/css/styles.css">
</head>
<body>
<header>
    <div class="site-utility">
        <ul>
            <li><a href="#">login</a></li>
            <li class="menu-mypage"><a href="#" class="link-mypage">mypage</a></li>
        </ul>
    </div>
    <div class="quick-access">
        <h1 class="site-brand">
            <a href="#" title="stevenalan" class="center-block">
                <img src="../images/common/brand-logo.png" alt="steven alan">
            </a>
        </h1>
        <div class="mobile-menu">
            <a href="#"><i class="icon-menu"></i></a>
        </div>
        <div class="search">
            <a href="#" onclick="layerOpen('.form-search');"><i class="icon-search"></i></a>
        </div>
        <div class="shoppingBag">
            <a href="#">
                <i class="icon-shoppingbag"></i>
                <span class="total-badge">3</span>
            </a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <!-- [D] 2뎁스 메뉴가 있을 경우 child-item 클래스 추가 -->
    <div class="mobile-menu-wrap">
        <ul class="sidebar-menu level-1">
            <li class="menu-item"><a href="#">collection</a></li>
            <li class="menu-item"><a href="#">new arrivals</a></li>
            <li class="menu-item child-item">
                <a href="#">women's</a>
                <ul class="level-2 child-item">
                    <li><a href="#">designers a-z</a></li>
                    <li><a href="#">clothing</a></li>
                    <li><a href="#">bags</a></li>
                    <li class="child-item">
                        <a href="#">accessories</a>
                        <ul class=" level-3">
                            <li><a href="#">sunglasses</a></li>
                            <li><a href="#">socks &amp; tights</a></li>
                            <li><a href="#">hair accessories</a></li>
                            <li><a href="#">hats, gloves &amp; scarves</a></li>
                            <li><a href="#">belts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item"><a href="#">men's</a></li>
            <li class="menu-item"><a href="#">watches</a></li>
            <li class="menu-item child-item">
                <a href="#">jewelry</a>
                <ul class="level-2 child-item">
                    <li><a href="#">designers a-z</a></li>
                    <li><a href="#">clothing</a></li>
                    <li><a href="#">bags</a></li>
                    <li><a href="#">accessories</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="#">kid's</a></li>
            <li class="menu-item"><a href="#">home</a></li>
        </ul>
        <a href="#" class="menu-close"><i class="icon-left"></i></a>
        <div class="menu-overlay"></div>
    </div>
    <!-- Sidebar Menu //end -->
    <!-- Search Form Layer -->
    <div class="form-search">
        <div class="form-group input-button-group">
            <div><input type="text" id="search_word" class="form-control" title="검색어 입력"></div>
            <div><a href="#" class="button button-primary button-small"><span>SEARCH</span></a></div>
        </div>
        <a href="#" class="form-search-close" onclick="layerClose('.form-search');"><i class="icon-cancel-thin"></i></a>
    </div>
    <!-- Search Form Layer //end -->
    <div class="link-sale">
        <a href="#">GRAND OPEN! 30%</a>
    </div>
</header>