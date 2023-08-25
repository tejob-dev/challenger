<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcquereursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquereurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nompre');
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->enum('typlog', [
                'Villa basse',
                'Appartement',
                'Villa duplex',
            ]);
            $table->string('emplacement')->nullable();
            $table->enum('nbrpiece', [
                'Studio',
                '2 pièces',
                '3 pièces',
                '4 pièces',
                'plus de 4',
            ]);
            $table->bigInteger('budget')->nullable();
            $table->bigInteger('apporinit')->nullable();
            $table->bigInteger('engagannee')->nullable();
            $table->string('peopletype')->nullable();
            $table->enum('nbrannee', ['7 ans', '10 ans']);
            $table->string('result1')->nullable();
            $table->string('result2')->nullable();
            $table->string('result3')->nullable();

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
        Schema::dropIfExists('acquereurs');
    }
}
