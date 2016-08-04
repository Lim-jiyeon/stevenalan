<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">회원가입</h2>
        <!-- 필수 입력 정보 -->
        <div class="signup">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>필수 입력 정보</h3>
            <div class="box">
                <ul class="input-list">
                    <li>
                        <div class="form-group input-button-group">
                            <div><input type="email" class="form-control" placeholder="아이디" title="이메일 입력"></div>
                            <div><a href="#" class="button"><span>중복확인</span></a></div>
                        </div>
                        <p class="help-text help-success"><i class="icon-check"></i> 사용 가능한 이메일입니다.</p>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호" title="비밀번호 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호 재확인" title="비밀번호 재입력">
                        </div>
                        <p class="help-text help-danger"><i class="icon-attention"></i> 비밀번호가 일치하지 않습니다.</p>
                    </li>
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
                    <li>
                        <div class="form-group input-group">
                            <div>
                                <input type="email" class="form-control" placeholder="이메일" title="이메일 입력">
                            </div>
                            <div class="input-group-addon">@</div>
                            <div>
                                <div class="input-button-group">
                                    <div>
                                        <input type="email" class="form-control" placeholder="직접입력" title="직접입력">
                                    </div>
                                    <div>
                                        <div class="selectbox">
                                            <strong class="selectbox-value"></strong>
                                            <select onchange="selectboxEvent(this);">
                                                <option value="직접입력">직접입력</option>
                                                <option value="선택1">선택1</option>
                                                <option value="선택2">선택2</option>
                                                <option value="선택3">선택3</option>
                                                <option value="선택4">선택4</option>
                                                <option value="선택5">선택5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox checkbox-block">
                            <input type="checkbox" id="sameId" name="sameId">
                            <label for="sameId" class="checkbox-display"></label>
                            <label for="sameId" class="checkbox-label primary">아이디와 동일하게 사용</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-group input-button-group">
                            <div><input type="number" value="" class="form-control" title="우편번호 입력"></div>
                            <div class="postcode-button"><a href="#" class="button"><span>우편번호 검색</span></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="기본 주소" title="기본 주소 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="상세 주소" title="상세 주소 입력">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 필수 입력 정보 //end -->
        <!-- 선택 입력 정보 -->
        <div class="signup input-select">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>선택 입력 정보</h3>
            <div class="box">
                <ul class="input-list">
                    <li>
                        <label class="input-select-label">정보 수신 여부</label>
                        <div class="row">
                            <div class="col-xs-6 checkbox">
                                <input type="checkbox" id="receive_email" name="receive_info" checked>
                                <label for="receive_email" class="checkbox-display"></label>
                                <label for="receive_email" class="checkbox-label">이메일 수신</label>
                            </div>
                            <div class="col-xs-6 checkbox">
                                <input type="checkbox" id="receive_sms" name="receive_info" checked>
                                <label for="receive_sms" class="checkbox-display"></label>
                                <label for="receive_sms" class="checkbox-label">SMS 수신</label>
                            </div>
                        </div>
                        <p class="help-text primary"><i class="icon-attention"></i> 상품 구매 정보는 수신 동의 여부와 관계없이 발송됩니다.</p>
                    </li>
                    <li class="birth-date">
                        <label for="birth_date" class="input-select-label">생년월일</label>
                        <div class="form-group input-group">
                            <div><input type="number" id="birth_date" class="form-control" placeholder="년도" title="년도 입력"></div>
                            <div><input type="number" class="form-control" placeholder="월" title="월 입력"></div>
                            <div><input type="number" class="form-control" placeholder="일" title="일 입력"></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label for="male" class="col-xs-4 input-select-label">성별</label>
                            <div class="col-xs-4 radio">
                                <input type="radio" id="male" name="gender">
                                <label for="male" class="radio-display"></label>
                                <label for="male" class="radio-label">남자</label>
                            </div>
                            <div class="col-xs-4 radio">
                                <input type="radio" id="female" name="gender">
                                <label for="female" class="radio-display"></label>
                                <label for="female" class="radio-label">여자</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <label for="personalCustomsCode" class="input-select-label">개인통관고유부호</label>
                        <div class="form-group input-button-group">
                            <div><input type="text" id="personalCustomsCode" class="form-control"></div>
                            <div class="pcc-button"><a href="#" class="button"><span>조회/발급</span></a></div>
                        </div>
                        <p class="help-text primary"><i class="icon-attention"></i> 해외 배송상품 구매 시 배송 및 통관 목적으로 개인통관고유부호가 필요합니다. 입력하는 모든 정보는 배송 및 통관 시에만 활용되며, 다른 용도로는 사용되지 않습니다.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 선택 입력 정보 //end -->
        <!-- 약관동의 -->
        <div class="signup member-privacy">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>약관동의</h3>
            <div class="row signup-agree">
                <div class="col-xs-12">
                    <h4 class="signup-agree-title">
                        <div class="checkbox">
                            <input type="checkbox" id="receive-sms" name="agree-terms" checked>
                            <label for="agree-terms" class="checkbox-display"></label>
                            <label for="agree-terms" class="checkbox-label">이용약관 동의 (필수)</label>
                        </div>
                        <a href="#none" class="button button-xsmall button-secondary" onclick="agreeOpen(this);"><span>내용보기</span></a>
                    </h4>
                    <div class="agree-box scroll">
                        본 약관은 ㈜아이에스이커머스 (이하 “회사”라 한다)에서 운영하는 위즈위드 사이버 몰(www.wizwid.com)과 스마트폰 등 이동통신기기를 통해 제공되는 위즈위드 모바일 어플리케이션을 통해 제공하는 전자상거래 관련 서비스 (이하“위즈위드” 서비스 혹은 “서비스”라 한다)를 이용함에 있어 “(주) 아이에스이커머스”와 이용자의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.<br>
                    </div>
                </div>
                <div class="col-xs-12">
                    <h4 class="signup-agree-title">
                        <div class="checkbox">
                            <input type="checkbox" id="receive-sms" name="agree-privacy" checked>
                            <label for="agree-privacy" class="checkbox-display"></label>
                            <label for="agree-privacy" class="checkbox-label">개인정보 수집 및 이용 안내 동의(필수)</label>
                        </div>
                        <a href="#none" class="button button-xsmall button-secondary" onclick="agreeOpen(this);"><span>내용보기</span></a>
                    </h4>
                    <div class="agree-box scroll">
                        개인정보 수집 및 이용 목적<br>
                        개인정보 수집 및 이용 목적<br>
                    </div>
                </div>
            </div>
        </div>
        <!-- 약관동의 //end -->
        <div class="button-align-center">
            <a href="#" class="button button-block button-large button-primary"><span>회원가입</span></a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>