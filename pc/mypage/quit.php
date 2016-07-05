<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box">
                        <h2 class="box-page-title">회원 탈퇴</h2>
                        <div class="member-quit">
                            <p>모든 고객님께서 만족하실 수 있도록 항상 노력하고 있습니다.<br>
                                불편하신 점이 있으셨다면 진심으로 사과드립니다.
                            </p>
                            <dl class="caption">
                                <dt>유의사항</dt>
                                <dd>
                                    <ul>
                                        <li>- 회원 탈퇴는 현재 진행중인 주문이 없을 경우에만 즉시 탈퇴가 가능합니다. 주문이 있을 경우에는 상품 인수 후 탈퇴 처리 됩니다.</li>
                                        <li>- 거래 정보 관리를 위해서 회원 아이디, 상품정보, 거래내역 등의 기본 정보는 5년간 보관됩니다.</li>
                                        <li>- 회원 탈퇴 시 쿠폰, 기존 회원정보, 거래 정보 등은 모두 삭제됩니다.</li>
                                        <li>- 회원 탈퇴 처리가 진행되는 과정에서 뉴스레터가 발송될 수 있습니다. 이점 양해하여 주시기 바랍니다.</li>
                                    </ul>
                                </dd>
                            </dl>
                            <!-- 탈퇴 사유 입력 -->
                            <dl class="member-quit-input">
                                <dt>
                                    <div class="selectbox">
                                        <strong class="selectbox-value">탈퇴 사유 선택</strong>
                                        <select onchange="selectboxEvent(this);">
                                            <option value="탈퇴 사유 선택">탈퇴 사유 선택</option>
                                            <option value="상품의 다양성/가격/품질 불만">상품의 다양성/가격/품질 불만</option>
                                            <option value="교환/반품/환불 불만">교환/반품/환불 불만</option>
                                            <option value="선택3">선택3</option>
                                            <option value="선택4">선택4</option>
                                            <option value="선택5">선택5</option>
                                        </select>
                                    </div>
                                </dt>
                                <dd>
                                    <textarea rows="8" class="form-control"></textarea>
                                </dd>
                            </dl>
                            <!-- 탈퇴 사유 입력 //end -->
                        </div>
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>회원탈퇴</span></a>
                            <a href="#" class="button button-large button-warning"><span>취소</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>