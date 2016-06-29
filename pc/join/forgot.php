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
                <div class="col-xs-4 col-xs-push-2">
                    <div class="box">
                        <h3 class="box-title">아이디 찾기</h3>
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
                <div class="col-xs-4 col-xs-push-2">
                    <div class="box">
                        <h3 class="box-title">비밀번호 찾기</h3>
                        <p class="box-explain">
                            회원가입시 등록한 이메일 주소나 휴대폰 번호로 임시<br>
                            비밀번호가 발송되며 로그인 후 비밀번호를 변경해 주세요.
                        </p>
                        <a href="#" class="button button-primary"><span>회원가입</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include '../footer/footer.php';
?>