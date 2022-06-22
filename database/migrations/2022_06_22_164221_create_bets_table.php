<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lot_id');

            $table->index('lot_id', 'bet_lot_idx');
            $table->foreign('lot_id', 'bet_lot_fk')->on('lots')->references('id');

            $table->index('user_id', 'bet_user_idx');
            $table->foreign('user_id', 'bet_user_fk')->on('users')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bets');
    }
}
