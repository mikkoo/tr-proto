<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTranslationsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('translations', function(Blueprint $table)
    {

      $table->increments('id');
      $table->integer('user_id')->index();
      $table->string('title');
      $table->text('body');
      $table->string('thumbnail');
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
    Schema::drop('translations');
  }

}





