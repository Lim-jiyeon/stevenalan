<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="login-banner">
                <img src="../images/join/login-banner.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row forgot">
                <!-- 아이디 찾기 -->
                <div class="col-xs-4 col-xs-push-2">
                    <div class="box">
                        <h3 class="box-title">아이디 찾기</h3>
                        <p class="box-explain">
                            회원가입시 등록한 이메일 주소와 휴대폰 번호 중<br>
                            하나를 선택하여 입력해 주세요.
                        </p>
                        <div class="find-box">
                            <div class="radio">
                                <input type="radio" name="findId" id="findId-email" value="findId-email" checked="checked">
                                <label for="findId-email" class="radio-display"></label>
                                <label for="findId-email" class="radio-label">이메일 주소</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="findId" id="findId-phone" value="findId-phone">
                                <label for="findId-phone" class="radio-display"></label>
                                <label for="findId-phone" class="radio-label">휴대폰 번호</label>
                            </div>
                        </div>
                        <!-- 아이디 찾기 : 이메일 주소 -->
                        <div class="findId-input findId-email">
                            <div class="form-group placeholder">
                                <label for="findId-email-name">이름</label>
                                <input type="text" id="findId-email-name" class="form-control">
                            </div>
                            <div class="form-group placeholder">
                                <label for="findId-email-email">이메일 주소</label>
                                <input type="text" id="findId-email-email" class="form-control">
                            </div>
                        </div>
                        <!-- 아이디 찾기 : 이메일 주소 //end -->
                        <!-- 아이디 찾기 : 휴대폰 번호 -->
                        <div class="findId-input findId-phone">
                            <div class="form-group placeholder">
                                <label for="findId-phone-name">이름</label>
                                <input type="text" id="findId-phone-name" class="form-control">
                            </div>
                            <div class="form-group input-group">
                                <div><input type="text" class="form-control" title="휴대폰 첫번째 자리 입력"></div>
                                <div class="input-group-addon">-</div>
                                <div><input type="text" class="form-control" title="휴대폰 두번째 자리 입력"></div>
                                <div class="input-group-addon">-</div>
                                <div><input type="text" class="form-control" title="휴대폰 세번째 자리 입력"></div>
                            </div>
                        </div>
                        <!-- 아이디 찾기 : 휴대폰 번호 //end -->
                        <p class="warning"><i class="icon-attention"></i> 아이디를 찾을 수 없습니다. 정확히 입력해 주세요.</p>
                        <div class="button-align">
                            <a href="#" class="button button-large button-primary button-block"><span>확인</span></a>
                        </div>
                    </div>
                </div>
                <!-- 아이디 찾기 //end -->
                <!-- 비밀번호 찾기 -->
                <div class="col-xs-4 col-xs-push-2">
                    <div class="box">
                        <h3 class="box-title">비밀번호 찾기</h3>
                        <p class="box-explain">
                            회원가입시 등록한 이메일 주소나 휴대폰 번호로 임시<br>
                            비밀번호가 발송되며 로그인 후 비밀번호를 변경해 주세요.
                        </p>
                        <div class="find-box">
                            <div class="radio">
                                <input type="radio" name="findPassword" id="findPassword-email" value="findPassword-email" checked="checked">
                                <label for="findPassword-email" class="radio-display"></label>
                                <label for="findPassword-email" class="radio-label">이메일 주소</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="findPassword" id="findPassword-phone" value="findPassword-phone">
                                <label for="findPassword-phone" class="radio-display"></label>
                                <label for="findPassword-phone" class="radio-label">휴대폰 번호</label>
                            </div>
                        </div>
                        <!-- 비밀번호 찾기 : 이메일 주소 -->
                        <div class="findPassword-input findPassword-email">
                            <div class="form-group placeholder">
                                <label for="findPassword-email-email">아이디(Email)</label>
                                <input type="text" id="findPassword-email-email" class="form-control">
                            </div>
                            <div class="form-group placeholder">
                                <label for="findPassword-email-name">이름</label>
                                <input type="text" id="findPassword-email-name" class="form-control">
                            </div>
                            <div class="form-group placeholder">
                                <label for="findPassword-email-emergency">비상용 이메일 주소</label>
                                <input type="text" id="findPassword-email-emergency" class="form-control">
                            </div>
                        </div>
                        <!-- 비밀번호 찾기 : 이메일 주소 //end -->
                        <!-- 비밀번호 찾기 : 핸드폰 번호 -->
                        <div class="findPassword-input findPassword-phone">
                            <div class="form-group placeholder">
                                <label for="findPassword-phone-email">아이디(Email)</label>
                                <input type="text" id="findPassword-phone-email" class="form-control">
                            </div>
                            <div class="form-group placeholder">
                                <label for="findPassword-phone-name">이름</label>
                                <input type="text" id="findPassword-phone-name" class="form-control">
                            </div>
                            <div class="form-group input-group">
                                <div><input type="text" class="form-control" title="휴대폰 첫번째 자리 입력"></div>
                                <div class="input-group-addon">-</div>
                                <div><input type="text" class="form-control" title="휴대폰 두번째 자리 입력"></div>
                                <div class="input-group-addon">-</div>
                                <div><input type="text" class="form-control" title="휴대폰 세번째 자리 입력"></div>
                            </div>
                        </div>
                        <!-- 비밀번호 찾기 : 핸드폰 번호 //end -->
                        <p class="warning"><i class="icon-attention"></i> 아이디를 찾을 수 없습니다. 정확히 입력해 주세요.</p>
                        <div class="button-align">
                            <a href="#" class="button button-large button-primary button-block"><span>확인</span></a>
                        </div>
                    </div>
                </div>
                <!-- 비밀번호 찾기 //end -->
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>