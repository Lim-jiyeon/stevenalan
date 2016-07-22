<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="box">
                <h2 class="box-page-title">ORDER COMPLETE</h2>
                <!-- 주문 완료 확인 -->
                <div class="complete-box ordered-check">
                    <span class="washed-line-text">thankyou</span>
                    <strong class="confirm-message">홍길동 님의 주문이 확인되었습니다.</strong>
                    <p>비회원 주문 현황은 <a href="#" class="link-line">로그인/회원가입&gt;비회원 주문조회</a>에서 확인하실 수 있습니다.</p>
                    <ul class="ordered-info delimiter">
                        <li>주문일자 2016-05-03</li>
                        <li>주문번호 <strong class="ordered-num">Q00003744</strong></li>
                    </ul>
                </div>
                <!-- 주문 완료 확인 //end -->
                <!-- 주문 상품 정보 -->
                <div class="summary">
                    <h3 class="table-title">주문 상품 정보</h3>
                    <table class="table table-list">
                        <caption class="sr-only">비회원 주문 완료한 상품의 목록</caption>
                        <colgroup>
                            <col class="col-xs-9">
                            <col class="col-xs-1">
                            <col class="col-xs-1">
                            <col class="col-xs-1">
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col">상품정보</th>
                            <th scope="col">수량</th>
                            <th scope="col">상품금액</th>
                            <th scope="col">주문금액</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product-info aline-left">
                                <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                <div class="item-info">
                                    <span class="item-badge">NEW</span>
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <strong class="item-name">Belted Long Shirtdress</strong>
                                    <ul class="item-option">
                                        <li>Color : INDIGO</li>
                                        <li>Size : P</li>
                                    </ul>
                                </div>
                            </td>
                            <td>1</td>
                            <td>
                                <em class="discount">298,000</em>
                                <strong class="price">275,000</strong>
                            </td>
                            <td>
                                <strong class="price">275,000</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 주문 상품 정보 //end -->
                <!-- 결제 정보 -->
                <div class="summary">
                    <h3 class="table-title">결제 정보</h3>
                    <table class="table table-condensed">
                        <caption class="sr-only">비회원 주문시 결제에 대한 정보 목록</caption>
                        <colgroup>
                            <col class="col-xs-2">
                            <col class="col-xs-2">
                            <col class="col-xs-1">
                            <col class="col-xs-7">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">총 상품 금액</th>
                            <td colspan="3"><em class="benton">215,000</em>원</td>
                        </tr>
                        <tr>
                            <th scope="row">배송비</th>
                            <td colspan="3"><em class="benton">9,000</em>원</td>
                        </tr>
                        <tr>
                            <th scope="row">총 결제 금액</th>
                            <td><strong class="ordered-price"><em class="benton">255,000</em>원</strong></td>
                            <th scope="row" class="border-left">가상계좌</th>
                            <td>
                                <ul class="virtual-account-info delimiter">
                                    <li>국민은행 : <em class="benton">40849011172953</em></li>
                                    <li>입금기한 : <strong><em class="benton">2016.06.30</em></strong></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 결제 정보 //end -->
                <!-- 배송지 정보 -->
                <div class="summary">
                    <h3 class="table-title">배송지 정보</h3>
                    <table class="table table-condensed">
                        <caption class="sr-only">비회원 배송지 정보 목록</caption>
                        <colgroup>
                            <col class="col-xs-2">
                            <col class="col-xs-10">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">수령인</th>
                            <td>김영희</td>
                        </tr>
                        <tr>
                            <th scope="row">연락처</th>
                            <td><em class="benton">02-444-1234 / 010-1234-1234</em></td>
                        </tr>
                        <tr>
                            <th scope="row">배송지</th>
                            <td><em class="benton">[04778]</em> 서울특별시 성동구 뚝섬로1길 25(성수동1가, 서울숲 한라에코밸리)  B105</td>
                        </tr>
                        <tr>
                            <th scope="row">배송 메세지</th>
                            <td>부재시 경비실에 맡겨주세요.</td>
                        </tr>
                        <tr>
                            <th scope="row">개인통관고유부호</th>
                            <td><em class="benton">M8510024485233</em></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 배송지 정보 //end -->
                <div class="button-align-center">
                    <a href="#" class="button button-large button-primary">계속 쇼핑하기</a>
                    <a href="#" class="button button-large">주문/배송 조회</a>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>