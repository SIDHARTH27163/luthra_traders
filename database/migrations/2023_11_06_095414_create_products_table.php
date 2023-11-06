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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->integer('gallery')->default(0);
            $table->string('category');
            $table->string('p_name');
            $table->string('b_name');
            $table->string('m_name');
            // $table->string('network');
            // $table->string('os');
            // $table->string('cellular');
            $table->string('price');
            $table->string('discount');
            $table->string('emi_cost');
            $table->string('r_time');
            $table->string('w_policy');
            $table->longText('desc');
 
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
