<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_section', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('page_id');
        $table->unsignedBigInteger('section_id')->nullable();;
        $table->timestamps();

        //$table->primary(array('page_id','section_id'));
        $table->foreign('page_id')
            ->references('id')
            ->on('pages')
            ->onDelete('cascade');
        $table->foreign('section_id')
                ->references('id')
                ->on('sections')
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
        Schema::table('page_section', function (Blueprint $table) {
            $table->dropForeign(['page_id']);
            $table->dropForeign(['section_id']);
        });

        Schema::dropIfExists('page_section');
    }
}
