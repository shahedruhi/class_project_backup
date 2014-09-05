<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendances', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('users_id');
            $table->integer('batches_id');
            $table->integer('course_id');
            $table->integer('track_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->float('duration');
            $table->integer('presence');
            $table->string('comments');

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
		Schema::drop('attendances');
	}

}
