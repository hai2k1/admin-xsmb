<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->default('');
            $table->integer('bank_id');
            $table->bigInteger('money');
            $table->string('bank_name')->default('');
            $table->string('banker')->default('');
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
        Schema::dropIfExists('history_payment');
    }
}
