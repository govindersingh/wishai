<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
			$table->integer('customer_id')->unsigned();
			// $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->string('product_id');
			$table->string('Variant_id');
			$table->integer('add_to_cart_count')->nullable();
			$table->integer('checkout_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
