<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('author')->nullable();
            $table->string('slug')->unique();
            $table->timestamp('published_at')->nullable();
            $table->string('pdf')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // relasi ke categories
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
