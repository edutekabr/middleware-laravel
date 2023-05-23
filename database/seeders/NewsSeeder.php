<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'Título da notícia 1',
                'content' => 'Conteúdo da notícia 1',
                'location' => 'BRA',
            ],
            [
                'title' => 'Título da notícia 2',
                'content' => 'Conteúdo da notícia 2',
                'location' => 'BRA',
            ],
            [
                'title' => 'News title 3',
                'content' => 'News content 3',
                'location' => 'USA',
            ],
            [
                'title' => 'News title 4',
                'content' => 'News content 4',
                'location' => 'USA',
            ],
            [
                'title' => 'título de la noticia 5',
                'content' => 'contenido de noticias 5',
                'location' => 'ESP',
            ]
        ]);
    }
}
