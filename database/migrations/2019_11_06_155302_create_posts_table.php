<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('proptype');
            // $table->unsignedBigInteger('user_id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('moderator')->nullable();
            $table->string('star')->nullable();
            $table->string('bvn')->nullable();
            $table->string('phone');
            $table->string('review');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('housetype')->nullable();
            $table->string('landmark');
            $table->string('worth');
            $table->string('vacancy');
            $table->text('propdesc');
            $table->string('address');
            $table->string('grade')->nullable();
            $table->string('validation')->nullable();
            $table->string('filename')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
