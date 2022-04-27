<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table){
            $table->id();
            $table->string('titleUz');
            $table->string('titleEn');
            $table->string('titleRu');
            $table->text('bodyUz');
            $table->text('bodyEn');
            $table->text('bodyRu');
            $table->string('price');
            $table->string('checkbox')->nullable();
            $table->string('number');
            $table->string('slug');
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
        Schema::dropIfExists('rooms');
    }
}
