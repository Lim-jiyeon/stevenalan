<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box return-refund-exchange">
                        <h2 class="box-page-title">취소/교환/반품</h2>
                        <div class="complete-box">
                            <strong class="confirm-message">반품 신청이 완료되었습니다.</strong>
                            <p>관리자 승인 후 환불되며, 취소 처리 현황은 <a href="#" class="link-line">마이페이지 &gt; 취소/교환/반품</a> 페이지에서 확인하실 수 있습니다.</p>
                        </div>
                        <!-- 반품 신청 상품 -->
                        <div class="private-info">
                            <h3 class="table-title">반품 신청 상품</h3>
                            <table class="table table-list">
                                <caption class="sr-only">반품 신청 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-6">
                                    <col class="col-xs-6">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">반품 수량</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Belted Long Shirtdress</td>
                                    <td>1</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 반품 신청 상품 //end -->
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>교환/반품 현황 보기</span></a>
                        </div>
                        <ul class="table-caution">
                            <li>- 카드결제 : 당일 경제 당일 취소가 될 경우 바로 카드 승인 취소가 되나, 카드사에서 이미 매입이 들어가 취소될 경우에는 1~2주 소요됩니다.</li>
                            <li>- 현금결제 : 취소접수 후 2~3일 내 고객님의 환불계좌로 환불처리 됩니다.</li>
                            <li>- 할인쿠폰 : 주문 후 반품, 환불의 경우 한번 사용하신 쿠폰은 재사용 할 수 있습니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>