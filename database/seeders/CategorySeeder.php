<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category'=>'Fiction'
            ],
            [
                'category'=>'Science'
            ],
            [
                'category'=>'Computer'
            ],
            [
                'category'=>'History'
            ],
            [
                'category'=>'Manga'
            ],
            [
                'category'=>'Romance'
            ],
            [
                'category'=>'Journal'
            ],
            [
                'category'=>'Philosophy'
            ],
            [
                'category'=>'Geography'
            ],
            [
                'category'=>'Language'
            ]
        ]);

    }
}
