<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use Illuminate\Database\Seeder;

class IngredientesSeeder extends Seeder
{
    public function run(): void
    {
        $ingredientes = [
            [
                'nome' => 'Molho de Tomate',
                'imagem' => 'ingredientes/molho-tomate.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Mozzarella',
                'imagem' => 'ingredientes/mozzarella.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Requeijão Cremoso',
                'imagem' => 'ingredientes/requeijao.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Gorgonzola',
                'imagem' => 'ingredientes/gorgonzola.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Parmesão',
                'imagem' => 'ingredientes/parmesao.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Cheddar Artesanal',
                'imagem' => 'ingredientes/cheddar.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Alho Frito',
                'imagem' => 'ingredientes/alho-frito.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Orégano',
                'imagem' => 'ingredientes/oregano.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Lombo Canadense',
                'imagem' => 'ingredientes/lombo.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Catupiry Original',
                'imagem' => 'ingredientes/catupiry.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Champignon',
                'imagem' => 'ingredientes/champignon.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Manjericão',
                'imagem' => 'ingredientes/manjericao.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Costelinha Suína',
                'imagem' => 'ingredientes/costelinha.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Pimenta Biquinho',
                'imagem' => 'ingredientes/pimenta-biquinho.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Salsinha fresca',
                'imagem' => 'ingredientes/salsinha.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Calabresa',
                'imagem' => 'ingredientes/calabresa.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Cebola',
                'imagem' => 'ingredientes/cebola.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Camarão',
                'imagem' => 'ingredientes/camarao.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Alho Poró',
                'imagem' => 'ingredientes/alho-poro.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Ovos',
                'imagem' => 'ingredientes/ovos.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Bacon',
                'imagem' => 'ingredientes/bacon.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Carne Seca Desfiada',
                'imagem' => 'ingredientes/carne-seca.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Azeitona',
                'imagem' => 'ingredientes/azeitona.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Pepperoni',
                'imagem' => 'ingredientes/pepperoni.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Tomate',
                'imagem' => 'ingredientes/tomate.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Presunto',
                'imagem' => 'ingredientes/presunto.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Palmito',
                'imagem' => 'ingredientes/palmito.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Pimentão',
                'imagem' => 'ingredientes/pimentao.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Frango Temperado',
                'imagem' => 'ingredientes/frango.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Homemade Barbecue',
                'imagem' => 'ingredientes/barbecue.jpg',
                'situacao' => 'ativo'
            ],
            [
                'nome' => 'Creme Carbonara Artesanal',
                'imagem' => 'ingredientes/carbonara.jpg',
                'situacao' => 'ativo'
            ]
        ];

        foreach ($ingredientes as $ingrediente) {
            Ingrediente::create($ingrediente);
        }
    }
}
