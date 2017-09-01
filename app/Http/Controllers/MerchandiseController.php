<?php

namespace App\Http\Controllers;


class MerchandiseController extends Controller {
    // 首頁
    public function indexPage(){
        // 重新導向至商品頁
        return redirect('/merchandise');
    }
}