<?php include '../header/header.php'; ?>

    <div class="content">
        <!-- breadcrumb -->
        <div class="breadcrumb line">
            <a href="#">HOME</a>
            <a href="#">WOMEN'S</a>
            <a href="#">DRESSES</a>
        </div>
        <!-- breadcrumb //end -->
        <!-- 상품 상세 //end -->
        <div class="container">
            <div class="row">
                <!-- 상품 이미지 -->
                <div class="col-xs-6">
                    <div class="product-images">
                        <div class="product-images-for">
                            <div><img src="../images/temp/temp-category-view.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view2.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view3.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view4.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view2.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view3.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view4.jpg" alt=""></div>
                        </div>
                        <!-- Slider Thumbnail -->
                        <div class="thumbnail-nav">
                            <div><img src="../images/temp/temp-category-view-thumb.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb2.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb3.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb4.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb2.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb3.jpg" alt=""></div>
                            <div><img src="../images/temp/temp-category-view-thumb4.jpg" alt=""></div>
                        </div>
                        <!-- Slider Thumbnail //end -->
                    </div>
                </div>
                <!-- 상품 이미지 -->
                <!-- 상품 옵션 정보 -->
                <div class="col-xs-5">
                    <div class="product-option-info">
                        <div class="detail-info">
                            <strong class="brand-name">steven alan</strong>
                            <h2 class="product-name">Oversized Stand Collar Dress</h2>
                            <span class="sku-number">#ES0232311</span>
                            <div class="product-price">
                                <em class="discount">₩498,000</em>
                                <strong class="price">₩380,000</strong>
                            </div>
                            <div class="shipping-type-group">
                                <span class="shipping-type"><i class="icon-plane"></i>해외배송</span>
                                <span class="shipping-type">국내배송</span>
                            </div>
                            <div class="coupon-download"><a href="#"><em class="benton">5%</em> 할인쿠폰 다운 <i class="icon-download"></i></a></div>
                        </div>
                        <div class="detail-option">
                            <div class="selectbox-block">
                                <div class="selectbox">
                                    <strong class="selectbox-value">COLOR</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="COLOR">COLOR</option>
                                        <option value="선택1">선택1</option>
                                        <option value="선택2">선택2</option>
                                        <option value="선택3">선택3</option>
                                        <option value="선택4">선택4</option>
                                        <option value="선택5">선택5</option>
                                    </select>
                                </div>
                                <div class="selectbox selectbox-block">
                                    <strong class="selectbox-value">SIZE</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="SIZE">SIZE</option>
                                        <option value="선택1">선택1</option>
                                        <option value="선택2">선택2</option>
                                        <option value="선택3">선택3</option>
                                        <option value="선택4">선택4</option>
                                        <option value="선택5">선택5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-button-group">
                                <div class="form-group">
                                    <div><a href="#" class="button button-large"><i class="icon-minus"></i></a></div>
                                    <div class="quantity-input"><input type="text" class="form-control form-large" value="1"></div>
                                    <div><a href="#" class="button button-large"><i class="icon-plus"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-button-group">
                            <div class="button-group">
                                <div><a href="#" class="button button-large button-primary">buy now</a></div>
                                <div><a href="#" class="button button-large">add to cart</a></div>
                            </div>
                            <div class="Sharing-group">
                                <div class="sns-link">
                                    <a href="#"><i class="icon-facebook-circled"></i></a>
                                    <a href="#"><i class="icon-twitter-circled"></i></a>
                                </div>
                                <div class="wishlist-link">
                                    <a href="#" class="button button-link button-link-large button-danger">위시리스트 담기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 상품 옵션 정보 -->
            </div>
        </div>
        <!-- 상품 상세 //end -->
        <!-- 상품 상세 정보 컨텐츠 -->
        <div class="container">
            <ul class="tabs detail-contents">
                <!-- 상품상세 -->
                <li class="tab">
                    <input type="radio" id="detail_content" name="detail_tab_group" checked="">
                    <label for="detail_content">상품상세</label>
                    <div class="tab-content">
                        111111
                    </div>
                </li>
                <!-- 상품상세 //end -->
                <!-- 배송 및 교환 -->
                <li class="tab">
                    <input type="radio" id="detail_refund" name="detail_tab_group">
                    <label for="detail_refund">배송 및 교환</label>
                    <div class="tab-content">
                        22222222
                    </div>
                </li>
                <!-- 배송 및 교환 //end -->
                <!-- 사이즈 사이드 -->
                <li class="tab">
                    <input type="radio" id="detail_sizeGuide" name="detail_tab_group">
                    <label for="detail_sizeGuide">사이즈 사이드</label>
                    <div class="tab-content">
                        33333333
                    </div>
                </li>
                <!-- 사이즈 가이드 //end -->
            </ul>
        </div>
        <!-- 상품 상세 정보 컨텐츠 //end -->
    </div>

<?php include '../footer/footer.php'; ?>