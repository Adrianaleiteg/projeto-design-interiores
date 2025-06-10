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
        Schema::create('projeto_clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projetos');
            $table->string('feedback');
            $table->integer('reacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeto_clientes');
    }
};
