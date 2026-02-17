<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('content');
            $table->enum('status', ['draft', 'published', 'pending', 'rejected']);
            $table->uuid('author_id');
            $table->foreign('author_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamp('published_at');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
