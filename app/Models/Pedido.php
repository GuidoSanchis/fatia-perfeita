<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'data',
        'subtotal',
        'taxa_servico',
        'total',
        'situacao',
        'mesa_id',
    ];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class)->withPivot('quantidade')->withPivot('preco')->withTimestamps();
    }
}
