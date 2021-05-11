<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('road');
            $table->string('house_no');
            $table->string('post_code');
            $table->string('place');
            $table->string('country');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website');
            $table->string('owner');
            $table->string('bookable');
            $table->text('map');
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
        Schema::dropIfExists('venues');
    }
}
