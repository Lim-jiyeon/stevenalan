<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">회원가입</h2>
        <!-- 필수 입력 정보 -->
        <div class="signup">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>필수 입력 정보</h3>
            <div class="box">
                <ul class="input-list">
                    <li>
                        <div class="form-group input-button-group">
                            <div><input type="email" class="form-control" placeholder="아이디" title="이메일 입력"></div>
                            <div><a href="#" class="button"><span>중복확인</span></a></div>
                        </div>
                        <p class="help-text help-success"><i class="icon-check"></i> 사용 가능한 이메일입니다.</p>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호" title="비밀번호 입력">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호 재확인" title="비밀번호 재입력">
                        </div>
                        <p class="help-text help-danger"><i class="icon-attention"></i> 비밀번호가 일치하지 않습니다.</p>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="이름" title="이름 입력">
                        </div>
                    </li>
                    <li class="phone-group">
                        <div class="form-group input-group">
                            <div>
                                <div class="selectbox">
                                    <strong class="selectbox-value">010</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="010">010</option>
                                        <option value="선택1">선택1</option>
                                        <option value="선택2">선택2</option>
                                        <option value="선택3">선택3</option>
                                        <option value="선택4">선택4</option>
                                        <option value="선택5">선택5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group-addon">-</div>
                            <div>
                                <input type="number" value="" class="form-control" title="핸드폰 번호 두번째 자리 입력">
                            </div>
                            <div class="input-group-addon">-</div>
                            <div>
                                <input type="number" value="" class="form-control" title="핸드폰 번호 세번째 자리 입력">
                            </div>
                        </div>
                    </li>
                    <li class="email-group">
                        <div class="form-group input-group">
                            <div>
                                <input type="email" class="form-control" placeholder="이메일" title="이메일 입력">
                            </div>
                            <div class="input-group-addon">@</div>
                            <div>
                                <div class="selectbox">
                                    <strong class="selectbox-value">선택</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="선택">선택</option>
                                        <option value="naver.com">naver.com</option>
                                        <option value="mail.com">gmail.com</option>
                                        <option value="hanmail.net">hanmail.net</option>
                                        <option value="nate.com">nate.com</option>
                                        <option value="hotmail.com">hotmail.com</option>
                                        <option value="yahoo.com">yahoo.com</option>
                                        <option value="lycos.co.kr">lycos.co.kr</option>
                                        <option value="직접입력">직접입력</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox checkbox-block">
                            <input type="checkbox" id="sameId" name="sameId">
                            <label for="sameId" class="checkbox-display"></label>
                            <label for="sameId" class="checkbox-label primary">아이디와 동일하게 사용</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-group input-button-group">
                            <div><input type="number" value="" class="form-control" title="우편번호 입력"></div>
                            <div class="postcode-button"><a href="#" class="button"><span>우편번호 검색</span></a></div>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="기본 주소" title="기본 주소 입력">
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="상세 주소" title="상세 주소 입력">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 필수 입력 정보 //end -->
        <!-- 선택 입력 정보 -->
        <div class="signup input-select">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>선택 입력 정보</h3>
            <div class="box">
                <ul class="input-list">
                    <li>
                        <label class="input-select-label">정보 수신 여부</label>
                        <div class="row">
                            <div class="col-xs-6 checkbox">
                                <input type="checkbox" id="receive_email" name="receive_info" checked>
                                <label for="receive_email" class="checkbox-display"></label>
                                <label for="receive_email" class="checkbox-label">이메일 수신</label>
                            </div>
                            <div class="col-xs-6 checkbox">
                                <input type="checkbox" id="receive_sms" name="receive_info" checked>
                                <label for="receive_sms" class="checkbox-display"></label>
                                <label for="receive_sms" class="checkbox-label">SMS 수신</label>
                            </div>
                        </div>
                        <p class="help-text primary"><i class="icon-attention"></i> 상품 구매 정보는 수신 동의 여부와 관계없이 발송됩니다.</p>
                    </li>
                    <li class="birth-date">
                        <label for="birth_date" class="input-select-label">생년월일</label>
                        <div class="form-group input-group">
                            <div><input type="number" id="birth_date" class="form-control" placeholder="년도" title="년도 입력"></div>
                            <div><input type="number" class="form-control" placeholder="월" title="월 입력"></div>
                            <div><input type="number" class="form-control" placeholder="일" title="일 입력"></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label for="male" class="col-xs-4 input-select-label">성별</label>
                            <div class="col-xs-4 radio">
                                <input type="radio" id="male" name="gender">
                                <label for="male" class="radio-display"></label>
                                <label for="male" class="radio-label">남자</label>
                            </div>
                            <div class="col-xs-4 radio">
                                <input type="radio" id="female" name="gender">
                                <label for="female" class="radio-display"></label>
                                <label for="female" class="radio-label">여자</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <label for="personalCustomsCode" class="input-select-label">개인통관고유부호</label>
                        <div class="form-group input-button-group">
                            <div><input type="text" id="personalCustomsCode" class="form-control"></div>
                            <div class="pcc-button"><a href="#" class="button"><span>조회/발급</span></a></div>
                        </div>
                        <p class="help-text primary"><i class="icon-attention"></i> 해외 배송상품 구매 시 배송 및 통관 목적으로 개인통관고유부호가 필요합니다. 입력하는 모든 정보는 배송 및 통관 시에만 활용되며, 다른 용도로는 사용되지 않습니다.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 선택 입력 정보 //end -->
        <!-- 약관동의 -->
        <div class="signup member-privacy">
            <h3 class="secondary-title arrow-title"><i class="icon-right-open"></i>약관동의</h3>
            <div class="row signup-agree">
                <div class="col-xs-12">
                    <h4 class="signup-agree-title">
                        <div class="checkbox">
                            <input type="checkbox" id="agree_terms" name="agree_terms" checked>
                            <label for="agree_terms" class="checkbox-display"></label>
                            <label for="agree_terms" class="checkbox-label">이용약관 동의 (필수)</label>
                        </div>
                        <a href="#none" class="button button-xsmall button-secondary" onclick="agreeOpen(this);"><span>내용보기</span></a>
                    </h4>
                    <div class="agree-box scroll">
                        <div class="agreement">
                            <dl class="box">
                                <dt>제1조(목적)</dt>
                                <dd>이 약관은 ㈜커먼웰스리테일(이하 “회사”로 지칭)에서 운영하는 STEVEN ALAN 사이트 (www.stevenalan.co.kr)가 제공하는 인터넷관련 서비스 (이하“서비스”라 한다)를 이용함에 있어 “회사”와 이용자의 권리/의무 및 책임사항을 규정함을 목적으로 합니다.<br>
                                    ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다」</dd>
                            </dl>
                            <dl>
                                <dt>제2조(정의)</dt>
                                <dd>
                                    <ol>
                                        <li>1. “STEVEN ALAN 사이트”라 함은 &quot;회사&quot;가 재화 또는 용역(이하 &quot;재화 등&quot;이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 &quot;재화 등&quot;을 거래할 수 있도록 설정한 가상의 영업장 및 사이버 몰을 운영하는 사업자의 의미로도 사용합니다.</li>
                                        <li>2. “STEVEN ALAN 사이트”는 &quot;회사&quot;가 이용자들에게 서비스를 제공하기 위하여 운영하는 인터넷 사이트를 의미합니다.</li>
                                        <li>3. “이용자"란 “STEVEN ALAN 사이트”에 접속하여 이 약관에 따라 “STEVEN ALAN 사이트”가 제공하는 서비스를 받는 회원 및 비회원을 말합니다. 단, 법인이나 회사명의 등으로 서비스 이용은 불가능합니다.</li>
                                        <li>4. &#39;회원&#39;이라 함은 “STEVEN ALAN 사이트”에 개인정보를 제공하여 회원등록을 한 자로서, “STEVEN ALAN 사이트”의 정보를 지속적으로 제공받으며, “STEVEN ALAN 사이트”가 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다.</li>
                                        <li>5. &#39;비회원&#39;이라 함은 회원에 가입하지 않고 “STEVEN ALAN 사이트”가 제공하는 서비스를 이용하는 자를 말합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제3조(약관의 명시와 설명 및 개정)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호, 모사전송번호, 전자우편주소, 사업자등록번호, 통신판매업 신고번호, 개인정보 관리책임자 등을 회원이 쉽게 알 수 있도록 ”STEVEN ALAN 사이트”의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회, 배송책임, 환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.</li>
                                        <li>3. ”STEVEN ALAN 사이트”는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 전자거래기본법, 전자서명법, 정보통신망이용촉진 등에 관한 법률, 방문판매 등에 관한 법률, 소비자보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.</li>
                                        <li>4.  ”STEVEN ALAN 사이트”가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행 약관과 함께 ”STEVEN ALAN 사이트”의 초기 화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 다만, 이용자에게 불리하게 약관 내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 ”STEVEN ALAN 사이트”는 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.</li>
                                        <li>5. ”STEVEN ALAN 사이트”가 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간 내에 ”STEVEN ALAN 사이트”에 송신하여 ”STEVEN ALAN 사이트”의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.</li>
                                        <li>6. 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호 지침 및 관계법령 또는 상관례에 따릅니다.</li>
                                    </ol>
                                </dd>
                                <dt>제4조(서비스의 제공 및 변경)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 다음과 같은 업무를 수행합니다.
                                            <ol>
                                                <li>가. 재화 또는 용역에 대한 정보제공 및 수입대행계약 또는 구매계약의 체결</li>
                                                <li>나. 구매계약이 체결된 재화 또는 용역의 배송</li>
                                                <li>다. 기타 ”STEVEN ALAN 사이트”가 정하는 업무</li>
                                            </ol>
                                        </li>
                                        <li>2. ”STEVEN ALAN 사이트”는 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화 또는 용역의 내용 및 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.</li>
                                        <li>3. ”STEVEN ALAN 사이트”가 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화 등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 그 사유를 이용자에게 즉시 통지합니다.</li>
                                        <li>4. 전항의 경우 ”STEVEN ALAN 사이트”는 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, ”STEVEN ALAN 사이트”가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제5조(서비스의 중단)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 컴퓨터 등 정보통신설비의 보수, 점검, 교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 제1항의 사유로 서비스의 제공이 일시적 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다. 단, ”STEVEN ALAN 사이트”가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.</li>
                                        <li>3. 사업종목의 전환, 사업의 포기, 업체간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는 ”STEVEN ALAN 사이트”는 제8조에 정한 방법으로 이용자에게 통지하고 이용자가 이로 인하여 손해를 입은 경우에는 당초 ”STEVEN ALAN 사이트”에서 제시한 조건에 따라 이용자에게 보상합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제6조(회원가입)</dt>
                                <dd>
                                    <ol>
                                        <li>1. 이용자는 ”STEVEN ALAN 사이트”가 정한 가입양식에 따라 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를 함으로서 회원가입을 신청합니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 제1항과 같이 회원으로 가입할 것을 신청한 회원 중 다음 각 호에 해당하지 않는 한 회원으로 등록합니다.
                                            <ol>
                                                <li>① 가입신청자가 이 약관 제7조 3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우, 다만 제7조 3항에 의한 회원자격 상실후 3년이 경과한 자로서 “STEVEN ALAN 사이트”의 회원재가입 승낙을 얻은 경우에는 예외로 한다.</li>
                                                <li>② 등록 내용에 허위, 기재누락, 오기가 있는 경우</li>
                                                <li>③ 기타 회원으로 등록하는 것이 “STEVEN ALAN 사이트”의 기술상 현저히 지장이 있다고 판단되는 경우</li>
                                                <li>④ 가입신청자의 연령이 만 14세 미만인 경우.</li>
                                            </ol>
                                        </li>
                                        <li>3. 회원가입계약의 성립시기는 ”STEVEN ALAN 사이트”의 회원가입 승낙이 회원에게 도달한 시점으로 합니다.</li>
                                        <li>4. 회원은 회원가입 시, 기입한 회원정보에 변경이 있는 경우, 즉시 전자우편이나 기타 방법으로 ”STEVEN ALAN 사이트”에 그 변경사항을 알려야 합니다.</li>
                                        <li>5. 회원가입 정보를 받은 경우도 제7조 2항 가, 나, 다, 라 항목에 해당될 시에는 회원가입이 승인되지 않은 것으로 합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제7조(회원탈퇴 및 자격상실 등)</dt>
                                <dd>
                                    <ol>
                                        <li>1. 회원은 ”STEVEN ALAN 사이트”에 언제든지 회원탈퇴를 요청할 수 있으며 ”STEVEN ALAN 사이트”는 회원탈퇴를 처리합니다.<br>
                                            단, 회원 탈퇴 후에도 이미 예약발송으로 설정되어 있는 광고성 Email, SMS를 약 2~3일간 받아보실 수 있습니다.</li>
                                        <li>2. 회원이 다음 각 호의 사유에 해당하는 경우, ”STEVEN ALAN 사이트”는 회원자격을 제한 또는 정지시킬 수 있습니다.
                                            <ol>
                                                <li>가. 가입신청 내역에 허위내용이 발견된 경우</li>
                                                <li>나. ”STEVEN ALAN 사이트” 사용과 관련하여 ”STEVEN ALAN 사이트” 서비스요금 미납 등 회원이 부담하는 채무를 기일 내에 이행하지 않는 경우</li>
                                                <li>다. 다른 사람의 ”STEVEN ALAN 사이트” 이용을 방해하거나 그 정보를 도용하는 등 전자상거래 질서를 위협하는 경우</li>
                                                <li>라. 회원이 제출한 주소 또는 연락처의 변경통지를 하지 않는 등 회원의 귀책사유로 인해 회원이 소재 불명 되어 ”STEVEN ALAN 사이트”가 회원에게 통지, 연락을 할 수 없다고 판단되는 경우</li>
                                                <li>마. ”STEVEN ALAN 사이트”를 이용하여 관련법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우</li>
                                            </ol>
                                        </li>
                                        <li>3. ”STEVEN ALAN 사이트”는 다음 각 호의 경우에 회원자격을 상실시킬 수 있습니다.
                                            <ol>
                                                <li>가. ”STEVEN ALAN 사이트”가 본 조2항에 의해 회원자격을 제한 또는 정지시킨 후, 동일한 행위가 2회 이상 반복 되거나 30일 이내에 그 사유가 시정되지 아니하는 경우</li>
                                                <li>나. 회원이 위법, 불법 혹은 부정한 목적으로 본 서비스를 사용하였다고 ”STEVEN ALAN 사이트”가 객관적 자료에 의거 합리적으로 판단했을 경우</li>
                                            </ol>
                                        </li>
                                        <li>4. ”STEVEN ALAN 사이트”가 통합 회원자격을 상실시키는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고, 말소 전에 최소한 30일 이상의 기간을 정하여 소명할 기회를 부여합니다. (회원의 소재불명 등으로 인해 소명 기회의 제공이 어려운 경우는 ”STEVEN ALAN 사이트”의 판단으로 회원등록을 말소할 수 있습니다.) </li>
                                    </ol>
                                </dd>
                                <dt>제8조(회원에 대한 통지)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”가 회원에 대한 통지를 하는 경우, 회원이 ”STEVEN ALAN 사이트”와 미리 약정하여 지정한 전자우편 주소로 할 수 있습니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 불특정다수 회원에 대한 통지의 경우 1주일 이상 ”STEVEN ALAN 사이트” 게시판에 게시함으로서 개별통지에 갈음할 수 있습니다. 다만, 회원 본인의 거래와 관련하여 중대한 영향을 미치는 사항에 대하여는 개별통지를 합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제9조(구매신청)</dt>
                                <dd>
                                    <p>”STEVEN ALAN 사이트” 이용자는 ”STEVEN ALAN 사이트” 상에서 다음 또는 이와 유사한 방법에 의하여 구매를 신청하며, ”STEVEN ALAN 사이트”는 이용자가 구매신청을 함에 있어서 다음의 각 내용을 알기 쉽게 제공하여야 합니다. 단, 회원인 경우 제2호 내지 제4호의 적용을 제외할 수 있습니다.</p>
                                    <ol>
                                        <li>1. 재화등의 검색 및 선택</li>
                                        <li>2. 성명, 주소, 전화번호, 전자우편주소(또는 이동전화번호) 등의 입력</li>
                                        <li>3. 약관내용, 청약철회권이 제한되는 서비스, 배송료, 설치비 등의 비용부담과 관련한 내용에 대한 확인</li>
                                        <li>4. 이 약관에 동의하고 위 3.호의 사항을 확인하거나 거부하는 표시(예, 마우스 클릭)</li>
                                        <li>5. 재화등의 구매신청 및 이에 관한 확인 또는 ”STEVEN ALAN 사이트”의 확인에 대한 동의</li>
                                        <li>6. 결제방법의 선택</li>
                                    </ol>
                                </dd>
                                <dt>제10조(계약의 성립)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 제9조와 같은 구매신청에 대하여 다음 각호에 해당하면 승낙하지 않을 수 있습니다.<br>
                                            다만, 미성년자와 계약을 체결하는 경우에는 법정대리인의 동의를 얻지 못하면 미성년자 본인 또는 법정대리인이 계약을 취소할 수 있다는 내용을 고지하여야 합니다.
                                            <ol>
                                                <li>가. 신청 내용에 허위, 기재누락, 오기가 있는 경우</li>
                                                <li>나. 미성년자가 담배, 주류 등 청소년보호법에서 금지하는 재화 및 용역을 구매하는 경우</li>
                                                <li>다. 기타 구매신청에 승낙하는 것이 ”STEVEN ALAN 사이트” 기술상 현저히 지장이 있다고 판단하는 경우</li>
                                            </ol>
                                        </li>
                                        <li>2. ”STEVEN ALAN 사이트”의 승낙이 제12조 제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것으로 봅니다.</li>
                                        <li>3. ”STEVEN ALAN 사이트”의 승낙의 의사표시에는 이용자의 구매신청에 대한 확인 및 판매가능 여부, 구매신청의 정정 취소 등에 관한 정보 등을 포함하여야 합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제11조(지급방법과 시기)</dt>
                                <dd>
                                    <p>”STEVEN ALAN 사이트”에서 구매한 재화 또는 용역에 대한 대금지급방법은 다음 각호의 방법 중 가용한 방법으로 할 수 있습니다. 단, ”STEVEN ALAN 사이트”는 이용자의 지급방법에 대하여 재화 등의 대금에 어떠한 명목의 수수료도 추가하여 징수할 수 없습니다.</p>
                                    <ol>
                                        <li>1. 폰뱅킹, 인터넷뱅킹, 메일 뱅킹 등의 각종 계좌이체</li>
                                        <li>2. 선불카드, 직불카드, 신용카드 등의 각종 카드 결제</li>
                                        <li>3. 온라인무통장입금</li>
                                        <li>4. 전자화폐에 의한 결제</li>
                                        <li>5. 수령시 대금지급</li>
                                        <li>6. ”STEVEN ALAN 사이트”와 계약을 맺었거나 ”STEVEN ALAN 사이트”가 인정한 상품권 및 쿠폰에 의한 결제</li>
                                        <li>7. 기타 전자적 지급 방법에 의한 대금 지급 등</li>
                                    </ol>
                                </dd>
                                <dt>제12조(수신확인통지, 구매신청/ 배송신청 변경 및 취소)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다.</li>
                                        <li>2. 수신확인통지를 받은 이용자는 의사표시의 불일치 등이 있는 경우에는 수신확인통지를 받은 후 즉시 구매신청 변경 및 취소를 요청할 수 있고 ”STEVEN ALAN 사이트”는 배송 전에 이용자의 요청이 있는 경우에는 지체 없이 그 요청에 따라 처리하여야 합니다. 다만 이미 대금을 지불한 경우에는 제15조의 청약철회 등에 관한 규정에 따릅니다.</li>
                                    </ol>
                                </dd>
                                <dt>제13조(서비스별 요금 결제, 재화 등의 공급 및 보관)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 이용자와 재화 등의 공급시기에 관하여 별도의 약정이 없는 이상, 이용자가 청약을 한 날부터 7일 이내에 재화 등을 배송할 수 있도록 주문제작, 포장 등 기타의 필요한 조치를 취합니다. 다만,  ”STEVEN ALAN 사이트”가 이미 재화 등의 대금의 전부 또는 일부를 받은 경우에는 대금의 전부 또는 일부를 받은 날부터 2영업일 이내에 조치를 취합니다. 이때  ”STEVEN ALAN 사이트”는 이용자가 재화 등의 공급 절차 및 진행 사항을 확인할 수 있도록 적절한 조치를 합니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다. 만약  ”STEVEN ALAN 사이트”가 약정 배송기간을 초과한 경우에는 그로 인한 이용자의 손해를 배상하여야 합니다. 다만  ”STEVEN ALAN 사이트”가 고의ㆍ과실이 없음을 입증한 경우에는 그러하지 아니합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제14조(환급)</dt>
                                <dd>”STEVEN ALAN 사이트”는 이용자가 구매 신청한 재화 등이 품절 등의 사유로 인도 또는 제공을 할 수 없을 때에는 지체 없이 그 사유를 이용자에게 통지하고 사전에 재화 등의 대금을 받은 경우에는 대금을 받은 날부터 2영업일 이내에 환급하거나 환급에 필요한 조치를 취합니다.</dd>
                                <dt>제15조(청약철회 등)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”와 재화 등의 구매에 관한 계약을 체결한 이용자는 수신확인의 통지를 받은 날부터 7일 이내에는 청약의 철회를 할 수 있습니다.</li>
                                        <li>2. 이용자는 재화 등을 배송 받은 경우 다음 각호의 1에 해당하는 경우에는 반품 및 교환을 할 수 없습니다.
                                            <ol>
                                                <li>가. 이용자에게 책임 있는 사유로 재화 등이 멸실 또는 훼손된 경우 (다만, 재화 등의 내용을 확인하기 위하여 포장 등을 훼손한 경우에는 청약철회를 할 수 있습니다)</li>
                                                <li>나. 이용자의 사용 또는 일부 소비에 의하여 재화 등의 가치가 현저히 감소한 경우</li>
                                                <li>다. 시간의 경과에 의하여 재판매가 곤란할 정도로 재화 등의 가치가 현저히 감소한 경우</li>
                                                <li>라. 같은 성능을 지닌 재화 등으로 복제가 가능한 경우 그 원본인 재화 등의 포장을 훼손한 경우</li>
                                            </ol>
                                        </li>
                                        <li>3. 제2항 제2호 내지 제4호의 경우에 ”STEVEN ALAN 사이트”가 사전에 청약철회 등이 제한되는 사실을 소비자가 쉽게 알 수 있는 곳에 명기하거나 시용상품을 제공하는 등의 조치를 하지 않았다면 이용자의 청약철회 등이 제한되지 않습니다.</li>
                                        <li>4. 이용자는 제1항 및 제2항의 규정에 불구하고 재화 등의 내용이 표시/광고 내용과 다르거나 계약내용과 다르게 이행된 때에는 당해 재화 등을 공급받은 날부터 3월 이내, 그 사실을 안 날 또는 알 수 있었던 날부터 30일 이내에 청약철회 등을 할 수 있습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제16조(청약철회 등의 효과)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 이용자로부터 재화 등을 반환 받은 경우 3영업일 이내에 이미 지급받은 재화 등의 대금을 환급합니다. 이 경우 ”STEVEN ALAN 사이트”가 이용자에게 재화 등의 환급을 지연한 때에는 그 지연기간에 대하여 공정거래위원회가 정하여 고시하는 지연이자율을 곱하여 산정한 지연이자를 지급합니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 위 대금을 환급함에 있어서 이용자가 신용카드 또는 전자화폐 등의 결제수단으로 재화 등의 대금을 지급한 때에는 지체 없이 당해 결제수단을 제공한 사업자로 하여금 재화 등의 대금의 청구를 정지 또는 취소하도록 요청합니다.</li>
                                        <li>3. 청약철회 등의 경우 공급받은 재화 등의 반환에 필요한 비용은 이용자가 부담합니다. ”STEVEN ALAN 사이트”는 이용자에게 청약철회 등을 이유로 위약금 또는 손해배상을 청구하지 않습니다. 다만 재화 등의 내용이 표시/광고 내용과 다르거나 계약내용과 다르게 이행되어 청약철회 등을 하는 경우 재화 등의 반환에 필요한 비용은 ”STEVEN ALAN 사이트”가 부담합니다.</li>
                                        <li>4. 이용자가 재화 등을 제공받을 때 발송비를 부담한 경우에 ”STEVEN ALAN 사이트”는 청약철회 시 그 비용을 누가 부담하는지를 이용자가 알기 쉽도록 명확하게 표시합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제17조(개인정보보호)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 이용자의 정보수집 시 구매계약 이행에 필요한 최소한의 정보를 수집합니다. 다음 사항을 필수 사항으로 하며 그 외 사항은 선택사항으로 합니다.
                                            <ol>
                                                <li>가. 성명</li>
                                                <li>나. 주소</li>
                                                <li>다. 전화번호</li>
                                                <li>라. 희망ID(회원의 경우)</li>
                                                <li>마. 비밀번호(회원의 경우)</li>
                                                <li>바. 전자우편주소(또는 이동전화번호)</li>
                                            </ol>
                                        </li>
                                        <li>2. ”STEVEN ALAN 사이트”가 이용자의 개인식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를 받습니다.</li>
                                        <li>3. 제공된 개인정보는 당해 이용자의 동의 없이 목적 외의 이용이나 제3자에게 제공할 수 없으며, 이에 대한 모든 책임은 ”STEVEN ALAN 사이트”가 집니다. 다만, 다음의 경우에는 예외로 합니다.
                                            <ol>
                                                <li>가. 배송업무상 배송업체에게 배송에 필요한 최소한의 이용자의 정보(성명, 주소, 전화번호)를 알려주는 경우</li>
                                                <li>나. 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로 제공하는 경우</li>
                                                <li>다. 재화 등의 거래에 따른 대금정산을 위하여 필요한 경우</li>
                                                <li>라. 도용방지를 위하여 본인확인에 필요한 경우</li>
                                                <li>마. 법률의 규정 또는 법률에 의하여 필요한 불가피한 사유가 있는 경우</li>
                                            </ol>
                                        </li>
                                        <li>4. ”STEVEN ALAN 사이트”가 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는 개인정보관리 책임자의 신원 (소속, 성명 및 전화번호, 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공 관련사항(제공받은 자, 제공목적 및 제공할 정보의 내용) 등 정보통신망이용촉진등에관한법률 제22조 제2항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는 언제든지 이 동의를 철회할 수 있습니다.</li>
                                        <li>5. 이용자는 언제든지 ”STEVEN ALAN 사이트”가 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며 ”STEVEN ALAN 사이트”는 이에 대해 지체 없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 ”STEVEN ALAN 사이트”는 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.</li>
                                        <li>6. ”STEVEN ALAN 사이트”는 개인정보 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 변조 등으로 인한 이용자의 손해에 대하여 모든 책임을 집니다.</li>
                                        <li>7. ”STEVEN ALAN 사이트” 또는 그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는 당해 개인정보를 지체 없이 파기합니다.</li>
                                        <li>8. ”STEVEN ALAN 사이트”는 이용자에게 ”STEVEN ALAN 사이트”가 제공하는 다양한 서비스의 질적향상 및 신규 서비스 등을 위하여 이용자의 개인식별이 가능한 개인정보를 이용자의 동의를 득하여 이를 수집하여 판촉활동(이메일광고, 모바일광고, 텔레마케팅광고 등)에 이용할 수 있습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제18조(”STEVEN ALAN 사이트”의 의무)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에 따라 지속적이고, 안정적으로 재화/용역을 제공하는데 최선을 다하여야 합니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보 (신용정보 포함) 보호를 위한 보안 시스템을 갖추어야 합니다.</li>
                                        <li>3. " ”STEVEN ALAN 사이트”가 상품이나 용역에 대하여 「표시/광고의공정화에관한법률」 제3조 소정의 부당한 표시/광고 행위를 함으로써 이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.</li>
                                        <li>4. ”STEVEN ALAN 사이트”는 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제19조(회원의 ID 및 비밀번호에 대한 의무)</dt>
                                <dd>
                                    <ol>
                                        <li>1. 제17조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 회원에게 있습니다.</li>
                                        <li>2. 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.</li>
                                        <li>3. 회원이 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 ”STEVEN ALAN 사이트”에 통보하고 " ”STEVEN ALAN 사이트”의 안내가 있는 경우에는 그에 따라야 합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제20조(이용자의 의무)</dt>
                                <dd>
                                    <p>이용자는 다음 행위를 하여서는 안됩니다.</p>
                                    <ol>
                                        <li>1. 신청 또는 변경 시 허위 내용의 등록</li>
                                        <li>2. 타인의 정보 도용</li>
                                        <li>3. ”STEVEN ALAN 사이트”에 게시된 정보의 변경</li>
                                        <li>4. ”STEVEN ALAN 사이트”가 정한 정보 이외의 정보(컴퓨터 프로그램 등) 등의 송신 또는 게시</li>
                                        <li>5. ”STEVEN ALAN 사이트”기타 제3자의 저작권 등 지적재산권에 대한 침해</li>
                                        <li>6. ”STEVEN ALAN 사이트”기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위</li>
                                        <li>7. 외설 또는 폭력적인 메시지, 화상, 음성, 기타 공서양속에 반하는 정보를 몰에 공개 또는 게시하는 행위 또는 타인을 비방하는 게시 행위 (단, 이 경우 ”STEVEN ALAN 사이트”는 임의적으로 게시물을 삭제할 수 있습니다)</li>
                                    </ol>
                                </dd>
                                <dt>제21조(사이트의 연결)</dt>
                                <dd>
                                    <ol>
                                        <li>1. "사이트"는 타 사이트에 하이퍼링크(하이퍼링크의 대상에는 문자, 그림 및 동화상 등이 포함됨)방식 등에 의해 연결시킬 수 있습니다.</li>
                                        <li>2. “회사”는 이용자가 해당 연결사이트와 독자적으로 상품 또는 용역을 거래한 행위에 대해서는 아무런 책임을 부담하지 않습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제22조(저작권의 귀속 및 이용제한)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”가 작성한 저작물에 대한 저작권 기타 지적재산권은 ”STEVEN ALAN 사이트”에 귀속합니다.</li>
                                        <li>2. 이용자는 ”STEVEN ALAN 사이트”를 이용함으로써 얻은 정보 중 ”STEVEN ALAN 사이트”에게 지적재산권이 귀속된 정보를 ”STEVEN ALAN 사이트”의 사전 승낙 없이 복제, 송신, 출판, 배포, 방송 등 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.</li>
                                        <li>3. ”STEVEN ALAN 사이트”는 약정에 따라 이용자에게 귀속된 저작권을 사용하는 경우 당해 이용자에게 통보하여야 합니다.</li>
                                    </ol>
                                </dd>
                                <dt>제23조(게시물)</dt>
                                <dd>
                                    <ol>
                                        <li>1. 게시물이라 함은 서비스 게시판에 회원이 올린 글, 서비스의 질문과 대답 등을 포함합니다.</li>
                                        <li>2. “회원”이 게시하는 정보 및 질문과 답변 등으로 인해 발생하는 손실이나 문제는 전적으로 “회원” 개인의 판단에 따른 책임이며, 회사의 고의가 아닌 한 회사는 이에 대하여 책임지지 않습니다.</li>
                                        <li>3. “회원”은 공공질서나 미풍양속에 위배되는 내용과 타인의 저작권을 포함한 지적재산권 및 기타 권리를 침해하는 내용물에 대하여는 등록할 수 없으며, 만일 이와 같은 내용의 게시물로 인해 발생하는 결과에 대한 모든 책임은 회원 본인에게 있습니다.</li>
                                        <li>4. “회사”는 다음에 해당하는 게시물이나 자료를 사전통지 없이 삭제하거나 이동 또는 등록거부를 할 수 있습니다.
                                            <ul>
                                                <li>- 다른 회원 또는 제3자에게 심한 모욕을 주거나 명예를 손상시키는 내용인 경우</li>
                                                <li>- 공공질서 및 미풍양속에 위반되는 내용을 유포하거나 링크시비는 경우</li>
                                                <li>- 불법복제 또는 해킹을 조장하는 내용인 경우</li>
                                                <li>- 영리를 목적으로 하는 광고일 경우</li>
                                                <li>- 범죄와 결부된다고 객관적으로 인정되는 내용일 경우</li>
                                                <li>- 다른 이용자 또는 제3자의 저작권 등 기타 권리를 침해하는 내용인 경우</li>
                                                <li>- 회사에서 규정한 게시물 원칙에 어긋나거나, 게시판 성격에 부합하지 않는 경우</li>
                                                <li>- 기타 관계법령에 위배된다고 판단되는 경우</li>
                                                <li>- 게시물에 대하여 제3자로부터 저작권 및 기타 권리의 침해 또는 명예훼손, 음란성 등의 이유로 이의가 제기된 경우 회사는 당해 게시물을 임시 삭제할 수 있으며, 이의를 제기한자와 게시물 등록자 간에 소송, 합의 등을 통해 당해 게시물에 관한 법적 문제가 종결된 후 이를 근거로 회사에 신청이 있는 경우에만 상기 임시 삭제된 게시물은 다시 등록될 수 있습니다.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </dd>
                                <dt>제24조(분쟁해결)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”는 이용자가 제기하는 정당한 의견이나 불만을 반영하고 그 피해를 보상처리하기 위하여 피해 보상 처리기구를 설치/운영합니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”는 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는 이용자에게 그 사유와 처리일정을 즉시 통보해 드립니다.</li>
                                        <li>3. ”STEVEN ALAN 사이트”와 이용자간에 발생한 전자상거래 분쟁과 관련하여 이용자의 피해구제신청이 있는 경우에는 공정거래위원회 또는 시/도지사가 의뢰하는 분쟁조정기관의 조정에 따를 수 있습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제25조(면책조항)</dt>
                                <dd>
                                    <ol>
                                        <li>1. “회사”는 기간 통신 사업자의 서비스 중단 및 천재지변, 전쟁 등 불가항력적인 일의 발생으로 인해 서비스의 중단이 있을 경우 이에 대해 면책됩니다.</li>
                                        <li>2. “회사”는 회원의 컴퓨터 오작동과 회원이 잘못 등록한 정보에 의하여 발생한 손실에 관하여 면책 됩니다.</li>
                                        <li>3. “회사”는 회원이 게시한 게시물에 대해 사전에 심사 하거나 내용을 검토할 의무가 없으며, 그에 따른 일체의 분쟁에 대해서 면책됩니다. 다만 회사의 고의 또는 과실에 의한 손해발생인 경우에는 면책되지 않습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제26조(광고게재 등)</dt>
                                <dd>
                                    <ol>
                                        <li>1. “회사”는 이용자에게 최상의 서비스를 원활하게 제공하기 위한 재정기반을 마련하기 위하여 상업용 광고를 화면에 게재하거나 이메일 또는 DM(서신) 및 SMS 등을 이용하여 개별 이용자에게 보낼 수 있습니다. 단, 수신거절의 의사를 명백히 표시한 이용자에 대해서는 더 이상 이메일 또는 DM(서신) 등을 발송하지 아니합니다.</li>
                                        <li>2. 이용자는 ”STEVEN ALAN 사이트” 내 각 서비스별 이메일 또는 SMS에 대한 수신거절 의사를 명백히 표시할 수 있도록 회원가입 페이지, 회원가입 후 고객정보 페이지, 메일 서비스 내 수신거부 접수란을 통해 고객님의 수신 거절 의사를 전달할 수 있습니다.</li>
                                        <li>3. "회사"는 본 서비스를 통한 광고주의 판촉활동에 회원이 직접 참여함으로써 발생하는 손해에 대하여는 아무런 책임을 부담하지 않습니다.</li>
                                        <li>4. 제6조(회원가입)의 6항에서 고지했듯이 회원 가입 시 기재한 SMS 수신동의여부 체크에 따라서 상품정보 Mail과 SMS 서비스가 제공됩니다.</li>
                                        <li>5. 제6조 6항에서의 상품정보 Mail과 SMS는 수신동의여부체크에 따라서 제공되며, 수신동의여부는 언제든지 변경 가능합니다. 단, 예약 설정되어 발송되는 안내인 경우에는 최대 7일 정도는 수신체크여부와 상관없이 정보 안내를 받으실 수 있습니다.</li>
                                    </ol>
                                </dd>
                                <dt>제27조(재판권 및 준거법)</dt>
                                <dd>
                                    <ol>
                                        <li>1. ”STEVEN ALAN 사이트”와 이용자간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의 주소에 의하고, 주소가 없는 경우에는 거소를 관할하는 지방법원의 전속관할로 합니다. 다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는 민사소송법상의 관할법원에 제기합니다.</li>
                                        <li>2. ”STEVEN ALAN 사이트”와 이용자간에 제기된 전자상거래 소송에는 한국법을 적용합니다.</li>
                                    </ol>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <h4 class="signup-agree-title">
                        <div class="checkbox">
                            <input type="checkbox" id="agree_privacy" name="agree_privacy" checked>
                            <label for="agree_privacy" class="checkbox-display"></label>
                            <label for="agree_privacy" class="checkbox-label">개인정보 수집 및 이용 안내 동의(필수)</label>
                        </div>
                        <a href="#none" class="button button-xsmall button-secondary" onclick="agreeOpen(this);"><span>내용보기</span></a>
                    </h4>
                    <div class="agree-box scroll">
                        <div class="agreement">
                            <div class="box">
                                ㈜커먼웰스리테일의 STEVEN ALAN(www.stevenalan.co.kr/) 사이트 개인정보 취급방침은 정부의 법률 및 지침의 변경과 ㈜커먼웰스리테일의 정책 변화에 따라 변경될 수 있으며 개인정보 보호관련 관리책임자는 페이지 하단에 명시한 바와 같습니다.<br>
                                STEVEN ALAN 사이트는 고객의 개인정보를 매우 중요시하며, 고객의 개인정보를 보호하여 개인정보 유출로 인한 피해가 발생하지 않도록 하겠다는 의지에서 ‘정보통신망 이용촉진 및 정보보호에 관한 법률’상의 개인정보보호규정 및 정보통신부 에서 제정한 개인정보보호지침 제7조에 의거하여 개인정보취급방침을 작성하였으며 이를 명시합니다.<br>
                                STEVEN ALAN 사이트의 개인 정보 보호정책은 정부의 법률 및 지침 변경에 따라 변경될 수 있으므로 STEVEN ALAN 회원은 STEVEN ALAN 사이트 방문 시에 수시로 확인하시기 바랍니다.
                            </div>
                            <dl>
                                <dt>총칙</dt>
                                <dd>
                                    <ol>
                                        <li>① “개인정보”란 생존하는 개인에 관한 정보로서 당해 정보에 포함되어 있는 성명 등의 사항에 의하여 당해 개인을 식별할 수 있는 정보 (당해 정보만으로는 특정 개인을 식별할 수 없더라도 다른 정보와 용이하게 결합하여 식별할 수 있는 것을 포함합니다.)를 말합니다.</li>
                                        <li>② STEVEN ALAN 사이트는 귀하의 개인정보보호를 매우 중요시하며, 『정보통신망 이용촉진 및 정보보호등에 관한 법률』상의 개인정보보호규정 및 정보통신부가 제정한 『개인 정보 보호지침』을 준수하고 있습니다. STEVEN ALAN 사이트는 개인정보취급방침을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.</li>
                                        <li>③ STEVEN ALAN 사이트는 개인정보취급방침을 홈페이지 첫 화면에 공개함으로써 귀하께서 언제나 용이하게 보실 수 있도록 조치하고 있습니다.</li>
                                        <li>④ STEVEN ALAN 사이트는 개인정보취급방침의 지속적인 개선을 위하여 개인정보취급방침을 개정하는데 필요한 절차를 정하고 있습니다. 그리고 개인정보취급방침을 개정하는 경우 버전번호 등을 부여하여 개정된 사항을 귀하께서 쉽게 알아볼 수 있도록 하고 있습니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보의 수집범위</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 귀하가 STEVEN ALAN 사이트에서 재화 또는 용역을 주문하거나 각종 서비스를 이용하는데 있어, 원활한 주문, 접수, 대금결제, 통관, 배송 및 제반 정보를 제공하기 위하여 필요한 최소한의 정보를 수집하고 있습니다.</li>
                                        <li>② STEVEN ALAN 사이트에 회원으로 등록하신 모든 회원의 개인정보는 상기에서 밝힌 특수한 목적 이외에는 절대로 사용될 수 없습니다. 다만, 회원 개인정보의 사용 목적과 용도가 변경될 경우 반드시 STEVEN ALAN 회원으로 등록하신 모든 회원님께 동의를 구할 것입니다.</li>
                                        <li>③ STEVEN ALAN 사이트는 회원가입, 재화 또는 용역의 주문 시 다음과 같은 개인정보를 수집하고 있으며, 수집 정보는 필수사항과 추가사항으로 구분합니다.
                                            <ul>
                                                <li>- 필수사항 : 성명, 주소, 전화번호, ID(회원의 경우), 비밀번호(회원의 경우), E-mail 주소</li>
                                                <li>- 추가사항 : 회원가입 시 회원이 원하시는 경우에 한하여 추가 정보를 선택, 제공하실 수 있도록 되어있으며, 일부 재화 또는 용역 상품에 대한 주문 및 접수 시 회원이 원하는 정확한 주문 내용 파악을 통한 원활한 주문 및 결제, 배송을 위하여 추가적인 정보를 요구하고 있습니다.</li>
                                            </ul>
                                        </li>
                                        <li>④ STEVEN ALAN 사이트 회원이 탈퇴하거나 STEVEN ALAN 사이트 이용약관 제7조에 의거 회원자격을 상실 하신 경우에 STEVEN ALAN 사이트가 보유한 해당 회원의 개인정보는 파기됩니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보의 수집목적 및 이용목적</dt>
                                <dd>
                                    <p>STEVEN ALAN 사이트는 재화나 용역의 주문 및 서비스 이용 등에 있어 필요한 개인정보 항목을 다음과 같은 목적을 위하여 수집/이용하고 있습니다.</p>
                                    <table class="table col-table">
                                        <colgroup>
                                            <col class="col-xs-4">
                                            <col class="col-xs-8">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th scope="col">수집항목</th>
                                            <th scope="col">수집이용목적</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><span>성명, 아이디, 비밀번호</span></td>
                                            <td><span>회원제 서비스 이용에 따른 본인 확인 절차에 이용</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>이메일 주소, 전화번호</span></td>
                                            <td><span>공지사항 전달, 불만처리 등을 위한 원활한 의사소통 경로의 확보, 새로운 서비스 및 신상품 이나 이벤트 정보 등의 안내</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>은행계좌정보, 신용카드정보</span></td>
                                            <td><span>유료정보 이용 및 재화나 용역 등 상품 구매에 대한 결제</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>주소(자택/회사), 전화번호(자택/휴대폰)</span></td>
                                            <td><span>경품 및 상품 배송을 위한 자료, 통계 및 마케팅 분석 자료</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>기타 선택 항목</span></td>
                                            <td><span>개인 맞춤 서비스 제공을 위한 자료</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </dd>
                                <dt>개인정보 수집에 대한 동의</dt>
                                <dd>STEVEN ALAN 사이트는 귀하의 개인정보 수집에 대한 동의를 받고 있습니다. 귀하의 개인정보 수집과 관련하여 STEVEN ALAN 사이트의 개인정보취급방침 또는 이용약관의 내용에 대한 『동의』버튼 또는 『동의안함』 버튼을 클릭할 수 있는 절차를 마련하고 있으며, 귀하가 『동의』버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다.</dd>
                                <dt>비회원 개인정보보호</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 비회원이 재화 및 용역 등의 상품을 구매할 경우 주문, 대금결제, 통관, 배송, 주문내역 조회 및 확인, 배송조회 및 확인, 실명확인에 반드시 필요한 개인정보만을 요청하고 있습니다.</li>
                                        <li>② 비회원의 개인정보는 대금결제 및 상품배송에 관련된 용도 외에는 다른 어떠한 용도로도 사용되지 않습니다.</li>
                                        <li>③ 비회원의 경우도 회원과 동일하게 개인정보를 보호합니다.</li>
                                    </ol>
                                </dd>
                                <dt>목적 외 사용 및 제3자에 대한 제공 및 공유</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 귀하의 동의가 있거나 관련 법령의 규정에 의한 경우를 제외하고는 어떠한 경우에도 ‘개인정보의 수집목적 및 이용목적’에서 고지한 범위를 넘어 귀하의 개인정보를 이용하거나 타인 또는 타기업/기관에 제공하지 않습니다. 다만 다음의 경우에는 고지 및 동의절차를 거쳐 개인정보를 이용 및 제공할 수 있습니다.
                                            <table class="table row-table">
                                                <colgroup>
                                                    <col class="col-xs-3">
                                                    <col class="col-xs-9">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">제휴관계</th>
                                                    <td>
                                                        <ul>
                                                            <li>- 보다 나은 서비스 제공을 위하여 귀하의 개인정보를 제휴사에게 제공하거나 제휴사와 공유할 수 있으며, 이러한 경우에는 사전에 귀하에게 제공받거나 공유하는 자가 누구이며 주된 사업이 무엇인지, 제공 또는 공유되는 개인정보항목이 무엇인지, 개인정보를 제공하거나 공유하는 목적이 무엇인지, 언제까지 어떻게 보호 및 관리 되는지에 대해 개별적으로 전자우편 또는 서면을 통해 고지한 후 이에 대한 동의를 구합니다.</li>
                                                            <li>- 귀하께서 동의하지 않는 경우에는 제휴사에게 제공하거나 제휴사와 공유하지 않으며, 제휴 관계에 변화가 있거나 제휴 관계가 종결될 경우에도 동일한 절차에 의하여 고지하거나 동의를 구합니다.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">위탁처리</th>
                                                    <td>
                                                        <ul>
                                                            <li>- 원활한 업무처리를 위하여 이용자의 개인정보를 위탁처리 할 경우에는 반드시 사전에 위탁처리 업체명과 위탁처리 되는 개인정보의 범위, 업무 위탁을 하는 목적, 위탁처리 되는 과정, 위탁 관계 유지기간 등에 대하여 상세히 고지합니다.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">매각 인수합병 등</th>
                                                    <td>
                                                        <ul>
                                                            <li>- 서비스 제공자의 권리와 의무가 완전히 승계 또는 이전되는 경우 반드시 사전에 정당한 사유와 절차에 대하여 상세하게 고지하고 적극적인 동의방법(개인정보의 제3자 제공 및 공유에 대한 의사를 직접 밝힘)에 의해서만 동의절차를 진행하며, 이용자의 개인정보 이전 및 수집, 이용에 대한 동의 철회 선택권을 부여합니다.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">예외</th>
                                                    <td>
                                                        <ul>
                                                            <li>- 다음의 경우에는 관련 법령의 규정에 의하여 귀하의 동의 없이 개인정보를 제공하는 것이 가능합니다. 그러나, 이러한 경우에도 본래의 수집목적 및 이용목적에 반하여 무분 별하게 정보가 제공되지 않도록 최대한 노력하겠습니다.</li>
                                                            <li>- 관련 법령에 의하여 수사상의 목적으로 관계 기관으로부터의 요구가 있을 경우</li>
                                                            <li>- 서비스제공에 따른 요금정산을 위하여 필요한 경우</li>
                                                            <li>- 주문상품 배송 시 업무상 배송업체에게 최소한의 배송 정보를 제공하는 경우</li>
                                                            <li>- 통계작성/학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 알아볼 수 없는 형태로 가공하여 제공하는 경우</li>
                                                            <li>- 통관을 위해 필요한 경우</li>
                                                            <li>- 기타 관련 법령에서 정한 절차에 따른 요청이 있는 경우</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                    </ol>
                                </dd>
                                <dt>쿠키에 의한 개인정보 수집</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 귀하의 정보를 수시 저장하고 찾아내는 ‘쿠키(cookie)’를 운용합니다. 쿠키란 STEVEN ALAN 사이트의 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저(인터넷 익스플로러, 넷스케이프 등)에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 또한 귀하께서는 쿠키에 대한 선택권이 있습 니다. 웹브라우저 상단의 도구 → 인터넷옵션 탭(option tab)에서 모든 쿠키를 다 받아들이거나, 쿠키가 설치될 때 통지를 보내도록 하거나, 아니면 모든 쿠키를 거부할 수 있는 선택권을 가질 수 있습니다. 다만, 쿠키를 거부할 경우에는 로그인이 필요한 서비스를 이용할 수 없습니다.</li>
                                        <li>② STEVEN ALAN 사이트는 다음과 같은 목적을 위해 쿠키를 통하여 수집된 귀하의 개인정보를 사용합니다. 회원과 비회원의 접속빈도나 방문시간 등을 분석하고 이용자의 취향과 관심분야를 파악하여 타겟(target)마케팅 및 서비스 개편 등의 척도로 활용합니다. 쇼핑한 품목들에 대한 정보와 관심 있게 둘러본 품목들에 대한 자취를 추적하여 다음 번 쇼핑 때 개인 맞춤 서비스를 제공하는 데 이용합니다. STEVEN ALAN 사이트가 진행하는 각종 이벤트에서 귀하의 참여 정도 및 방문 횟수를 파악하여 차별적인 응모 기회를 부여하고 개인의 관심 분야에 따라 차별화된 정보를 제공하기 위한 자료로 이용됩니다.</li>
                                        <li>③ 쿠키는 PC의 로그아웃 시에 자동으로 PC에 저장되지 않고 삭제되도록 되어 있으므로 공공장소나 타인이 사용할 수 있는 PC를 사용하실 경우에는 로그인 후 서비스 이용이 끝나시면 반드시 로그아웃을 해주시기 바랍니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보의 열람.정정</dt>
                                <dd>
                                    <ol>
                                        <li>① 귀하는 언제든지 등록되어 있는 귀하의 개인정보를 열람하거나 정정하실 수 있습니다. 개인정보의 열람 및 정정은 STEVEN ALAN 사이트 홈페이지 내에서 직접 열람 및 정정할 수 있으며, 개인정보관리책임자 또는 담당자에게 서면, 전화, 이메일, 팩스로 연락하시면 본인 확인 절차를 거친 후 지체 없이 조치하여 드립니다. 다만, 아이디, 성명은 변경이 불가능하며 부득이한 사유로 변경하고자 할 경우에는 해당 아이디를 해지한 후 재가입 하셔야 합니다.</li>
                                        <li>② 귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 조치하겠습니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보 수집 이용, 제공에 대한 동의철회(회원탈퇴)</dt>
                                <dd>
                                    <ol>
                                        <li>① 회원가입 등을 통해 개인정보의 수집, 이용, 제공에 대해 귀하께서 동의하신 내용을 귀하께서는 언제든지 철회하실 수 있습니다. 동의철회는 STEVEN ALAN 사이트 홈페이지 내에서 ‘회원 탈퇴’를 클릭하시거나 개인정보관리 책임자 또 는 담당자에게 서면, 전화, 이메일, 팩스로 연락하시면 본인 확인 절차를 거친 후 즉시 개인정보의 삭제 등 필요한 조치를 하겠습니다. 동의 철회를 하고 개인정보를 파기하는 등의 조치를 취한 경우에는 그 사실을 귀하께 지체 없이 통지하도록 하겠습니다.</li>
                                        <li>② STEVEN ALAN 사이트는 개인정보의 수집에 대한 동의철회(회원탈퇴)를 개인정보를 수집하는 방법보다 쉽게 할 수 있도록 필요한 조치를 취하겠습니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보의 파기, 보유기간 및 이용기간</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 회원님의 개인정보를 수집하는 경우 보유기간은 회원 가입하신 후 이용약관 제7조에 의거 해지(회원탈퇴 및 자격상실 포함)시까지 입니다.<br>
                                            당사는 해지 시 회원님의 개인정보를 즉시 파기하며, 개인정보가 제3자에게 제공된 경우에는 제 3자에게도 파기하도록 지시합니다.<br>
                                            다만 전자상거래등에서의 소비자보호관할법류 등 관계법률에 의해 보존할 필요가 있는 경우 일정기간 보존 합니다.<br>
                                            이러한 경우, STEVEN ALAN 사이트는 보관하는 정보를 그 보관 목적으로만 이용하며, 보존기간은 아래와 같습니다.
                                            <table class="table row-table">
                                                <colgroup>
                                                    <col class="col-xs-3">
                                                    <col class="col-xs-9">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">계약 또는 청약철회 등에 관한 기록</th>
                                                    <td>
                                                        <ul>
                                                            <li>ㆍ보존이유 : 전자상거래 등에서의 소비자보호에 관한 법률</li>
                                                            <li>ㆍ보존기간 : 5년</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">대금결제 및 재화 등의 공급에 관한 기록</th>
                                                    <td>
                                                        <ul>
                                                            <li>ㆍ보존이유 : 전자상거래 등에서의 소비자보호에 관한 법률</li>
                                                            <li>ㆍ보존기간 : 5년</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">소비자의 불만 또는 분쟁처리에 관한 기록</th>
                                                    <td>
                                                        <ul>
                                                            <li>ㆍ보존이유 : 전자상거래 등에서의 소비자보호에 관한 법률</li>
                                                            <li>ㆍ보존기간 : 3년</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">본인 확인에 관한 기록</th>
                                                    <td>
                                                        <ul>
                                                            <li>정보통신망 이용촉진 및 정보보호 등에 관한 법률</li>
                                                            <li>ㆍ보존기간 : 6개월</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>② 회사는 고객의 개인정보를 보호하여 개인정보 유출로 인한 피해가 발생하지 않도록 다음과 같은 방법을 통하여 개인정보를 파기합니다.
                                            <ul>
                                                <li>- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기.</li>
                                                <li>- 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</li>
                                            </ul>
                                        </li>
                                        <li>③ 회원의 동의를 받아 보유하고 있는 개인정보는 회원의 열람요구가 있을 경우, 당사는 지체 없이 이를 열람, 확인할 수 있도록 조치합니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보보호를 위한 기술 및 관리적 대책</dt>
                                <dd>
                                    <ol>
                                        <li>① 기술적 대책
                                            <ul>
                                                <li>- STEVEN ALAN 사이트는 귀하의 개인정보보호를 위해 STEVEN ALAN 사이트와 귀하의 PC간의 결제정보를 128bit SSL로 암호화하여 통신하고 있으며 verisign을 통해 인증 받고 있습니다.</li>
                                                <li>- 불법적인 해킹방지를 위해 자체 첨단 방화벽을 설치하여 운영하고 있습니다.</li>
                                                <li>- 실제로 운영되고 있는 웹서버의 IP를 사용자에게 숨김으로써 불법적인 해킹방지를 하고 있으며 더욱 안전한 개인정보 보호를 위해 각종 첨단 보안 시스템을 도입하고 있습니다.</li>
                                            </ul>
                                        </li>
                                        <li>② 관리적 대책
                                            <ul>
                                                <li>- 개인정보에 대한 접근권한을 개인정보관리책임자 등 개인정보관리업무를 수행하는 자, 기타 업무상 개인정보의 취급이 불가피한 자로 제한하며, 그 이외의 인원이 개인정보에 접근하는 것을 허용하지 않습니다.</li>
                                                <li>- 개인정보를 취급하는 인원에 대하여 개인정보보호를 위한 정기적인 교육 및 외부 위탁교육을 실시하고 있습니다.</li>
                                                <li>- 전산실은 출입통제 구역으로 지정하여 허가된 인원만의 출입을 허용하고 있습니다.</li>
                                                <li>- STEVEN ALAN 사이트는 내부 관리자의 과실이나 기술관리상의 사고로 인하여 개인정보가 유출, 변조, 훼손된 경우에는 즉각 이용자에게 그 사실을 알리고 적절한 대책을 강구할 것입니다.</li>
                                                <li>- 이용자의 실수 또는 STEVEN ALAN 사이트에 귀책사유가 없는 인터넷 상의 위험성으로 인하여 발생한 일들에 대하여 STEVEN ALAN 사이트는 책임을 지지 않으므로 귀하의 아이디와 비밀번호가 타인에게 알려지지 않도록 적절하게 관리하여야 합니다.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </dd>
                                <dt>링크사이트</dt>
                                <dd>STEVEN ALAN 사이트는 귀하께 다른 회사의 웹사이트 또는 자료에 대한 링크를 제공할 수 있습니다. 이 경우 STEVEN ALAN 사이트는 외부사이트 및 자료에 대한 아무런 통제권이 없으므로 그로부터 제공받은 서비스나 자료의 유용성에 대해 책임질 수 없으며 보증할 수 없습니다. STEVEN ALAN 사이트가 포함하고 있는 링크를 클릭 (click)하여 타 사이트(site)의 페이지로 옮겨갈 경우 해당 사이트의 개인정보취급방침은 STEVEN ALAN 사이트와 무관하므로 새로 방문한 사이트의 정책을 검토해 보시기 바랍니다.</dd>
                                <dt>게시물</dt>
                                <dd>
                                    <p>STEVEN ALAN 사이트는 귀하의 게시물을 소중하게 생각하며 변조, 훼손, 삭제되지 않도록 최선을 다하여 보호합니다. 그러나 다음의 경우는 그렇지 아니합니다.</p>
                                    <ul>
                                        <li>- 스팸(spam)성 게시물 (예 : 행운의 편지, 8억 메일, 특정사이트 광고 등)</li>
                                        <li>- 타인을 비방할 목적으로 허위 사실을 유포하여 타인의 명예를 훼손하는 글</li>
                                        <li>- 욕설과 비속어를 포함한 글</li>
                                        <li>- 동의 없는 타인의 신상공개 STEVEN ALAN 사이트의 저작권, 제 3자의 저작권 등 권리를 침해하는 내용, 기타 게시판 주제와 다른 내용의 게시물</li>
                                        <li>- STEVEN ALAN 사이트는 바람직한 게시판 문화를 활성화하기 위하여 동의 없는 타인의 신상 공개 시 특정부분을 삭제하거나 기호 등으로 수정하여 게시할 수 있습니다.</li>
                                        <li>- 다른 주제의 게시판으로 이동 가능한 내용일 경우 해당 게시물에 이동 경로를 밝혀 오해가 없도록 하고 있습니다.</li>
                                        <li>- 그 외의 경우 명시적 또는 개별적인 경고 후 삭제 조치할 수 있습니다.</li>
                                    </ul>
                                    <p>근본적으로 게시물에 관련된 제반 권리와 책임은 작성자 개인에게 있습니다. 또 게시물을 통해 자발적으로 공개된 정보는 보호받기 어려우므로 정보 공개 전에 심사숙고 하시기 바랍니다.</p>
                                </dd>
                                <dt>개인정보의 위탁처리</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 회원의 개인정보를 외부 업체에서 위탁하여 관리합니다.</li>
                                        <li>② STEVEN ALAN 사이트는 서비스 향상을 위해서 귀하의 개인정보를 외부에 수집/취급관리 등을 위탁하여 처리할 수 있으며, 관련 법령의 규정에 따라 위탁계약 시 개인정보가 안전하게 관리될 수 있도록 규정하고 있습니다.
                                            <table class="table col-table">
                                                <colgroup>
                                                    <col class="col-xs-5">
                                                    <col class="col-xs-7">
                                                </colgroup>
                                                <thead>
                                                <tr>
                                                    <th scope="col">수탁자</th>
                                                    <th scope="col">수탁범위</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><span>이니시스</span></td>
                                                    <td><span>회원제 서비스 이용에 따른 본인 확인 절차에 이용</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>(주)인포뱅크</span></td>
                                                    <td><span>SMS발송망이용 및 SMS 전송</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>(주)GSM NtoN</span></td>
                                                    <td><span>배송업무</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>굿스플로 및 택배사<br> (CJ대한통운,경동택배,대신택배,동부택배,<br>로젠택배,옐로우캡,우체국택배,일양택배,<br>천일택배,편의점택배,한진택배,합동택배,<br>현대택배,GTX로직스,KGB택배,우체국우편등기)</span></td>
                                                    <td><span>상품 배송 및 물품위치 확인서비스</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>③ 개인정보의 처리를 위탁하는 경우에는 수탁자, 수탁범위, 공유 정보의 범위 등에 관한 사항을 서면, 전자우편, 전화 또는 홈페이지를 통하여 사전에 고지합니다.</li>
                                        <li>④ 개인정보의 처리를 위탁하는 경우에는 위탁계약 등을 통하여 서비스제공자의 개인정보보호 관련 지시엄수, 개인정보에 관한 비밀유지, 제3자 제공의 금지 및 사고시의 책임부담, 위탁기간, 처리 종료 후의 개인정보의 반환 또는 파기 등을 명확히 규정하고 당해 계약내용을 서면 또는 전자적으로 보관하겠습니다.</li>
                                    </ol>
                                </dd>
                                <dt>이용자의 권리와 의무</dt>
                                <dd>
                                    <ol>
                                        <li>① 귀하의 개인정보를 최신의 상태로 정확하게 입력하여 불의의 사고를 예방해 주시기 바랍니다. 이용자가 입력한 부정확한 정보로 인해 발생하는 사고의 책임은 이용자 자신에게 있으며 타인 정보의 도용 등 허위정보를 입력할 경우 회원자격이 상실될 수 있습니다.</li>
                                        <li>② 귀하께서는 개인정보를 보호받을 권리와 함께 스스로를 보호하고 타인의 정보를 침해하지 않을 의무도 가지고 있습니다. 비밀번호를 포함한 귀하의 개인정보가 유출되지 않도록 조심하시고 게시물을 포함한 타인의 개인정보를 훼손하지 않도록 유의해 주십시오. 만약 이 같은 책임을 다하지 못하고 타인의 정보 및 존엄성을 훼손할 시에는『정보통신망 이용촉진 및 정보 보호 등에 관한 법률』 등에 의해 처벌 받을 수 있습니다.</li>
                                    </ol>
                                </dd>
                                <dt>만 14세 미만의 아동의 개인정보보호</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 법정대리인의 동의가 필요한 만 14세 미만 아동의 회원가입을 받고 있지 않습니다.</li>
                                        <li>② 미성년자와 재화 및 용역 등 상품 거래에 관한 계약을 체결하고자 하는 경우에는 법정대리인이 그 계약에 대하여 동의를 하여야만 합니다. 법정대리인의 동의가 없는 경우에는 미성년자 본인 또는 법정대리인이 그 계약을 취소할 수 있습니다.</li>
                                        <li>③ 법정대리인은 해당 아동의 정보를 열람, 정정, 동의 철회할 수 있으며, 법정대리인의 요청이 있는 경우 STEVEN ALAN 사이트는 해당 요청을 수용합니다.</li>
                                        <li>④ STEVEN ALAN 사이트는 만 14세 미만 아동의 정보를 다른 사람 또는 업체와 공유하지 않으며, 만 14세 미만 아동에게는 광고메일을 발송하지 않습니다.</li>
                                    </ol>
                                </dd>
                                <dt>광고성 정보 전송</dt>
                                <dd>
                                    <ol>
                                        <li>① STEVEN ALAN 사이트는 귀하의 명시적인 수신거부의사에 반하여 영리목적의 광고성 정보를 전송하지 않습니다.</li>
                                        <li>② STEVEN ALAN 사이트는 귀하께서 뉴스레터 등 전자우편 전송에 대한 동의를 한 경우 전자우편의 제목란 및 본문란에 다음 사항과 같이 귀하께서 쉽게 알아 볼 수 있도록 조치합니다.
                                            <ul>
                                                <li>- 전자우편의 제목란 : (광고)라는 문구를 제목란에 표시하지 않을 수 있으며 전자우편 본문란의 주요 내용을 표시합니다.</li>
                                                <li>- 전자우편의 본문란 : 귀하께서 수신거부의 의사표시를 할 수 있는 전송자의 명칭, 전자우편주소, 전화 번호 및 주소를 명시합니다.
                                                    <ul>
                                                        <li>ㆍ 귀하께서 수신거부의 의사를 쉽게 표시할 수 있는 방법을 한글로 명시합니다.</li>
                                                        <li>ㆍ 귀하께서 동의를 한 시기 및 내용을 명시합니다.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>③ STEVEN ALAN 사이트는 상품정보 안내 등 온라인 마케팅을 위해 광고성 정보를 전자우편 등으로 전송하는 경우 전자우편의 제목란 및 본문란에 다음 사항과 같이 귀하께서 쉽게 알아 볼 수 있도록 조치합니다.
                                            <ul>
                                                <li>- 전자우편의 제목란 : (광고) 또는 (성인광고)라는 문구를 제목란의 처음에 빈칸 없이 한글로 표시하고 이어서 전자우편 본문란의 주요내용을 표시합니다.</li>
                                                <li>- 전자우편의 본문란 : 귀하께서 수신거부의 의사표시를 할 수 있는 전송자의 명칭, 전자우편주소, 전화번호 및 주소를 명시합니다.
                                                    <ul>
                                                        <li>ㆍ 귀하께서 수신거부의 의사를 쉽게 표시할 수 있는 방법을 한글로 명시합니다.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>④ 다음과 같이 청소년에게 유해한 정보를 전송하는 경우 “(성인광고)” 문구를 표시합니다.
                                            <ul>
                                                <li>- 본문란에 다음 각 항목 1에 해당하는 것이 부호/문자/영상 또는 음향의 형태로 표현된 경우 (해당 전자우편의 본문란에는 직접 표현되어있지 아니하더라도 수신자가 내용을 쉽게 확인할 수 있도록 기술적 조치가 되어 있는 경우를 포함한 다)에는 해당 전자우편의 제목란에 “(성인광고)” 문구를 표시합니다.
                                                    <ul>
                                                        <li>ㆍ 청소년에게 범죄의 충동을 일으킬 수 있는 것</li>
                                                        <li>ㆍ 청소년에게 성적인 욕구를 자극하는 선정적인 것이거나 음란한 것</li>
                                                        <li>ㆍ 성폭력을 포함한 각종 형태의 폭력행사와 약물의 남용을 자극하거나 미화하는 것</li>
                                                        <li>ㆍ 청소년보호법에 의하여 청소년 유해매체물로 결정, 고시된 것</li>
                                                    </ul>
                                                </li>
                                                <li>- 영리목적의 광고성 전자우편 본문란에서 제4항 각 항목에 해당하는 내용을 다룬 인터넷 홈페이지를 알리는 경우에는 해당 전자우편의 제목란에“(성인광고)”문구를 표시합니다.</li>
                                            </ul>
                                        </li>
                                        <li>⑤ 팩스, 휴대폰 문자전송 등 전자우편 이외의 문자전송을 통해 영리목적의 광고성 정보를 전송하는 경우에는 전송내용 처음에 “(광고)”라는 문구를 표기하고 전송내용 중에 전송자의 연락처를 명시하도록 조치합니다.</li>
                                    </ol>
                                </dd>
                                <dt>개인정보관리책임자</dt>
                                <dd>
                                    <p>STEVEN ALAN 사이트는 고객님께서 좋은 정보를 안전하게 이용할 수 있도록 최선을 다하고 있습니다. 개인정보를 보호하는데 있어 고객님께서 고지한 사항들에 반하는 사고가 발생할 시에 개인정보관리책임자가 모든 책임을 집니다. 그러나 기술적인 보완조치를 했음에도 불구하고 해킹 등 기본적인 네트워크상의 위험성에 의해 발생하는 예기치 못한 사고로 인한 정보의 훼손 및 방문자가 작성한 게시물에 의한 각종 분쟁에 관해서는 책임이 없습니다. 고객의 개인정보를 취급하는 책임자는 다음과 같으며 개인정보 관련 문의사항에 신속하게 성실하게 답변해 드리고 있습니다.</p>
                                    <ul class="privacy-manager">
                                        <li>[개인정보 관리책임자]</li>
                                        <li>이 름 : 김태은</li>
                                        <li>직 위 : 부장</li>
                                        <li>전화번호 : 02-2191-3618</li>
                                        <li>팩스번호 : 02-512-7716</li>
                                        <li>근무시간 : 평일 10시~5시</li>
                                        <li>E-mail : taieun@isecommerce.co.kr</li>
                                    </ul>
                                </dd>
                                <dt>개인정보침해 관련 상담 및 불만처리</dt>
                                <dd>
                                    <ol>
                                        <li>① 회사는 귀하의 의견을 소중하게 생각하며, 귀하는 의문사항으로부터 언제나 성실한 답변을 받을 권리가 있습니다.</li>
                                        <li>② 회사는 귀하의 개인정보를 보호하고 개인정보와 관련된 제반 상담 및 불만사항을 처리하기 위하여 민원처리 부서를 두고 있습니다.</li>
                                        <li>③ 회사는 귀하와 원활한 의사소통을 위하여 전자우편과 고객센터를 운영하고 있습니다
                                            <ul>
                                                <li>E-mail : cs@stevenalan.co.kr</li>
                                                <li>전화번호 : 070-8740-1273</li>
                                                <li>근무시간 : 평일 10시~5시</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </dd>
                                <dt>개인정보 관련 신고 및 분쟁조정</dt>
                                <dd>
                                    <p>개인정보침해에 대한 신고상담이 필요하신 경우에는 한국정보보호진흥원(KISA) 내 개인정보침해신고센터 등 다음의 기관으로 문의하시기 바랍니다. 또한 귀하가 개인정보침해를 통하여 금전적, 정신적 피해를 입으신 경우에는 개인정보분쟁조정위원회에 피해구제를 신청하실 수 있습니다.</p>
                                    <table class="table col-table">
                                        <colgroup>
                                            <col class="col-xs-3">
                                            <col class="col-xs-4">
                                            <col class="col-xs-5">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th scope="col">기관</th>
                                            <th scope="col">전화번호</th>
                                            <th scope="col">URL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><span>개인정보침해신고센터</span></td>
                                            <td><span>118</span></td>
                                            <td><span>http://privacy.kisa.or.kr</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>대검찰청 사이버범죄 신고센터</span></td>
                                            <td><span>1304</span></td>
                                            <td><span>http://www.spo.go.kr</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>경찰청 사이버안전국</span></td>
                                            <td><span>182</span></td>
                                            <td><span>http://www.ctrc.go.kr</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>개인정보분쟁조정위원회</span></td>
                                            <td><span>02-405-5150</span></td>
                                            <td><span>http://www.kopico.or.kr</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </dd>
                                <dt>정책변경에 따른 공지의무</dt>
                                <dd>
                                    <p>이 개인정보취급방침은 2016년 10월 1일에 제정되었으며, 법령ㆍ정책 또는 보안기술의 변경에 따라 내용의 추가ㆍ삭제 및 수정이 있을 시에는 변경되는 개인정보취급방침을 시행하기 최소 10일 전에 STEVEN ALAN 사이트 홈페이지와 전자 메일을 통해 고지하도록 하겠습니다.</p>
                                    <ul>
                                        <li>- 개인정보취급방침 버전번호 : V 1.0</li>
                                        <li>- 개인정보취급방침 변경일자 : 2016.10.01</li>
                                        <li>- 개인정보취급방침 시행일자 : 2016.10.01</li>
                                    </ul>
                                </dd>
                                <dt>청소년 보호정책</dt>
                                <dd>
                                    <p>STEVEN ALAN 사이트는 고객님께서 좋은 정보를 안전하게 이용할 수 있도록 최선을 다하고 있습니다. 개인정보를 보호하는데 있어 고객님께서 고지한 사항들에 반하는 사고가 발생할 시에 개인정보관리책임자가 모든 책임을 집니다. 그러나 기술적인 보완조치를 했음에도 불구하고 해킹 등 기본적인 네트워크상의 위험성에 의해 발생하는 예기치 못한 사고로 인한 정보의 훼손 및 방문자가 작성한 게시물에 의한 각종 분쟁에 관해서는 책임이 없습니다. 고객의 개인정보를 취급하는 책임자는 다음과 같으며 개인정보 관련 문의사항에 신속하게 성실하게 답변해 드리고 있습니다.</p>
                                    <ol>
                                        <li>1. 청소년 보호를 위한 장치<br>
                                            STEVEN ALAN 사이트는 재화 또는 용역 등의 상품에 대한 청소년 유해매체물 표시 및 성인인증 장치의 운영을 통하여 청소년의 유해매체물 접근 및 유해매체물에의 노출을 차단하고 있습니다.</li>
                                        <li>2. 청소년보호책임자<br>
                                            STEVEN ALAN 사이트는 청소년보호책임자를 지정하여 청소년유해정보의 차단 및 관리, 청소년 유해 정보로부터의 청소년보호정책을 수립하는 등 청소년보호업무를 수행하고 있습니다.
                                            <ul class="privacy-manager">
                                                <li>[개인정보 관리책임자]</li>
                                                <li>이 름 : 김태은</li>
                                                <li>직 위 : 부장</li>
                                                <li>전화번호 : 02-2191-3618</li>
                                                <li>팩스번호 : 02-512-7716</li>
                                                <li>근무시간 : 평일 10시~5시</li>
                                                <li>E-mail : taieun@isecommerce.co.kr</li>
                                            </ul>
                                        </li>
                                        <li>3. 청소년보호 관련 상담 및 불만 처리 회사는 청소년보호 관련 상담 및 불만처리를 위하여 민원처리 부서를 두고 있습니다.
                                            <ul>
                                                <li>E-mail : taieun@isecommerce.co.kr</li>
                                                <li>전화번호 : 02-2191-3618</li>
                                                <li>근무시간 : 평일 10시~5시</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 약관동의 //end -->
        <div class="button-align-center">
            <a href="#" class="button button-block button-large button-primary"><span>회원가입</span></a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>