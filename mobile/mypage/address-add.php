<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">배송지 추가</h2>
        <div class="box input-select">
            <ul class="input-list">
                <li>
                    <div class="form-group">
                        <input type="text" value="" class="form-control" placeholder="배송지 명칭" title="배송지 명칭 입력">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <input type="text" value="" class="form-control" placeholder="수령인" title="수령인 입력">
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
                <li class="phone-group">
                    <div class="form-group input-group">
                        <div>
                            <div class="selectbox">
                                <strong class="selectbox-value">02</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="02">02</option>
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
                            <input type="number" value="" class="form-control" title="추가 연락처 두번째 자리 입력">
                        </div>
                        <div class="input-group-addon">-</div>
                        <div>
                            <input type="number" value="" class="form-control" title="추가 연락처 세번째 자리 입력">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 필수 정보 //end -->
        <div class="button-align-center">
            <a href="#" class="button button-block button-primary"><span>배송지 추가</span></a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>