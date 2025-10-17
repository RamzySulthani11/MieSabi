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
        if (Schema::hasTable('cart_items')) {
            Schema::dropIfExists('cart_items');
        }
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade');
            $table->string('code_product'); // refers to products.code_product
            $table->integer('quantity');
            $table->json('variants')->nullable(); // e.g. {"Original":1,"Yamin":2,"Chili Oil":0}
            $table->timestamps();

            $table->foreign('code_product')
                  ->references('code_product')
                  ->on('product')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
