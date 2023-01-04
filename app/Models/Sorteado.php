<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteado extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'status',
        'user_id',
        'sorteio_id',
        'user_name',
        'user_email',
        'user_cpf',
        'user_telefone',
    ];
}
