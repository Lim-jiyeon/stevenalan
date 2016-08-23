<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">회원탈퇴</h2>
        <div class="box member-quit-notice">
            <p>모든 고객님께서 만족하실 수 있도록 항상 노력하고 있습니다. 고객님께서 불편하신 점이 있으셨다면 진심으로 사과드립니다.</p>
            <dl class="notice">
                <dt><i class="icon-right-dir"></i>유의사항</dt>
                <dd>- 회원 탈퇴는 진행중인 주문이 없을 경우에만 즉시 탈퇴가 가능하며, 진행중인 경우에는 상품 인수 후 탈퇴 처리 됩니다.</dd>
                <dd>- 거래 정보 관리를 위해서 회원 아이디, 상품정보, 거래내역 등의 기본 정보는 5년간 보관됩니다.</dd>
                <dd>- 회원 탈퇴 시 쿠폰, 기존 회원정보, 거래 정보 등은 모두 삭제됩니다.</dd>
                <dd>- 회원 탈퇴 처리가 진행되는 과정에서 뉴스레터가 발송될 수 있습니다. 이점 양해하여 주시기 바랍니다.</dd>
            </dl>
        </div>
    </div>
    <div class="container">
        <div class="box input-select">
            <ul class="input-list">
                <li>
                    <div class="form-group">
                        <div class="selectbox">
                            <strong class="selectbox-value">탈퇴사유선택</strong>
                            <select onchange="selectboxEvent(this);">
                                <option value="탈퇴사유선택">탈퇴사유선택</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <textarea cols="2" rows="10" class="form-control" placeholder="탈퇴사유를 입력해 주세요." title="탈퇴사유를 입력해 주세요."></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row button-inline-group">
            <div class="col-xs-6"><a href="#" class="button button-large button-primary"><span>회원탈퇴</span></a></div>
            <div class="col-xs-6"><a href="#" class="button button-large"><span>취소</span></a></div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>