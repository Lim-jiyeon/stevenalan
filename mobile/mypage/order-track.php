<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">주문 / 배송 조회</h2>
        <!-- 주문 내역 -->
        <ul class="order-track-list">
            <li>
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
            </li>
            <li>
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
            </li>
        </ul>
        <!-- 주문 내역 //end -->
        <!-- paging -->
        <div class="paging">
            <a href="#" class="prev disabled"><i class="icon-left"></i></a>
                    <span class="pagingNum">
                        <span><a href="#">1</a></span>
                        <span class="current"><a href="#">2</a></span>
                        <span><a href="#">3</a></span>
                        <span><a href="#">4</a></span>
                        <span><a href="#">4</a></span>
                    </span>
            <a href="#" class="next"><i class="icon-right"></i></a>
        </div>
        <!-- paging //end -->
    </div>
</div>

<?php include '../footer/footer.php'; ?>