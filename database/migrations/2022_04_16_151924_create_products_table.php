<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
			$table->integer('customer_id')->unsigned();
			// $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->string('product_id');
			$table->string('Variant_id');
			$table->string('handle');
			$table->string('option1')->nullable();
			$table->string('option2')->nullable();
			$table->string('option3')->nullable();
			$table->string('product_image')->nullable();
			$table->string('variant_image')->nullable();
			$table->string('price');
			$table->string('compare_at_price')->nullable();
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
        Schema::dropIfExists('products');
    }
}
