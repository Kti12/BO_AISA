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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->ondelete('cascade');
            $table->foreignId('administrateur_id')->constrained()->ondelete('cascade');
            $table->foreignId('dispositif_id')->constrained()->ondelete('cascade');
            $table->text('objet_reclamation');
            $table->date('DatEnvoi_reclamation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
