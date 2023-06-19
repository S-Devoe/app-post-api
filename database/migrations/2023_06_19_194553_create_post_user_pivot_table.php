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
        Schema::create('post_user', function (Blueprint $table) {
           
            $table->foreignUlid('user_id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->foreignUlid('post_id');
            $table->foreign('post_id')->on('posts')->references('id');
            $table->primary(['post_id', 'user_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_user');
    }
};
