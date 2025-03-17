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
        Schema::create('review_user_comments', function (Blueprint $table) {
            $table->id();

            $table->text('content');
            $table->text('image')->nullable();

            $table->unsignedBigInteger('review_id');
            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('reply_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_user_comments');
    }
};
