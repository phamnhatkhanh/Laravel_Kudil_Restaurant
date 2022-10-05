<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {

        $table->bigIncrements('id');
        $table->unsignedBigInteger('product_id');
        $table->unsignedBigInteger('order_id')->nullable();;
        $table->timestamps();

        //$table->primary(array('product_id','order_id'));
        $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');
        $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_order', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['order_id']);
        });

        Schema::dropIfExists('product_order');
    }
}
