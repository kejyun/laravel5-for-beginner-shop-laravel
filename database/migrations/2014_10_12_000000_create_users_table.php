<?php
// 檔案位置：database/migrations/2014_10_12_000000_create_users_table.php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 建立資料表
        Schema::create('users', function (Blueprint $table) {
            // 會員編號
            $table->increments('id');
            // Email
            $table->string('email', 150);
            // 密碼
            $table->string('password', 60);
            // 帳號類型（type）:用於識別登入會員身份
            //  - A（Admin）: 管理者
            //  - G（General）: 一般會員
            $table->string('type', 1)->default('G');  // 帳號狀態
            // 暱稱
            $table->string('nickname', 50);
            // 時間戳記
            $table->timestamps();
            
            // 鍵值
            $table->unique(['email'], 'user_email_uk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 移除資料表
        Schema::dropIfExists('users');
    }
}
