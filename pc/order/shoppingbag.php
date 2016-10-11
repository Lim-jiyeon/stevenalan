<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="box">
                <h2 class="box-page-title">SHOPPING BAG</h2>
                <!-- 국내 배송 상품 -->
                <div class="shoppingbag-list">
                    <div class="table-help">
                        <h3 class="table-title">국내 배송 상품 (2)</h3>
                        <p class="help-text">쇼핑백의 상품은 7일간 보관됩니다.</p>
                    </div>
                    <table class="table table-list">
                        <caption class="sr-only">쇼핑백에 담은 국내 배송 상품 목록</caption>
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
                            <th scope="col">선택</th>
                            <th scope="col">상품정보</th>
                            <th scope="col">수량</th>
                            <th scope="col">상품금액</th>
                            <th scope="col">주문금액</th>
                            <th scope="col">주문/삭제</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <ul class="col-xs-3 col-xs-push-9 payment-totals">
                                    <li>
                                        <span class="col-xs-5 total-label">총 상품금액</span>
                                        <strong class="col-xs-7 total-price"><em>350.000</em>원</strong>
                                    </li>
                                    <li>
                                        <span class="col-xs-5 total-label">배송비</span>
                                        <strong class="col-xs-7 total-price"><em>22.000</em>원</strong>
                                    </li>
                                    <li class="total">
                                        <span class="col-xs-5 total-label">결제금액</span>
                                        <strong class="col-xs-7 total-price "><em>372.000</em>원</strong>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td class="valign-top">
                                <div class="checkbox">
                                    <input type="checkbox" id="local_product_select">
                                    <label for="local_product_select" class="checkbox-display"></label>
                                    <label for="local_product_select" class="checkbox-label sr-only">상품선택</label>
                                </div>
                            </td>
                            <td class="product-info aline-left">
                                <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                <div class="item-info">
                                    <span class="item-badge">NEW</span>
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <strong class="item-name">Belted Long Shirtdress</strong>
                                    <ul class="item-option">
                                        <li>컬러 : INDIGO</li>
                                        <li>사이즈 : P</li>
                                    </ul>
                                    <a href="#none" class="button button-small" onclick="itemOptionChange(this);">옵션변경</a>
                                </div>
                            </td>
                            <td class="order-button">
                                <span class="form-group">
                                    <input type="text" class="form-control" value="1">
                                </span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>수량변경</span></a></span>
                            </td>
                            <td>
                                <em class="discount">298,000</em>
                                <strong class="price">275,000</strong>
                            </td>
                            <td>
                                <strong class="price">275,000</strong>
                            </td>
                            <td class="order-button">
                                <span class="button-block"><a href="#" class="button button-small button-primary"><span>바로구매</span></a></span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                            </td>
                        </tr>
                        <tr class="item-option-change">
                            <td colspan="6">
                                <div class="col-xs-6 col-xs-push-2 item-option-box">
                                    <div class="form-group">
                                        <label for="order-number">Color</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="order-number">Size</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-xs-push-2 item-option-change-button">
                                    <a href="#" class="button button-link button-danger">변경</a>
                                    <a href="#none" class="button button-link button-danger" onclick="itemOptionClose(this);">취소</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="valign-top">
                                <div class="checkbox">
                                    <input type="checkbox" id="local_product_select2">
                                    <label for="local_product_select2" class="checkbox-display"></label>
                                    <label for="local_product_select2" class="checkbox-label sr-only">상품선택</label>
                                </div>
                            </td>
                            <td class="product-info aline-left">
                                <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                <div class="item-info">
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <strong class="item-name">Belted Long Shirtdress</strong>
                                    <ul class="item-option">
                                        <li>사이즈 : P</li>
                                    </ul>
                                    <a href="#none" class="button button-small" onclick="itemOptionChange(this);">옵션변경</a>
                                </div>
                            </td>
                            <td class="order-button">
                                <span class="form-group">
                                    <input type="text" class="form-control" value="1">
                                </span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>수량변경</span></a></span>
                            </td>
                            <td>
                                <em class="discount">298,000</em>
                                <strong class="price">275,000</strong>
                            </td>
                            <td>
                                <strong class="price">275,000</strong>
                            </td>
                            <td class="order-button">
                                <span class="button-block"><a href="#" class="button button-small button-primary"><span>바로구매</span></a></span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                            </td>
                        </tr>
                        <tr class="item-option-change">
                            <td colspan="6">
                                <div class="col-xs-6 col-xs-push-2 item-option-box">
                                    <div class="form-group">
                                        <label for="order-number">Color</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="order-number">Size</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-xs-push-2 item-option-change-button">
                                    <a href="#" class="button button-link button-danger">변경</a>
                                    <a href="#none" class="button button-link button-danger" onclick="itemOptionClose(this);">취소</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="button-align">
                        <div class="button-left">
                            <a href="#" class="button button-danger button-link button-link-large"><span>선택상품 삭제</span></a>
                            <a href="#" class="button button-danger button-link button-link-large"><span>쇼핑 계속하기</span></a>
                        </div>
                        <div class="button-right">
                            <a href="#" class="button button-large button-primary"><span>선택상품 주문하기</span></a>
                        </div>
                    </div>
                </div>
                <!-- 국내 배송 상품 //end -->
                <!-- 해외 배송 상품 -->
                <div class="shoppingbag-list">
                    <div class="table-help">
                        <h3 class="table-title">해외 배송 상품 (1)</h3>
                        <p class="help-text">쇼핑백의 상품은 7일간 보관됩니다.</p>
                    </div>
                    <table class="table table-list">
                        <caption class="sr-only">쇼핑백에 담은 해외 배송 상품 목록</caption>
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
                            <th scope="col">선택</th>
                            <th scope="col">상품정보</th>
                            <th scope="col">수량</th>
                            <th scope="col">상품금액</th>
                            <th scope="col">주문금액</th>
                            <th scope="col">주문/삭제</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <ul class="col-xs-3 col-xs-push-9 payment-totals">
                                    <li>
                                        <span class="col-xs-5 total-label">총 상품금액</span>
                                        <strong class="col-xs-7 total-price"><em>350.000</em>원</strong>
                                    </li>
                                    <li>
                                        <span class="col-xs-5 total-label">배송비</span>
                                        <strong class="col-xs-7 total-price"><em>22.000</em>원</strong>
                                    </li>
                                    <li class="total">
                                        <span class="col-xs-5 total-label">결제금액</span>
                                        <strong class="col-xs-7 total-price "><em>372.000</em>원</strong>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td class="valign-top">
                                <div class="checkbox">
                                    <input type="checkbox" id="overseas-product-select">
                                    <label for="overseas-product-select" class="checkbox-display"></label>
                                    <label for="overseas-product-select" class="checkbox-label sr-only">상품선택</label>
                                </div>
                            </td>
                            <td class="product-info aline-left">
                                <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                <div class="item-info">
                                    <span class="item-badge item-badge-secondary">해외배송</span>
                                    <span class="item-badge">NEW</span>
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <strong class="item-name">Belted Long Shirtdress</strong>
                                    <ul class="item-option">
                                        <li>컬러 : INDIGO</li>
                                        <li>사이즈 : P</li>
                                    </ul>
                                    <a href="#none" class="button button-small" onclick="itemOptionChange(this);">옵션변경</a>
                                </div>
                            </td>
                            <td class="order-button">
                                <span class="form-group">
                                    <input type="text" class="form-control" value="1">
                                </span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>수량변경</span></a></span>
                            </td>
                            <td>
                                <em class="discount">298,000</em>
                                <strong class="price">275,000</strong>
                            </td>
                            <td>
                                <strong class="price">275,000</strong>
                            </td>
                            <td class="order-button">
                                <span class="button-block"><a href="#" class="button button-small button-primary"><span>바로구매</span></a></span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                            </td>
                        </tr>
                        <tr class="item-option-change">
                            <td colspan="6">
                                <div class="col-xs-6 col-xs-push-2 item-option-box">
                                    <div class="form-group">
                                        <label for="order-number">Color</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="order-number">Size</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-xs-push-2 item-option-change-button">
                                    <a href="#" class="button button-link button-danger">변경</a>
                                    <a href="#none" class="button button-link button-danger" onclick="itemOptionClose(this);">취소</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="valign-top">
                                <div class="checkbox">
                                    <input type="checkbox" id="overseas-product-select2">
                                    <label for="overseas-product-select2" class="checkbox-display"></label>
                                    <label for="overseas-product-select2" class="checkbox-label sr-only">상품선택</label>
                                </div>
                            </td>
                            <td class="product-info aline-left">
                                <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                <div class="item-info">
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <strong class="item-name">Belted Long Shirtdress</strong>
                                    <ul class="item-option">
                                        <li>사이즈 : P</li>
                                    </ul>
                                    <a href="#none" class="button button-small" onclick="itemOptionChange(this);">옵션변경</a>
                                </div>
                            </td>
                            <td class="order-button">
                                <span class="form-group">
                                    <input type="text" class="form-control" value="1">
                                </span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>수량변경</span></a></span>
                            </td>
                            <td>
                                <em class="discount">298,000</em>
                                <strong class="price">275,000</strong>
                            </td>
                            <td>
                                <strong class="price">275,000</strong>
                            </td>
                            <td class="order-button">
                                <span class="button-block"><a href="#" class="button button-small button-primary"><span>바로구매</span></a></span>
                                <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                            </td>
                        </tr>
                        <tr class="item-option-change">
                            <td colspan="6">
                                <div class="col-xs-6 col-xs-push-2 item-option-box">
                                    <div class="form-group">
                                        <label for="order-number">Color</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="order-number">Size</label>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">선택하세요</strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="선택하세요">선택하세요</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-xs-push-2 item-option-change-button">
                                    <a href="#" class="button button-link button-danger">변경</a>
                                    <a href="#none" class="button button-link button-danger" onclick="itemOptionClose(this);">취소</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="button-align">
                        <div class="button-left">
                            <a href="#" class="button button-danger button-link button-link-large"><span>선택상품 삭제</span></a>
                            <a href="#" class="button button-danger button-link button-link-large"><span>쇼핑 계속하기</span></a>
                        </div>
                        <div class="button-right">
                            <a href="#" class="button button-large button-primary"><span>선택상품 주문하기</span></a>
                        </div>
                    </div>
                </div>
                <!-- 해외 배송 상품 //end -->
                <ul class="table-caution">
                    <li>- 해외배송 상품과 국내배송 상품은 함께 결제하실 수 없으니 장바구니 별로 따로 결제해 주시기 바랍니다.</li>
                    <li>- 국내배송 상품의 경우 브랜드는 동일하나 거래처가 다를 경우, 배송료가 각각 부과되오니 이 점 유의해 주시기 바랍니다.</li>
                    <li>- 주문완료 후 재고부족 등으로 인해 품절 취소 될 수 있으니 이 점 양해 부탁드립니다.</li>
                </ul>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>