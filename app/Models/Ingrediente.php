<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'imagem',
        'situacao',
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class)
                    ->withPivot('quantidade', 'gramatura')
                    ->withTimestamps();
    }
}
