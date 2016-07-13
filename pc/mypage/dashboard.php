<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php include './mypage-left-menu.php'; ?>
                <div class="col-xs-10">
                    <div class="box dashboard">
                        <div class="inner-box mypage-info">
                            <div class="row">
                                <div class="col-xs-3 member-name">
                                    <strong>임유정님</strong>
                                    <span class="email">ngtest@gmail.com</span>
                                </div>
                                <ul class="col-xs-9 member-info">
                                    <li class="col-xs-3">
                                        위시리스트
                                        <b>5</b>
                                    </li>
                                    <li class="col-xs-3">
                                        쿠폰
                                        <b>2</b>
                                    </li>
                                    <li class="col-xs-3">
                                        주문/배송
                                        <b>0</b>
                                    </li>
                                    <li class="col-xs-3">
                                        취소/교환/반품
                                        <b>3</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 최근 주문 내역 -->
                        <div class="recent-order-list">
                            <div class="title-group">
                                <h3 class="title table-title">최근 주문 내역</h3>
                                <a href="#" class="button button-small">더보기</a>
                            </div>
                            <table class="table table-list">
                                <caption class="sr-only">최근 주문 내역</caption>
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
                                    <td class="valign-top benton">2016-05-13<br>Q000003744</td>
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
                                    <td class="state">해외물류센터입고</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="valign-top benton">2016-05-13<br>Q000003744</td>
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
                                    <td class="state">배송중</td>
                                    <td></td>
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
                                    <td class="state">배송중</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 최근 주문 내역 //end -->
                        <!-- 위시리스트 -->
                        <div class="dashboard-list">
                            <div class="title-group">
                                <h3 class="title table-title">위시리스트</h3>
                                <a href="#" class="button button-small">더보기</a>
                            </div>
                            <div class="inner-box">
                                <ul class="row category-list list5 noLine">
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Shirred Skirt</strong>
                                                    <div class="product-price">
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">COMM DES COMM DES GARÇONS PLAY</span>
                                                    <strong class="product-name">Farrah Dress</strong>
                                                    <div class="product-price">
                                                        <em class="discount">298,000</em>
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Farrah Dress</strong>
                                                    <div class="product-price">
                                                        <em class="discount">298,000</em>
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Shirred Skirt</strong>
                                                    <div class="product-price">
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Shirred Skirt</strong>
                                                    <div class="product-price">
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 위시리스트 //end -->
                        <!-- 쇼핑백 -->
                        <div class="dashboard-list">
                            <div class="title-group">
                                <h3 class="title table-title">쇼핑백</h3>
                                <a href="#" class="button button-small">더보기</a>
                            </div>
                            <div class="inner-box">
                                <ul class="row category-list list5 noLine">
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Shirred Skirt</strong>
                                                    <div class="product-price">
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">COMM DES COMM DES GARÇONS PLAY</span>
                                                    <strong class="product-name">Farrah Dress</strong>
                                                    <div class="product-price">
                                                        <em class="discount">298,000</em>
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Farrah Dress</strong>
                                                    <div class="product-price">
                                                        <em class="discount">298,000</em>
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Shirred Skirt</strong>
                                                    <div class="product-price">
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="col-xs-2">
                                        <div class="item">
                                            <a href="#">
                                                <div class="product-thumbnail">
                                                    <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                                </div>
                                                <div class="product-info">
                                                    <span class="brand-name">STEVEN ALAN</span>
                                                    <strong class="product-name">Shirred Skirt</strong>
                                                    <div class="product-price">
                                                        <span class="price">380,000</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 쇼핑백 //end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>