<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box return-refund-exchange">
                        <h2 class="box-page-title">취소/교환/반품</h2>
                        <div class="complete-box">
                            <strong class="confirm-message">교환 신청이 완료되었습니다.</strong>
                            <p>회수 및 검품 완료 후, 교환상품이 출고됩니다. 교환 처리 현황은 <a href="#" class="link-line">마이페이지 &gt; 취소/교환/반품</a> 페이지에서 확인하실 수 있습니다.</p>
                        </div>
                        <!-- 교환 신청 상품 -->
                        <div class="private-info">
                            <h3 class="table-title">교환 신청 상품</h3>
                            <table class="table table-list">
                                <caption class="sr-only">교환 신청 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-6">
                                    <col class="col-xs-6">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">취소 수량</th>
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
                        <!-- 교환 신청 상품 //end -->
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>교환/반품 현황 보기</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>