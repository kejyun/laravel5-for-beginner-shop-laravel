<?php
// 檔案位置：app/Http/Controllers/TransactionController.php
namespace App\Http\Controllers;

use App\Shop\Entity\Transaction;

class TransactionController extends Controller {
    
    public function transactionListPage()
    {
        $user_id = session()->get('user_id');
    
        // 每頁資料量
        $row_per_page = 10;
        // 撈取商品分頁資料
        $TransactionPaginate = Transaction::where('user_id', $user_id)
            ->OrderBy('created_at', 'desc')
            ->with('Merchandise')
            ->paginate($row_per_page);
    
        // 設定商品圖片網址
        foreach ($TransactionPaginate as &$Transaction) {
            if (!is_null($Transaction->Merchandise->photo)) {
                // 設定商品照片網址
                $Transaction->Merchandise->photo = url($Transaction->Merchandise->photo);
            }
        }
    
        $binding = [
            'title' => '交易紀錄',
            'TransactionPaginate'=> $TransactionPaginate,
        ];
    
        return view('transaction.listUserTransaction', $binding);
    }
}