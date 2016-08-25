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
        </ul>
        <!-- 주문 내역 //end -->
        <ul class="caption">
            <li>※ 비회원 주문의 경우 주문 취소/교환/반품은고객 센터로 문의 부탁드립니다.</li>
            <li>※ 주문번호를 클릭하시면 주문 상세내역을 확인할 수 있습니다.</li>
            <li>※ 주문완료 후 재고부족 등으로 인해 품절 취소가 될 수 있으니 이 점 양해부탁드립니다.</li>
            <li>※ 무통장 입금의 경우 주문 후 7일 이내 입금확인 되지 않으면 자동으로 주문이 취소됩니다.</li>
            <li>※ 주문접수 상태에서는 옵션 및 배송지 직접 변경이 가능합니다. (이후 단계는 고객센터로 문의)</li>
            <li>※ 실시간계좌이체, 가상계좌 결제의 경우 에스크로 서비스를 사용하며 구매결정 후에는 반품ㆍ교환ㆍ환불이 불가능합니다.</li>
            <li>※ 배송완료 후 구매결정을 하지 않은 경우에는 배송완료일로부터 7일 경과 후, 8일째 자동으로 구매결정됩니다.</li>
            <li>※ 해외배송 상품의 경우 개인통관고유부호가 반드시 필요하며 미기재 시 통관이 지연될 수 있습니다.</li>
        </ul>
    </div>
</div>

<?php include '../footer/footer.php'; ?>