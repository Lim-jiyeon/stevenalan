<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box privacy-modify">
                        <h2 class="box-page-title">회원 정보 수정</h2>
                        <div class="member-privacy">
                            <!-- 회원 로그인 및 필수 정보 입력 -->
                            <h3 class="table-title">로그인/필수 정보</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">로그인 정보 및 회원 필수 정보를 입력하는 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-10">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row">아이디<em class="benton">(Email)</em>*</th>
                                    <td class="member-email">
                                        <em class="benton">test@gmail.com</em>
                                        <span class="help-inline">아이디는 변경이 불가합니다.</span>
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
                                    <th scope="row">이름*</th>
                                    <td>이영애</td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="cellphone">휴대폰번호*</label></th>
                                    <td>
                                        <div class="form-group form-inline">
                                            <input type="text" id="cellphone" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="receiving-info">정보수신용 이메일주소*</label></th>
                                    <td>
                                        <div class="form-group form-inline">
                                            <input type="text" id="receiving-info" class="form-control">
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
                                            <input type="checkbox" id="receive-email" name="receive-info">
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
                            <!-- 회원 로그인 및 필수 정보 입력 //end -->
                            <!-- 회원 선택 정보 입력 -->
                            <h3 class="table-title">선택 정보</h3>
                            <table class="table table-row-list">
                                <caption class="sr-only">회원 선택 정보를 입력하는 목록</caption>
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
                                            <div class="input-button-group">
                                                <div class="form-group form-inline">
                                                    <div><input type="text" id="personalCustomsCode" class="form-control"/></div>
                                                    <div><a href="#" class="button">조회/발급</a></div>
                                                </div>
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
                            <!-- 회원 선택 정보 입력 //end -->
                        </div>
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>정보수정</span></a>
                            <p class="privacy-modify-cancel"><a href="#" class="button button-danger button-link button-link-large"><span>회원탈퇴</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>