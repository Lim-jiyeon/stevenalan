<?php
    include '../header/header.php';
?>

    <div class="content">
        <div class="container">
            <div class="login-banner">
                <img src="../images/login-banner.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row login">
                <div class="col-xs-4">
                    <div class="box">
                        <h3 class="box-title">로그인</h3>
                        <div class="form-group placeholder">
                            <label for="id">아이디 (EMAIL)</label>
                            <input type="text" id="id" class="form-control">
                        </div>
                        <div class="form-group placeholder">
                            <label for="password">비밀번호</label>
                            <input type="password" id="password" class="form-control">
                        </div>
                        <div class="login-find">
                            <label for="save-id" class="save-id"><input type="checkbox" id="save-id"> 아이디 저장</label>
                            <a href="#" class="find-id">아이디/비밀번호 찾기</a>
                        </div>
                        <a href="#" class="button button-primary"><span>로그인</span></a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box">
                        <h3 class="box-title">회원가입</h3>
                        <p>
                            Steven Alan 회원 가입을 진심으로 환영합니다.<br>
                            만 14세 이상만 회원 가입이 가능하며, 회원이 되시면 다양한<br>
                            혜택을 받으실 수 있고,<br>
                            서비스를 안전하고 간편하게 이용 가능합니다.
                        </p>
                        <a href="#" class="button button-primary"><span>회원가입</span></a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box">
                        <h3 class="box-title">비회원 주문 조회</h3>
                        <p>주문 결제 완료 후 발송되는 SMS 메시지의 주문조회를 입력해 주세요.</p>
                        <div class="form-group placeholder">
                            <label for="order-number">주문번호</label>
                            <input type="text" id="order-number" class="form-control">
                        </div>
                        <div class="form-group placeholder">
                            <label for="order-name">주문자명</label>
                            <input type="password" id="order-name" class="form-control">
                        </div>
                        <a href="#" class="button button-primary"><span>로그인</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include '../footer/footer.php';
?>