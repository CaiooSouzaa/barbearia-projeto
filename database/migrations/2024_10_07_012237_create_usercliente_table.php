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
            $table->string("numero_cliente");
            $table->boolean("ativo_cliente")->default(1);
            $table->string("chat_id")->nullable(); // Coluna para armazenar o chat_id do Telegram
            $table->date("data_agendamento")->nullable(); // Coluna para armazenar a data do agendamento
            $table->time("horario_agendamento")->nullable(); // Coluna para armazenar o horário do agendamento
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
