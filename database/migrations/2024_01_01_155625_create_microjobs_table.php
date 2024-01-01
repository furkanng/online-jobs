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
        Schema::create('microjobs', function (Blueprint $table) {
            $table->id();
            $table->integer("admin_id");
            $table->string("advert_no");
            $table->string("subject")->nullable();
            $table->longText("content")->nullable();
            $table->double("price")->nullable();
            $table->string("section")->nullable();
            $table->dateTime("closed_date")->nullable();
            $table->boolean("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microjobs');
    }
};
