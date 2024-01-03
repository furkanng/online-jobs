<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('userjobs', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("admin_id");
            $table->string("type")->nullable();
            $table->string("advert_no")->nullable();
            $table->text("content")->nullable();
            $table->boolean("status")->nullable();
            $table->string("dead_line")->nullable();
            $table->double("price")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userjobs');
    }
};
