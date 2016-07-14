<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box order-track">
                        <h2 class="box-page-title">주문/배송 조회</h2>
                        <!-- 주문 내역 -->
                        <div class="order-track-list guest">
                            <table class="table table-list">
                                <caption class="sr-only">주문한 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-7">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">수량</th>
                                    <th scope="col">결제금액</th>
                                    <th scope="col">배송구분</th>
                                    <th scope="col">주문상태</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="valign-top benton">
                                        2016-05-13<br>Q000003744
                                        <a href="#" class="button button-link button-danger">상세보기</a>
                                    </td>
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
                                </tbody>
                            </table>
                        </div>
                        <!-- 주문 내역 //end -->
                        <ul class="table-caution">
                            <li>- 비회원 주문의 경우 주문 취소/교환/반품은고객 센터로 문의 부탁드립니다.
                            <li>- 주문번호를 클릭하시면 주문 상세내역을 확인할 수 있습니다.</li>
                            <li>- 주문완료 후 재고부족 등으로 인해 품절 취소가 될 수 있으니 이 점 양해부탁드립니다.</li>
                            <li>- 무통장 입금의 경우 주문 후 7일 이내 입금확인 되지 않으면 자동으로 주문이 취소됩니다.</li>
                            <li>- 주문접수 상태에서는 옵션 및 배송지 직접 변경이 가능합니다. (이후 단계는 고객센터로 문의)</li>
                            <li>- 실시간계좌이체, 가상계좌 결제의 경우 에스크로 서비스를 사용하며 구매결정 후에는 반품ㆍ교환ㆍ환불이 불가능합니다.</li>
                            <li>- 배송완료 후 구매결정을 하지 않은 경우에는 배송완료일로부터 7일 경과 후, 8일째 자동으로 구매결정됩니다.</li>
                            <li>- 해외배송 상품의 경우 개인통관고유부호가 반드시 필요하며 미기재 시 통관이 지연될 수 있습니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>