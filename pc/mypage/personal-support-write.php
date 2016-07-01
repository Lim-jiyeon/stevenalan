<?php
include '../header/header.php';
?>

    <div class="content">
        <div class="container personal-support-wrap personal-support-write-wrap">

            <?php include 'mypage-left-menu.php'?>

            <div class="bgSection col-xs-10">
                <h4>1:1 문의</h4>
                <table width="100%" class="personal-support-write-table">
                    <tbody>
                        <tr>
                            <th>유형*</th>
                            <td>
                                <form class="selectbox-block">
                                    <div class="selectbox selectbox-style">
                                        <strong class="selectbox-value">문의 유형</strong>
                                        <select onchange="selectboxEvent(this);">
                                            <option value="선택하세요">선택하세요</option>
                                            <option value="선택1">선택1</option>
                                            <option value="선택2">선택2</option>
                                            <option value="선택3">선택3</option>
                                            <option value="선택4">선택4</option>
                                            <option value="선택5">선택5</option>
                                        </select>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th>주문번호 조회</th>
                            <td>
                                <div class="form-group">
                                    <div class="input-button-group">
                                        <input type="text" class="form-control"/>
                                        <a href="#" class="button button-small button-secondary">주문조회</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="write-form-title">제목</label>*</th>
                            <td>
                                <div class="form-group placeholder">
                                    <input type="text" id="write-form-title" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="write-form-contents">문의 내용</label>*</th>
                            <td>
                                <div class="form-group placeholder">
                                    <textarea  id="write-form-contents" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>파일첨부</th>
                            <td>
                                <div class="file_input_div">
                                    <a href="#" class="button button-secondary button-small file_input_img_btn">파일 첨부</a>
                                    <input type="file" name="addfile" class="file_input_hidden" onchange="javascript: document.getElementById('fileName').value = this.value">
                                </div>
                                <input type="text" name="fileName" id="fileName" class="file_input_textbox phototext" readonly="">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="write-form-tel">연락처</label></th>
                            <td>
                                <input type="tel" id="write-form-tel" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="write-form-email">답변 이메일</label></th>
                            <td class="email-wrap">
                                <div class="input-group">
                                    <div><input type="text" id="write-form-email" class="form-control"/></div>
                                    <div class="input-group-addon">@</div>
                                    <div><input type="text" class="form-control"/></div>
                                    <div>
                                        <form class="selectbox-block">
                                            <div class="selectbox selectbox-style">
                                                    <strong class="selectbox-value">직접입력</strong>
                                                    <select onchange="selectboxEvent(this);">
                                                        <option value="선택하세요">선택하세요</option>
                                                        <option value="선택1">선택1</option>
                                                        <option value="선택2">선택2</option>
                                                        <option value="선택3">선택3</option>
                                                        <option value="선택4">선택4</option>
                                                        <option value="선택5">선택5</option>
                                                    </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="buttonWrap">
                    <a href="#" class="button button-primary">등록</a>
                </div>
            </div><!-- bgSection // end -->
        </div>
    </div>


<?php
include '../footer/footer.php';
?>