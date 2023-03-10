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
        //Blueprint est une methode de constructeur de schema pour permettre
        //L'ajout de nouvelle colone s
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->date('date_debut');
            $table->date('date_fin');
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
        Schema::dropIfExists('projets');
    }
};
