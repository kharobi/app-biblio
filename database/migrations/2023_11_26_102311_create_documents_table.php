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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('titre',200)->nullable();
            $table->text('description')->nullable();
            $table->date('date_doc')->nullable();
            $table->string('person',150)->nullable();
            $table->string('longue',20)->nullable();
            $table->boolean('etranger')->nullable();
            $table->string('pays',100)->nullable();
            $table->string('extension',100)->nullable();
            $table->string('cover_image')->nullable(); // Nouvelle colonne pour l'image de couverture
            $table->string('document_file')->nullable(); // Nouvelle colonne pour le fichier du document (PDF, par exemple)
            $table->timestamps();
            $table->foreignId('type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('categorie_id')->constrained()->cascadeOnDelete();
            $table->foreignId('personne_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
