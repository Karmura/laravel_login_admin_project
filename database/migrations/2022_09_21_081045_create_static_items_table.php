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
        Schema::create('static_items', function (Blueprint $table) {
            $table->id();

            $table->string('text1');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');

            $table->string('logo1');
            $table->string('logo2');
            $table->string('logo3');
            $table->string('logo4');

            $table->string('logotext1');
            $table->string('logotext2');
            $table->string('logotext3');
            $table->string('logotext4');

            $table->string('text2');
            $table->string('text3');
            $table->string('text4');
            $table->string('text5');

            $table->string('text6');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');

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
        Schema::dropIfExists('static_items');
    }
};
