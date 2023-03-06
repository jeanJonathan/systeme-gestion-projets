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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->integer('projet_id');
            $table->string('nom');
            $table->string('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('utilisateur_id');
            $table->timestamps(); // une colonne de date de creation et de mise a jour automatique
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taches');
    }
};
