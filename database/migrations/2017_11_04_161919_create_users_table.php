<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //考生信息表
            $table->increments('id')->comment('自动编号');
            $table->string('name',50)->comment('考生姓名');
            $table->string('phone',50)->comment('联系方式');
            $table->string('number',50)->comment('学号');
            $table->string('grade',4)->nullable()->comment('考试成绩');
            $table->string('subject',50)->nullable()->comment('考试科目');
            $table->dateTime('data',6)->nullable()->comment('考试时间');
            $table->string('address',100)->comment('考生联系地址');
            $table->string('state',4)->nullable()->comment('考试状态');
            $table->string('password',100)->comment('考生密码');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
