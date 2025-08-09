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
        Schema::create('surveillance_logs', function (Blueprint $table) {
            $table->id();
            $table->string("fingerprint")->nullable();
            $table->foreignId("userid")->nullable();
            $table->string("ip")->nullable();
            $table->text("url")->nullable();
            $table->text("user_agent")->nullable();
            $table->text("cookies")->nullable();
            $table->text("session")->nullable();
            $table->text("files")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveillance_logs');
    }
};
