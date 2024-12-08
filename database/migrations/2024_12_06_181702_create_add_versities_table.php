<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddVersitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_versities', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
            $table->string('name');
            $table->longtext('description');
            $table->string('faculty');
            $table->string('course');
            $table->integer('credits');
            $table->string('maths');
            $table->string('english');
            $table->string('qualification');
            $table->string('startDate');
            $table->string('endDate');
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
        Schema::dropIfExists('add_versities');
    }
}
