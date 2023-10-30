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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->integer('gallery')->default(0);
            $table->string('category');
            $table->string('available');
            $table->string('food');
            $table->string('parking');
            $table->string('tenants');
            $table->string('beds');
            $table->string('period');
            $table->string('maintenance');
            $table->string('electrcity');
            $table->string('amount');
            $table->longText('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
