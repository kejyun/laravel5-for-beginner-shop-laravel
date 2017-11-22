$document = $(document);

$document.ready(function(){
    // 文件載入完成
    $document.on("click", '.set_language', function(event){
        // 點選 .set_language HTML tag
        event.stopPropagation();
        event.preventDefault();
        // 取得語言設定
        var language = this.dataset.language;

        // Cookie 設定語系偏好
        Cookies.set('shop_laravel_language', language);

        // 重新載入頁面
        location.reload();
    });
});