<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box order-track">
                        <h2 class="box-page-title">주문/배송 조회</h2>
                        <!-- 주문/배송 조회 Process -->
                        <div class="process-order-track">
                            <p class="help-text"><i class="ship-circle"></i>해외배송 상품의 경우</p>
                            <ul class="process-indicator">
                                <li>
                                    <i class="icon-documents-big"></i>
                                    <span class="process-text">주문접수</span>
                                    <strong class="process-badge complete">1</strong>
                                </li>
                                <li>
                                    <i class="icon-credit-card-big"></i>
                                    <span class="process-text">결제완료</span>
                                    <strong class="process-badge complete">1</strong>
                                </li>
                                <li>
                                    <i class="icon-dropbox-big"></i>
                                    <span class="process-text">상품준비중</span>
                                    <strong class="process-badge complete">999</strong>
                                </li>
                                <li>
                                    <i class="ship-circle"></i>
                                    <i class="icon-globe"></i>
                                    <span class="process-text">해외물류센터입고</span>
                                    <strong class="process-badge complete">1</strong>
                                </li>
                                <li>
                                    <i class="ship-circle"></i>
                                    <i class="icon-plane-big"></i>
                                    <span class="process-text">항공운송중</span>
                                    <strong class="process-badge">1</strong>
                                </li>
                                <li>
                                    <i class="ship-circle"></i>
                                    <i class="icon-note-big"></i>
                                    <span class="process-text">통관중</span>
                                    <strong class="process-badge">0</strong>
                                </li>
                                <li>
                                    <i class="icon-present-big"></i>
                                    <span class="process-text">배송중</span>
                                    <strong class="process-badge">0</strong>
                                </li>
                                <li>
                                    <i class="icon-check-big"></i>
                                    <span class="process-text">배송완료</span>
                                    <strong class="process-badge">0</strong>
                                </li>
                            </ul>
                        </div>
                        <!-- 주문/배송 조회 Process //end -->
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
                                        <div class="calendar-box"><!-- [D] 달력 스타일 적용시 class="calendar-box" 같이 써줘야 함 -->
                                            <a href="#" class="button"><i class="icon-calendar"></i></a>
                                            <!-- Calendar -->
                                            <div class="calendar" style="display:block;"><!-- [D] style은 마크업 확인용으로 개발시 삭제 -->
                                                <div class="calendar-head">
                                                    <a href="#" class="month-left"><i class="icon-left"></i></a>
                                                    <span>SEPTEMBER</span>
                                                    <a href="#" class="month-right"><i class="icon-right"></i></a>
                                                </div>
                                                <div class="calendar-body">
                                                    <ul class="week">
                                                        <li class="holiday">Sun</li>
                                                        <li>Mon</li>
                                                        <li>Tue</li>
                                                        <li>Wed</li>
                                                        <li>Thu</li>
                                                        <li>Fri</li>
                                                        <li class="holiday">Sat</li>
                                                    </ul>
                                                    <ul class="date">
                                                        <li class="holiday">1</li>
                                                        <li>2</li>
                                                        <li>3</li>
                                                        <li>4</li>
                                                        <li>5</li>
                                                        <li>6</li>
                                                        <li class="holiday">7</li>
                                                        <li class="holiday">8</li>
                                                        <li>9</li>
                                                        <li>10</li>
                                                        <li>11</li>
                                                        <li>12</li>
                                                        <li>13</li>
                                                        <li class="holiday">14</li>
                                                        <li class="holiday">15</li>
                                                        <li>16</li>
                                                        <li>17</li>
                                                        <li>18</li>
                                                        <li>19</li>
                                                        <li class="today">20</li>
                                                        <li class="holiday">21</li>
                                                        <li class="holiday">22</li>
                                                        <li>23</li>
                                                        <li>24</li>
                                                        <li>25</li>
                                                        <li>26</li>
                                                        <li>27</li>
                                                        <li class="holiday">28</li>
                                                        <li class="holiday">29</li>
                                                        <li>30</li>
                                                        <li>31</li>
                                                        <li>&nbsp;</li>
                                                        <li>&nbsp;</li>
                                                        <li>&nbsp;</li>
                                                        <li>&nbsp;</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Calendar //end -->
                                        </div>
                                    </div>
                                    <div class="input-group-addon">~</div>
                                    <div class="form-group input-group">
                                        <div><input type="text" class="form-control"></div>
                                        <div class="calendar-box"><!-- [D] 달력 스타일 적용시 class="calendar-box" 같이 써줘야 함 -->
                                            <a href="#" class="button"><i class="icon-calendar"></i></a>
                                            <!-- Calendar -->
                                            <div class="calendar">
                                                <div class="calendar-head">
                                                    <a href="#" class="month-left"><i class="icon-left"></i></a>
                                                    <span>SEPTEMBER</span>
                                                    <a href="#" class="month-right"><i class="icon-right"></i></a>
                                                </div>
                                                <div class="calendar-body">
                                                    <ul class="week">
                                                        <li class="holiday">Sun</li>
                                                        <li>Mon</li>
                                                        <li>Tue</li>
                                                        <li>Wed</li>
                                                        <li>Thu</li>
                                                        <li>Fri</li>
                                                        <li class="holiday">Sat</li>
                                                    </ul>
                                                    <ul class="date">
                                                        <li class="holiday">1</li>
                                                        <li>2</li>
                                                        <li>3</li>
                                                        <li>4</li>
                                                        <li>5</li>
                                                        <li>6</li>
                                                        <li class="holiday">7</li>
                                                        <li class="holiday">8</li>
                                                        <li>9</li>
                                                        <li>10</li>
                                                        <li>11</li>
                                                        <li>12</li>
                                                        <li>13</li>
                                                        <li class="holiday">14</li>
                                                        <li class="holiday">15</li>
                                                        <li>16</li>
                                                        <li>17</li>
                                                        <li>18</li>
                                                        <li>19</li>
                                                        <li class="today">20</li>
                                                        <li class="holiday">21</li>
                                                        <li class="holiday">22</li>
                                                        <li>23</li>
                                                        <li>24</li>
                                                        <li>25</li>
                                                        <li>26</li>
                                                        <li>27</li>
                                                        <li class="holiday">28</li>
                                                        <li class="holiday">29</li>
                                                        <li>30</li>
                                                        <li>31</li>
                                                        <li>&nbsp;</li>
                                                        <li>&nbsp;</li>
                                                        <li>&nbsp;</li>
                                                        <li>&nbsp;</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Calendar //end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-blank"></div>
                            <div>
                                <a href="#" class="button button-block button-primary">조회하기</a>
                            </div>
                        </div>
                        <!-- 조회 영역 //end -->
                        <!-- 주문 내역 -->
                        <div class="order-track-list">
                            <table class="table table-list">
                                <caption class="sr-only">주문한 상품 목록</caption>
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
                                    <th scope="col">배송구분</th>
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
                                    <td>해외배송</td>
                                    <td class="primary">해외물류센터입고</td>
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
                        <!-- 주문 내역 //end -->
                        <ul class="table-caution">
                            <li>- 주문번호를 클릭하시면 주문 상세내역을 확인할 수 있습니다.
                            <li>- 주문완료 후 재고부족 등으로 인해 품절 취소가 될 수 있으니 이 점 양해부탁드립니다.</li>
                            <li>- 무통장 입금의 경우 주문 후 7일 이내 입금확인 되지 않으면 자동으로 주문이 취소됩니다.</li>
                            <li>- 주문접수 상태에서는 옵션 및 배송지 직접 변경이 가능합니다. (이후 단계는 고객센터로 문의)</li>
                            <li>- 실시간계좌이체, 가상계좌 결제의 경우 에스크로 서비스를 사용하며 구매결정 후에는 반품ㆍ교환ㆍ환불이 불가능합니다.</li>
                            <li>- 배송완료 후 구매결정을 하지 않은 경우에는 배송완료일로부터 7일 경과 후, 8일째 자동으로 구매결정됩니다.</li>
                            <li>- 해외배송 상품의 경우 개인통관고유부호가 반드시 필요하며 미기재 시 통관이 지연될 수 있습니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>