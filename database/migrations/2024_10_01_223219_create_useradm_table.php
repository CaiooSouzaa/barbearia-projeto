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
        Schema::create('useradm', function (Blueprint $table) {
            $table->id();
            $table->string('name_adm');
            $table->string('senha_adm');
            $table->string('telefone_adm');
            $table->string('email_adm');
            $table->string('localizacao_adm');
            $table->boolean('user_ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useradm');
    }
};
