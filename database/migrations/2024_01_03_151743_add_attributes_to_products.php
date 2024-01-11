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
        Schema::table('products', function (Blueprint $table) {
            //
            $table->string('discount')->nullable()->change();
    $table->string('emi_cost')->nullable()->change();
    $table->string('r_time')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('discount');
            $table->dropColumn('emi_cost');
            $table->dropColumn('r_time');
        });
    }
};
