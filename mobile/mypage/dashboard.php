<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="dashboard">
        <div class="container">
            <div class="box member-name">
                <p class="member"><strong>김태은</strong>님 반갑습니다</p>
                <a class="button button-xsmall button-secondary">로그아웃</a>
            </div>
        </div>
        <div class="container mypage-info">
            <h3 class="member-info-title"><i class="icon-right-big"></i>바로가기</h3>
            <ul class="member-info">
                <li><a href="#">주문/배송</a></li>
                <li><a href="#">위시리스트</a></li>
                <li><a href="#">1:1문의</a></li>
                <li><a href="#">쿠폰<span class="coupon-count">10</span></a></li>
                <li><a href="#">회원정보수정</a></li>
                <li><a href="#">배송지 관리</a></li>
            </ul>
        </div>
        <!-- 최근 주문 내역 -->
        <div class="container recent-order-list">
            <div class="title-group">
                <h3 class="title secondary-title">최근 주문 내역</h3>
                <a href="#" class="button button-xsmall button-secondary">MORE</a>
            </div>
            <p class="ordered-number">
                <strong>주문번호 / <em class="benton">Q00003744</em></strong>
                <span class="date">2016-05-13</span>
            </p>
            <ul class="product-list">
                <li class="list-item">
                    <div class="product-info">
                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                        <div class="item-info">
                            <span class="item-badge">NEW</span>
                            <span class="item-brand">STEVEN ALAN</span>
                            <strong class="item-name">Belted Long Shirtdress</strong>
                            <ul class="item-option">
                                <li>컬러 : INDIGO</li>
                                <li>사이즈 : P</li>
                                <li>수량 : 1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="shipping-state">
                        <span class="item-state"><i class="icon-flight"></i>배송중</span>
                        <strong class="item-amount"><em>1,234,000</em>원</strong>
                    </div>
                </li>
                <li class="list-item">
                    <div class="product-info">
                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                        <div class="item-info">
                            <span class="item-brand">STEVEN ALAN</span>
                            <strong class="item-name">Belted Long Shirtdress</strong>
                            <ul class="item-option">
                                <li>컬러 : INDIGO</li>
                                <li>사이즈 : P</li>
                                <li>수량 : 1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="shipping-state">
                        <span class="item-state"><i class="icon-flight"></i>배송중</span>
                        <strong class="item-amount"><em>1,234,000</em>원</strong>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 최근 주문 내역 //end -->
    </div>
</div>

<?php include '../footer/footer.php'; ?>