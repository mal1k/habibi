<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();

            // logo
            $table->string('logo');

            // hookah part
            $table->string('left_block_img');
            $table->string('left_block_text')->nullable();

            // bar part
            $table->string('upper_block_img');
            $table->string('upper_block_text')->nullable();

            // services part
            $table->string('central_block_img');
            $table->string('central_block_text')->nullable();

            // with us part
            $table->string('lower_block_img');
            $table->string('lower_block_text')->nullable();

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
        Schema::dropIfExists('home_page');
    }
}
