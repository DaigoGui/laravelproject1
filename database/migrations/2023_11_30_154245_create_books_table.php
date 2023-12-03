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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('author', 50);
            $table->string('genre', 50);
            $table->integer('published_year');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('book_covers', 225);
            $table->string('slug', 50);
            $table->text('description');
            $table->time('created_at'); // Assuming you want to store the time of creation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
