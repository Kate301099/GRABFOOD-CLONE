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
        Schema::table('managers', function (Blueprint $table) {
            $table->foreignId('brand_id')->after('avatar')->constrained();
        });

        Schema::table('stores', function (Blueprint $table) {
            $table->foreignId('brand_id')->after('phone')->constrained();
            $table->unique(['name','brand_id']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('brand_id')->after('image')->constrained();
            $table->unique(['name','brand_id']);
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreignId('customer_id')->after('address')->constrained();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('customer_id')->after('id')->constrained();
            $table->foreignId('store_id')->after('customer_id')->constrained();
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->foreignId('order_id')->after('id')->constrained();
            $table->foreignId('offer_id')->after('order_id')->constrained();
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->foreignId('customer_id')->after('id')->constrained();
            $table->foreignId('store_id')->after('customer_id')->constrained();
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->foreignId('product_id')->after('id')->constrained();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('offers', 'product_id');
        Schema::dropColumns('reviews', 'store_id');
        Schema::dropColumns('reviews', 'customer_id');
        Schema::dropColumns('order_items', 'offer_id');
        Schema::dropColumns('order_items', 'order_id');
        Schema::dropColumns('orders', 'store_id');
        Schema::dropColumns('orders', 'customer_id');
        Schema::dropColumns('addresses', 'customer_id');
        Schema::dropColumns('products', 'brand_id');
        Schema::dropColumns('stores', 'brand_id');
        Schema::dropColumns('managers', 'brand_id');
    }
};
