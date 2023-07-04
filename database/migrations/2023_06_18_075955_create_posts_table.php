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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string(column:'title');
            $table->text(column:'content');
            $table->string(column:'image')->nullable();
            $table->unsignedBigInteger(column:'likes')->nullable();
            $table->boolean(column:'is_published')->default(value:'1');
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('category_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
