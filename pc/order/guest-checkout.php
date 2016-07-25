<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-9">
                    <div class="box">
                        <h2 class="box-page-title">CHECKOUT</h2>
                        <!-- 주문 상품 확인 -->
                        <div class="checkout confirm-order-product">
                            <h3 class="table-title">주문 상품 확인</h3>
                            <table class="table table-list">
                                <caption class="sr-only">결제하는 주문 상품 확인 목록</caption>
                                <colgroup>
                                    <col class="col-xs-6">
                                    <col class="col-xs-2">
                                    <col class="col-xs-2">
                                    <col class="col-xs-2">
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
                                </tr>
                                <tr>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Size : P</li>
                                            </ul>
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
                                </tr>
                                </tbody>
                            </table>
                            <div class="button-align-center">
                                <a href="#" class="button button-danger button-link button-link-large"><span>쇼핑백으로 이동</span></a>
                            </div>
                        </div>
                        <!-- 주문 상품 확인 //end -->
                        <!-- 비회원 주문 시 정보 수집 동의 -->
                        <div class="checkout">
                            <div class="table-help">
                                <h3 class="table-title">비회원 주문 시 정보 수집 동의</h3>
                                <p class="help-text">비회원 주문 시, 이용약관 및 개인 정보 수집 및 이용에 동의하셔야 합니다.</p>
                            </div>
                            <div class="agree-box scroll">
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                            </div>
                            <div class="checkbox checkbox-block">
                                <input type="checkbox" id="pcc-agree" checked="checked">
                                <label for="pcc-agree" class="checkbox-display"></label>
                                <label for="pcc-agree" class="checkbox-label">이용약관 및 개인 정보 수집 및 이용에 동의합니다.</label>
                            </div>
                        </div>
                        <!-- 비회원 주문 시 정보 수집 동의 //end -->
                        <!-- 주문자 정보 -->
                        <div class="checkout checkout-input">
                            <h3 class="table-title">주문자 정보</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">주문자 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row">이름*</th>
                                    <td>이영애</td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="cellphone">휴대폰번호*</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="cellphone" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="orderer-email">이메일주소*</label></th>
                                    <td>
                                        <div class="form-group form-inline">
                                            <input type="text" id="orderer-email" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="international-shipping">
                                    <th scope="row"><label for="international-shipping-input">해외배송상품<br>입력정보*</label></th>
                                    <td>
                                        <div class="help-group">
                                            <div class="form-group form-inline help-input">
                                                <input type="text" id="international-shipping-input" class="form-control"/>
                                                <a href="#" class="button">조회/발급</a>
                                            </div>
                                            <div class="help-box">
                                                <i class="icon-help"></i>
                                                <div class="help-layer">개인통관고유부호는 개인 식별을 위한 고유번호로<br>관세청 전자통관시스템에서 신청 즉시 부여되며<br>한번 부여받은 부호는 같은 번호로 계속 사용이 가능합니다.</div>
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="pcc-agree" checked="checked">
                                            <label for="pcc-agree" class="checkbox-display"></label>
                                            <label for="pcc-agree" class="checkbox-label">개인통관고유부호 이용 동의</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 주문자 정보 //end -->
                        <!-- 배송지 정보 -->
                        <div class="checkout checkout-input">
                            <div class="title-group">
                                <h3 class="title table-title">배송지 정보</h3>
                                <a href="#" class="button button-small">주문자 정보와 동일</a>
                            </div>
                            <table class="table table-row-list">
                                <caption class="sr-only">배송지 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row"><label for="recipient">수령인*</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="recipient" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="address">주소*</label></th>
                                    <td>
                                        <div class="input-button-group">
                                            <div class="form-group form-inline">
                                                <div><input type="text" id="address" class="form-control"/></div>
                                                <div><a href="#" class="button button-input">우편번호 찾기</a></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control">
                                            <input type="text" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="phone">연락처*</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="phone" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="phone_add">추가 연락처</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="phone_add" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="shipping-memo">
                                    <th scope="row"><label for="shipping_memo">배송 메모*</label></th>
                                    <td>
                                        <div class="form-group form-block placeholder">
                                            <label for="shipping_memo">한글 20자, 영문 40자 이내</label>
                                            <input type="text" id="shipping_memo" class="form-control"/>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 배송지 정보 //end -->
                        <!-- 결제 정보 -->
                        <div class="checkout payment-info">
                            <h3 class="table-title">결제 정보</h3>
                            <div class="inner-box">
                                <ul class="tabs payment-type">
                                    <!-- 신용카드 - 안심클릭결제 -->
                                    <li class="tab">
                                        <input type="radio" id="payment-card" name="payment-tab-group" checked="">
                                        <label for="payment-card">신용카드<br>안심클릭결제</label>
                                        <div class="tab-content">
                                            <div class="box box-small payment-choice">
                                                <strong class="choice-card-label">카드/할부 선택</strong>
                                                <div class="selectbox choice-card">
                                                    <strong class="selectbox-value">카드 선택</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="카드 선택">카드 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">할부 선택</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="할부 선택">할부 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>- 삼성/외한/하나/신한/현대/롯데/시티/NH 카드(국민/BC카드 이외 카드)는 안심클릭 인증 후 결제가 가능합니다.</li>
                                                <li>- 할부 최소 금액은 5만원이며 30만원 이상 결제 시에 공인인증이 의무화됩니다.</li>
                                                <li>- 카드사에서 제공하는 청구할인은 결제대금의 청구 시점에 차감 청구됩니다.</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- 신용카드 - 안심클릭결제 //end -->
                                    <!-- 신용카드 - 안전결제(국민/BC카드) -->
                                    <li class="tab">
                                        <input type="radio" id="payment-card2" name="payment-tab-group">
                                        <label for="payment-card2">신용카드<br>안전결제(국민/BC카드)</label>
                                        <div class="tab-content">
                                            <div class="box box-small payment-choice">
                                                <strong class="choice-card-label">카드/할부 선택</strong>
                                                <div class="selectbox choice-card">
                                                    <strong class="selectbox-value">카드 선택</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="카드 선택">카드 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                                <div class="selectbox">
                                                    <strong class="selectbox-value">할부 선택</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="할부 선택">할부 선택</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>- BC카드, KB 국민카드만 사용 가능하며, 안전결제(ISP) 인증 후 결제가 가능합니다.</li>
                                                <li>- 할부 최소 금액은 5만원이며 30만원 이상 결제 시에 공인인증이 의무화됩니다.</li>
                                                <li>- 카드사에서 제공하는 청구할인은 결제대금의 청구 시점에 차감 청구됩니다.</li>
                                                <li>- 수협,전북JB, 우리, MG 새마을 체크, 우체국 카드, 상호저축은행 신용 카드는 사용할 수 없습니다.</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- 신용카드 - 안전결제(국민/BC카드) //end -->
                                    <!-- 신용카드 - 가상계좌 -->
                                    <li class="tab">
                                        <input type="radio" id="payment-virtual" name="payment-tab-group">
                                        <label for="payment-virtual">가상계좌</label>
                                        <div class="tab-content">
                                            <ul>
                                                <li>- 입금은행을 선택하시고 고객님의 전용 계좌번호를 확인하세요.</li>
                                                <li>- 주문 후 7일 이내 입금이 확인되지 않으면 주문이 자동으로 취소됩니다.</li>
                                                <li>- 일부 자동화 기기(CD/ATM)은 현금, 통장 입금이 제한될 수 있습니다.</li>
                                                <li>- 입금이 지연되는 경우, 상품 품절로 인해 주문이 취소될 수 있으니 유의하시기 바랍니다.</li>
                                                <li>- 현금영수증과 세금계산서 둘 중 하나만 발행이 가능하며, 배송완료 후 My Page에서 신청하시기 바랍니다.</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- 신용카드 - 가상계좌 //end -->
                                    <!-- 신용카드 - 실시간 계좌이체 -->
                                    <li class="tab">
                                        <input type="radio" id="payment-transfer" name="payment-tab-group">
                                        <label for="payment-transfer">실시간 계좌이체</label>
                                        <div class="tab-content">
                                            <ul>
                                                <li>- 공인인증서 인증을 통해 실시간계좌이체를 진행하며, 상품 대금이 즉시 이체됩니다.</li>
                                                <li>- 현금영수증은 계좌이체 결제 시 바로 신청이 가능합니다.</li>
                                                <li>- 계좌이체에 따른 송금수수료는 고객부담이오니 참고하시기 바랍니다.</li>
                                                <li>- 은행별 서비스 이용가능시간에 따라 이체가 불가능할 수 있습니다.</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- 신용카드 - 실시간 계좌이체 //end -->
                                </ul>
                            </div>
                        </div>
                        <!-- 결제 정보 //end -->
                    </div>
                </div>
                <div class="col-xs-3">
                    <!-- 최종 결제 금액 -->
                    <div class="payment-box">
                        <div class="border-box checkout-payment-totals">
                            <h3 class="washed-line-text">최종 결제 금액</h3>
                            <dl class="checkout-amount">
                                <dt>총 상품금액</dt>
                                <dd><em>1,000,000</em>원</dd>
                                <dt>배송비</dt>
                                <dd><em>22,000</em>원</dd>
                                <dt>할인쿠폰</dt>
                                <dd><em>-5,000</em>원</dd>
                                <dt class="checkout-total">결제금액</dt>
                                <dd class="checkout-total"><strong><em>9,999,000</em>원</strong></dd>
                            </dl>
                        </div>
                        <div class="checkout-payment">
                            <div class="checkbox">
                                <input type="checkbox" id="checkout-agree" checked>
                                <label for="checkout-agree" class="checkbox-display"></label>
                                <label for="checkout-agree" class="checkbox-label">주문할 상품의 상품명, 가격, 배송정보 등 판매<br>조건을 확인하였으며, 구매 진행에 동의합니다.<br>(전자상거래법 8조 2항)</label>
                            </div>
                            <a href="#" class="button button-large button-primary button-block">결제하기</a>
                        </div>
                    </div>
                    <!-- 최종 결제 금액 //end -->
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>