<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_marks', function (Blueprint $table) {
            $table->increments('id');
			$table->string('A*');
			$table->string('A');
			$table->string('B');
			$table->string('C');
			$table->string('D');
			$table->string('E');
			$table->string('F');
			$table->string('G');
			$table->string('U');
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
        Schema::dropIfExists('score_marks');
    }
}
