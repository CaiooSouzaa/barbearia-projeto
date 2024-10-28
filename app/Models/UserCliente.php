<?php

// app/Models/UserCliente.php

// app/Models/UserCliente.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCliente extends Model
{
    use HasFactory;

    protected $table = 'usercliente'; // Adicione esta linha

    protected $fillable = [
        'name_cliente',
        'cpf_cliente',
        'numero_cliente',
        'data_agendamento',
        'horario_agendamento',
        'chat_id', // Para armazenar o chat_id do Telegram
    ];
}
