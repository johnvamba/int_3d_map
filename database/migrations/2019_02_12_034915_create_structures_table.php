<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('keyname', 255);
            $table->longText('description')->nullable();
            $table->smallInteger('height')->unsigned();
            $table->string('roofcolor',7)->default('#00AABB');
            $table->string('wallcolor',7)->default('#00AABB');
            $table->string('image',70);
            $table->longText('polygon');
            $table->softDeletes();
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
        Schema::dropIfExists('structures');
    }
}
