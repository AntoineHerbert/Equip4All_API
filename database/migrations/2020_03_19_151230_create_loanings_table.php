<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanings', function (Blueprint $table) {
            $table->id();
            $table->date('loaningStart');
            $table->date('loaningPlannedEnd');
            $table->date('loaningEnd');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('material_id');
            $table->timestamps();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loanings');
    }
}
