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
            $table->string('Title', 100);
            $table->string('Author', 50);
            $table->string('Genre', 50);
            $table->integer('published_year')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('Book_Covers', 225);
            $table->string('slug', 50)->nullable();
            $table->text('Description');
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
