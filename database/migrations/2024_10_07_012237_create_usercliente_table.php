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
        Schema::create('usercliente', function (Blueprint $table) {
            $table->id();
            $table->string("name_cliente");
            $table->string("cpf_cliente");
            $table->integer("numero_cliente");
            $table->boolean("ativo_cliente")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercliente');
    }
};
