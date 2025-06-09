<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\Ingrediente;
use Illuminate\Database\Seeder;

class ProdutoIngredienteSeeder extends Seeder
{
    public function run(): void
    {
        // Pizza 4 Queijos
        $produto = Produto::where('nome', 'Pizza 4 Queijos 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Requeijão Cremoso', 'gramatura' => 50.00],
            ['nome' => 'Gorgonzola', 'gramatura' => 50.00],
            ['nome' => 'Parmesão', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza 5 Queijos
        $produto = Produto::where('nome', 'Pizza 5 Queijos 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Cheddar Artesanal', 'gramatura' => 50.00],
            ['nome' => 'Requeijão Cremoso', 'gramatura' => 50.00],
            ['nome' => 'Gorgonzola', 'gramatura' => 50.00],
            ['nome' => 'Parmesão', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Alho
        $produto = Produto::where('nome', 'Pizza Alho 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Alho Frito', 'gramatura' => 30.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Amor de Mãe
        $produto = Produto::where('nome', 'Pizza Amor de Mãe 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Lombo Canadense', 'gramatura' => 100.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Champignon', 'gramatura' => 50.00],
            ['nome' => 'Manjericão', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza B.T.T.R
        $produto = Produto::where('nome', 'Pizza B.T.T.R Best Tasty Rib\'s 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Costelinha Suína', 'gramatura' => 100.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Pimenta Biquinho', 'gramatura' => 20.00],
            ['nome' => 'Salsinha fresca', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Calabresa
        $produto = Produto::where('nome', 'Pizza Calabresa 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Calabresa', 'gramatura' => 100.00],
            ['nome' => 'Cebola', 'gramatura' => 50.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Camarão com Catupiry
        $produto = Produto::where('nome', 'Pizza Camarão com Catupiry 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Camarão', 'gramatura' => 100.00],
            ['nome' => 'Alho Poró', 'gramatura' => 30.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Carbonara Gourmet
        $produto = Produto::where('nome', 'Pizza Carbonara Gourmet 20cm')->first();
        $ingredientes = [
            ['nome' => 'Creme Carbonara Artesanal', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Requeijão Cremoso', 'gramatura' => 50.00],
            ['nome' => 'Parmesão', 'gramatura' => 50.00],
            ['nome' => 'Bacon', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Carne Seca com Catupiry
        $produto = Produto::where('nome', 'Pizza Carne Seca com Catupiry 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Carne Seca Desfiada', 'gramatura' => 100.00],
            ['nome' => 'Cebola', 'gramatura' => 50.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Azeitona', 'gramatura' => 30.00],
            ['nome' => 'Alho Frito', 'gramatura' => 30.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Catupperoni
        $produto = Produto::where('nome', 'Pizza Catupperoni 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Pepperoni', 'gramatura' => 100.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Portuguesa
        $produto = Produto::where('nome', 'Pizza Portuguesa 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Calabresa', 'gramatura' => 100.00],
            ['nome' => 'Tomate', 'gramatura' => 50.00],
            ['nome' => 'Presunto', 'gramatura' => 50.00],
            ['nome' => 'Palmito', 'gramatura' => 50.00],
            ['nome' => 'Pimentão', 'gramatura' => 30.00],
            ['nome' => 'Bacon', 'gramatura' => 50.00],
            ['nome' => 'Ovos', 'gramatura' => 100.00],
            ['nome' => 'Cebola', 'gramatura' => 50.00],
            ['nome' => 'Azeitona', 'gramatura' => 30.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Frango com Catupiry
        $produto = Produto::where('nome', 'Pizza Frango com Catupiry 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Frango Temperado', 'gramatura' => 100.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Golden Aussie
        $produto = Produto::where('nome', 'Pizza Golden Aussie 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Costelinha Suína', 'gramatura' => 100.00],
            ['nome' => 'Homemade Barbecue', 'gramatura' => 50.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Lannister
        $produto = Produto::where('nome', 'Pizza Lannister 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Lombo Canadense', 'gramatura' => 100.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Camarão', 'gramatura' => 100.00],
            ['nome' => 'Homemade Barbecue', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Lombo com Requeijão
        $produto = Produto::where('nome', 'Pizza Lombo com Requeijão 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Lombo Canadense', 'gramatura' => 100.00],
            ['nome' => 'Requeijão Cremoso', 'gramatura' => 50.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Marguerita
        $produto = Produto::where('nome', 'Pizza Marguerita 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Tomate', 'gramatura' => 50.00],
            ['nome' => 'Manjericão', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Marie
        $produto = Produto::where('nome', 'Pizza Marie 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Calabresa', 'gramatura' => 100.00],
            ['nome' => 'Bacon', 'gramatura' => 50.00],
            ['nome' => 'Cebola', 'gramatura' => 50.00],
            ['nome' => 'Catupiry Original', 'gramatura' => 50.00],
            ['nome' => 'Alho Poró', 'gramatura' => 30.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Mozzarella
        $produto = Produto::where('nome', 'Pizza Mozzarella 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Palmito
        $produto = Produto::where('nome', 'Pizza Palmito 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Palmito', 'gramatura' => 50.00],
            ['nome' => 'Parmesão', 'gramatura' => 50.00],
            ['nome' => 'Orégano', 'gramatura' => 10.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }

        // Pizza Pepperoni 4 Queijos
        $produto = Produto::where('nome', 'Pizza Pepperoni 4 Queijos 20cm')->first();
        $ingredientes = [
            ['nome' => 'Molho de Tomate', 'gramatura' => 100.00],
            ['nome' => 'Mozzarella', 'gramatura' => 200.00],
            ['nome' => 'Pepperoni', 'gramatura' => 100.00],
            ['nome' => 'Requeijão Cremoso', 'gramatura' => 50.00],
            ['nome' => 'Gorgonzola', 'gramatura' => 50.00],
            ['nome' => 'Parmesão', 'gramatura' => 50.00]
        ];
        foreach ($ingredientes as $ingrediente) {
            $ing = Ingrediente::where('nome', $ingrediente['nome'])->first();
            $produto->ingredientes()->attach($ing->id, ['quantidade' => 1, 'gramatura' => $ingrediente['gramatura']]);
        }
    }
}
