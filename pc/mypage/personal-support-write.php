<?php
include '../header/header.php';
?>

    <div class="content">
        <div class="container personal-support-wrap personal-support-write-wrap">

            <?php include 'mypage-left-menu.php'?>

            <div class="bgSection col-xs-10">
                <h2 class="box-page-title">1:1 문의</h2>
                <table width="100%" class="personal-support-write-table">
                    <tbody>
                        <tr>
                            <th>유형*</th>
                            <td>
                                <form class="selectbox-block">
                                    <div class="selectbox">
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
                                        <a href="#none" class="button" onclick="modalOpen('.orderList_modal');">주문조회</a>
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
                                    <a href="#" class="button button-input file_input_img_btn">파일첨부</a>
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
                                            <div class="selectbox">
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
                    <a href="#" class="button button-large button-primary">등록</a>
                </div>

                <!-- 주문내역 레이어 팝업 -->
                <div class="modalWrap orderList_modal">
                    <div class="modal">
                        <div class="in_modal">
                            <h3 class="modalTitle">주문 내역</h3>
                            <div class="bgSection">
                                <div class="selWrap">
                                    <div class="monthSel">
                                        <ul>
                                            <li class="current"><a href="#">1개월</a></li>
                                            <li><a href="#">3개월</a></li>
                                            <li><a href="#">6개월</a></li>
                                        </ul>
                                    </div>
                                    <div class="dateSel">
                                        <div class="input-group">
                                            <div><input type="text" id="write-form-email" class="form-control" value="2016-06-17"/></div>
                                            <div class="input-group-addon">~</div>
                                            <div><input type="text" class="form-control" value="2016-06-18"/></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group placeholder">
                                    <input type="text" id="write-form-title" class="form-control" placeholder="주문 상품명 입력">
                                </div>
                                <div class="buttonWrap">
                                    <a href="#" class="button button-large button-primary">조회하기</a>
                                </div>
                            </div>

                            <table class="table table-list">
                                <caption class="sr-only">관심 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-1">
                                    <col class="*">
                                    <col class="col-xs-1">
                                    <col class="col-xs-2">
                                    <col class="col-xs-2">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">선택</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">수량</th>
                                    <th scope="col">결제금액</th>
                                    <th scope="col">주문상태</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>2016-05-13</p>
                                        <p>Q00003744</p>
                                        <p><a href="#">상세보기</a></p>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" id="product-select">
                                            <label for="product-select" class="checkbox-display"></label>
                                            <label for="product-select" class="checkbox-label sr-only">상품선택</label>
                                        </div>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><span>1</span></td>
                                    <td>
                                        <strong class="price">275,000</strong>
                                    </td>
                                    <td>
                                        <span>해외물류센터입고</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2016-05-13</p>
                                        <p>Q00003744</p>
                                        <p><a href="#">상세보기</a></p>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" id="product-select2">
                                            <label for="product-select2" class="checkbox-display"></label>
                                            <label for="product-select2" class="checkbox-label sr-only">상품선택</label>
                                        </div>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="item-info">
                                            <span class="item-brand">NILLILOTAN</span>
                                            <strong class="item-name">Embroidered Saint Tropez Dress</strong>
                                        </div>
                                    </td>
                                    <td><span>1</span></td>
                                    <td>
                                        <strong class="price">275,000</strong>
                                    </td>
                                    <td>
                                        <span>배송중</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- paging -->
                            <div class="paging">
                                <a href="#" class="prev disabled"><i class="icon-left"></i></a>
                                        <span class="pagingNum">
                                            <span class="current"><a href="#">1</a></span>
                                            <span><a href="#">2</a></span>
                                            <span><a href="#">3</a></span>
                                            <span><a href="#">4</a></span>
                                        </span>
                                <a href="#" class="next"><i class="icon-right"></i></a>
                            </div>
                            <!-- paging //end -->

                        </div>
                        <a href="#none" class="closeModalBtn" onclick="modalClose(this);"><i class="icon-cancel"></i></a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div><!-- bgSection // end -->
        </div>
    </div>


<?php
include '../footer/footer.php';
?>