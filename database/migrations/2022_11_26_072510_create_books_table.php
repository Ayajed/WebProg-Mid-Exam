<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('bookId');
            $table->unsignedBigInteger('publisherId')->references('publisherId')->on('publishers')->onupdate('cascade')->ondelete('cascade');
            $table->string('bookTitle');
            $table->string('bookAuthor');
            $table->integer('bookYear');
            $table->string('bookSynopsis');
            $table->string('bookImageUrl');
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
        Schema::dropIfExists('books');
    }
};
