<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container wishlist">
        <div class="title-group">
            <h2 class="title page-title">위시리스트</h2>
            <div class="checkbox">
                <input type="checkbox" id="select_product_all" checked>
                <label for="select_product_all" class="checkbox-display"></label>
                <label for="select_product_all" class="checkbox-label">전체선택</label>
            </div>
        </div>
        <!-- 위시리스트 상품 리스트 -->
        <div class="box">
            <div class="wishlist-list">
                <p class="page-amount">Total 89 items</p>
                <ul class="order-product-list">
                    <li>
                        <div class="product-info">
                            <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                            <div class="item-info">
                                <div class="item-brand-group">
                                    <span class="item-brand">COMME DES GARÇONS PLAY BY STEVEN</span>
                                    <div class="checkbox">
                                        <input type="checkbox" id="select_product1" checked>
                                        <label for="select_product1" class="checkbox-display"></label>
                                    </div>
                                </div>
                                <strong class="item-name"><a href="#">Aldama Embroidered Bib Top</a></strong>
                                <ul class="item-option">
                                    <li>컬러 : INDIGO</li>
                                    <li>사이즈 : P</li>
                                </ul>
                                <strong class="price">275,000</strong>
                                <em class="discount">298,000</em>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-info">
                            <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                            <div class="item-info">
                                <div class="item-brand-group">
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <div class="checkbox">
                                        <input type="checkbox" id="select_product2" checked>
                                        <label for="select_product2" class="checkbox-display"></label>
                                    </div>
                                </div>
                                <strong class="item-name"><a href="#">Belted Long Shirtdress Belted Long Shirtdress</a></strong>
                                <ul class="item-option">
                                    <li>컬러 : INDIGO</li>
                                    <li>사이즈 : P</li>
                                </ul>
                                <strong class="price">275,000</strong>
                                <em class="discount">298,000</em>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-info">
                            <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                            <div class="item-info">
                                <div class="item-brand-group">
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <div class="checkbox">
                                        <input type="checkbox" id="select_product3" checked>
                                        <label for="select_product3" class="checkbox-display"></label>
                                    </div>
                                </div>
                                <strong class="item-name"><a href="#">Belted Long Shirtdress</a></strong>
                                <ul class="item-option">
                                    <li>컬러 : INDIGO</li>
                                    <li>사이즈 : P</li>
                                </ul>
                                <strong class="price">275,000</strong>
                                <em class="discount">298,000</em>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-info">
                            <div class="product-image"><a href="#"><img src="../images/temp/temp-product.jpg" alt=""></a></div>
                            <div class="item-info">
                                <div class="item-brand-group">
                                    <span class="item-brand">STEVEN ALAN</span>
                                    <div class="checkbox">
                                        <input type="checkbox" id="select_product4" checked>
                                        <label for="select_product4" class="checkbox-display"></label>
                                    </div>
                                </div>
                                <strong class="item-name"><a href="#">Belted Long Shirtdress</a></strong>
                                <ul class="item-option">
                                    <li>컬러 : INDIGO</li>
                                    <li>사이즈 : P</li>
                                </ul>
                                <strong class="price">275,000</strong>
                                <em class="discount">298,000</em>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- paging -->
                <div class="paging">
                    <a href="#" class="prev disabled"><i class="icon-left"></i></a>
                    <span class="pagingNum">
                        <span><a href="#">1</a></span>
                        <span class="current"><a href="#">2</a></span>
                        <span><a href="#">3</a></span>
                        <span><a href="#">4</a></span>
                        <span><a href="#">4</a></span>
                    </span>
                    <a href="#" class="next"><i class="icon-right"></i></a>
                </div>
                <!-- paging //end -->
            </div>
        </div>
        <!-- 위시리스트 상품 리스트 //end -->
        <div class="button-align-center button-inline-group button-auto-group">
            <div><a href="#" class="button button-large button-primary">선택상품 쇼핑백 담기</a></div>
            <div><a href="#" class="button button-large">선택삭제</a></div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>