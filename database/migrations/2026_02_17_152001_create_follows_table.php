<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->uuid('follower_id');
            $table->uuid('following_id');
            $table->foreign('follower_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('following_id')->references('id')->on('users')->cascadeOnDelete();
            $table->primary(['follower_id', 'following_id']);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
