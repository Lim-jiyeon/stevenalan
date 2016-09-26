<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <h2 class="page-title">회원가입</h2>
            <div class="box signup">
                <!-- 회원 로그인 및 필수 정보 입력 -->
                <div class="member-privacy">
                    <h3 class="member-title">로그인/필수 정보</h3>
                    <table class="table table-row-list">
                        <caption class="sr-only">회원가입을 위한 필수 정보를 입력하는 목록</caption>
                        <colgroup>
                            <col class="col-xs-2">
                            <col class="col-xs-10">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row"><label for="email">아이디<em class="benton">(Email)</em>*</label></th>
                            <td>
                                <div class="help-group">
                                    <div class="input-button-group">
                                        <div class="form-group form-inline">
                                            <div><input type="text" id="email" class="form-control"/></div>
                                            <div><a href="#" class="button button-input">중복 확인</a></div>
                                        </div>
                                    </div>
                                    <div class="help-box">
                                        <span class="help-inline help-success"><i class="icon-check"></i> 사용 가능한 이메일입니다.</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="password">비밀번호*</label></th>
                            <td>
                                <div class="form-group form-inline">
                                    <input type="password" id="password" class="form-control">
                                </div>
                                <span class="help-inline">6~32자의 영문/숫자/특수문자 조합으로 만들어주세요.</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="check-password">비밀번호 확인*</label></th>
                            <td>
                                <div class="form-group form-inline">
                                    <input type="password" id="check-password" class="form-control">
                                </div>
                                <span class="help-inline help-danger"><i class="icon-attention"></i> 비밀번호가 일치하지 않습니다.</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="name">이름*</label></th>
                            <td>
                                <div class="form-group form-inline">
                                    <input type="text" id="name" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="cellphone">휴대폰번호*</label></th>
                            <td>
                                <div class="form-group input-group phone-group">
                                    <div><input type="text" id="cellphone" class="form-control"></div>
                                    <div class="input-group-addon">-</div>
                                    <div><input type="text" class="form-control"></div>
                                    <div class="input-group-addon">-</div>
                                    <div><input type="text" class="form-control"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="receiving-info">정보수신용 이메일주소*</label></th>
                            <td>
                                <div class="form-group form-inline">
                                    <input type="text" id="receiving-info" class="form-control">
                                </div>
                                <div class="checkbox checkbox-block">
                                    <input type="checkbox" id="receive-sms" name="sameId">
                                    <label for="sameId" class="checkbox-display"></label>
                                    <label for="sameId" class="checkbox-label">아이디와 동일하게 사용</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="address">주소*</label></th>
                            <td>
                                <div class="input-button-group">
                                    <div class="form-group form-inline">
                                        <div><input type="text" id="address" class="form-control"/></div>
                                        <div><a href="#" class="button button-input">우편번호 찾기</a></div>
                                    </div>
                                </div>
                                <div class="form-group form-inline">
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="birth-date">생년월일</label></th>
                            <td>
                                <div class="selectbox-group">
                                    <div class="selectbox">
                                        <strong class="selectbox-value" id="birth-date">년도</strong>
                                        <select onchange="selectboxEvent(this);">
                                            <option value="년도">년도</option>
                                            <option value="선택1">선택1</option>
                                            <option value="선택2">선택2</option>
                                            <option value="선택3">선택3</option>
                                            <option value="선택4">선택4</option>
                                            <option value="선택5">선택5</option>
                                        </select>
                                    </div>
                                    <div class="selectbox">
                                        <strong class="selectbox-value">월</strong>
                                        <select onchange="selectboxEvent(this);">
                                            <option value="월">월</option>
                                            <option value="선택1">선택1</option>
                                            <option value="선택2">선택2</option>
                                            <option value="선택3">선택3</option>
                                            <option value="선택4">선택4</option>
                                            <option value="선택5">선택5</option>
                                        </select>
                                    </div>
                                    <div class="selectbox">
                                        <strong class="selectbox-value">일</strong>
                                        <select onchange="selectboxEvent(this);">
                                            <option value="일">일</option>
                                            <option value="선택1">선택1</option>
                                            <option value="선택2">선택2</option>
                                            <option value="선택3">선택3</option>
                                            <option value="선택4">선택4</option>
                                            <option value="선택5">선택5</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">정보 수신 여부*</th>
                            <td>
                                <div class="checkbox">
                                    <input type="checkbox" id="receive-email" name="receive-info" checked>
                                    <label for="receive-email" class="checkbox-display"></label>
                                    <label for="receive-email" class="checkbox-label">이메일 수신</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="receive-sms" name="receive-info">
                                    <label for="receive-sms" class="checkbox-display"></label>
                                    <label for="receive-sms" class="checkbox-label">SMS 수신</label>
                                </div>
                                <p class="help-block">상품 구매 정보는 수신 동의 여부와 관계없이 발송됩니다.</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 회원 로그인 및 필수 정보 입력 //end -->
                <!-- 회원 선택 정보 입력 -->
                <div class="member-privacy">
                    <h3 class="member-title">선택 정보</h3>
                    <table class="table table-row-list">
                        <caption class="sr-only">회원가입을 위한 선택 정보를 입력하는 목록</caption>
                        <colgroup>
                            <col class="col-xs-2">
                            <col class="col-xs-10">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">성별</th>
                            <td>
                                <div class="radio">
                                    <input type="radio" id="male" name="gender">
                                    <label for="male" class="radio-display"></label>
                                    <label for="male" class="radio-label">남자</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="female" name="gender">
                                    <label for="female" class="radio-display"></label>
                                    <label for="female" class="radio-label">여자</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="personalCustomsCode">개인통관고유부호</label></th>
                            <td>
                                <div class="help-group">
                                    <div class="form-group form-inline help-input">
                                        <input type="text" id="personalCustomsCode" class="form-control"/>
                                        <a href="#" class="button">조회/발급</a>
                                    </div>
                                    <div class="help-box">
                                        <i class="icon-help"></i>
                                        <div class="help-layer">개인통관고유부호는 개인 식별을 위한 고유번호로<br>관세청 전자통관시스템에서 신청 즉시 부여되며<br>한번 부여받은 부호는 같은 번호로 계속 사용이 가능합니다.</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 회원 선택 정보 입력 //end -->
                <!-- 약관 동의 -->
                <div class="member-privacy">
                    <h3 class="member-title">약관 동의</h3>
                    <div>
                        <div class="checkbox">
                            <input type="checkbox" id="agree_over_age" name="agree-over-age" checked>
                            <label for="agree_over_age" class="checkbox-display"></label>
                            <label for="agree_over_age" class="checkbox-label">본인은 만 14세 이상입니다. (필수)</label>
                        </div>
                    </div>
                    <div class="row signup-agree">
                        <div class="col-xs-6">
                            <h4 class="signup-agree-title">
                                <div class="checkbox">
                                    <input type="checkbox" id="agree_terms" name="agree-terms" checked>
                                    <label for="agree_terms" class="checkbox-display"></label>
                                    <label for="agree_terms" class="checkbox-label">이용약관 동의 (필수)</label>
                                </div>
                                <a href="#none" class="button button-small" onclick="agreeOpen(this);"><span>내용보기</span></a>
                            </h4>
                            <div class="agree-box scroll">
                                이용약관<br>
                                이용약관<br>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h4 class="signup-agree-title">
                                <div class="checkbox">
                                    <input type="checkbox" id="agree_privacy" name="agree-privacy" checked>
                                    <label for="agree_privacy" class="checkbox-display"></label>
                                    <label for="agree_privacy" class="checkbox-label">개인정보 수집 및 이용 안내 동의(필수)</label>
                                </div>
                                <a href="#none" class="button button-small" onclick="agreeOpen(this);"><span>내용보기</span></a>
                            </h4>
                            <div class="agree-box scroll">
                                개인정보 수집 및 이용 목적<br>
                                개인정보 수집 및 이용 목적<br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 약관 동의 //end -->
                <div class="button-align-center">
                    <a href="#" class="button button-large button-primary"><span>회원가입</span></a>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>