<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="login-banner">
                <img src="../images/join/login-banner.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row login">
                <!-- 로그인 -->
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
                            <div class="checkbox">
                                <input type="checkbox" id="save-id" checked="checked">
                                <label for="save-id" class="checkbox-display"></label>
                                <label for="save-id" class="checkbox-label">아이디 저장</label>
                            </div>
                            <a href="#" class="find-id">아이디/비밀번호 찾기</a>
                        </div>
                        <div class="button-align">
                            <a href="#" class="button button-large button-primary button-block"><span>로그인</span></a>
                        </div>
                    </div>
                </div>
                <!-- 로그인 //end -->
                <!-- 회원가입 -->
                <div class="col-xs-4">
                    <div class="box">
                        <h3 class="box-title">회원가입</h3>
                        <p class="box-explain">
                            Steven Alan 회원 가입을 진심으로 환영합니다.<br>
                            만 14세 이상만 회원 가입이 가능하며, 회원이 되시면 다양한<br>
                            혜택을 받으실 수 있고,<br>
                            서비스를 안전하고 간편하게 이용 가능합니다.
                        </p>
                        <div class="button-align">
                            <a href="#" class="button button-large button-primary button-block"><span>회원가입</span></a>
                        </div>
                    </div>
                </div>
                <!-- 회원가입 //end -->
                <!-- 비회원 주문 -->
                <div class="col-xs-4">
                    <div class="box">
                        <h3 class="box-title">비회원 주문</h3>
                        <p class="box-explain">비회원 주문 시 쿠폰 사용의 제한이 있으며 Steven Alan의<br>다양한 혜택을 받으실 수 없습니다.</p>
                        <div class="button-align">
                            <a href="#" class="button button-large button-primary button-block"><span>비회원 주문</span></a>
                        </div>
                    </div>
                </div>
                <!-- 비회원 주문 //end -->
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>