<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('menu_product', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('menu_id');
        $table->unsignedBigInteger('product_id')->nullable();;
        $table->timestamps();

        //$table->primary(array('menu_id','product_id'));
        $table->foreign('menu_id')
            ->references('id')
            ->on('menus')
            ->onDelete('cascade');
        $table->foreign('product_id')
                ->references('id')
                ->on('products')
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
        Schema::table('menu_product', function (Blueprint $table) {
            $table->dropForeign(['menu_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('menu_product');
    }
}
