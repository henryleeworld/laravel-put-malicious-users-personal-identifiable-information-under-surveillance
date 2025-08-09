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
        Schema::create('surveillance_managers', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("value");
            $table->unsignedTinyInteger("surveillance_enabled")->nullable();
            $table->unsignedTinyInteger("access_blocked")->nullable();
            $table->timestamp("surveillance_enabled_at")->nullable();
            $table->timestamp("surveillance_disabled_at")->nullable();
            $table->timestamp("access_blocked_at")->nullable();
            $table->timestamp("access_unblocked_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveillance_managers');
    }
};
