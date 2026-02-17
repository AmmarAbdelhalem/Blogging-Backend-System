<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('post_like', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->uuid('post_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('post_id')->references('id')->on('posts')->cascadeOnDelete();
            $table->primary(['user_id', 'post_id']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('post_like');
    }
};
