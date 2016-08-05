<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">로그인</h2>
        <div class="login">
            <div class="box login-box">
                <ul class="input-list forgot-input-list">
                    <li>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="아이디 (EMAIL)" title="이메일 주소 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호" title="비밀번호 입력">
                        </div>
                    </li>
                </ul>
                <div class="login-find">
                    <div class="checkbox">
                        <input type="checkbox" id="save_id" checked>
                        <label for="save_id" class="checkbox-display"></label>
                        <label for="save_id" class="checkbox-label">아이디 저장</label>
                    </div>
                    <a href="#" class="find-id">아이디/비밀번호 찾기</a>
                </div>
            </div>
            <div class="button-align-center">
                <a href="#" class="button button-block button-primary">로그인</a>
            </div>
            <div class="row button-inline-group ordered-check-button-group">
                <div class="col-xs-6"><a href="#" class="button button-fourth">회원가입</a></div>
                <div class="col-xs-6"><a href="#none" onclick="guestOrderedCheck(this);" class="button button-fourth">비회원주문조회</a></div>
            </div>
            <div class="guest-ordered-check">
                <h3 class="secondary-title">비회원 주문 조회</h3>
                <div class="box">
                    <ul class="input-list forgot-input-list">
                        <li>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="주문번호" title="주문번호 입력">
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="주문자명" title="주문자명 입력">
                            </div>
                        </li>
                    </ul>
                    <p class="help-text help-success"><i class="icon-attention"></i> 주문 결제 완료 후 발송되는 SMS 메세지의 주문번호를 입력해주세요.</p>
                </div>
                <div class="button-align-center">
                    <a href="#" class="button button-block button-primary">주문 조회</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>