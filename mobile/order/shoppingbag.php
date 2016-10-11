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
                    <label for="local_shipping" class="tab-label local-shipping"><span>국내배송<i class="icon-amount">2</i></span></label>
                    <div class="tab-content confirm-order-product">
                        <ul class="product-list order-product-list">
                            <li class="list-item">
                                <div class="product-info">
                                    <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                                    <div class="item-info">
                                        <div class="item-brand-group">
                                            <span class="item-brand">COMME DES GARÇONS PLAY BY STEVEN</span>
                                            <div class="checkbox">
                                                <input type="checkbox" id="local_select_brand1" checked>
                                                <label for="local_select_brand1" class="checkbox-display"></label>
                                            </div>
                                        </div>
                                        <strong class="item-name"><a href="#">Aldama Embroidered Bib Top</a></strong>
                                        <ul class="item-option">
                                            <li>컬러 : INDIGO</li>
                                            <li>사이즈 : P</li>
                                            <li>수량 : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-option-button">
                                    <strong class="item-amount"><em>1,234,000</em>원</strong>
                                    <div class="button-inline-group button-auto-group">
                                        <div><a href="#" class="button button-small button-primary">바로구매</a></div>
                                        <div><a href="#none" onclick="itemOptionChange(this);" class="button button-small button-secondary">옵션/수량 변경</a></div>
                                        <div><a href="#" class="button button-small button-danger">삭제</a></div>
                                    </div>
                                    <div class="box item-option-change">
                                        <span class="item-option-text">옵션 / 수량 변경</span>
                                        <ul>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-button-group">
                                                    <div><a href="#" class="button"><i class="icon-minus"></i></a></div>
                                                    <div><input type="number" value="1" class="form-control"></div>
                                                    <div><a href="#" class="button"><i class="icon-plus"></i></a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="button-align-center">
                                            <a href="#" class="button button-small button-third">업데이트</a>
                                            <a href="#none" onclick="itemOptionClose(this);" class="button button-small button-danger">취소</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="product-info">
                                    <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                                    <div class="item-info">
                                        <div class="item-brand-group">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <div class="checkbox">
                                                <input type="checkbox" id="local_select_brand2" checked>
                                                <label for="local_select_brand2" class="checkbox-display"></label>
                                            </div>
                                        </div>
                                        <strong class="item-name"><a href="#">Belted Long Shirtdress Belted Long Shirtdress</a></strong>
                                        <ul class="item-option">
                                            <li>컬러 : INDIGO</li>
                                            <li>사이즈 : P</li>
                                            <li>수량 : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-option-button">
                                    <strong class="item-amount"><em>1,234,000</em>원</strong>
                                    <div class="button-inline-group button-auto-group">
                                        <div><a href="#" class="button button-small button-primary">바로구매</a></div>
                                        <div><a href="#none" onclick="itemOptionChange(this);" class="button button-small button-secondary">옵션/수량 변경</a></div>
                                        <div><a href="#" class="button button-small button-danger">삭제</a></div>
                                    </div>
                                    <div class="box item-option-change">
                                        <span class="item-option-text">옵션 / 수량 변경</span>
                                        <ul>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-button-group">
                                                    <div><a href="#" class="button"><i class="icon-minus"></i></a></div>
                                                    <div><input type="number" value="1" class="form-control"></div>
                                                    <div><a href="#" class="button"><i class="icon-plus"></i></a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="button-align-center">
                                            <a href="#" class="button button-small button-third">업데이트</a>
                                            <a href="#none" onclick="itemOptionClose(this);" class="button button-small button-danger">취소</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 국내배송 상품 //end -->
                <!-- 해외배송 상품 -->
                <div class="tab">
                    <input type="radio" id="overseas_shipping" name="shipping_type_tab_group">
                    <label for="overseas_shipping" class="tab-label overseas-shipping"><span>해외배송<i class="icon-amount">5</i></span></label>
                    <div class="tab-content confirm-order-product">
                        <ul class="product-list order-product-list">
                            <li class="list-item">
                                <div class="product-info">
                                    <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                                    <div class="item-info">
                                        <div class="item-brand-group">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <div class="checkbox">
                                                <input type="checkbox" id="overseas_select_brand1" checked>
                                                <label for="overseas_select_brand1" class="checkbox-display"></label>
                                            </div>
                                        </div>
                                        <strong class="item-name"><a href="#">Belted Long Shirtdress</a></strong>
                                        <ul class="item-option">
                                            <li>컬러 : INDIGO</li>
                                            <li>사이즈 : P</li>
                                            <li>수량 : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-option-button">
                                    <strong class="item-amount"><em>1,234,000</em>원</strong>
                                    <div class="button-inline-group button-auto-group">
                                        <div><a href="#" class="button button-small button-primary">바로구매</a></div>
                                        <div><a href="#none" onclick="itemOptionChange(this);" class="button button-small button-secondary">옵션/수량 변경</a></div>
                                        <div><a href="#" class="button button-small button-danger">삭제</a></div>
                                    </div>
                                    <div class="box item-option-change">
                                        <span class="item-option-text">옵션 / 수량 변경</span>
                                        <ul>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-button-group">
                                                    <div><a href="#" class="button"><i class="icon-minus"></i></a></div>
                                                    <div><input type="number" value="1" class="form-control"></div>
                                                    <div><a href="#" class="button"><i class="icon-plus"></i></a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="button-align-center">
                                            <a href="#" class="button button-small button-third">업데이트</a>
                                            <a href="#none" onclick="itemOptionClose(this);" class="button button-small button-danger">취소</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="product-info">
                                    <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                                    <div class="item-info">
                                        <div class="item-brand-group">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <div class="checkbox">
                                                <input type="checkbox" id="overseas_select_brand2" checked>
                                                <label for="overseas_select_brand2" class="checkbox-display"></label>
                                            </div>
                                        </div>
                                        <strong class="item-name"><a href="#">Belted Long Shirtdress Belted Long Shirtdress</a></strong>
                                        <ul class="item-option">
                                            <li>컬러 : INDIGO</li>
                                            <li>사이즈 : P</li>
                                            <li>수량 : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-option-button">
                                    <strong class="item-amount"><em>1,234,000</em>원</strong>
                                    <div class="button-inline-group button-auto-group">
                                        <div><a href="#" class="button button-small button-primary">바로구매</a></div>
                                        <div><a href="#none" onclick="itemOptionChange(this);" class="button button-small button-secondary">옵션/수량 변경</a></div>
                                        <div><a href="#" class="button button-small button-danger">삭제</a></div>
                                    </div>
                                    <div class="box item-option-change">
                                        <span class="item-option-text">옵션 / 수량 변경</span>
                                        <ul>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">BLUE AQUA STRIPE</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="쿠폰 선택">쿠폰 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-button-group">
                                                    <div><a href="#" class="button"><i class="icon-minus"></i></a></div>
                                                    <div><input type="number" value="1" class="form-control"></div>
                                                    <div><a href="#" class="button"><i class="icon-plus"></i></a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="button-align-center">
                                            <a href="#" class="button button-small button-third">업데이트</a>
                                            <a href="#none" onclick="itemOptionClose(this);" class="button button-small button-danger">취소</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 해외배송 상품 //end -->
            </div>
            <!-- 쇼핑백 상품 확인 //end -->
            <!-- 쇼핑백 결제 정보 -->
            <div class="box shoppingbag-totals">
                <dl class="shoppingbag-amount">
                    <dt>총 상품금액</dt>
                    <dd><em>1,000,000</em>원</dd>
                    <dt>배송비</dt>
                    <dd><em>22,000</em>원</dd>
                    <dt class="shoppingbag-total">결제금액</dt>
                    <dd class="shoppingbag-total"><em>9,999,000</em>원</dd>
                </dl>
                <div class="button-inline-group button-auto-group">
                    <div><a href="#" class="button button-large button-secondary">전체선택</a></div>
                    <div><a href="#" class="button button-large button-primary">선택상품 주문하기</a></div>
                </div>
            </div>
            <!-- 쇼핑백 결제 정보 //end -->
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>