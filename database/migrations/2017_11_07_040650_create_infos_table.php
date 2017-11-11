<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category',50)->comment('考题类别');
            $table->integer('cat',false,true,4)->comment('考题类型');
            $table->integer('score',false,true,4)->comment('考试成绩');
            $table->string('content',2000)->comment('考试内容');
            $table->string('answer',2000)->nullable()->comment('考试答案');
            $table->string('coranswer',2000)->comment('correct answer');
            $table->string('group',50)->comment('所属套题');
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
        Schema::dropIfExists('infos');
    }
}
