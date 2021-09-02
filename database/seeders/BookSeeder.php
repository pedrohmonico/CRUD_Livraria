<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
       $book->create([
        'title'=>'Dom Quixote',
        'pages'=>'150',
        'price'=>'110.50',
        'id_user'=>'1',
       ]); 

       $book->create([
        'title'=>'Divergente',
        'pages'=>'502',
        'price'=>'30.00',
        'id_user'=>'2',
       ]); 

       $book->create([
        'title'=>'Mais esperto que o Diabo',
        'pages'=>'300',
        'price'=>'24.90',
        'id_user'=>'3',
       ]); 
    }
}
