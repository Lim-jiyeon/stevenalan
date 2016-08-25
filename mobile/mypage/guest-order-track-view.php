<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">주문 / 배송 조회</h2>
        <p class="ordered-number">
            <strong>주문번호 / <em class="benton">Q00003744</em></strong>
            <span class="date">2016-05-13</span>
        </p>
        <!-- 주문 상품 정보 -->
        <div class="order-track-view">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>주문 상품 정보</h3>
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
        <!-- 주문 상품 정보 //end -->
        <!-- 결제 정보 -->
        <div class="order-track-view">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>결제 정보</h3>
            <ul class="ordered-payment-info">
                <li>
                    <span class="ordered-payment-title">총 상품 금액</span>
                    <strong class="ordered-payment-price"><em class="benton">215,000</em>원</strong>
                </li>
                <li>
                    <span class="ordered-payment-title">배송비</span>
                    <strong class="ordered-payment-price"><em class="benton">9,000</em>원</strong>
                </li>
                <li class="payment-price-total">
                    <span class="ordered-payment-title">총 결제 금액</span>
                    <strong class="ordered-payment-price"><em class="benton">255,000</em>원</strong>
                </li>
                <li class="virtual-account-info">
                    <span class="ordered-payment-title">
                        결제방법<br>
                        가상계좌 (국민은행 <em class="benton">40849011172953</em>)
                    </span>
                    <strong class="ordered-payment-state">
                        미입금
                    </strong>
                </li>
            </ul>
        </div>
        <!-- 결제 정보 //end -->
        <!-- 배송지 정보 -->
        <div class="order-track-view">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>배송지 정보</h3>
            <ul class="ordered-shipping-info">
                <li class="shipping-name">김영희</li>
                <li>02-444-1234 / 010-1234-1234</li>
                <li>[04778] 서울특별시 성동구 뚝섬로1길 25 (성수동1가, 서울숲 한라에코밸리) B105</li>
                <li class="shipping-memo">부재시 경비실에 맡겨주세요.</li>
                <li class="pcc-code"><span>개인통관고유부호</span>M872129109224</li>
            </ul>
        </div>
        <!-- 배송지 정보 //end -->
        <div class="button-align-center">
            <a href="#" class="button button-block button-large button-primary"><span>주문목록으로 돌아가기</span></a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>