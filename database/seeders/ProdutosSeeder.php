<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Pizza 4 Queijos 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Gotas de Requeijão Cremoso, Gorgonzola e Parmesão.',
                'preco_base' => 41.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza 5 Queijos 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Gotas de Cheddar Artesanal e Requeijão Cremoso, Gorgonzola e Parmesão.',
                'preco_base' => 46.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Alho 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Alho Frito e Orégano.',
                'preco_base' => 36.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Amor de Mãe 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Lombo Canadense, Catupiry Original, Champignon e Manjericão.',
                'preco_base' => 46.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza B.T.T.R Best Tasty Rib\'s 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Costelinha Suína, gotas de Catupiry Original, Pimenta Biquinho e Salsinha fresca.',
                'preco_base' => 46.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Calabresa 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Calabresa, Cebola e Orégano.',
                'preco_base' => 36.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Camarão com Catupiry 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Camarão, Alho Poró e Catupiry Original.',
                'preco_base' => 59.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Carbonara Gourmet 20cm',
                'descricao' => 'Creme Carbonara Artesanal com Ovos, Mozzarella, Requeijão Cremoso, Queijo Parmesão e Bacon, Finalizado com Parmesão Gratinado e Molho de Tomate.',
                'preco_base' => 40.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Carne Seca com Catupiry 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Carne Seca Desfiada, Cebola, Catupiry Original, Azeitona, Alho Frito e Orégano.',
                'preco_base' => 56.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Catupperoni 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Pepperoni, Catupiry Original e Orégano.',
                'preco_base' => 44.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Portuguesa 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Calabresa Fatiada, Tomate, Presunto, Palmito, Pimentão, Bacon, Ovos, Cebola, Azeitona e Orégano.',
                'preco_base' => 41.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Frango com Catupiry 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Frango Especialmente Temperado, Catupiry Original e Orégano.',
                'preco_base' => 41.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Golden Aussie 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Costela Suína, Homemade Barbecue e Catupiry Original.',
                'preco_base' => 46.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Lannister 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Lombo Canadense, Gotas de Catupiry, Camarão e Homemade Barbecue.',
                'preco_base' => 49.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Lombo com Requeijão 20cm',
                'descricao' => 'Molho de Tomate, Lombo Canadense, Gotas de Requeijão Cremoso e Orégano.',
                'preco_base' => 36.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Marguerita 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Tomate e Manjericão.',
                'preco_base' => 36.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Marie 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Calabresa, Bacon, Cebola, Catupiry Original e Alho-poró.',
                'preco_base' => 46.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Mozzarella 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella e Orégano.',
                'preco_base' => 32.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Palmito 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Palmito, Parmesão e Orégano.',
                'preco_base' => 36.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Pizza Pepperoni 4 Queijos 20cm',
                'descricao' => 'Molho de Tomate, Mozzarella, Pepperoni, Gotas de Requeijão Cremoso, Gorgonzola e Parmesão.',
                'preco_base' => 46.0,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ],
            [
                'nome' => 'Rodízio Individual',
                'descricao' => 'Rodízio de pizzas com direito a todas as pizzas do cardápio.',
                'preco_base' => 49.90,
                'tipo' => 'rodizio',
                'situacao' => 'ativo',
            ]
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
