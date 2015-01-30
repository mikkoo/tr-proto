<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('translation_statuses', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('translation_id')->index();
      $table->string('title');
      $table->text('comments');
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
		Schema::drop('translation_statuses');
	}

}
