<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->string('title');
             $table->string('name');
             $table->string('cedula');
             $table->string('phone');
             $table->string('email');
             $table->text('description');
             $table->string('terrain');
             $table->string('status');
             $table->string('construction');
             $table->integer('propuesta');
             $table->integer('aprobado');
             $table->integer('finalizado');
             $table->integer('cobrado');
             $table->string('acuerdo');
             $table->double('anticipo');
             $table->double('price');
             $table->date('end');
             $table->timestamps();
             $table->foreign('user_id')->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
