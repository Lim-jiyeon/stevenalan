<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">주문결제</h2>
        <!-- 주문상품 확인 -->
        <div class="checkout confirm-order-product">
            <div class="title-group">
                <h3 class="title secondary-title"><span class="step">STEP 1.</span>주문상품 확인</h3>
                <a href="#none" class="button-circle"><i class="icon-plus"></i></a>
            </div>
            <div class="box">
                <ul class="order-product-list">
                    <li>
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
                        <strong class="item-amount"><em>1,234,000</em>원</strong>
                    </li>
                    <li>
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
        </div>
        <!-- 주문상품 확인 //end -->
        <!-- 주문자 정보 -->
        <div class="checkout checkout-input">
            <div class="title-group">
                <h3 class="title secondary-title"><span class="step">STEP 2.</span>주문자 정보</h3>
                <a href="#none" class="button-circle"><i class="icon-plus"></i></a>
            </div>
            <div class="box">
                <ul class="input-list">
                    <li class="text-data">이영애</li>
                    <li>
                        <div class="form-group">
                            <input type="number" value="01089001111" class="form-control" placeholder="핸드폰 번호" title="핸드폰 번호 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="email" value="tekla232@gmail.com" class="form-control" placeholder="이메일 주소" title="이메일 주소 입력">
                        </div>
                    </li>
                </ul>
                <div class="international-shipping">
                    <label for="international_shipping_input">해외배송상품 입력정보*</label>
                    <div class="form-group input-button-group">
                        <div><input type="text" id="international_shipping_input" class="form-control"></div>
                        <div class="pcc-button"><a href="#" class="button"><span>조회/발급</span></a></div>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="pcc-agree" checked="checked">
                        <label for="pcc-agree" class="checkbox-display"></label>
                        <label for="pcc-agree" class="checkbox-label">개인통관고유부호 이용 동의</label>
                    </div>
                    <p class="help-text">해외 배송상품 구매 시 배송 및 통관 목적으로 개인통관고유부호가 필요합니다. 입력하는 모든 정보는 배송 및 통관 시에만 활용되며, 다른 용도로는 사용되지 않습니다.</p>
                </div>
            </div>
        </div>
        <!-- 주문자 정보 //end -->
        <!-- 배송지 정보 -->
        <div class="checkout checkout-input">
            <div class="title-group">
                <h3 class="title secondary-title"><span class="step">STEP 3.</span>배송지 정보</h3>
                <a href="#none" class="button-circle"><i class="icon-plus"></i></a>
            </div>
            <div class="box">
                <ul class="input-list">
                    <li>
                        <div class="button-group">
                            <div><a href="#" class="button button-small button-secondary"><span>주문자 주소</span></a></div>
                            <div><a href="#" class="button button-small button-secondary"><span>신규 주소</span></a></div>
                            <div><a href="#none" class="button button-small button-secondary" onclick="modalOpen('.address_list_modal'); return false;"><span>배송지 목록</span></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="수령인" title="수령인 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group input-button-group">
                            <div><input type="number" value="04778" class="form-control" title="우편번호 입력"></div>
                            <div class="postcode-button"><a href="#" class="button"><span>우편번호 찾기</span></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="text" value="서울시 성동구 뚝섬로 1길 25" class="form-control" placeholder="주소" title="주소 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="text" value="서울숲 한라 에코밸리 B105" class="form-control" placeholder="나머지 주소" title="나머지 주소 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="number" value="01089001111" class="form-control" placeholder="핸드폰 번호" title="핸드폰 번호 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="추가 연락처" title="추가 연락처 입력">
                        </div>
                    </li>
                    <li class="shipping-memo">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="배송 메모 (한글 20자, 영문 40자 이내)" title="배송 메모 입력">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 배송지 정보 //end -->
        <!-- 할인 정보 -->
        <div class="checkout coupon-info">
            <div class="title-group">
                <h3 class="title secondary-title"><span class="step">STEP 4.</span>할인 정보</h3>
                <a href="#none" class="button-circle"><i class="icon-plus"></i></a>
            </div>
            <div class="box">
                <dl>
                    <dt class="apply-coupon">
                        <span>할인쿠폰</span>
                        <strong>
                            <b><em class="benton">-3,555</em>원 할인</b>
                            (보유 쿠폰 : 2장)
                        </strong>
                    </dt>
                    <dd class="coupon-list">
                        <ul>
                            <li>
                                <label>Belted Long Shirtdress</label>
                                <div class="selectbox">
                                    <strong class="selectbox-value">사용 가능한 쿠폰이 없습니다.</strong>
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
                                <label>Belted Long Shirtdress</label>
                                <div class="selectbox">
                                    <strong class="selectbox-value">사용 가능한 쿠폰이 없습니다.</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="사용 가능한 쿠폰이 없습니다.">사용 가능한 쿠폰이 없습니다.</option>
                                        <option value="선택1">선택1</option>
                                        <option value="선택2">선택2</option>
                                        <option value="선택3">선택3</option>
                                        <option value="선택4">선택4</option>
                                        <option value="선택5">선택5</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
        <!-- 할인 정보 //end -->
        <!-- 결제정보 -->
        <div class="checkout payment-info">
            <div class="title-group">
                <h3 class="title secondary-title"><span class="step">STEP 5.</span>결제정보</h3>
                <a href="#none" class="button-circle"><i class="icon-plus"></i></a>
            </div>
            <div class="box">
                <ul class="tabs tab-content-unlimited payment-type">
                    <!-- 신용카드 - 안심클릭결제 -->
                    <li class="tab">
                        <input type="radio" id="payment_card" name="payment_tab_group" checked>
                        <label for="payment_card" class="tab-label payment-card"><span>신용카드<br>안심클릭결제</span></label>
                        <div class="tab-content payment-choice">
                            <div class="selectbox">
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
                                <strong class="selectbox-value">할부기간 선택</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="할부기간 선택">할부기간 선택</option>
                                    <option value="선택1">선택1</option>
                                    <option value="선택2">선택2</option>
                                    <option value="선택3">선택3</option>
                                    <option value="선택4">선택4</option>
                                    <option value="선택5">선택5</option>
                                </select>
                            </div>
                            <ul class="caption">
                                <li>※ 삼성/외한/하나/신한/현대/롯데/시티/NH 카드(국민/BC카드 이외 카드)는 안심클릭 인증 후 결제가 가능합니다.</li>
                                <li>※ 할부 최소 금액은 5만원이며 30만원 이상 결제 시에 공인인증이 의무화됩니다.</li>
                                <li>※ 카드사에서 제공하는 청구할인은 결제대금의 청구 시점에 차감 청구됩니다.</li>
                            </ul>
                        </div>
                    </li>
                    <!-- 신용카드 - 안심클릭결제 //end -->
                    <!-- 신용카드 - 안전결제(국민/BC카드) -->
                    <li class="tab">
                        <input type="radio" id="payment_card2" name="payment_tab_group">
                        <label for="payment_card2" class="tab-label payment-card2"><span>신용카드<br>안전결제(국민/BC카드)</span></label>
                        <div class="tab-content payment-choice">
                            <div class="selectbox">
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
                                <strong class="selectbox-value">할부기간 선택</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="할부기간 선택">할부기간 선택</option>
                                    <option value="선택1">선택1</option>
                                    <option value="선택2">선택2</option>
                                    <option value="선택3">선택3</option>
                                    <option value="선택4">선택4</option>
                                    <option value="선택5">선택5</option>
                                </select>
                            </div>
                            <ul class="caption">
                                <li>※ BC카드, KB 국민카드만 사용 가능하며, 안전결제(ISP) 인증 후 결제가 가능합니다.</li>
                                <li>※ 할부 최소 금액은 5만원이며 30만원 이상 결제 시에 공인인증이 의무화됩니다.</li>
                                <li>※ 카드사에서 제공하는 청구할인은 결제대금의 청구 시점에 차감 청구됩니다.</li>
                                <li>※ 수협,전북JB, 우리, MG 새마을 체크, 우체국 카드, 상호저축은행 신용 카드는 사용할 수 없습니다.</li>
                            </ul>
                        </div>
                    </li>
                    <!-- 신용카드 - 안전결제(국민/BC카드) //end -->
                    <!-- 신용카드 - 가상계좌 -->
                    <li class="tab">
                        <input type="radio" id="payment_virtual" name="payment_tab_group">
                        <label for="payment_virtual" class="tab-label payment-virtual"><span>가상계좌</span></label>
                        <div class="tab-content">
                            <ul class="caption">
                                <li>※ 입금은행을 선택하시고 고객님의 전용 계좌번호를 확인하세요.</li>
                                <li>※ 주문 후 7일 이내 입금이 확인되지 않으면 주문이 자동으로 취소됩니다.</li>
                                <li>※ 일부 자동화 기기(CD/ATM)은 현금, 통장 입금이 제한될 수 있습니다.</li>
                                <li>※ 입금이 지연되는 경우, 상품 품절로 인해 주문이 취소될 수 있으니 유의하시기 바랍니다.</li>
                                <li>※ 현금영수증과 세금계산서 둘 중 하나만 발행이 가능하며, 배송완료 후 My Page에서 신청하시기 바랍니다.</li>
                            </ul>
                        </div>
                    </li>
                    <!-- 신용카드 - 가상계좌 //end -->
                    <!-- 신용카드 - 실시간 계좌이체 -->
                    <li class="tab">
                        <input type="radio" id="payment_transfer" name="payment_tab_group">
                        <label for="payment_transfer" class="tab-label payment-transfer"><span>실시간 계좌이체</span></label>
                        <div class="tab-content">
                            <ul class="caption">
                                <li>※ 공인인증서 인증을 통해 실시간계좌이체를 진행하며, 상품 대금이 즉시 이체됩니다.</li>
                                <li>※ 현금영수증은 계좌이체 결제 시 바로 신청이 가능합니다.</li>
                                <li>※ 계좌이체에 따른 송금수수료는 고객부담이오니 참고하시기 바랍니다.</li>
                                <li>※ 은행별 서비스 이용가능시간에 따라 이체가 불가능할 수 있습니다.</li>
                            </ul>
                        </div>
                    </li>
                    <!-- 신용카드 - 실시간 계좌이체 //end -->
                </ul>
            </div>
        </div>
        <!-- 결제정보 //end -->
        <!-- 최종 결제 금액 -->
        <div class="box checkout-payment-totals">
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
            <div class="checkout-payment">
                <div class="checkbox">
                    <input type="checkbox" id="checkout-agree" checked>
                    <label for="checkout-agree" class="checkbox-display"></label>
                    <label for="checkout-agree" class="checkbox-label">주문할 상품의 상품명, 가격, 배송정보 등 판매<br>조건을 확인하였으며, 구매 진행에 동의합니다.<br>(전자상거래법 8조 2항)</label>
                </div>
                <a href="#" class="button button-large button-primary button-block">선택상품 주문하기</a>
            </div>
        </div>
        <!-- 최종 결제 금액 //end -->
    </div>
</div>

<?php include '../footer/footer.php'; ?>