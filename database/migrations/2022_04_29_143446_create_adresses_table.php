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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('adress');
            $table->string('city');
            $table->string('zipcode');
            $table->string('country');
            $table->timestamps();
        });
        Schema::create('adress_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adress_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->unique(['adress_id', 'user_id']);
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
};
