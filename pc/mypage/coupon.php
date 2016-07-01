<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box wishlist">
                        <h2 class="page-title">쿠폰</h2>
                        <div class="wishlist-list">
                            <div></div>
                            <div>
                                <div class="button-group">
                                    <a href="#" class="button">사용 가능 쿠폰</a>
                                    <a href="#" class="button">지난 쿠폰 내역</a>
                                </div>
                            </div>
                            <table class="table table-list">
                                <caption class="sr-only">보유 쿠폰 목록</caption>
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
                                        <span class="coupon">15,000원</span>
                                        C37688839857
                                    </td>
                                    <td>
                                        <strong>Steven alan 상품 추가 할인</strong>
                                        <span>50,000원 이상 구매</span>
                                    </td>
                                    <td>전체 상품</td>
                                    <td>
                                        2016.06.01 ~ 2016.06.30<br>
                                        10일 (247시간) 남음
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <ul>
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