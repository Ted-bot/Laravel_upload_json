<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCreditcardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditcard_user', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id')->unsigned();
            // $table->bigInteger('creditcard_id')->unsigned();

            $table->foreignId('user_id')->constrained();

            $table->foreignId('creditcard_id')->constrained();
            // $table->foreignId('user_id')->constrained('users');
            // $table->foreignId('creditcard_id')->constrained('creditcards');
            // $table->integer('user_id');
            // $table->integer('creditcard_id');

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
        Schema::dropIfExists('creditcard_user');
    }
}
