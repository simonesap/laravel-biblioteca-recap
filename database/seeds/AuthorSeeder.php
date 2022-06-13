<?php

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name'=>'Simone',
                'last_name'=>'Rossi',
                'life_story'=>'Scrittore',
                'author_year'=>'1970',
            ],
            [
                'name'=>'Marco',
                'last_name'=>'Gialli',
                'life_story'=>'Scrittore',
                'author_year'=>'1972',
            ]

        ];

        foreach($authors as $author){
            $new_author = new Author();
            $new_author->name = $author['name'];
            $new_author->last_name = $author['last_name'];
            $new_author->life_story = $author['life_story'];
            $new_author->author_year = $author['author_year'];

            $new_author->save();
        }
    }
}
