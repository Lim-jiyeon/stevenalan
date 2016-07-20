<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <h2 class="page-title">search</h2>
            <!-- 검색영역 -->
            <div class="box search-box">
                <div class="input-button-group">
                    <div class="form-group">
                        <div><input type="text" class="form-control" value="Comm des Gar"></div>
                        <div><a href="#" class="button"><i class="icon-search-bold"></i></a></div>
                    </div>
                </div>
                <div class="checkbox checkbox-block">
                    <input type="checkbox" id="save-id" checked="checked">
                    <label for="save-id" class="checkbox-display"></label>
                    <label for="save-id" class="checkbox-label">결과 내 재검색</label>
                </div>
                <div class="search-result">
                    &#39;Comm des gar&#39; 검색 결과 <strong>총 23 개</strong> 상품이 검색되었습니다.
                </div>
            </div>
            <!-- 검색영역 //end -->
        </div>
        <div class="container brand-view">
            <div class="row">
                <!-- Search Category List Menu -->
                <div class="col-xs-3 search-category-left">
                    <!-- Category List Menu -->
                    <div class="category-left search-category">
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
                    <!-- Category List Menu //end -->
                    <!-- Brand List -->
                    <div class="search-brand">
                        <ul class="category-menu">
                            <li class="category-menu-item">
                                <h3 class="item-title open"><a href="#">brand</a></h3>
                                <ul class="item-list">
                                    <li><a href="#" class="brand-all">ALL</a></li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" id="brand_stevenAlan">
                                            <label for="brand_stevenAlan" class="checkbox-display"></label>
                                            <label for="brand_stevenAlan" class="checkbox-label">STEVEN ALAN (22)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" id="brand_acneStudios">
                                            <label for="brand_acneStudios" class="checkbox-display"></label>
                                            <label for="brand_acneStudios" class="checkbox-label">ACNE STUDIOS (22)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" id="brand_blackCrane">
                                            <label for="brand_blackCrane" class="checkbox-display"></label>
                                            <label for="brand_blackCrane" class="checkbox-label">BLACK CRANE (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" id="brand_demylee">
                                            <label for="brand_demylee" class="checkbox-display"></label>
                                            <label for="brand_demylee" class="checkbox-label">DEMYLEE (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" id="brand_no6">
                                            <label for="brand_no6" class="checkbox-display"></label>
                                            <label for="brand_no6" class="checkbox-label">NO.6 (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" id="brand_raquelAllegra">
                                            <label for="brand_raquelAllegra" class="checkbox-display"></label>
                                            <label for="brand_raquelAllegra" class="checkbox-label">RAQUEL ALLEGRA</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="#" class="item-view-more">close</a>
                    </div>
                    <!-- Brand List //end -->
                    <!-- Price List -->
                    <div class="search-price">
                        <ul class="category-menu">
                            <li class="category-menu-item">
                                <h3 class="item-title open"><a href="#">price</a></h3>
                                <div class="input-button-group">
                                    <div class="form-group form-inline">
                                        <div class="placeholder">
                                            <label for="minimum_price">가격</label>
                                            <input type="text" id="minimum_price" class="form-control">
                                        </div>
                                        <div class="placeholder">
                                            <label for="maximum_price">가격</label>
                                            <input type="text" id="maximum_price" class="form-control">
                                        </div>
                                        <div><a href="#" class="button"><i class="icon-search-bold"></i></a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="item-view-more">reset</a>
                    </div>
                    <!-- Price List //end -->
                </div>
                <!-- Search Category List Menu //end -->
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