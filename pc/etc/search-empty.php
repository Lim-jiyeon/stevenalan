<?php include '../header/header.php'; ?>

    <div class="content">
        <div class="container">
            <h2 class="page-title">search</h2>
            <!-- 검색영역 -->
            <div class="box search-box">
                <div class="input-button-group">
                    <div class="form-group">
                        <div><input type="text" class="form-control" value="Comm des Gar"></div>
                        <div><a href="#" class="button"><i class="icon-search-bold"></i></a></div>
                    </div>
                </div>
                <div class="checkbox checkbox-block">
                    <input type="checkbox" id="save-id" checked="checked">
                    <label for="save-id" class="checkbox-display"></label>
                    <label for="save-id" class="checkbox-label">결과 내 재검색</label>
                </div>
                <div class="search-result">
                    &#39;Comm des gar&#39; 검색 결과가 없습니다.
                    <p class="search-result-empty">입력한 검색어와 일치하는 정보가 없습니다. 검색어가 정확한지 다시 한번 확인해 주세요.</p>
                </div>
            </div>
            <!-- 검색영역 //end -->
        </div>
    </div>

<?php include '../footer/footer.php'; ?>