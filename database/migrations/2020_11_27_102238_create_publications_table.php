<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('name', 512);
            $table->string('keywords', 512);
            $table->string('indexer')->nullable(); // RINC, VAK, SCOPUS, WOS
            $table->string('journal');
            $table->integer('year');
            $table->string('pages');
            $table->timestamps();

            $table->unique(['name', 'journal', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
