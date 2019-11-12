<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //erstellt die Datenbank mit den Attributen
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('detail');
            $table->text('zutaten');
            $table->text('kurzbeschreibung');
            $table->text('dauer');
            $table->binary('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //Löscht die Datenbank
    public function down()
    {
        Schema::dropIfExists('products');
    }
}