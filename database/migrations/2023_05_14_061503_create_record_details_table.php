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
        Schema::create('record_details', function (Blueprint $table) {
            $table->id();
            $table->integer('views')->nullable()->unsigned();
            $table->integer('clicks')->nullable()->unsigned();
            $table->integer('product_id')->nullable()->unsigned();
            $table->integer('lynk_id')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_details');
    }
};
