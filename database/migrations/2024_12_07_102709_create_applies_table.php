<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('name_id');
			$table->integer('varsity_id');
			$table->integer('school');
			$table->string('course');
			$table->integer('accounting');
			$table->integer('computer');
			$table->integer('sesotho');
			$table->integer('business_Studies');
			$table->integer('english');
			$table->integer('mathematics');
			$table->integer('physical_Science');
			$table->integer('biology');
		
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
        Schema::dropIfExists('applies');
    }
}
