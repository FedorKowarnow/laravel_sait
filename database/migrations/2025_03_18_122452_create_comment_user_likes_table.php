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
        Schema::create('comment_user_likes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->boolean('like')->nullable();

            //$table->unsignedBigInteger('reviewUserComment_id');
            $table->unsignedBigInteger('review_user_comment_id');
            $table->unsignedBigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_user_likes');
    }
};
