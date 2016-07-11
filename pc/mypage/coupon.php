<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box">
                        <h2 class="box-page-title">쿠폰</h2>
                        <div class="coupon">
                            <!-- 쿠폰 등록 -->
                            <div class="coupon-register">
                                <div class="row">
                                    <strong class="col-xs-2">쿠폰등록</strong>
                                    <div class="col-xs-7">
                                        <div class="input-button-group">
                                            <div class="form-group placeholder">
                                                <label for="coupon-register">쿠폰에 기재된 일련번호 입력</label>
                                                <input type="text" id="coupon-register" class="form-control"/>
                                                <a href="#" class="button">등록</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 쿠폰 등록 //end -->
                            <!-- 쿠폰 내역 리스트 -->
                            <div class="button-group coupon-button">
                                <a href="#" class="button button-third">사용 가능 쿠폰</a>
                                <a href="#" class="button button-secondary">지난 쿠폰 내역</a>
                            </div>
                            <div class="coupon-content coupon-list2">
                                <table class="table table-list">
                                    <caption class="sr-only">사용 가능한 보유 쿠폰 목록</caption>
                                    <colgroup>
                                        <col class="col-xs-3">
                                        <col class="col-xs-3">
                                        <col class="col-xs-3">
                                        <col class="col-xs-3">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th scope="col">쿠폰번호</th>
                                        <th scope="col">쿠폰정보</th>
                                        <th scope="col">적용대상</th>
                                        <th scope="col">유효기간</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="coupon-type"><em class="benton">15,000</em>원</span>
                                            <span class="coupon-num"><em class="benton">C37688839857</em></span>
                                        </td>
                                        <td class="coupon-purpose">
                                            <strong>Steven alan 상품 추가 할인</strong>
                                            <span><em class="benton">50,000</em>원 이상 구매</span>
                                        </td>
                                        <td>전체 상품</td>
                                        <td>
                                            <em class="benton">2016.06.01 ~ 2016.06.30<br>
                                            10일 (247시간) 남음</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="coupon-type"><em class="benton">5%</em></span>
                                            <span class="coupon-num"><em class="benton">C37688839857</em></span>
                                        </td>
                                        <td class="coupon-purpose">
                                            <strong>배송비 할인</strong>
                                            <span>제한없음</span>
                                        </td>
                                        <td>
                                            <div class="selectbox">
                                                <strong class="selectbox-value">적용대상보기</strong>
                                                <select onchange="selectboxEvent(this);">
                                                    <option value="적용대상보기">적용대상보기</option>
                                                    <option value="brand 1">brand 1</option>
                                                    <option value="선택2">선택2</option>
                                                    <option value="선택3">선택3</option>
                                                    <option value="선택4">선택4</option>
                                                    <option value="선택5">선택5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <em class="benton">2016.06.01 ~ 2016.06.30<br>
                                            10일 (247시간)</em> 남음
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="coupon-content coupon-list1">
                                <table class="table table-list">
                                    <caption class="sr-only">지난 쿠폰 내역</caption>
                                    <colgroup>
                                        <col class="col-xs-3">
                                        <col class="col-xs-3">
                                        <col class="col-xs-3">
                                        <col class="col-xs-3">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th scope="col">쿠폰번호</th>
                                        <th scope="col">쿠폰정보</th>
                                        <th scope="col">적용대상</th>
                                        <th scope="col">사용일</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="coupon-num"><em class="benton">C37688839857</em></span>
                                        </td>
                                        <td class="coupon-purpose">
                                            <strong>Steven alan 상품 추가 할인</strong>
                                            <span><em class="benton">50,000</em>원 이상 구매</span>
                                        </td>
                                        <td>전체 상품</td>
                                        <td>
                                            <em class="benton">2016.06.01</em>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- 쿠폰 내역 리스트 //end -->
                            <ul class="table-caution">
                                <li>- 쿠폰의 적용대상은 쿠폰마다 다르며, 대상 상품은 변경될 수 있습니다.</li>
                                <li>- 쿠폰은 한 주문당 한 가지 상품, 수량 1개에 한해 적용이 가능합니다.​​​​​​​</li>
                                <li>- 유효기간이 경과했거나, 한번 사용했던 쿠폰은 재발급되지 않으므로 주문 취소나 반품시에도 돌려 받을 수 없습니다.</li>
                                <li>- 쿠폰의 할인금액이 상품의 판매가를 초과하는 경우에는 사용이 불가능합니다.</li>
                                <li>- 쿠폰 사용 시 적립금은 구매금액 기준이 아니라 할인된 금액의 적립금으로 적용됩니다.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>