<?php
include '../header/header.php';
?>

<div class="content">
    <div class="container personal-support-wrap">

        <?php include 'mypage-left-menu.php'?>

        <div class="bgSection col-xs-10">
            <h4>1:1 문의</h4>
            <p>문의글을 등록하시면 빠른 시일 내에 답변 드리겠습니다.</p>
            <table width="100%">
                <thead>
                    <tr>
                        <th>유형</th>
                        <th>제목</th>
                        <th>작성일</th>
                        <th>답변상태</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="master">
                        <td>주문/결제 문의</td>
                        <td>결제 내역이 이상하네요. 확인좀 부탁드려요.</td>
                        <td>2016-06-28</td>
                        <td>삭제</td>
                    </tr>
                    <tr class="slave">
                        <td colspan="4">
                            <table width="100%">
                                <tr>
                                    <td>Q</td>
                                    <td>
                                        <div>
                                            주문 후 몇 일 후 면 수령 가능 한가요?<br/>
                                            배송비 더 지불하고 퀵으로 오는 건 없나요?<br/><br/>
                                            - 주문상품 : [상품]3000142207<br/>
                                            - 첨부파일 : attachment.product.jpg
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>
                                        <div>
                                            보유 재고에 한해서는 결제 완료 후 3~5일 정도 소요됩니다.<br/>
                                            세일 기간 동안의 주문 폭주로 인한 상품 수급의 어려움을 배송이 지연될 수 있으며,<br/>
                                            수량 부족이나 배송 누락 등 특이 사항으로 배송이 지연될 경우에는 개별적으로 연락을 드립니다.<br/><br/>
                                            <span class="date">2016-06-13 오전 10:05:17</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="master">
                        <td>배송 문의</td>
                        <td>배송은 얼마나 걸리나요?</td>
                        <td>2016-06-28</td>
                        <td>답변완료</td>
                    </tr>
                    <tr class="slave">
                        <td colspan="4">
                            <table width="100%">
                                <tr>
                                    <td>Q</td>
                                    <td>
                                        <div>
                                            주문 후 몇 일 후 면 수령 가능 한가요?<br/>
                                            배송비 더 지불하고 퀵으로 오는 건 없나요?<br/><br/>
                                            - 주문상품 : [상품]3000142207<br/>
                                            - 첨부파일 : attachment.product.jpg
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>
                                        <div>
                                            보유 재고에 한해서는 결제 완료 후 3~5일 정도 소요됩니다.<br/>
                                            세일 기간 동안의 주문 폭주로 인한 상품 수급의 어려움을 배송이 지연될 수 있으며,<br/>
                                            수량 부족이나 배송 누락 등 특이 사항으로 배송이 지연될 경우에는 개별적으로 연락을 드립니다.<br/><br/>
                                            <span class="date">2016-06-13 오전 10:05:17</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="paging">
                <a href="#" class="prev"><i class="icon-left"></i></a>
                <span class="pagingNum">
                    <span class="current"><a href="#">1</a></span>
                    <span><a href="#">2</a></span>
                    <span><a href="#">3</a></span>
                    <span><a href="#">4</a></span>
                </span>
                <a href="#" class="next"><i class="icon-right"></i></a>
            </div>

            <div class="buttonWrap">
                <a class="button button-primary button-small" href="#" role="button">문의하기</a>
            </div>
        </div><!-- bgSection // end -->
    </div>
</div>


<?php
include '../footer/footer.php';
?>