<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">아이디 / 패스워드 찾기</h2>
        <div class="forgot">
            <div class="tabs tabs-secondary tabs-content-unlimited">
                <!-- 아이디 찾기 -->
                <div class="tab">
                    <input type="radio" id="find_id" name="forgot_tab_group" checked>
                    <label for="find_id" class="tab-label find-id"><span>아이디 찾기</span></label>
                    <div class="tab-content forgot-content">
                        <div class="box">
                            <p class="text-explain">회원가입 시 등록한 이메일 주소와 휴대폰 번호 중 하나를 선택하여 입력해 주세요.</p>
                            <div class="forgot-box">
                                <!-- 아이디 찾기 : 이메일 주소 -->
                                <div class="find-box">
                                    <div class="radio find-email">
                                        <input type="radio" name="findId" id="findId_email" value="findId-email" checked>
                                        <label for="findId_email" class="radio-display"></label>
                                        <label for="findId_email" class="radio-label">이메일 주소</label>
                                    </div>
                                    <div class="find-input findId-email">
                                        <ul class="input-list forgot-input-list">
                                            <li>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="이름" title="이름 입력">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="이메일 주소" title="이메일 주소 입력">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 아이디 찾기 : 이메일 주소 //end -->
                                <!-- 아이디 찾기 : 휴대폰 번호 -->
                                <div class="find-box">
                                    <div class="radio find-phone">
                                        <input type="radio" name="findId" id="findId_phone" value="findId-phone">
                                        <label for="findId_phone" class="radio-display"></label>
                                        <label for="findId_phone" class="radio-label">휴대폰 번호</label>
                                    </div>
                                    <div class="find-input findId-phone">
                                        <ul class="input-list forgot-input-list">
                                            <li>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="이름" title="이름 입력">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group input-group">
                                                    <div>
                                                        <div class="selectbox">
                                                            <strong class="selectbox-value">010</strong>
                                                            <select onchange="selectboxEvent(this);">
                                                                <option value="010">010</option>
                                                                <option value="선택1">선택1</option>
                                                                <option value="선택2">선택2</option>
                                                                <option value="선택3">선택3</option>
                                                                <option value="선택4">선택4</option>
                                                                <option value="선택5">선택5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-addon">-</div>
                                                    <div>
                                                        <input type="number" value="" class="form-control" title="핸드폰 번호 두번째 자리 입력">
                                                    </div>
                                                    <div class="input-group-addon">-</div>
                                                    <div>
                                                        <input type="number" value="" class="form-control" title="핸드폰 번호 세번째 자리 입력">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="help-text help-danger"><i class="icon-attention"></i> 아이디를 찾을 수 없습니다. 정확히 입력해 주세요.</p>
                                <!-- 아이디 찾기 : 휴대폰 번호 //end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 아이디 찾기 //end -->
                <!-- 패스워드 찾기 -->
                <div class="tab">
                    <input type="radio" id="find_password" name="forgot_tab_group">
                    <label for="find_password" class="tab-label find-password"><span>패스워드 찾기</span></label>
                    <div class="tab-content forgot-content">
                        <div class="box">
                            <p class="text-explain">회원가입시 등록한 이메일 주소나 휴대폰 번호로 임시 비밀번호가 발송되며 로그인 후 비밀번호를 변경해 주세요.</p>
                            <div class="forgot-box">
                                <!-- 패스워드 찾기 : 이메일 주소 -->
                                <div class="find-box">
                                    <div class="radio find-email">
                                        <input type="radio" name="findPassword" id="findPassword_email" value="findPassword-email" checked>
                                        <label for="findPassword_email" class="radio-display"></label>
                                        <label for="findPassword_email" class="radio-label">이메일 주소</label>
                                    </div>
                                    <div class="find-input findPassword-email">
                                        <ul class="input-list forgot-input-list">
                                            <li>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="이메일 주소" title="이메일 주소 입력">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="이름" title="이름 입력">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="정보 수신 이메일 주소" title="정보 수신 이메일 주소 입력">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 패스워드 찾기 : 이메일 주소 //end -->
                                <!-- 패스워드 찾기 : 핸드폰 번호 -->
                                <div class="find-box">
                                    <div class="radio find-phone">
                                        <input type="radio" name="findPassword" id="findPassword_phone" value="findPassword-phone">
                                        <label for="findPassword_phone" class="radio-display"></label>
                                        <label for="findPassword_phone" class="radio-label">휴대폰 번호</label>
                                    </div>
                                    <div class="find-input findPassword-phone">
                                        <ul class="input-list forgot-input-list">
                                            <li>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="이름" title="이름 입력">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group input-group">
                                                    <div>
                                                        <div class="selectbox">
                                                            <strong class="selectbox-value">010</strong>
                                                            <select onchange="selectboxEvent(this);">
                                                                <option value="010">010</option>
                                                                <option value="선택1">선택1</option>
                                                                <option value="선택2">선택2</option>
                                                                <option value="선택3">선택3</option>
                                                                <option value="선택4">선택4</option>
                                                                <option value="선택5">선택5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-addon">-</div>
                                                    <div>
                                                        <input type="number" value="" class="form-control" title="핸드폰 번호 두번째 자리 입력">
                                                    </div>
                                                    <div class="input-group-addon">-</div>
                                                    <div>
                                                        <input type="number" value="" class="form-control" title="핸드폰 번호 세번째 자리 입력">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 패스워드 찾기 : 핸드폰 번호 //end -->
                                <p class="help-text help-danger"><i class="icon-attention"></i> 일치하는 회원 정보를 찾을 수 없습니다. 정확히 입력해 주세요.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 패스워드 찾기 //end -->
            </div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>