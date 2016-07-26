<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box order-track">
                        <h2 class="box-page-title">주문/배송 조회</h2>
                        <!-- 주문 날짜 및 번호 -->
                        <ul class="inner-box order-number delimiter">
                            <li>
                                주문일자 :
                                <strong>2016-05-03</strong>
                            </li>
                            <li>
                                주문번호 :
                                <strong>Q000003744</strong>
                            </li>
                        </ul>
                        <!-- 주문 날짜 및 번호 //end -->
                        <!-- 주문 내역 -->
                        <div class="order-track-view">
                            <h3 class="table-title">주문 상품 정보</h3>
                            <table class="table table-list">
                                <caption class="sr-only">주문한 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-7">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-2">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">수량</th>
                                    <th scope="col">결제금액</th>
                                    <th scope="col">배송구분</th>
                                    <th scope="col">주문상태</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-badge item-badge-secondary">해외배송</span>
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td>해외배송</td>
                                    <td class="primary">해외물류센터입고</td>
                                </tr>
                                <tr>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td>해외배송</td>
                                    <td class="primary">배송중</td>
                                </tr>
                                <tr>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td>해외배송</td>
                                    <td class="primary">배송중</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 주문 내역 //end -->
                        <!-- 결제 정보 -->
                        <div class="order-track-view">
                            <h3 class="table-title">결제 정보</h3>
                            <table class="table table-condensed">
                                <caption class="sr-only">주문시 결제에 대한 정보의 목록</caption>
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
                                    <th scope="row">할인 금액</th>
                                    <td><em class="benton">-5,000</em>원</td>
                                    <th scope="row" class="border-left">할인쿠폰</th>
                                    <td><em class="benton">5,000</em>원</td>
                                </tr>
                                <tr>
                                    <th scope="row">총 결제 금액</th>
                                    <td><strong class="ordered-price"><em class="benton">255,000</em>원</strong></td>
                                    <th scope="row" class="border-left">가상계좌</th>
                                    <td>
                                        국민은행 : <em class="benton">40849011172953</em>
                                        <span class="warning"><i class="icon-attention"></i> 미입금</span>
                                        <a href="#" class="button button-small">영수증 발급</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 결제 정보 //end -->
                        <!-- 배송지 정보 -->
                        <div class="order-track-view">
                            <h3 class="table-title">배송지 정보</h3>
                            <table class="table table-condensed">
                                <caption class="sr-only">배송지 정보의 목록</caption>
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
                        <!-- 주문 및 발송 과정 -->
                        <div class="shipping-process">
                            <!-- 해외배송 주문 및 발송 과정 -->
                            <div class="order-track-view">
                                <h3 class="table-title">해외배송 주문 및 발송 과정</h3>
                                <!-- 해외배송 주문 및 발송 과정 Process -->
                                <ul class="process-indicator">
                                    <li>
                                        <i class="icon-documents-big"></i>
                                        <span class="process-text">주문접수</span>
                                    </li>
                                    <li>
                                        <i class="icon-credit-card-big"></i>
                                        <span class="process-text">결제완료</span>
                                    </li>
                                    <li>
                                        <i class="icon-dropbox-big"></i>
                                        <span class="process-text">상품준비중</span>
                                    </li>
                                    <li>
                                        <i class="icon-globe"></i>
                                        <span class="process-text">해외물류센터입고</span>
                                    </li>
                                    <li>
                                        <i class="icon-plane-big"></i>
                                        <span class="process-text">항공운송중</span>
                                    </li>
                                    <li>
                                        <i class="icon-note-big"></i>
                                        <span class="process-text">통관중</span>
                                    </li>
                                    <li>
                                        <i class="icon-present-big"></i>
                                        <span class="process-text">배송중</span>
                                    </li>
                                    <li>
                                        <i class="icon-check-big"></i>
                                        <span class="process-text">배송완료</span>
                                    </li>
                                </ul>
                                <!-- 해외배송 주문 및 발송 과정 Process //end -->
                                <ul class="table-caution">
                                    <li>- 주문접수 : 주문접수 후 입금을 확인하는 단계입니다. 무통장 입금의 경우 주문 후 7일 이내 입금이 확인되지 않으면 주문이 자동으로 취소됩니다.</li>
                                    <li>- 결제완료 : 결제가 완료되었거나 입금확인이 완료된 단계입니다.</li>
                                    <li>- 상품준비중 : 고객님의 주문건을 확인 후 , 해외 현지에서 상품의 배송을 준비하는 단계입니다.</li>
                                    <li>- 해외물류센터입고 : 해외 현지 물류센터로 상품이 도착하여 항공 운송을 준비하는 단계입니다.</li>
                                    <li>- 항공운송중 : 해외 현지 물류센터를 출발하여 국내로 항공운송 중인 단계입니다.</li>
                                    <li>- 통관중 : 모든 수입물품은 관세법의 규정에 따라 세관의 통관절차를 거치며, 과세기준에 따라 관부가세가 부가될 수 있습니다.</li>
                                    <li>- 배송중 : 통관완료 후 국내 운송사로 상품이 전달되어 국내 배송중인 상태입니다.</li>
                                    <li>- 배송완료 : 주문하신 상품을 수령하신 상태입니다.</li>
                                </ul>
                            </div>
                            <!-- 해외배송 주문 및 발송 과정 //end -->
                            <!-- 국내배송 주문 및 발송 과정 -->
                            <div class="order-track-view">
                                <h3 class="table-title">국내배송 주문 및 발송 과정</h3>
                                <!-- 국내배송 주문 및 발송 과정 Process -->
                                <ul class="process-indicator local-process">
                                    <li>
                                        <i class="icon-documents-big"></i>
                                        <span class="process-text">주문접수</span>
                                    </li>
                                    <li>
                                        <i class="icon-credit-card-big"></i>
                                        <span class="process-text">결제완료</span>
                                    </li>
                                    <li>
                                        <i class="icon-dropbox-big"></i>
                                        <span class="process-text">상품준비중</span>
                                    </li>
                                    <li>
                                        <i class="icon-present-big"></i>
                                        <span class="process-text">배송중</span>
                                    </li>
                                    <li>
                                        <i class="icon-check-big"></i>
                                        <span class="process-text">배송완료</span>
                                    </li>
                                </ul>
                                <!-- 국내배송 주문 및 발송 과정 Process //end -->
                                <ul class="table-caution">
                                    <li>- 주문접수 : 주문접수 후 입금을 확인하는 단계입니다. 무통장 입금의 경우 주문 후 7일 이내 입금이 확인되지 않으면 주문이 자동으로 취소됩니다.</li>
                                    <li>- 결제완료 : 결제가 완료되었거나 입금확인이 완료된 단계입니다.</li>
                                    <li>- 상품준비중 : 고객님의 주문건을 확인 후 , 해외 현지에서 상품의 배송을 준비하는 단계입니다.​​​​​​​</li>
                                    <li>- 배송중 : 통관완료 후 국내 운송사로 상품이 전달되어 국내 배송중인 상태입니다.</li>
                                    <li>- 배송완료 : 주문하신 상품을 수령하신 상태입니다.</li>
                                </ul>
                            </div>
                            <!-- 국배송 주문 및 발송 과정 //end -->
                        </div>
                        <!-- 주문 및 발송 과정 //end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>