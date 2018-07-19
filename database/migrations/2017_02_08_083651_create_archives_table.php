<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->integer('ismake')->default(0);
            $table->integer('click')->default(0);
            $table->string('title');
            $table->string('shorttitle')->nullable();
            $table->string('flags')->nullable();
            $table->string('tags')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('write');
            $table->string('litpic')->nullable();
            $table->string('jiage')->nullable();
            $table->smallInteger('dutyadmin');
            $table->longText('body')->nullable();//预选发布时间
            $table->timestamp('published_at')->nullable();//预选发布时间
            $table->timestamps();
            $table->index('typeid');
            $table->index('title');
            $table->index('click');
            $table->index('shorttitle');
            $table->index('flags');
            $table->index('tags');
            $table->index('write');
            $table->index('dutyadmin');
            $table->index('published_at');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archives');
    }
}
