<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('messages', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nombre');
             $table->string('email');
             $table->text('mensaje');
             $table->timestamps(); 
    });
    }
                        
                        
                        
    public function down()
    {
        schema::drop('messages');
    }
}
