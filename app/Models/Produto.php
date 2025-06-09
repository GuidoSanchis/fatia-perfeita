<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'imagem',
        'descricao',
        'tipo',
        'preco_base',
        'situacao',
    ];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('quantidade')->withPivot('preco')->withTimestamps();
    }

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class)
            ->withPivot('quantidade', 'gramatura')
            ->withTimestamps();
    }
}
