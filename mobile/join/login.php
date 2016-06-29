<?php include '../header/header.php'; ?>

<div>
    <h2 class="a-center pageTitle">로그인/회원가입</h2>
    <div class="container">

        <div class="bgSection">
            <h3>로그인</h3>
            <div class="form-group">
                <div class="inputtext">
                    <input type="text" placeholder="아이디(EMAIL)" class="form-control"/>
                </div>
                <div class="inputtext">
                    <input type="password" placeholder="비밀번호" class="form-control"/>
                </div>
            </div>
            <div class="checkboxWrap">
                <div class="form-gruop">
                    <div class="checkbox checkbox-style">
                        <input type="checkbox" id="checkbox-design-id" name="input-name" !checked>
                        <label for="checkbox-design-id" class="checkbox-display"></label>
                        <label for="checkbox-design-id" class="checkbox-label">아이디 저장</label>
                    </div>
                    <span class="findIdPw"><a href="#">아이디/비밀번호 찾기</a></span>
                </div>
            </div>
            <div class="buttonWrap">
                <span class="button button-primary button-block">
                    <span class="button-label">로그인</span>
                </span>
            </div>
        </div>

        <div class="bgSection">
            <h3>회원가입</h3>
            <p class="a-center">Steven Alan 회원 가입을 진심으로 환영합니다.<br/>
                만 14세 이상만 회원 가입이 가능하며,<br/>
                회원이 되시면 다양한 혜택을 받으실 수 있고,<br/>
                서비스를 안전하고 간편하게 이용 가능합니다.</p>
            <div class="buttonWrap">
                <span class="button button-primary button-block">
                    <span class="button-label">회원가입</span>
                </span>
            </div>
        </div>

        <div class="bgSection">
            <h3>비회원 주문 조회</h3>
            <p class="a-center">주문 결제 완료 후 발송되는 SMS 메세지의<br/>주문번호를 입력해주세요.</p>
            <div class="buttonWrap">
                <span class="button button-primary button-block">
                    <span class="button-label">주문조회</span>
                </span>
            </div>
        </div>

    </div>
</div>

<?php include '../footer/footer.php'; ?>