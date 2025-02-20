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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('password')->nullable();
            $table->string('address')->after('phone')->nullable();
            $table->integer('id_country')->after('address')->nullable();
            $table->string('avatar')->after('id_country')->nullable();
            $table->string('role')->after('avatar')->default('0')->comment('0: Admin, 1: User , 2:Store');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
