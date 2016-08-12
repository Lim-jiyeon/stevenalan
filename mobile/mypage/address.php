<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">배송지 관리</h2>
        <!-- 배송지 관리 - 주소지가 등록되어 있는 경우 -->
        <ul class="address-manage">
            <li class="address-item">
                <div class="address-group">
                    <h3 class="address-title">우리집</h3>
                    <p>[04778] 서울특별시 성동구 뚝섬로길 25(성수동1가,서울숲 한라에코밸리)B105</p>
                    <p>010-1234-1234 / 02-123-8522</p>
                </div>
                <div class="button-inline-group button-auto-group">
                    <div><a href="#" class="button button-small button-primary">수정</a></div>
                    <div><a href="#" class="button button-small button-secondary">삭제</a></div>
                </div>
            </li>
            <li class="address-item">
                <div class="address-group">
                    <h3 class="address-title">회사 - 삼안빌딩</h3>
                    <p>[04778] 서울특별시 성동구 뚝섬로길 25(성수동1가,서울숲 한라에코밸리)B105</p>
                    <p>010-1234-1234 / 02-123-8522</p>
                </div>
                <div class="button-inline-group button-auto-group">
                    <div><a href="#" class="button button-small button-primary">수정</a></div>
                    <div><a href="#" class="button button-small button-secondary">삭제</a></div>
                </div>
            </li>
        </ul>
        <!-- 배송지 관리 - 주소지가 등록되어 있는 경우 //end -->
        <div class="button-align-center">
            <a href="#" class="button button-block button-primary"><span>배송지 추가</span></a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>