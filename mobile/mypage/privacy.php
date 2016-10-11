<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container member-privacy">
        <h2 class="page-title">회원 정보 수정</h2>
        <!-- 로그인 정보 -->
        <div class="privacy-modify">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>로그인 정보</h3>
            <div class="box">
                <ul class="input-list">
                    <li class="fixed-data">
                        <label class="fixed-label">회원아이디</label>
                        <p>member@isecommerce.co.kr</p>
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
                </ul>
            </div>
        </div>
        <!-- 로그인 정보 //end -->
        <!-- 필수 정보 -->
        <div class="privacy-modify input-select">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>필수 정보</h3>
            <div class="box">
                <ul class="input-list">
                    <li class="fixed-data">
                        <label class="fixed-label">회원명</label>
                        <p>이영애</p>
                    </li>
                    <li class="phone-group">
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
                    <li class="email-group">
                        <div class="form-group input-group">
                            <div>
                                <input type="email" class="form-control" placeholder="이메일" title="이메일 입력">
                            </div>
                            <div class="input-group-addon">@</div>
                            <div>
                                <div class="selectbox">
                                    <strong class="selectbox-value">선택</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="선택">선택</option>
                                        <option value="naver.com">naver.com</option>
                                        <option value="mail.com">gmail.com</option>
                                        <option value="hanmail.net">hanmail.net</option>
                                        <option value="nate.com">nate.com</option>
                                        <option value="hotmail.com">hotmail.com</option>
                                        <option value="yahoo.com">yahoo.com</option>
                                        <option value="lycos.co.kr">lycos.co.kr</option>
                                        <option value="직접입력">직접입력</option>
                                    </select>
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
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="기본 주소" title="기본 주소 입력">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="상세 주소" title="상세 주소 입력">
                        </div>
                    </li>
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
                </ul>
            </div>
        </div>
        <!-- 필수 정보 //end -->
        <!-- 선택 정보 -->
        <div class="privacy-modify input-select">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>선택 정보</h3>
            <div class="box">
                <ul class="input-list">
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
        <!-- 선택 정보 //end -->
        <div class="row button-inline-group">
            <div class="col-xs-6"><a href="#" class="button button-large button-primary"><span>정보수정</span></a></div>
            <div class="col-xs-6"><a href="#" class="button button-large"><span>취소</span></a></div>
        </div>
        <div class="id-closed"><a href="#" class="button button-link"><span>회원 탈퇴신청</span></a></div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>