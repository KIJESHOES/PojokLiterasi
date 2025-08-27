<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('page_type'); // contoh: 'article', 'homepage', dll
            $table->unsignedBigInteger('page_id')->nullable(); // id artikel kalau type = article
            $table->string('ip_address')->nullable();
            $table->timestamps();

            $table->index(['page_type', 'page_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
