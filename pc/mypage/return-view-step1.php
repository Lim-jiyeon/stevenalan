<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box return-refund-exchange">
                        <h2 class="box-page-title">취소/교환/반품</h2>
                        <!-- 반품 사유 선택 -->
                        <div class="private-option">
                            <h3 class="table-title">반품 사유 선택</h3>
                            <table class="table table-list">
                                <caption class="sr-only">반품 사유에 대하여 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-8">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">상품정보</th>
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
                                    <td class="benton">1</td>
                                    <td class="price">299,000</td>
                                    <td class="primary">배송완료</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="private-detail-reasons">
                                        <table class="table table-row-list">
                                            <caption class="sr-only">반품 사유에 대하여 상세정보를 받는 목록</caption>
                                            <colgroup>
                                                <col class="col-xs-1">
                                                <col>
                                            </colgroup>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><label for="private_return">반품 사유</label></th>
                                                <td>
                                                    <div class="selectbox">
                                                        <strong class="selectbox-value">반품 사유 선택</strong>
                                                        <select onchange="selectboxEvent(this);" id="private_return">
                                                            <option value="반품 사유 선택">반품 사유 선택</option>
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
                        <!-- 취소 사유 선택 //end -->
                        <!-- 반품 방법 선택 -->
                        <div class="private-info return-info">
                            <h3 class="table-title">반품 방법 선택</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">반품할 방법을 선택하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row"><label for="return_yes">이미 반송하셨습니까?</label></th>
                                    <td>
                                        <div class="radio-group">
                                            <div class="radio">
                                                <input type="radio" name="return_type_select" id="return_yes" value="return-yes">
                                                <label for="return_yes" class="radio-display"></label>
                                                <label for="return_yes" class="radio-label">예, 이미 발송하였습니다.</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="return_type_select" id="return_no" value="return-no">
                                                <label for="return_no" class="radio-display"></label>
                                                <label for="return_no" class="radio-label">아니오, 아직 발송하지 않았습니다.</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- 예, 이미 발송하였습니다. -->
                                <tr class="return-select-box return-yes">
                                    <td colspan="2" class="align-left">
                                        <table class="table table-row-list">
                                            <caption class="sr-only">이미 반품할 상품을 발송한 경우 입력하는 목록</caption>
                                            <colgroup>
                                                <col class="col-xs-2">
                                                <col class="col-xs-4">
                                                <col class="col-xs-2">
                                                <col class="col-xs-4">
                                            </colgroup>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><label for="return_delivery_company">반품택배사</label></th>
                                                <td>
                                                    <div class="selectbox">
                                                        <strong class="selectbox-value">택배사 선택</strong>
                                                        <select onchange="selectboxEvent(this);" id="return_delivery_company">
                                                            <option value="택배사 선택">택배사 선택</option>
                                                            <option value="선택1">선택1</option>
                                                            <option value="선택2">선택2</option>
                                                            <option value="선택3">선택3</option>
                                                            <option value="선택4">선택4</option>
                                                            <option value="선택5">선택5</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <th scope="row"><label for="return_date">발송일</label></th>
                                                <td>
                                                    <div class="input-button-group">
                                                        <div class="form-group">
                                                            <div><input type="text" id="return_date" class="form-control"></div>
                                                            <div><a href="#" class="button button-calendar"><i class="icon-calendar"></i></a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label for="return_site">홈페이지</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="return_site" class="form-control" value="http://service.epost.go.kr" disabled>
                                                    </div>
                                                </td>
                                                <th scope="row"><label for="return_invoice_number">송장번호</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="return_invoice_number" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- 예, 이미 발송하였습니다. //end -->
                                <!-- 아니오, 아직 발송하지 않았습니다. -->
                                <tr class="return-select-box return-no">
                                    <td colspan="2">
                                        <div class="inner-box noLine information">
                                            <span class="icon-info-box">
                                                <i class="icon-info"></i>
                                                고객님이 반품을 원하시는 상품은 직접반송 상품입니다. 반품료 5,000원을 동봉하여 수령하신 택배사를 통해 하단의 반품지 주소로 착불 반송이 가능합니다.<br>
                                            아래 고객센터 또는 1:1 상담을 통해 반품 안내 가능합니다.<br>
                                            반송장은 반품 완료시까지 보관바라오며, 안내와 다르게 반송하신 경우 반품 환불이 지연 또는 보류 될 수 있으니 이 점 주의 부탁드립니다.
                                            </span>
                                        </div>
                                        <table class="table table-row-list">
                                            <caption class="sr-only">아직 반품할 상품을 발송을 하지 않은 경우 정보를 확인하는 목록</caption>
                                            <colgroup>
                                                <col class="col-xs-2">
                                                <col class="col-xs-10">
                                            </colgroup>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><label for="return_name">고객명</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="return_name" class="form-control return-name" value="김지수" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label for="return_address">반품지 주소</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="return_address" class="form-control" value="(04778) 서울시 강남구 삼성로1길 223" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label for="return_customer_service">고객센터</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="return_customer_service" class="form-control" value="070-1234-1234" disabled>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- 아니오, 아직 발송하지 않았습니다. //end -->
                                </tbody>
                            </table>
                            <div class="inner-box">
                                <strong>교환/반품 배송비 안내</strong>
                                <ul class="table-caption">
                                    <li>- 상품을 보내실 때 교환/반품 사유를 동봉하여 받으신 택배사를 이용해 보내주시기 바랍니다.</li>
                                    <li>- 단순변심 및 고객님의 사정으로 반품하실 경우 왕복택배비는 고객님 부담이며, 입점업체별 기준에 따라 배송 비용이 인상될 수 있습니다.</li>
                                    <li>- 상품 및 구성품을 분실하였거나, 택 제거, 부주의로 인해 상품이 훼손된 경우 교환/반품이 불가합니다.</li>
                                    <li>- 받으신 택배사 외에 타 택배사를 이용하여 반송하는 경우 추가 비용은 고객님 부담이오니 유의하시기 바랍니다.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- 반품 방법 선택 //end -->
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>반품 신청 및 정보 입력</span></a>
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