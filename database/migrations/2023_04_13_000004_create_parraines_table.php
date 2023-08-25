<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParrainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parraines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomprep');
            $table->string('eamilp')->nullable();
            $table->string('telephonp');
            $table->string('nomprepp');
            $table->string('emailpp')->nullable();
            $table->string('telephonpp');

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
        Schema::dropIfExists('parraines');
    }
}
