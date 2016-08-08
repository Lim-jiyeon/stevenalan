<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box return-refund-exchange">
                        <h2 class="box-page-title">취소/교환/반품</h2>
                        <!-- 취소/교환/반품 현황 보기 선택 영역 -->
                        <div class="button-group return-button">
                            <a href="#" class="button button-third"><span>취소/교환/반품</span></a>
                            <a href="#" class="button button-secondary"><span>취소처리현황</span></a>
                            <a href="#" class="button button-secondary"><span>반품/교환현황</span></a>
                        </div>
                        <!-- 취소/교환/반품 현황 보기 선택 영역 //end -->
                        <!-- 취소/교환/반품 내역 -->
                        <div class="return-content return-list1">
                            <table class="table table-list">
                                <caption class="sr-only">취소/교환/반품한 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-6">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">수량</th>
                                    <th scope="col">결제금액</th>
                                    <th scope="col">배송구분</th>
                                    <th scope="col">주문상태</th>
                                    <th scope="col">비고</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="valign-top benton">
                                        2016-05-13<br>Q000003744
                                        <a href="#" class="button button-link button-danger">상세보기</a>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-badge item-badge-secondary">해외배송</span>
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td>해외배송</td>
                                    <td class="primary">해외물류센터입고</td>
                                    <td><a href="#" class="button button-link button-danger">주문취소</a></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="valign-top benton">
                                        2016-05-13<br>Q000003744
                                        <a href="#" class="button button-link button-danger">상세보기</a>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td>해외배송</td>
                                    <td class="primary">배송중</td>
                                    <td><a href="#" class="button button-link button-danger">취소신청</a></td>
                                </tr>
                                <tr>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td>해외배송</td>
                                    <td class="primary">배송중</td>
                                    <td>
                                        <a href="#" class="button button-link button-danger">취소신청</a>
                                        <a href="#" class="button button-link button-danger">교환신청</a>
                                        <a href="#" class="button button-link button-danger">반품신청</a>
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
                        <!-- 취소/교환/반품 내역 //end -->
                        <!-- 취소처리현황 내역 -->
                        <div class="return-content return-list2">
                            <!-- 조회 영역 -->
                            <div class="inner-box order-search">
                                <div class="button-group">
                                    <a href="#" class="button selected">1개월</a>
                                    <a href="#" class="button">3개월</a>
                                    <a href="#" class="button">6개월</a>
                                </div>
                                <div class="group-blank"></div>
                                <div>
                                    <div class="input-button-group">
                                        <div class="form-group input-group">
                                            <div><input type="text" class="form-control"></div>
                                            <div><a href="#" class="button"><i class="icon-calendar"></i></a></div>
                                        </div>
                                        <div class="input-group-addon">~</div>
                                        <div class="form-group input-group">
                                            <div><input type="text" class="form-control"></div>
                                            <div><a href="#" class="button"><i class="icon-calendar"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-blank"></div>
                                <div>
                                    <a href="#" class="button button-block button-primary">조회하기</a>
                                </div>
                            </div>
                            <!-- 조회 영역 //end -->
                            <table class="table table-list">
                                <caption class="sr-only">취소처리된 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-7">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">수량</th>
                                    <th scope="col">결제금액</th>
                                    <th scope="col">환불예정금액</th>
                                    <th scope="col">주문상태</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="valign-top benton">
                                        2016-05-13<br>Q000003744
                                        <a href="#" class="button button-link button-danger">상세보기</a>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-badge item-badge-secondary">해외배송</span>
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td class="price">299,000</td>
                                    <td>취소완료</td>
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
                        <!-- 취소처리현황 내역 //end -->
                        <!-- 반품/교환현황 내역 -->
                        <div class="return-content return-list3">
                            <!-- 조회 영역 -->
                            <div class="inner-box order-search">
                                <div class="button-group">
                                    <a href="#" class="button selected">1개월</a>
                                    <a href="#" class="button">3개월</a>
                                    <a href="#" class="button">6개월</a>
                                </div>
                                <div class="group-blank"></div>
                                <div>
                                    <div class="input-button-group">
                                        <div class="form-group input-group">
                                            <div><input type="text" class="form-control"></div>
                                            <div><a href="#" class="button"><i class="icon-calendar"></i></a></div>
                                        </div>
                                        <div class="input-group-addon">~</div>
                                        <div class="form-group input-group">
                                            <div><input type="text" class="form-control"></div>
                                            <div><a href="#" class="button"><i class="icon-calendar"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-blank"></div>
                                <div>
                                    <a href="#" class="button button-block button-primary">조회하기</a>
                                </div>
                            </div>
                            <!-- 조회 영역 //end -->
                            <table class="table table-list">
                                <caption class="sr-only">반품/교환된 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-7">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                    <col class="col-xs-1">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">주문일자/번호</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">수량</th>
                                    <th scope="col">결제금액</th>
                                    <th scope="col">환불예정금액</th>
                                    <th scope="col">주문상태</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="valign-top benton">
                                        2016-05-13<br>Q000003744
                                        <a href="#" class="button button-link button-danger">상세보기</a>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-badge item-badge-secondary">해외배송</span>
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="price">299,000</td>
                                    <td class="price">299,000</td>
                                    <td>반품처리중</td>
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
                        <!-- 반품/교환현황 내역 //end -->
                        <ul class="table-caution">
                            <li>- 취소/교환/반품 신청 하시려는 상품이 목록에 없는 경우 고객센터 또는 1:1문의를 통해 접수해 주시기 바랍니다.</li>
                            <li>- 주문취소는 상품이 출고되기 전까지 가능합니다. 단, 상품준비중 상태인 경우 배송준비단계에 따라 취소가 불가능한 경우가 있으니 고객센터 또는 1:1문의 게시판으로 문의 부탁드립니다.</li>
                            <li>- 상품의 수량별 부분취소는 불가하며, 수량 전체 취소만 가능합니다.</li>
                            <li>- 교환/반품 접수는 배송완료일로부터 7일 이내 신청이 가능하며, 경우에 따라 장기 미반입 건은 SMS 통보 후 접수가 취소됩니다.</li>
                            <li>- 교환/반품 규정은 전자상거래등에서의 소비자보호에 관한 법률에 따른 반품 조건을 준수합니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>