<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataEHorarioToUserclienteTable extends Migration
{
    public function up()
    {
        Schema::table('usercliente', function (Blueprint $table) {
            $table->date('data_agendamento')->nullable(); // Adiciona a coluna de data
            $table->time('horario_agendamento')->nullable(); // Adiciona a coluna de horário
        });
    }

    public function down()
    {
        Schema::table('usercliente', function (Blueprint $table) {
            $table->dropColumn(['data_agendamento', 'horario_agendamento']); // Remove as colunas se a migração for revertida
        });
    }
}

