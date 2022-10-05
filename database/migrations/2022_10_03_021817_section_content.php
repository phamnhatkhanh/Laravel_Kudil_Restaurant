<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SectionContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_content', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('section_id');
        $table->unsignedBigInteger('content_id')->nullable();;
        $table->timestamps();

        //$table->primary(array('section_id','content_id'));
        $table->foreign('section_id')
            ->references('id')
            ->on('sections')
            ->onDelete('cascade');
        $table->foreign('content_id')
                ->references('id')
                ->on('contents')
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
        Schema::table('section_content', function (Blueprint $table) {
            $table->dropForeign(['section_id']);
            $table->dropForeign(['content_id']);
        });

        Schema::dropIfExists('section_content');
    }
}
