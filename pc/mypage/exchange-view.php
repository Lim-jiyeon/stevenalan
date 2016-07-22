<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box return-refund-exchange">
                        <h2 class="box-page-title">취소/교환/반품</h2>
                        <!-- 교환 사유 선택 -->
                        <div class="private-option">
                            <h3 class="table-title">교환 사유 선택</h3>
                            <table class="table table-list">
                                <caption class="sr-only">교환 사유에 대하여 정보를 입력하는 목록</caption>
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
                                    <th scope="col">옵션</th>
                                    <th scope="col">취소 수량</th>
                                    <th scope="col">주문금액</th>
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
                                    <td class="product-option">
                                        <div class="selectbox-block">
                                            <div class="selectbox">
                                                <strong class="selectbox-value">색상 선택</strong>
                                                <select onchange="selectboxEvent(this);" title="색상 선택">
                                                    <option value="색상 선택">색상 선택</option>
                                                    <option value="선택1">선택1</option>
                                                    <option value="선택2">선택2</option>
                                                    <option value="선택3">선택3</option>
                                                    <option value="선택4">선택4</option>
                                                    <option value="선택5">선택5</option>
                                                </select>
                                            </div>
                                            <div class="selectbox">
                                                <strong class="selectbox-value">사이즈 선택</strong>
                                                <select onchange="selectboxEvent(this);" title="사이즈 선택">
                                                    <option value="사이즈 선택">사이즈 선택</option>
                                                    <option value="선택1">선택1</option>
                                                    <option value="선택2">선택2</option>
                                                    <option value="선택3">선택3</option>
                                                    <option value="선택4">선택4</option>
                                                    <option value="선택5">선택5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="order-button">
                                        <span class="form-group">
                                            <input type="text" class="form-control" value="1" title="수량 입력">
                                        </span>
                                        /1개
                                    </td>
                                    <td class="price">299,000</td>
                                    <td class="primary">결제 완료</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="private-detail-reasons">
                                        <table class="table table-row-list">
                                            <caption class="sr-only">교환 사유에 대하여 상세정보를 받는 목록</caption>
                                            <colgroup>
                                                <col class="col-xs-1">
                                                <col>
                                            </colgroup>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><label for="private_exchange">교환 사유</label></th>
                                                <td>
                                                    <div class="selectbox">
                                                        <strong class="selectbox-value">교환 사유 선택</strong>
                                                        <select onchange="selectboxEvent(this);" id="private_exchange">
                                                            <option value="교환 사유 선택">교환 사유 선택</option>
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
                                                <th scope="row"><label for="detail_reasons">상세 사유</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea cols="60" rows="7" id="detail_reasons" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 교환 사유 선택 //end -->
                        <!-- 수거지 정보 -->
                        <div class="private-info exchange-info">
                            <h3 class="table-title">수거지 정보</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">교환할 상품 수거지 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row">고객명</th>
                                    <td>주미나</td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="pickup_contact_number">핸드폰 번호</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="pickup_contact_number" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="pickup_contact_number_add">추가 연락처</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="pickup_contact_number_add" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="pickup_address">주거지 주소</label></th>
                                    <td>
                                        <div class="input-button-group">
                                            <div class="form-group form-inline">
                                                <div><input type="text" id="pickup_address" class="form-control"/></div>
                                                <div><a href="#" class="button button-input">우편번호 찾기</a></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control">
                                            <input type="text" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 수거지 정보 //end -->
                        <!-- 교환상품 배송지 주소 -->
                        <div class="private-info exchange-info">
                            <div class="title-group">
                                <h3 class="title table-title">교환상품 배송지 주소</h3>
                                <p class="help-text">아래 주소로 교환 상품을 다시 배송해 드립니다. 다른 주소를 원하시는 변경해 주세요.</p>
                            </div>
                            <table class="table table-row-list">
                                <caption class="sr-only">교환할 상품 배송지 주소를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row">고객명</th>
                                    <td>주미나</td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="exchange_contact_number">핸드폰 번호</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="exchange_contact_number" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="exchange_contact_number_add">추가 연락처</label></th>
                                    <td>
                                        <div class="form-group input-group phone-group">
                                            <div><input type="text" id="exchange_contact_number_add" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                            <div class="input-group-addon">-</div>
                                            <div><input type="text" class="form-control"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="exchange_address">주거지 주소</label></th>
                                    <td>
                                        <div class="input-button-group">
                                            <div class="form-group form-inline">
                                                <div><input type="text" id="exchange_address" class="form-control"/></div>
                                                <div><a href="#" class="button button-input">우편번호 찾기</a></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control">
                                            <input type="text" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 교환상품 배송지 주소 //end -->
                        <!-- 교환 배송비 결제 -->
                        <div class="private-info exchange-info">
                            <h3 class="table-title">교환 배송비 결제</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">교환할 배송비 결제를 선택하는 목록</caption>
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
                        <!-- 교환 배송비 결제 //end -->
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>교환 신청</span></a>
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