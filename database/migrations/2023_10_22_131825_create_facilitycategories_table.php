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
        Schema::create('facilitycategories', function (Blueprint $table) {
            $table->id();
          
       
            $table->integer('status')->default(0);
            $table->integer('category_id');
            $table->string('facility');
            $table->longText('svg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilitycategories');
    }
};
