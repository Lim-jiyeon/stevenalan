<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">1:1문의</h2>
        <div class="box input-select personal-support-write">
            <ul class="input-list">
                <li>
                    <div class="form-group">
                        <div class="selectbox">
                            <strong class="selectbox-value">문의유형</strong>
                            <select onchange="selectboxEvent(this);">
                                <option value="문의유형">문의유형</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group input-button-group">
                        <div><input type="number" value="" class="form-control" title="주문번호 입력"></div>
                        <div><a href="#" class="button"><span>주문번호 조회</span></a></div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <input type="text" value="" class="form-control" placeholder="제목" title="제목 입력">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <textarea cols="2" rows="10" class="form-control" placeholder="내용을 입력해 주세요." title="내용을 입력해 주세요."></textarea>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <div class="file-input">
                            <a href="#" class="button">파일첨부</a>
                            <input type="file" name="addfile" class="file-input-hidden" onchange="javascript:document.getElementById('fileName').value = this.value">
                        </div>
                        <input type="text" name="fileName" id="fileName" class="file-text-box" readonly="">
                    </div>
                </li>
                <li class="phone-group">
                    <div class="form-group">
                        <label for="support_phone" class="form-label">전화번호</label>
                        <div class="input-group">
                            <div>
                                <div class="selectbox">
                                    <strong class="selectbox-value">010</strong>
                                    <select onchange="selectboxEvent(this);" id="support_phone">
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
                    </div>
                </li>
                <li class="email-group">
                    <div class="form-group">
                        <label for="support_email" class="form-label">이메일 주소</label>
                        <div class="input-group">
                            <div>
                                <input type="email" class="form-control" placeholder="이메일아이디" id="support_email" title="이메일 입력">
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
                    </div>
                </li>
            </ul>
        </div>
        <!-- 필수 정보 //end -->
        <div class="row button-inline-group">
            <div class="col-xs-6"><a href="#" class="button button-large button-primary"><span>등록</span></a></div>
            <div class="col-xs-6"><a href="#" class="button button-large"><span>취소</span></a></div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>