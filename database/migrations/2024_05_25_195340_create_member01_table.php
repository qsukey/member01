<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member01', function (Blueprint $table) {
            $table->id(); // 自動インクリメントされるID
            $table->string('name'); // 名前
            $table->string('phone'); // 電話番号
            $table->string('email')->unique(); // ユニークなメールアドレス
            $table->timestamps(); // 作成日時と更新日時composer create-project "laravel/laravel=10.*" ◯◯
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member01');
    }
};
