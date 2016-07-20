<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <h2 class="page-title">DEMYLEE</h2>
            <div><img src="../images/etc/brand-banner.jpg" alt="Brand Banner"></div>
        </div>
        <div class="container brand-view">
            <div class="row">
                <!-- Category List Menu -->
                <div class="col-xs-3">
                    <div class="category-left brand-view-left">
                        <ul class="category-menu">
                            <li class="category-menu-item">
                                <h3 class="item-title open"><a href="#">category</a></h3>
                                <!-- [D] 하위카테고리 오픈시 class="item-child-title" 부분에 open 클래스 추가,
                                        해당 카테고리 선택시 a 태그에 class="current" 추가 -->
                                <ul class="item-list">
                                    <li><a href="#" class="category-all">ALL</a></li>
                                    <li>
                                        <a href="#" class="item-child-title open">WOMEN (26)</a>
                                        <ul class="item-list-child" style="display:block;"><!-- [D] style은 마크업 확인용으로 개발시 삭제 -->
                                            <li><a href="#" class="current">CLOTHING (23)</a></li>
                                            <li><a href="#">BAGS (23)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="item-child-title">A.P.C.</a>
                                        <ul class="item-list-child">
                                            <li><a href="#">CLOTHING (23)</a></li>
                                            <li><a href="#">BAGS (23)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">BLACK CRANE</a></li>
                                    <li><a href="#">BUILDING BLOCK</a></li>
                                    <li><a href="#">CLARE V.</a></li>
                                    <li><a href="#">DEMYLEE</a></li>
                                    <li><a href="#">HOPE</a></li>
                                    <li><a href="#">MANSUR GAVRIEL</a></li>
                                    <li><a href="#">NO.6</a></li>
                                    <li><a href="#">RACHEL COMEY</a></li>
                                    <li><a href="#">ULLA JOHNSON</a></li>
                                    <li><a href="#">VIEW ALL WOMEN'S DESIGNERS</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a href="#" class="item-view-more">VIEW MORE</a>
                    </div>
                </div>
                <!-- Category List Menu //end -->
                <!-- Search Item List -->
                <div class="col-xs-9 search-view-list">
                    <div class="row result-options">
                        <div class="col-xs-2 sort-by">
                            <div class="selectbox">
                                <strong class="selectbox-value">최신순</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="최신순">최신순</option>
                                    <option value="선택1">선택1</option>
                                    <option value="선택2">선택2</option>
                                    <option value="선택3">선택3</option>
                                    <option value="선택4">선택4</option>
                                    <option value="선택5">선택5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-10 results-hits">
                            <span class="">Total 82</span>
                        </div>
                    </div>
                    <!-- Category List -->
                    <ul class="row category-list">
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
                            <div class="item">
                                <a href="#">
                                    <div class="product-thumbnail">
                                        <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                    </div>
                                    <div class="product-info">
                                        <span class="brand-name">STEVEN ALAN</span>
                                        <strong class="product-name">Farrah Dress</strong>
                                        <div class="product-price">
                                            <span class="price">380,000</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="more-color">more colors</a>
                            </div>
                        </li>
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
                            <div class="item">
                                <a href="#">
                                    <div class="product-thumbnail">
                                        <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                    </div>
                                    <div class="product-info">
                                        <span class="brand-name">STEVEN ALAN</span>
                                        <strong class="product-name">Farrah Dress</strong>
                                        <div class="product-price">
                                            <span class="price">380,000</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="more-color">more colors</a>
                            </div>
                        </li>
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
                            <div class="item">
                                <a href="#">
                                    <div class="product-thumbnail">
                                        <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                    </div>
                                    <div class="product-info">
                                        <span class="brand-name">STEVEN ALAN</span>
                                        <strong class="product-name">Farrah Dress</strong>
                                        <div class="product-price">
                                            <span class="price">380,000</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="more-color">more colors</a>
                            </div>
                        </li>
                        <li class="col-xs-3">
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
                        <li class="col-xs-3">
                            <div class="item">
                                <a href="#">
                                    <div class="product-thumbnail">
                                        <img src="../images/temp/temp-category2.jpg" alt="상품이미지">
                                    </div>
                                    <div class="product-info">
                                        <span class="brand-name">STEVEN ALAN</span>
                                        <strong class="product-name">Farrah Dress</strong>
                                        <div class="product-price">
                                            <span class="price">380,000</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="more-color">more colors</a>
                            </div>
                        </li>
                        <li class="col-xs-3">
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
                    <!-- Category List //end -->
                </div>
                <!-- Search Item List //end -->
            </div>
        </div>
    </div>

<?php include '../footer/footer.php'; ?>