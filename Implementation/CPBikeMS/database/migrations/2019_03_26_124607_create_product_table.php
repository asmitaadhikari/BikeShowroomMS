<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('productid');
            $table->string('name');
            $table->string('cc');
            $table->string('fuel');
            $table->string('gear');
            $table->string('speed');
            $table->string('technology');
            $table->string('tyre');
            $table->string('price');
            $table->string('img');
            $table->string('stroke');
            $table->string('Clutch');
            $table->string('warranty');
            $table->unsignedInteger('producttypeid');
            $table->foreign('producttypeid')->references('producttypeid')->on('productcat');
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
        Schema::dropIfExists('product');
    }
}
