<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('owned_by')->unsigned()->index();
          $table->string('mobile', 20);
          $table->string('phone', 20);
          $table->string('state', 100);
          $table->string('city', 100);
          $table->string('street', 150);
          $table->string('zip', 11);
          $table->text('about_me');
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
        Schema::drop('profiles');
    }
}
