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
        Schema::create('adresstypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('adress_adresstype', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adress_id');
            $table->unsignedBigInteger('adresstype_id');
            $table->timestamps();

            $table->unique(['adress_id', 'adresstype_id']);
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');
            $table->foreign('adresstype_id')->references('id')->on('adresstypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresstypes');
    }
};
