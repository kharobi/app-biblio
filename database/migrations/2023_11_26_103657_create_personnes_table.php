<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100)->nullable();
            $table->string('prenom',100)->nullable();
            $table->string('arme',150)->nullable();
            $table->string('grade',100)->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('LOGIN',50)->nullable();
            $table->string('MDP');
            $table->string('lieu_naissance',50)->nullable();
            $table->string('etat',50)->nullable();
            $table->string('admin',50)->nullable();
            $table->string('ar_nom',100)->nullable();
            $table->string('ar_prenom',100)->nullable();
            $table->string('ar_arme',150)->nullable();
            $table->string('ar_grade',100)->nullable();
            $table->string('ar_lieu_naissance',50)->nullable();
            $table->string('an',50)->nullable();
            $table->timestamps();


           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
