<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosDigitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios_digitales', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descripcion');
            $table->string('imagen')->nullable();
            $table->integer('orden');
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
        Schema::dropIfExists('negocios_digitales');
    }
}
