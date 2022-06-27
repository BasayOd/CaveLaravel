<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created_at', $precision = 0);
            $table->string('name');
            $table->text('description');
            $table->string('img');
            $table->unsignedBigInteger('price');
            $table->dateTime('dt_end');
            $table->integer('bet_step');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('winner_id')->nullable();
            $table->unsignedBigInteger('category_id');

            $table->index('category_id', 'lot_category_idx');
            $table->foreign('category_id', 'lot_category_fk')->on('categories')->references('id')->nullOnDelete();

            $table->index('user_id', 'lot_user_idx');
            $table->foreign('user_id', 'lot_user_fk')->on('users')->references('id')->cascadeOnDelete();

            $table->index('winner_id', 'lot_winner_idx');
            $table->foreign('winner_id', 'lot_winner_fk')->on('users')->references('id')->nullOnDelete();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
