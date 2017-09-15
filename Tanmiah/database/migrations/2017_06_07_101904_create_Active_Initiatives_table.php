<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveInitiativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Active_Initiatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('budget');
            $table->integer('Expense');
            $table->integer('Remainder');
            $table->date('Date');
            $table->string('Specialization')->nullable();
            $table->string('manager')->nullable();
            $table->string('hours');

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
        Schema::dropIfExists('Active_Initiatives');
    }
}
