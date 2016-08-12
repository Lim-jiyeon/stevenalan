<?php include '../header/header.php'; ?>

<div class="content">
    <?php include './mypage-menu.php'; ?>
    <div class="container">
        <h2 class="page-title">배송지 관리</h2>
        <!-- 배송지 관리 - 주소지가 등록되어 있지 않은 경우 -->
        <ul class="address-manage">
            <li class="address-item empty"><!-- [D] 주소지가 등록되어 있지 않은 경우 empty 클래스 추가 -->
                등록된 배송지가 없습니다.
            </li>
        </ul>
        <!-- 배송지 관리 - 주소지가 등록되어 있지 않은 경우 //end -->
        <div class="button-align-center">
            <a href="#" class="button button-block button-primary"><span>배송지 추가</span></a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>