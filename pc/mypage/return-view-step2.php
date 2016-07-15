<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box return-refund-exchange">
                        <h2 class="box-page-title">취소/교환/반품</h2>
                        <!-- 반품 정보 입력 -->
                        <div class="private-option">
                            <h3 class="table-title">반품 정보 입력</h3>
                            <table class="table table-list">
                                <caption class="sr-only">반품 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-6">
                                    <col class="col-xs-2">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">주문금액</th>
                                    <th scope="col">반품 수량</th>
                                    <th scope="col">반품금액</th>
                                    <th scope="col">주문상태</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="benton">2016-05-13<br>Q000003744</td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                        </div>
                                    </td>
                                    <td class="price">299,000</td>
                                    <td class="order-button">
                                        <span class="form-group">
                                            <input type="text" class="form-control" value="1" title="수량 입력">
                                        </span>
                                        /1개
                                    </td>
                                    <td class="price">299,000</td>
                                    <td class="primary">배송완료</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="private-detail-reasons">
                                        <table class="table table-row-list">
                                            <caption class="sr-only">반품 사유에 대한 정보</caption>
                                            <colgroup>
                                                <col class="col-xs-1">
                                                <col>
                                            </colgroup>
                                            <tbody>
                                            <tr>
                                                <th scope="row">반품 사유</th>
                                                <td>구매의사취소(맘에 들지 않음)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 교환 사유 선택 //end -->
                        <!-- 환불 예정금액 확인 -->
                        <div class="private-info refund-info">
                            <h3 class="table-title">환불 예정금액 확인</h3>
                            <div class="inner-box refund-amount">
                                <dl class="amount-box left">
                                    <dt class="refund-label">상품금액</dt>
                                    <dd class="refund-price"><em class="benton">350,000</em>원</dd>
                                    <dt class="refund-label">배송비</dt>
                                    <dd class="refund-price"><em class="benton">5,000</em>원</dd>
                                    <dt class="refund-label">할인금액(쿠폰)</dt>
                                    <dd class="refund-price"><em class="benton">-12,000</em>원</dd>
                                    <dt class="refund-label"><strong>반품 상품 총 결제 금액</strong></dt>
                                    <dd class="refund-price"><strong><em class="benton">338,000</em>원</strong></dd>
                                </dl>
                                <dl class="amount-box right">
                                    <dt class="refund-label">환불 방법</dt>
                                    <dd class="refund-price">무통장입금</dd>
                                    <dt class="refund-label total-label">환불예정금액 합계</dt>
                                    <dd class="refund-price total-price"><strong class="benton">338,000</strong>원</dd>
                                    <dd class="refund-text">* 주문시 배송비 할인을 받으신 경우 결제하신 상품금액만 환불됩니다.</dd>
                                </dl>
                            </div>
                        </div>
                        <!-- 환불 예정금액 확인 //end -->
                        <!-- 환불 계좌 정보 입력 -->
                        <div class="private-info refund-info">
                            <h3 class="table-title">환불 계좌 정보 입력</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">환불받을 계좌 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row"><label for="refund_bank">은행</label></th>
                                    <td>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">은행 선택</strong>
                                            <select onchange="selectboxEvent(this);" id="refund_bank">
                                                <option value="은행 선택">은행 선택</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="refund_account_number">계좌번호/예금주</label></th>
                                    <td>
                                        <div class="form-group form-inline placeholder">
                                            <label for="refund_account_number">계좌번호</label>
                                            <input type="text" id="refund_account_number" class="form-control account-number">
                                        </div>
                                        <div class="form-group form-inline placeholder">
                                            <label for="refund_account_holder">예금주</label>
                                            <input type="text" id="refund_account_holder" class="form-control account-holder">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 환불 계좌 정보 입력 //end -->
                        <!-- 반품 배송비 결제 -->
                        <div class="private-info return-info">
                            <div class="title-group">
                                <h3 class="title table-title">반품 배송비 결제</h3>
                                <p class="help-text">반품 배송비를 결제하여야 반품 신청이 가능합니다.</p>
                            </div>
                            <table class="table table-row-list">
                                <caption class="sr-only">반품할 배송비 결제를 선택하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row"><label for="shipping_charge">배송비</label></th>
                                    <td>
                                        <span class="benton">5,000원</span>
                                        <div class="selectbox">
                                            <strong class="selectbox-value">결제 방식 선택</strong>
                                            <select onchange="selectboxEvent(this);" id="shipping_charge">
                                                <option value="결제 방식 선택">결제 방식 선택</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 반품 배송비 결제 //end -->
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>반품 배송비 결제</span></a>
                            <a href="#" class="button button-large"><span>이전</span></a>
                        </div>
                        <ul class="table-caution">
                            <li>- 취소/반품/교환 신청 하시려는 상품이 목록에 없는 경우 고객센터 또는 1:1문의를 통해 접수해 주시기 바랍니다.</li>
                            <li>- 주문취소는 상품이 출고되기 전까지 가능합니다. 단, 상품준비중 상태인 경우 배송준비단계에 따라 취소가 불가능한 경우가 있으니 고객센터 또는 1:1문의 게시판으로 문의 부탁드립니다.</li>
                            <li>- 상품의 수량별 부분취소는 불가하며, 수량 전체 취소만 가능합니다.</li>
                            <li>- 반품/교환 접수는 배송완료일로부터 7일 이내 신청이 가능하며, 경우에 따라 장기 미반입 건은 SMS 통보 후 접수가 취소됩니다.</li>
                            <li>- 반품/교환 규정은 전자상거래등에서의 소비자보호에 관한 법률에 따른 반품 조건을 준수합니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>