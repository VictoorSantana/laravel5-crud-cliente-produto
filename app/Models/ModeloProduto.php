<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModeloProduto extends Model
{
    protected $fillable = [
        'descricao', 'preco', 'quantidade'
    ];
}
