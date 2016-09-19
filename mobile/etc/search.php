<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb">
            <a href="#">home</a>
            <a href="#">search</a>
        </div>
        <!-- breadcrumb //end -->
        <div class="title-group">
            <h2 class="title page-title">SEARCH</h2>
            <a href="#" class="filter-button button-secondary"><i class="icon-sliders"></i> 상세검색</a>
        </div>
        <div class="search-result">
            &#39;Comm des gar&#39; 검색 결과 <span>23</span> 상품이 검색되었습니다.
        </div>
    </div>
    <div class="container">
        <div class="row sort-by-options">
            <div class="col-xs-6 sort-by">
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
            <div class="col-xs-6 view-type"><!-- [D] 선택한 view type 에 class="current" 추가 -->
                <a href="#" class="current"><i class="icon-grid"></i></a>
                <a href="#"><i class="icon-full-list"></i></a>
                <a href="#"><i class="icon-list"></i></a>
            </div>
        </div>
        <!-- Category List -->
        <!-- [D] view type(Grid) : grid-view
                 view type(Full List) : full-list-view
                 view type(list) : list-view
                 각각 view type 에 맞게 클래스 추가 -->
        <ul class="category-list grid-view">
            <li class="item">
                <a href="#">
                    <div class="product-info">
                        <div class="product-thumbnail">
                            <img src="../images/temp/temp-category.jpg" alt="상품이미지">
                        </div>
                        <div class="item-info">
                            <span class="item-brand">COMME DES GARÇONS PLAY BY STEVEN</span>
                            <strong class="item-name">Aldama Embroidered Bib Top</strong>
                            <strong class="price">275,000</strong>
                            <em class="discount">298,000</em>
                            <span class="more-color"><i class="icon-th"></i>more color</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="product-info">
                        <div class="product-thumbnail">
                            <img src="../images/temp/temp-category.jpg" alt="상품이미지">
                        </div>
                        <div class="item-info">
                            <span class="item-brand">STEVEN ALAN</span>
                            <strong class="item-name">Belted Long Shirtdress Belted Long Shirtdress</strong>
                            <strong class="price">275,000</strong>
                            <em class="discount">298,000</em>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="product-info">
                        <div class="product-thumbnail">
                            <img src="../images/temp/temp-category.jpg" alt="상품이미지">
                        </div>
                        <div class="item-info">
                            <span class="item-brand">STEVEN ALAN</span>
                            <strong class="item-name">Belted Long Shirtdress</strong>
                            <strong class="price">275,000</strong>
                            <em class="discount">298,000</em>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="product-info">
                        <div class="product-thumbnail">
                            <img src="../images/temp/temp-category.jpg" alt="상품이미지">
                        </div>
                        <div class="item-info">
                            <span class="item-brand">STEVEN ALAN</span>
                            <strong class="item-name">Belted Long Shirtdress</strong>
                            <strong class="price">275,000</strong>
                            <em class="discount">298,000</em>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- Category List //end -->
    </div>
    <!-- Search Filter -->
    <div class="search-filter">
        <div class="search-filter-list">
            <ul>
                <!-- Category Filter Menu -->
                <!-- [D] 하위카테고리 오픈시 class="filter-title" 부분에 open 클래스 추가,
                        해당 카테고리 선택시 a 태그에 class="current" 추가 -->
                <li class="filter-category-list">
                    <h3 class="filter-title"><a href="#">카테고리</a></h3>
                    <div class="filter-item">
                        <ul class="item-list">
                            <li><a href="#" class="category-all">카테고리 전체</a></li>
                            <li>
                                <a href="#" class="item-title">WOMEN (26)</a>
                                <ul class="item-list-child">
                                    <li><a href="#">CLOTHING (23)</a></li>
                                    <li><a href="#">BAGS (23)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="item-title">A.P.C.</a>
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
                        <a href="#" class="item-button view-more">더 보기</a>
                    </div>
                </li>
                <!-- Category Filter Menu //end -->
                <!-- Brand Filter List -->
                <li>
                    <h3 class="filter-title"><a href="#">브랜드</a></h3>
                    <div class="filter-item">
                        <ul class="item-list">
                            <li><a href="#" class="brand-all">브랜드 전체</a></li>
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
                        <a href="#" class="item-button brand-close">닫기</a>
                    </div>
                </li>
                <!-- Brand Filter List //end -->
                <!-- Price Filter -->
                <li>
                    <h3 class="filter-title"><a href="#">가격</a></h3>
                    <div class="filter-item">
                        <div class="search-price">
                            <div class="form-group input-group">
                                <div>
                                    <input type="number" class="form-control" title="최소 가격 입력">
                                </div>
                                <div class="input-group-addon">-</div>
                                <div>
                                    <div class="input-button-group">
                                        <div>
                                            <input type="number" class="form-control" title="최대 가격 입력">
                                        </div>
                                        <div>
                                            <a href="#" class="button"><i class="icon-search-bold"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="item-button price-reset">초기화</a>
                    </div>
                </li>
                <!-- Price Filter //end -->
            </ul>
            <a href="#" class="filter-close"><i class="icon-cancel-thin"></i></a>
        </div>
        <div class="filter-overlay"></div>
    </div>
    <!-- Search Filter //end -->
</div>

<?php include '../footer/footer.php'; ?>