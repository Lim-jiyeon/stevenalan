<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">쇼핑백</h2>
        <div class="shoppingbag">
            <!-- 쇼핑백 상품 확인 -->
            <div class="tabs tabs-content-unlimited">
                <!-- 국내배송 상품 -->
                <div class="tab">
                    <input type="radio" id="local_shipping" name="shipping_type_tab_group" checked>
                    <label for="local_shipping" class="tab-label local-shipping"><span>국내배송<i class="icon-amount">0</i></span></label>
                    <div class="tab-content confirm-order-product">
                        <div class="box">
                            <ul class="order-product-list empty-list">
                                <li>
                                    쇼핑백에 담긴 상품이 없습니다.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 국내배송 상품 //end -->
                <!-- 해외배송 상품 -->
                <div class="tab">
                    <input type="radio" id="overseas_shipping" name="shipping_type_tab_group">
                    <label for="overseas_shipping" class="tab-label overseas-shipping"><span>해외배송<i class="icon-amount">0</i></span></label>
                    <div class="tab-content confirm-order-product">
                        <div class="box">
                            <ul class="order-product-list empty-list">
                                <li>
                                    쇼핑백에 담긴 상품이 없습니다.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 해외배송 상품 //end -->
            </div>
            <!-- 쇼핑백 상품 확인 //end -->
            <div class="button-align-center">
                <a href="#" class="button button-block button-large button-primary"><span>쇼핑하러 가기</span></a>
            </div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>