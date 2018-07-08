<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGithubIdToUsersTable extends Migration
{
    // 執行資料庫異動
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 加入 github_id 欄位到 password 欄位後方
            $table->string('github_id', 30)
                ->nullable()
                ->after('password');
            
            // 建立索引
            $table->index(['github_id'], 'user_github_idx');
        });
    }
    
    // 復原資料庫異動
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // 移除欄位
            $table->dropColumn('github_id');
        });
    }
}
