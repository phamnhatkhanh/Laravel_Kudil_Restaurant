<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticleTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('article_id');
        $table->unsignedBigInteger('tag_id')->nullable();;
        $table->timestamps();

        //$table->primary(array('article_id','tag_id'));
        $table->foreign('article_id')
            ->references('id')
            ->on('articles')
            ->onDelete('cascade');
        $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
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
        Schema::table('article_tag', function (Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['tag_id']);
        });

        Schema::dropIfExists('article_tag');
    }
}
