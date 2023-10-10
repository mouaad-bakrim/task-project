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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->date('date_echeance');
            //$table->unsignedBigInteger('assigne_a');
            $table->string('status');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();

            // Clés étrangères
            //$table->foreign('assigne_a')->references('id')->on('users'); // Mettez le nom de la table des utilisateurs à la place de 'users' si nécessaire
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
