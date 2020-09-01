<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id('isbn');
            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->integer('category_id');
            $table->string('author')->nullable();
            $table->date('published')->nullable();
            $table->boolean('availability')->nullable();
            $table->timestamps();
        });

        
        Schema::table('book', function (Blueprint $table)
            {
                $table->foreign('category_id')
                      ->references('id')
                      ->on('category')
                      ->onDelete('cascade');
            });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
