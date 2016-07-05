<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box wishlist">
                        <h2 class="box-page-title">위시리스트</h2>
                        <div class="wishlist-list">
                            <div class="table-help">
                                <p class="amount">종 2 개의 상품</p>
                                <p class="help-text">* 위시리스트에 담은 시점과 구매시점에서 상품가격 및 이벤트가 변경될 수 있으며, 인기상품의 경우 조기 품절될 수 있습니다</p>
                            </div>
                            <table class="table table-list">
                                <caption class="sr-only">관심 상품 목록</caption>
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-7">
                                    <col class="col-xs-2">
                                    <col class="col-xs-2">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">선택</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">가격</th>
                                    <th scope="col">주문</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="valign-top">
                                        <div class="checkbox">
                                            <input type="checkbox" id="product-select">
                                            <label for="product-select" class="checkbox-display"></label>
                                            <label for="product-select" class="checkbox-label sr-only">상품선택</label>
                                        </div>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-badge">NEW</span>
                                            <span class="item-brand">STEVEN ALAN</span>
                                            <strong class="item-name">Belted Long Shirtdress</strong>
                                            <ul class="item-option">
                                                <li>Color : INDIGO</li>
                                                <li>Size : P</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <em class="discount">298,000</em>
                                        <strong class="price">275,000</strong>
                                    </td>
                                    <td class="order-button">
                                        <span class="button-block"><a href="#" class="button button-small button-primary"><span>쇼핑백 담기</span></a></span>
                                        <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="valign-top">
                                        <div class="checkbox">
                                            <input type="checkbox" id="product-select2">
                                            <label for="product-select2" class="checkbox-display"></label>
                                            <label for="product-select2" class="checkbox-label sr-only">상품선택</label>
                                        </div>
                                    </td>
                                    <td class="product-info aline-left">
                                        <div class="product-image"><img src="../images/temp/temp-product.jpg" alt=""></div>
                                        <div class="item-info">
                                            <span class="item-brand">NILLILOTAN</span>
                                            <strong class="item-name">Embroidered Saint Tropez Dress</strong>
                                        </div>
                                    </td>
                                    <td>
                                        <em class="discount">298,000</em>
                                        <strong class="price">275,000</strong>
                                    </td>
                                    <td class="order-button">
                                        <span class="button-block"><a href="#" class="button button-small button-primary"><span>쇼핑백 담기</span></a></span>
                                        <span class="button-block"><a href="#" class="button button-link button-danger"><span>삭제</span></a></span>
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
                        <div class="button-align-center">
                            <a href="#" class="button button-large button-primary"><span>선택상품 쇼핑백 담기</span></a>
                            <p class="wishlist-cancel"><a href="#" class="button button-danger button-link button-link-large"><span>선택삭제</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>