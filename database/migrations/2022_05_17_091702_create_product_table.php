<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigInteger('product_id' , true);
            $table->mediumText('model');
            $table->integer('quantity');
            $table->bigInteger('stock_status_id');
            $table->mediumText('image');
            $table->bigInteger('manufacturer_id');
            $table->integer('shipping');
            $table->float('price');
            $table->integer('points');
            $table->bigInteger('tax_class_id');
            $table->dateTime('date_available');
            $table->float('weight');
            $table->bigInteger('weight_class_id');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->bigInteger('length_class_id');
            $table->integer('subtract');
            $table->integer('minimum');
            $table->enum('sort_order',['0','1']);
            $table->enum('status',['0','1']);
            $table->enum('viewed',['0','1']);
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
};
