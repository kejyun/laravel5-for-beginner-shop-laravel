$document = $(document);
$document.ready(function(){
    $document.on("click", '.set_language', function(event){
        event.stopPropagation();
        event.preventDefault();
        // 取得語言設定
        var language = this.dataset.language;

        Cookies.set('shop_laravel_language', language);
        location.reload();
        console.log(this, this.dataset);
    });
});