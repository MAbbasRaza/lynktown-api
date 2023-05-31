<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
	public function up()
	{
		Schema::create('orders', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->nullable()->unsigned();
			$table->integer('store_id')->nullable()->unsigned();
			$table->integer('lynk_id')->nullable()->unsigned();
			$table->integer('total_price')->nullable();
			$table->integer('subtotal_price')->nullable();
			$table->text('shipping_address')->nullable();
			$table->text('shipping_charges')->nullable();
			$table->text('order_start_date')->nullable();
			$table->text('customer_name')->nullable();
			$table->text('phone_no')->nullable();
			$table->text('note')->nullable();
			$table->text('status')->nullable();
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::dropIfExists('orders');
	}
}
