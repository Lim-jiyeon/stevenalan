<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>stevenalan</title>
    <link rel="stylesheet" href="../include/css/fontello.css">
    <script type="text/javascript" src="../include/js/min/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../include/js/min/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="../include/js/min/slick.min.js"></script>
    <script type="text/javascript" src="../include/js/custom.js"></script>
    <link rel="stylesheet" href="../include/css/styles.css">
</head>
<body>
<div id="wrap_popup">
    <div class="container">
        <div class="cash-receipt">
            <h1 class="washed-line-text">영수증 발급</h1>
            <div class="cash-receipt-type">
                <h2 class="table-title">현금영수증 종류 선택</h2>
                <div class="radio-group">
                    <div class="radio">
                        <input type="radio" name="cashReceipt" id="forPersonal" checked>
                        <label for="forPersonal" class="radio-display"></label>
                        <label for="forPersonal" class="radio-label">소득공제용 (일반 개인용)</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="cashReceipt" id="forBusiness">
                        <label for="forBusiness" class="radio-display"></label>
                        <label for="forBusiness" class="radio-label">지출증빙용 (사업자용)</label>
                    </div>
                </div>
            </div>
            <div class="cash-receipt-issue">
                <h2 class="table-title">현금영수증 발급 기준을 선택해 주세요. (신청 후 발급 기준 변경 불가)</h2>
                <div class="row cash-receipt-issue-box">
                    <div class="col-xs-4 radio">
                        <input type="radio" name="cashReceipt_issue" id="cardNumber" checked>
                        <label for="cardNumber" class="radio-display"></label>
                        <label for="cardNumber" class="radio-label">현금영수증 카드번호</label>
                    </div>
                    <div class="col-xs-8 form-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row cash-receipt-issue-box">
                    <div class="col-xs-4 radio">
                        <input type="radio" name="cashReceipt_issue" id="cellphone">
                        <label for="cellphone" class="radio-display"></label>
                        <label for="cellphone" class="radio-label">핸드폰번호</label>
                    </div>
                    <div class="col-xs-8">
                        <div class="form-group input-group">
                            <div><input type="text" class="form-control"></div>
                            <div class="input-group-addon">-</div>
                            <div><input type="text" class="form-control"></div>
                            <div class="input-group-addon">-</div>
                            <div><input type="text" class="form-control"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-align-center">
                <div class="button-group">
                    <a href="#" class="button button-large button-primary">신청</a>
                    <a href="#" class="button button-large">취소</a>
                </div>
            </div>
            <ul class="table-caution">
                <li>- 현금영수증은 발급 배송 완료된 주문건에 한해 신청이 가능하며, 약 2일 이내로 발급됩니다.</li>
                <li>- 신용카드 매출전표는 결제완료 시 자동 발급되며, 발급 가능 기간은 결제 완료 후 1년입니다.</li>
                <li>- 모든 영수증은 주문 고객의 실제 결제금액 기준으로 발행되므로 쿠폰 등의 할인액과 같은 비현금성 결제수단으로 결제한 금액은 발급대상 금액에서 제외됩니다.​​​​​​​</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>