<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <?php include 'mypage-left-menu.php'?>
            <div class="bgSection col-xs-10">
                <h2 class="box-page-title">배송지 관리</h2>
                <div class="address-manage-wrap">
                    <p class="aline-right">최대 10까지 등록 가능합니다.</p>
                    <table class="table table-list address-manage-table">
                        <caption class="sr-only">관심 상품 목록</caption>
                        <colgroup>
                            <col class="col-xs-2">
                            <col class="col-xs-2">
                            <col class="col-xs-5">
                            <col class="col-xs-2">
                            <col class="col-xs-1">
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col">배송지명</th>
                            <th scope="col">수령인</th>
                            <th scope="col">주소</th>
                            <th scope="col">연락처</th>
                            <th scope="col">관리</th>
                        </tr>
                        </thead>
                        <!-- 등록된 배송지 있을 경우 -->
                        <tbody>
                            <tr>
                                <td>
                                    <p>우리집</p>
                                </td>
                                <td>
                                    <span>김유리</span>
                                </td>
                                <td class="aline-left">
                                    <div>
                                        <p class="postNum">04178</p>
                                        <p>서울특별시 성동구 뚝섬로 1길 25(성수동1가, 서울숲 한라에코밸리) B105</p>
                                    </div>
                                </td>
                                <td>
                                    <p>010-1234-5678</p>
                                    <p>02-123-8524</p>
                                </td>
                                <td class="order-button">
                                    <span class="button-block"><a href="#" class="button button-small button-primary" onclick="modalOpen('.address_modify_add_modal'); return false;"><span>수정</span></a></span>
                                    <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>성수동 사무실</p>
                                </td>
                                <td>
                                    <span>김유리</span>
                                </td>
                                <td class="aline-left">
                                    <div>
                                        <p class="postNum">04178</p>
                                        <p>서울특별시 성동구 뚝섬로 1길 25(성수동1가, 서울숲 한라에코밸리) B105</p>
                                    </div>
                                </td>
                                <td>
                                    <p>010-1234-5678</p>
                                    <p>02-123-8524</p>
                                </td>
                                <td class="order-button">
                                    <span class="button-block"><a href="#" class="button button-small button-primary" onclick="modalOpen('.address_modify_add_modal'); return false;"><span>수정</span></a></span>
                                    <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                                </td>
                            </tr>
                        </tbody>
                        <!-- 등록된 배송지 없을 경우 -->
                        <!--<tbody>
                            <tr>
                                <td colspan="5">등록된 배송지가 없습니다.</td>
                            </tr>
                        </tbody>-->
                    </table>
                    <div class="button-align-center">
                        <a href="#" class="button button-large button-primary" onclick="modalOpen('.address_modify_add_modal');">배송지 추가</a>
                    </div>
                </div>
                <!-- 배송지 수정 / 추가 팝업 -->
                <div class="modalWrap address_modify_add_modal">
                    <div class="modal address_modal">
                        <div class="in_modal">
                            <h3 class="modalTitle">배송 주소록</h3>
                            <table width="100%" class="address-modify-add-table">
                                <tbody>
                                    <tr>
                                        <th><label for="address-modify-form-title">배송지 명칭</label></th>
                                        <td>
                                            <div class="form-group placeholder">
                                                <input type="text" id="address-modify-form-title" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="address-modify-form-name">수령인</label></th>
                                        <td>
                                            <div class="form-group placeholder">
                                                <input type="text" id="address-modify-form-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>주소</th>
                                        <td class="address-modify-add-table-address">
                                            <div class="input-button-group">
                                                <div class="form-group placeholder">
                                                    <div><input type="text" class="form-control"/></div>
                                                    <div><a href="#" class="button button-black">우편번호 찾기</a></div>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div><input type="text" class="form-control"/></div>
                                                <div class="input-group-addon blank"></div>
                                                <div><input type="text" class="form-control"/></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="address-modify-form-phone">휴대폰 번호</label>*</th>
                                        <td>
                                            <div class="form-group placeholder">
                                                <input type="text" id="address-modify-form-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="address-modify-form-phone2">추가 연락처</label></th>
                                        <td>
                                            <div class="form-group placeholder">
                                                <input type="text" id="address-modify-form-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="buttonWrap align-center">
                                <a href="#" class="button button-large button-primary" onclick="modalClose(this);">확인</a>
                                <a href="#" class="button button-large" onclick="$('.address_modify_add_modal').hide();modalOpen('.address_list_modal');">배송지목록</a>
                            </div>
                        </div>
                        <a href="#none" class="closeModalBtn" onclick="modalClose(this);"><i class="icon-cancel"></i></a>
                    </div>
                    <div class="overlay"></div>
                </div>
                <!-- 배송지 수정 / 추가 팝업 //end -->
                <!-- 배송지 목록 팝업 -->
                <div class="modalWrap address_list_modal">
                    <div class="modal address_modal">
                        <div class="in_modal">
                            <h3 class="modalTitle">배송 주소록</h3>
                            <table class="table table-list address-manage-table">
                                <caption class="sr-only">관심 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-2">
                                    <col class="col-xs-2">
                                    <col class="col-xs-5">
                                    <col class="col-xs-2">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">배송지명</th>
                                    <th scope="col">수령인</th>
                                    <th scope="col">주소</th>
                                    <th scope="col">연락처</th>
                                    <th scope="col">관리</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>우리집</p>
                                    </td>
                                    <td>
                                        <span>김유리</span>
                                    </td>
                                    <td class="aline-left">
                                        <div>
                                            <p class="postNum">04178</p>
                                            <p>서울특별시 성동구 뚝섬로 1길 25(성수동1가, 서울숲 한라에코밸리) B105</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>010-1234-5678</p>
                                        <p>02-123-8524</p>
                                    </td>
                                    <td class="order-button">
                                        <span class="button-block"><a href="#" class="button button-small button-primary"><span>수정</span></a></span>
                                        <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>성수동 사무실</p>
                                    </td>
                                    <td>
                                        <span>김유리</span>
                                    </td>
                                    <td class="aline-left">
                                        <div>
                                            <p class="postNum">04178</p>
                                            <p>서울특별시 성동구 뚝섬로 1길 25(성수동1가, 서울숲 한라에코밸리) B105</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>010-1234-5678</p>
                                        <p>02-123-8524</p>
                                    </td>
                                    <td class="order-button">
                                        <span class="button-block"><a href="#" class="button button-small button-primary"><span>수정</span></a></span>
                                        <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="button-align-center">
                                <a href="#" class="button button-large button-primary">배송지 추가</a>
                            </div>
                        </div>
                        <a href="#none" class="closeModalBtn" onclick="modalClose(this);"><i class="icon-cancel"></i></a>
                    </div>
                    <div class="overlay"></div>
                </div>
                <!-- 배송지 목록 팝업 //end -->
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>