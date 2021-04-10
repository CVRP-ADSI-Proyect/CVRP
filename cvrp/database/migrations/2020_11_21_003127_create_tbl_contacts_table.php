<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_contactos', function (Blueprint $table) {
            $table->id('idsolicitud');
            $table->string('primernombre','100');
            $table->string('segundonombre','100');
            $table->string('primerapellido','100');
            $table->string('segundoapellido','100');
            $table->string('email','200');
            $table->string('celular','100');
            $table->text('mensaje');
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
        Schema::dropIfExists('tbl_contactos');
    }
}
