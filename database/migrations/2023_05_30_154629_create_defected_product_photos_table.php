<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('defected_product_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('exchange_request_id');
            $table->unsignedInteger('alteration_request_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->string('image_url');
            $table->timestamps();

            $table->foreign('exchange_request_id')->references('id')->on('exchange_requests')->onDelete('cascade');
            
            // If the 'product_id' references a different table, adjust the table name accordingly
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('defected_product_photos');
    }
};
