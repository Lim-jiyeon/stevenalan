<?php include '../header/header.php'; ?>

<div class="content">
    <!-- Category Menu -->
    <div class="container">
        <div class="category-menu">
            <h2 class="category-menu-title">WOMEN</h2>
            <div class="category-menu-box">
                <h3 class="item-title"><a href="#">WOMEN</a></h3>
                <ul class="item-list">
                    <li><a href="#">NEW PRE-FALL 2016</a></li>
                    <li><a href="#">DRESSES &amp; JUMPSUITS</a></li>
                    <li><a href="#">SHIRTING</a></li>
                    <li><a href="#" class="current">SWEATERS</a></li>
                    <li><a href="#">TOPS</a></li>
                    <li><a href="#">BOTTOMS</a></li>
                    <li><a href="#">COATS &amp; JACKeTS</a></li>
                    <li><a href="#">SHOES &amp; ACCESSORIES</a></li>
                    <li><a href="#">WATCHES</a></li>
                    <li><a href="#">OPTICAL</a></li>
                </ul>
                <h3 class="item-title"><a href="#">MEN</a></h3>
                <ul class="item-list">
                    <li><a href="#">NEW PRE-FALL 2016</a></li>
                    <li><a href="#">T-SHIRTS &amp; POLOS</a></li>
                    <li><a href="#">SHIRTING</a></li>
                    <li><a href="#">SWEATERS</a></li>
                    <li><a href="#">PANTS &amp; SHORTS</a></li>
                    <li><a href="#">SUITING</a></li>
                    <li><a href="#">OUTERWEAR</a></li>
                    <li><a href="#">SHOES &amp; ACCESSORIES</a></li>
                    <li><a href="#">WATCHES</a></li>
                    <li><a href="#">OPTICAL</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Category Menu //end -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb">
            <a href="#">WOMEN'S</a>
            <a href="#">dresses</a>
        </div>
        <!-- breadcrumb //end -->
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
                            <span class="soldout"><span>sold out</span></span>
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
                            <span class="soldout"><span>sold out</span></span>
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
</div>

<?php include '../footer/footer.php'; ?>