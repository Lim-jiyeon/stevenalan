<?php include '../header/header.php'; ?>

<div class="content coupon">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">쿠폰</h2>
        <div class="box coupon-register">
            <ul class="input-list">
                <li>
                    <div class="title-group">
                        <label for="coupon_register" class="title form-label">쿠폰 등록</label>
                        <span class="primary help-text"><i class="icon-attention"></i> 쿠폰에 기재된 일련번호를 입력해주세요.</span>
                    </div>
                    <div class="form-group input-button-group">
                        <div><input type="number" value="" id="coupon_register" class="form-control" placeholder="인증번호 입력" title="쿠폰등록 번호 입력"></div>
                        <div><a href="#" class="button"><span>등 록</span></a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <!-- 사용가능쿠폰 -->
        <div class="coupon-box">
            <div class="radio have-coupon">
                <input type="radio" name="couponList" id="have_coupon" value="have-coupon" checked>
                <label for="have_coupon" class="radio-display"></label>
                <label for="have_coupon" class="radio-label">사용가능쿠폰</label>
            </div>
            <div class="coupon-content have-coupon">
                <ul class="coupon-list">
                    <li>
                        <dl>
                            <dt class="title-group">
                                <strong class="title coupon-price">5,000원</strong>
                            </dt>
                            <dd class="coupon-info-content">
                                <ul>
                                    <li class="coupon-num">
                                        <span class="item-badge">쿠폰번호</span>
                                        Q121212SSAACCDAA
                                    </li>
                                    <li class="coupon-type">EARLY BIRD COUPON</li>
                                    <li class="coupon-purpose">
                                        <span>사용조건</span>
                                        <p>10만원 이상 구매시 사용가능</p>
                                        <span>사용기간</span>
                                        <p>2016.01.20 ~ 2016.05.30</p>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt class="title-group">
                                <strong class="title coupon-price">10%</strong>
                                <a href="#" class="button button-coupon">적용대상보기</a>
                            </dt>
                            <dd class="coupon-info-content">
                                <ul>
                                    <li class="coupon-num">
                                        <span class="item-badge">쿠폰번호</span>
                                        Q121212SSAACCDAA
                                    </li>
                                    <li class="coupon-type">ACNE STUDIOS 브랜드 위크 10% 할인 쿠폰</li>
                                    <li class="coupon-purpose">
                                        <span>사용조건</span>
                                        <p>10만원 이상 구매시 사용가능</p>
                                        <span>사용기간</span>
                                        <p>2016.01.20 ~ 2016.05.30</p>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt class="title-group">
                                <strong class="title coupon-price">20%</strong>
                            </dt>
                            <dd class="coupon-info-content">
                                <ul>
                                    <li class="coupon-num">
                                        <span class="item-badge">쿠폰번호</span>
                                        Q121212SSAACCDAA
                                    </li>
                                    <li class="coupon-type">ULLA JOHNSON 추가 20% 할인 쿠폰</li>
                                    <li class="coupon-purpose">
                                        <span>사용조건</span>
                                        <p>10만원 이상 구매시 사용가능</p>
                                        <span>사용기간</span>
                                        <p>2016.01.20 ~ 2016.05.30</p>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- 사용가능쿠폰 //end -->
            <!-- 지난쿠폰내역 -->
            <div class="radio pass-coupon">
                <input type="radio" name="couponList" id="pass_coupon" value="pass-coupon">
                <label for="pass_coupon" class="radio-display"></label>
                <label for="pass_coupon" class="radio-label">지난쿠폰내역</label>
            </div>
            <div class="coupon-content pass-coupon">
                <ul class="coupon-list">
                    <li>
                        <dl>
                            <dt class="title-group">
                                <strong class="title coupon-price">5,000원</strong>
                            </dt>
                            <dd class="coupon-info-content">
                                <ul>
                                    <li class="coupon-num">
                                        <span class="item-badge">쿠폰번호</span>
                                        Q121212SSAACCDAA
                                    </li>
                                    <li class="coupon-type">EARLY BIRD COUPON</li>
                                    <li class="coupon-purpose">
                                        <span>사용조건</span>
                                        <p>10만원 이상 구매시 사용가능</p>
                                        <span>사용일</span>
                                        <p>2016.05.30</p>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 지난쿠폰내역 //end -->
    </div>
</div>

<?php include '../footer/footer.php'; ?>