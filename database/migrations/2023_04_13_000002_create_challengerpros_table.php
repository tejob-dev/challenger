<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengerprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challengerpros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomentr');
            $table->string('telephone');
            $table->date('creation')->nullable();
            $table->string('nompredirig')->nullable();
            $table->enum('typeprog', [
                'Programme en cours',
                'Programme achevé',
                'Programme en démarrage',
            ]);
            $table->enum('objectif', [
                'Des clients',
                'Un marché de construction',
            ]);
            $table->text('messagacquis')->nullable();
            $table->date('rdventre');

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
        Schema::dropIfExists('challengerpros');
    }
}
