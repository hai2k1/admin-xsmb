<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryBetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_bet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('category')->default('');
            $table->string('luotso')->default('');
            $table->string('cachchoi')->default('');
            $table->integer('infor_bet');
            $table->integer('sodoncuoc');
            $table->integer('capdonhan');
            $table->integer('money');
            $table->string('status')->default('');
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
        Schema::dropIfExists('history_bet');
    }
}
