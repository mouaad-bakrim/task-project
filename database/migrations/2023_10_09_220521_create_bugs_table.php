<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('priorite');
            $table->date('date_creation');
            $table->string('statut');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();
            // Clés étrangères
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bugs');
    }
};
