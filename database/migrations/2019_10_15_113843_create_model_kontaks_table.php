<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelKontaksTable extends Migration
{
	
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increment
            $table->char('nama', 128); //membuat kolom nama
            $table->char('email', 128); //membuat kolom email
            $table->char('nohp', 64); //membuat kolom no hp
            $table->text('alamat'); //membuat kolom alamat dengan tipe text
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_kontaks');
    }
}
