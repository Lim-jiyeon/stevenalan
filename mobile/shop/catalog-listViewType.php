<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">

        <!-- Grid View -->

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
                <a href="#" class="current"><i class="icon-th-large"></i></a>
                <a href="#"><i class="icon-blank"></i></a>
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

        <!-- Grid View //end -->

        <hr>

        <!-- Full List View -->

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
                <a href="#"><i class="icon-th-large"></i></a>
                <a href="#" class="current"><i class="icon-blank"></i></a>
                <a href="#"><i class="icon-list"></i></a>
            </div>
        </div>
        <!-- Category List -->
        <!-- [D] view type(Grid) : grid-view
                 view type(Full List) : full-list-view
                 view type(list) : list-view
                 각각 view type 에 맞게 클래스 추가 -->
        <ul class="category-list full-list-view">
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

        <!-- Full List View //end -->

        <hr>

        <!-- List View -->

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
                <a href="#"><i class="icon-th-large"></i></a>
                <a href="#"><i class="icon-blank"></i></a>
                <a href="#" class="current"><i class="icon-list"></i></a>
            </div>
        </div>
        <!-- Category List -->
        <!-- [D] view type(Grid) : grid-view
                 view type(Full List) : full-list-view
                 view type(list) : list-view
                 각각 view type 에 맞게 클래스 추가 -->
        <ul class="category-list list-view">
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

        <!-- List View //end -->
        
    </div>
</div>

<?php include '../footer/footer.php'; ?>