<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_az');
            $table->string('slug_az');

            $table->string('title_en')->nullable();
            $table->string('slug_en')->nullable();

            $table->string('title_ru')->nullable();
            $table->string('slug_ru')->nullable();

            $table->longText('desc_az');
            $table->longText('desc_en');
            $table->longText('desc_ru');
            $table->string('link');

            $table->string('image');
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
        Schema::dropIfExists('sliders');
    }
}
