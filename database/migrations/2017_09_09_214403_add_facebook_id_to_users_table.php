<?php
// 檔案位置：database/migrations/2017_09_09_214403_add_facebook_id_to_users_table.php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacebookIdToUsersTable extends Migration
{
    // 執行資料庫異動
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 加入 facebook_id 欄位到 password 欄位後方
            $table->string('facebook_id', 30)
                ->nullable()
                ->after('password');
            
            // 建立索引
            $table->index(['facebook_id'], 'user_fb_idx');
        });
    }
    
    // 復原資料庫異動
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // 移除欄位
            $table->dropColumn('facebook_id');
        });
    }
}
