<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">주문완료</h2>
        <!-- 주문 완료 확인 -->
        <div class="ordered-check">
            <div class="confirm-message">
                <strong>홍길동님의 주문이 확인되었습니다.</strong>
                비회원 주문 현황은 <a href="#" class="link-line">로그인/회원가입&gt;비회원 주문 조회</a>에서<br>확인하실 수 있습니다.
            </div>
            <ul class="ordered-info delimiter">
                <li>2016-05-03</li>
                <li><strong class="ordered-num">Q00003744</strong></li>
            </ul>
        </div>
        <!-- 주문 완료 확인 //end -->
        <!-- 주문 상품 정보 -->
        <div class="summary confirm-order-product">
            <h3 class="secondary-title">주문 상품 정보</h3>
            <ul class="product-list order-product-list">
                <li class="list-item">
                    <div class="product-info">
                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                        <div class="item-info">
                            <span class="item-badge item-badge-secondary">해외배송</span>
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
                    <strong class="item-amount"><em>1,234,000</em>원</strong>
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
                    <strong class="item-amount"><em>1,234,000</em>원</strong>
                </li>
            </ul>
        </div>
        <!-- 주문 상품 정보 //end -->
        <!-- 결제 정보 -->
        <div class="summary">
            <h3 class="secondary-title">결제 정보</h3>
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
                    <span class="ordered-payment-title">가상계좌</span>
                    <strong class="ordered-payment-price">
                        <ul>
                            <li>(국민은행 : <em class="benton">40849011172953</em>)</li>
                            <li class="primary"><em class="benton">2016.06.30</em>까지 입금</li>
                        </ul>
                    </strong>
                </li>
            </ul>
        </div>
        <!-- 결제 정보 //end -->
        <!-- 배송지 정보 -->
        <div class="summary">
            <h3 class="secondary-title">배송지 정보</h3>
            <ul class="ordered-shipping-info">
                <li>김영희</li>
                <li>02-444-1234 / 010-1234-1234</li>
                <li>[04778] 서울특별시 성동구 뚝섬로1길 25 (성수동1가, 서울숲 한라에코밸리) B105</li>
                <li>부재시 경비실에 맡겨주세요.</li>
                <li class="pcc-code">개인통관고유부호 M872129109224</li>
            </ul>
        </div>
        <!-- 배송지 정보 //end -->
        <div class="row button-inline-group">
            <div class="col-xs-6"><a href="#" class="button button-large"><span>계속쇼핑하기</span></a></div>
            <div class="col-xs-6"><a href="#" class="button button-large button-primary"><span>주문배송조회</span></a></div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>