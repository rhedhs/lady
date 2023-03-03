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
        Schema::create('commande_Achats', function (Blueprint $table) {
            $table->id();
            $table->datetime('datecom');
            $table->foreignId('fournisseur_id')->constrained();
            // $table->string('fournisseur_id');
            // $table->foreign('fournisseur_id')->references('id')->on('fournisseur');
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
        Schema::dropIfExists('commande_achats');
    }
};
