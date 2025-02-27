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

        Schema::table('customers', function (Blueprint $table) {
            $table->foreignId('gender_id')->after('avatar')->constrained();
        });

        Schema::table('managers', function (Blueprint $table) {
            $table->foreignId('store_id')->after('avatar')->constrained();
        });

        Schema::table('stores', function (Blueprint $table) {
            $table->foreignId('category_id')->after('address')->constrained();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('store_id')->after('price')->constrained();
            $table->foreignId('category_id')->after('store_id')->constrained();
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
            $table->foreignId('product_id')->after('order_id')->constrained();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('customers','gender_id');
        Schema::dropColumns('managers','store_id');
        Schema::dropColumns('stores','category_id');
        Schema::dropColumns('products','store_id');
        Schema::dropColumns('products','category_id');
        Schema::dropColumns('addresses','customer_id');
        Schema::dropColumns('orders','customer_id');
        Schema::dropColumns('orders','store_id');
        Schema::dropColumns('order_items','order_id');
        Schema::dropColumns('order_items','product_id');
    }
};
