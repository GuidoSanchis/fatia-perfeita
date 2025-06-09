<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\Mesa;
use App\Models\Produto;
use App\Enums\PedidosStatus;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PedidosSeeder extends Seeder
{
    public function run(): void
    {
        // Pedido 1 - Mesa 1
        $pedido1 = Pedido::create([
            'codigo' => 'PED001',
            'data' => Carbon::now(),
            'subtotal' => 0,
            'taxa_servico' => 0,
            'total' => 0,
            'situacao' => PedidosStatus::Novo->value,
            'mesa_id' => Mesa::where('numero', 1)->first()->id
        ]);

        // Adiciona produtos ao pedido 1
        $produtos1 = [
            ['produto' => 'Pizza 4 Queijos 20cm', 'quantidade' => 1, 'preco' => 00.00],
            ['produto' => 'Pizza Calabresa 20cm', 'quantidade' => 1, 'preco' => 00.00]
        ];

        foreach ($produtos1 as $item) {
            $produto = Produto::where('nome', $item['produto'])->first();
            $pedido1->produtos()->attach($produto->id, [
                'quantidade' => $item['quantidade'],
                'preco' => $item['preco']
            ]);
        }

        // Atualiza totais do pedido 1
        $subtotal1 = collect($produtos1)->sum(function ($item) {
            return $item['quantidade'] * $item['preco'];
        });
        $taxa1 = $subtotal1 * 0.10;
        $total1 = $subtotal1 + $taxa1;

        $pedido1->update([
            'subtotal' => $subtotal1,
            'taxa_servico' => $taxa1,
            'total' => $total1
        ]);

        // Pedido 2 - Mesa 3
        $pedido2 = Pedido::create([
            'codigo' => 'PED002',
            'data' => Carbon::now(),
            'subtotal' => 0,
            'taxa_servico' => 0,
            'total' => 0,
            'situacao' => PedidosStatus::Concluido->value,
            'mesa_id' => Mesa::where('numero', 3)->first()->id
        ]);

        // Adiciona produtos ao pedido 2
        $produtos2 = [
            ['produto' => 'Pizza Portuguesa 20cm', 'quantidade' => 2, 'preco' => 00.00],
            ['produto' => 'Pizza Frango com Catupiry 20cm', 'quantidade' => 1, 'preco' => 00.00]
        ];

        foreach ($produtos2 as $item) {
            $produto = Produto::where('nome', $item['produto'])->first();
            $pedido2->produtos()->attach($produto->id, [
                'quantidade' => $item['quantidade'],
                'preco' => $item['preco']
            ]);
        }

        // Atualiza totais do pedido 2
        $subtotal2 = collect($produtos2)->sum(function ($item) {
            return $item['quantidade'] * $item['preco'];
        });
        $taxa2 = $subtotal2 * 0.10;
        $total2 = $subtotal2 + $taxa2;

        $pedido2->update([
            'subtotal' => $subtotal2,
            'taxa_servico' => $taxa2,
            'total' => $total2
        ]);

        // Pedido 3 - Mesa 5
        $pedido3 = Pedido::create([
            'codigo' => 'PED003',
            'data' => Carbon::now(),
            'subtotal' => 0,
            'taxa_servico' => 0,
            'total' => 0,
            'situacao' => PedidosStatus::EmAndamento->value,
            'mesa_id' => Mesa::where('numero', 5)->first()->id
        ]);

        // Adiciona produtos ao pedido 3
        $produtos3 = [
            ['produto' => 'Pizza Pepperoni 4 Queijos 20cm', 'quantidade' => 1, 'preco' => 00.00],
            ['produto' => 'Pizza Marguerita 20cm', 'quantidade' => 1, 'preco' => 00.00],
            ['produto' => 'Pizza Mozzarella 20cm', 'quantidade' => 1, 'preco' => 00.00]
        ];

        foreach ($produtos3 as $item) {
            $produto = Produto::where('nome', $item['produto'])->first();
            $pedido3->produtos()->attach($produto->id, [
                'quantidade' => $item['quantidade'],
                'preco' => $item['preco']
            ]);
        }

        // Atualiza totais do pedido 3
        $subtotal3 = collect($produtos3)->sum(function ($item) {
            return $item['quantidade'] * $item['preco'];
        });
        $taxa3 = $subtotal3 * 0.10;
        $total3 = $subtotal3 + $taxa3;

        $pedido3->update([
            'subtotal' => $subtotal3,
            'taxa_servico' => $taxa3,
            'total' => $total3
        ]);

        // Pedido 4 - Mesa 2 (Cancelado)
        $pedido4 = Pedido::create([
            'codigo' => 'PED004',
            'data' => Carbon::now(),
            'subtotal' => 0,
            'taxa_servico' => 0,
            'total' => 0,
            'situacao' => PedidosStatus::Cancelado->value,
            'mesa_id' => Mesa::where('numero', 2)->first()->id
        ]);

        // Adiciona produtos ao pedido 4
        $produtos4 = [
            ['produto' => 'Pizza Lannister 20cm', 'quantidade' => 1, 'preco' => 00.00],
            ['produto' => 'Pizza Golden Aussie 20cm', 'quantidade' => 1, 'preco' => 00.00]
        ];

        foreach ($produtos4 as $item) {
            $produto = Produto::where('nome', $item['produto'])->first();
            $pedido4->produtos()->attach($produto->id, [
                'quantidade' => $item['quantidade'],
                'preco' => $item['preco']
            ]);
        }

        // Atualiza totais do pedido 4
        $subtotal4 = collect($produtos4)->sum(function ($item) {
            return $item['quantidade'] * $item['preco'];
        });
        $taxa4 = $subtotal4 * 0.10;
        $total4 = $subtotal4 + $taxa4;

        $pedido4->update([
            'subtotal' => $subtotal4,
            'taxa_servico' => $taxa4,
            'total' => $total4
        ]);
    }
}
