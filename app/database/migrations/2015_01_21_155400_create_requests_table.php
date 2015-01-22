<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('requests', function(Blueprint $table)
    {

      $table->increments('id');
      $table->integer('user_id')->index();
      $table->string('title');
      $table->text('body');
      $table->string('thumbnail');
      $table->string('files');
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
    Schema::drop('requests');
  }

}






