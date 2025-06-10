<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredienteProduto extends Pivot
{
    protected $table = 'ingrediente_produto';

    protected $fillable = [
        'ingrediente_id',
        'produto_id',
        'quantidade',
        'gramatura'
    ];

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
