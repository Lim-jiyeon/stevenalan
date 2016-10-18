<?php include '../header/header.php'; ?>

    <div class="content category-detail">
        <!-- breadcrumb -->
        <div class="breadcrumb line">
            <a href="#">HOME</a>
            <a href="#">WOMEN'S</a>
            <a href="#">DRESSES</a>
        </div>
        <!-- breadcrumb //end -->
        <!-- 상품 상세 -->
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
                                <em class="discount">498,000원</em>
                                <strong class="price">380,000원</strong>
                            </div>
                            <div class="shipping-type-group">
                                <span class="shipping-type"><i class="icon-plane"></i>해외배송</span>
                                <span class="shipping-type">국내배송</span>
                                <p class="customs-message">이 상품은 통관시 관부가세가 고객님께 개별 부과되는 상품입니다.</p>
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
                                <div><a href="#" class="button button-large button-primary">바로 주문하기</a></div>
                                <div><a href="#" class="button button-large button-fourth" onclick="modalOpen('.shoppingbag_add_modal'); return false;">쇼핑백 담기</a></div>
                            </div>
                            <div class="Sharing-group">
                                <div class="sns-link">
                                    <a href="#"><i class="icon-facebook-circled"></i></a>
                                    <a href="#"><i class="icon-twitter-circled"></i></a>
                                </div>
                                <div class="wishlist-link">
                                    <input type="submit" name="" value="위시리스트 담기" class="button button-small button-link-large button-danger" onclick="modalOpen('.wishlist_add_modal'); return false;">
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
            <div class="detail-contents">
                <ul class="detail-info-menu">
                    <li class="selected"><a href="#" class="button">상품상세</a></li>
                    <li><a href="#" class="button">배송 및 교환</a></li>
                    <li><a href="#" class="button">사이즈 가이드</a></li>
                </ul>
                <!-- 상품상세 -->
                <div class="detail-info-content detail-info-box1">
                    <div id="ContentPlaceHolder1_dvProductDetail2">
                        <strong class="table-title">상품 정보</strong>
                        <table class="table table-condensed color-invert">
                            <caption class="sr-only">상품에 대한 상세 정보</caption>
                            <colgroup>
                                <col class="col-xs-2">
                                <col class="col-xs-10">
                            </colgroup>
                            <tbody>
                            <tr>
                                <td><p style="text-align: center;"><strong><span style="font-size: 13px;">COLOR : BURGUNDY</span></strong>
                                    </p><br>
                                    <p style="text-align: center;"><img src="http://img.isecream.net/PImg/250243/02/250243664_001_1.jpg">&nbsp;<img src="http://img.isecream.net/PImg/250243/02/250243664_001_2.jpg"></p><br>
                                    <p style="text-align: center;"><img src="http://img.isecream.net/PImg/250243/02/250243664_001_3.jpg">&nbsp;<img src="http://img.isecream.net/PImg/250243/02/250243664_001_4.jpg"></p>
                                    <br><br><br><br>
                                    <p style="text-align: center;"><strong><span style="font-size: 13px;">COLOR : PALE BLUE</span></strong></p><br>
                                    <p style="text-align: center;"><img src="http://img.isecream.net/PImg/250243/02/250243664_006_1.jpg">&nbsp;<img src="http://img.isecream.net/PImg/250243/02/250243664_006_2.jpg"></p><br>
                                    <p style="text-align: center;"><img src="http://img.isecream.net/PImg/250243/02/250243664_006_3.jpg">&nbsp;<img src="http://img.isecream.net/PImg/250243/02/250243664_006_4.jpg"></p>
                                    <br><br><br><br>
                                    <p style="text-align: center;"><strong><span style="font-size: 13px;">COLOR : NAVY</span></strong></p><br>
                                    <p style="text-align: center;"><img src="http://img.isecream.net/PImg/250243/02/250243664_011_1.jpg">&nbsp;<img src="http://img.isecream.net/PImg/250243/02/250243664_011_2.jpg"></p><br>
                                    <p style="text-align: center;"><img src="http://img.isecream.net/PImg/250243/02/250243664_011_3.jpg">&nbsp;<img src="http://img.isecream.net/PImg/250243/02/250243664_011_4.jpg"></p>
                                    <br><br><br><br><!-- END --> <br>
                                    A plush crewneck sweater from Steven Alan in fuzzy
                                    wool-alpaca out of Italy with delicate pointelle detailing throughout. <br> <br>*
                                    bracelet sleeves <br> <br>* contrast color stitch at back neck <br> <br>* 50%
                                    extrafine wool, 30% polyamide, 20% alpaca <br> <br>* dry clean <br> <br>* imported
                                    <br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br><br><br>
                    <p>A crisp poplin dress with a V neckline, kimono-style sleeves and an interwoven cord that cinches and<br> gathers the waist.<br><br></p>
                    <p><img src="../images/temp/temp-product.jpg" alt=""><br><br></p>
                    <p>
                        • cord ties at back<br>
                        • unlined<br>
                        • 100% cotton<br>
                        • wash cold<br>
                        • imported
                    </p>
                    <strong class="table-title">상품 정보</strong>
                    <table class="table table-condensed color-invert">
                        <caption class="sr-only">상품에 대한 상세 정보</caption>
                        <colgroup>
                            <col class="col-xs-2">
                            <col class="col-xs-10">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">소재</th>
                            <td>Cotton 100%</td>
                        </tr>
                        <tr>
                            <th scope="row">제조사/원산지</th>
                            <td>NOHANT / KOREA</td>
                        </tr>
                        <tr>
                            <th scope="row">사이즈 정보</th>
                            <td>
                                - M: 어깨너비 59cm / 가슴 59cm / 소매 24cm / 총길이 66cm<br>
                                - L: 어깨너비 60cm / 가슴 62.5cm / 소매 25cm / 총길이 70cm<br><br>
                                ※ 측정 방법에 따라 약간의 오차가 있을 수 있습니다.
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 상품상세 //end -->
                <!-- 배송 및 교환 -->
                <div class="detail-info-content detail-info-box2">
                    <div class="contents">
                        <div>
                            <strong>배송</strong>
                            <ul>
                                <li>- 입점업체별로 배송비 및 배송비 부과 기준이 다르니, 상품 상세 페이지를 확인하시기 바랍니다.</li>
                                <li>- 도서산간지방은 배송비가 추가될 수 있습니다.</li>
                                <li>- 평균 배송일은 결제완료(입금완료) 후 3일 이내이며, 지역별/업체별 상황에 따라 변경될 수 있습니다.</li>
                                <li>- 주문제작, 예약상품의 경우 지정일자에 순차적으로 출고됩니다.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>주문취소</strong>
                            <ul>
                                <li>- 주문취소는 상품이 출고되기 전까지 가능합니다.<br>
                                    <span></span>단, 상품준비중 상태인 경우 배송준비단계에 따라 취소가 불가능한 경우가 있으니 고객센터로 문의바랍니다.</li>
                                <li>- 고객님의 요청에 의한 상품사양 변경 시(이니셜 제작, 사이즈 맞춤 등) 제작이 시작된 이후의 취소는 불가능합니다.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>교환/반품</strong>
                            <ul>
                                <li>- 교환/반품 신청은 상품수령일로부터 7일이내 신청하셔야합니다. <a href="/MyPage/OrderCancelableInput.asp" class="button-request">반품/교환 신청하기</a></li>
                                <li>- 단순변심 및 고객님의 사정으로 반품하실 경우 왕복배송비는 고객님 부담이며, 입점업체별 기준에 따라 배송비용이 인상될 수 있습니다.</li>
                                <li>- 상품불량 및 오배송 등의 이유로 반품하실 경우 반품배송비는 무료입니다.</li>
                                <li>- 다음의 경우에는 반품/교환이 불가합니다.
                                    <ul>
                                        <li>1. 반품/교환 가능 기간을 초과한 경우</li>
                                        <li>2. 상품 및 구성품을 분실하였거나, 부주의로 인해 상품이 훼손되어 재판매가 불가능한 경우</li>
                                        <li>3. 상품을 사용하였거나 세탁 및 수선한 경우</li>
                                        <li>4. 고객님의 요청에 의해 상품사양이 변경된 경우(이니셜 제작, 사이즈 맞춤 등)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>환불</strong>
                            <ul>
                                <li>- 취소, 반품에 의한 환불은 완료시점을 기준으로 영업일 3일 이내에 처리됩니다.</li>
                                <li>- 신용카드 : 매입전 즉시취소(당일처리), 매입 후 1~2주 소요됩니다. 매입취소 처리기간은 카드사마다 다르며, 카드사를 통해 확인하실 수 있습니다.<br>
                                    <span></span>부분취소가 불가능한 경우(일부 카드사, 카드사 포인트결제 등)는 등록된 계좌로 입금됩니다.</li>
                                <li>- 실시간계좌이체, 무통장입금 : 영업일 1~3일이내 등록된 환불계좌로 입금됩니다.</li>
                                <li>- 휴대폰 : 당월 전체취소는 즉시 반영, 당월 부분취소 및 전월 취소는 등록된 계좌로 입금됩니다.</li>
                                <li>- 적립금 : 주문시 사용하신 적립금은 즉시 돌려드립니다.</li>
                                <li>- 할인쿠폰 : 주문 후 반품, 환불된 경우 한번 사용하신 쿠폰은 재사용 할 수 있습니다.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>A/S안내</strong>
                            <ul>
                                <li>- A/S 기준은 브랜드 및 상품마다 다르기 때문에 A/S를 원하실 경우 고객센터 <strong>(TEL 070-8740-1273)</strong>로 연락하여 접수해주시기 바랍니다.</li>
                                <li>- 구입하신 상품의 원단, 장식 등의 원자재가 생산 마감 등으로 인해 구입이 불가능 한 경우 직접 A/S가 제한될 수 있으며 이 경우 A/S 비용을 지원해드립니다.</li>
                                <li>- 구입 후 3개월 이후의 모든 A/S는 유상으로 처리되니 이점 양해 부탁드립니다.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>해외배송 상품 안내</strong>
                            <ul>
                                <li>- 해외에서 국내의 배송처까지 직배송 되는 상품이므로 평균 10~15일 정도 소요되며, 현지 업체의 발송지연 및 기타 자연재해, 통관 등의 사유로 지연될수 있습니다.</li>
                                <li>- 해외배송상품 구매 시 개인이 자가사용 목적으로 수입하는 개인수입 통관 원칙에 의거, 상품가격이 15만원 초과(일반통관 물품) 또는 US$200 초과(목록통관 물품) 되는 경우 <br>
                                    &nbsp;&nbsp;&nbsp;관세가 발생하며, 운송업체의 안내에 따라 대한민국 세관에 납부하시게 됩니다.
                                </li>
                                <li>- 해외배송상품의 통관을 위해 개인통관고유부호가 반드시 필요하며, 한번 발급받은 통관고유부호는 계속 사용이 가능합니다.
                                    <span style="display:inline; width:320px"><a href="https://p.customs.go.kr" target="personalNo" style="border:1px solid #ddd; padding:3px 7px; font-size:11px; color:#555; background-color:#eee ">통관고유부호 조회/발급</a></span>
                                </li>
                                <li>- 해외배송상품의 주문취소는 결제완료 상태인 경우에만 가능합니다.</li>
                                <li>- 반품 신청은 상품수령일로부터 7일 이내 진행하셔야하며, 단순변심 및 고객님의 사정으로 반품하실 경우 수입관세와 왕복국제운송비는 고객님 부담입니다.</li>
                                <li>- 상품불량 및 오배송 등의 이유로 반품하실 경우 반품 배송비는 무료입니다.</li>
                                <li>- 해외배송상품의 경우 재고를 국내에 보유하고 있지 않아 일체의 교환서비스가 불가능합니다.</li>
                                <li>- 해외배송상품의 A/S는 관세 및 국제운송료 실비부담으로 인해 어려우니 이 점 양해 부탁드립니다.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>보증조건/품질보증 기준</strong>
                            <ul>
                                <li>- 상품불량에 의한 반품, 교환, A/S, 환불, 품질보증 및 피해보상 등에 관한 사항은 소비자분쟁해결기준(공정거래위원회 고시)에 따라 받으실 수 있습니다.</li>
                                <li>- 전자상거래 등에서의 소비자 보호에 관한 법률에 의한 반품규정이 판매자가 지정한 반품조건보다 우선합니다.</li>
                                <li>- 환불 및 환불 지연에 따른 배상금 지급 조건,절차 등은 전자상거래 등에서의 소비자 보호에 관한 법률에 따라 처리합니다.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="border"></span>
                            <strong>소비자 피해보상/불만처리</strong>
                            <ul>
                                <li>- 전자상거래등에서의소비자보호에 관한 법률에 우선하여 소비자 피해보상 및 불만처리를 진행합니다. 고객센터 <strong>(TEL 070-8740-1273)</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 배송 및 교환 //end -->
                <!-- 사이즈 가이드 -->
                <div class="detail-info-content detail-info-box3">
                    <div class="size-button-toggle">
                        <input type="radio" name="size_switch" id="size_women" value="size-women" checked>
                        <label for="size_women" class="radio-toggle-display">women</label>
                        <input type="radio" name="size_switch" id="size_men" value="size-men">
                        <label for="size_men" class="radio-toggle-display">men</label>
                    </div>
                    <div class="size-guide-content size-women">
                        <img src="../images/shop/size-guide-women.jpg" class="Women's Size Guide">
                    </div>
                    <div class="size-guide-content size-men">
                        <img src="../images/shop/size-guide-men.jpg" class="Men's Size Guide">
                    </div>
                </div>
                <!-- 사이즈 가이드 //end -->
            </div>
        </div>
        <!-- 상품 상세 정보 컨텐츠 //end -->
        <!-- You May Also Like -->
        <div class="container">
            <div class="you-like-list">
                <h3 class="you-like-title">You May Also Like</h3>
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
        <!-- You May Also Like //end -->
        <!-- 쇼핑백 담기 팝업 -->
        <div class="modalWrap shoppingbag_add_modal">
            <div class="modal">
                <div class="in_modal">
                    <p class="washed-line-text">
                        <b>선택하신 상품을 쇼핑백에 담았습니다.<br>
                        확인 하시겠습니까?</b>
                    </p>
                    <div class="button-align-center button-group">
                        <a href="#" class="button button-primary">바로 주문하기</a>
                        <a href="#" class="button">쇼핑백 담기</a>
                    </div>
                </div>
                <a href="#none" class="closeModalBtn" onclick="modalClose(this);"><i class="icon-cancel"></i></a>
            </div>
            <div class="overlay"></div>
        </div>
        <!-- 쇼핑백 담기 팝업 //end -->
        <!-- 위시리스트 담기 팝업 -->
        <div class="modalWrap wishlist_add_modal">
            <div class="modal">
                <div class="in_modal">
                    <p class="washed-line-text">
                        <b>선택하신 상품을 위시리스트에 담았습니다.<br>
                            확인 하시겠습니까?</b>
                    </p>
                    <div class="button-align-center button-group">
                        <a href="#" class="button button-primary">계속 쇼핑하기</a>
                        <a href="#" class="button">위시리스트 가기</a>
                    </div>
                </div>
                <a href="#none" class="closeModalBtn" onclick="modalClose(this);"><i class="icon-cancel"></i></a>
            </div>
            <div class="overlay"></div>
        </div>
        <!-- 위시리스트 팝업 //end -->
    </div>

<?php include '../footer/footer.php'; ?>