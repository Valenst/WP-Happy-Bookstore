<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
            'category_id'=>1,
            'title'=>'The Underground'
            ],
            [
                'category_id'=>1,
                'title'=>'Season of Flight'
            ],
            [
                'category_id'=>1,
                'title'=>'Seabreeze Sierra'
            ],
            [
                'category_id'=>1,
                'title'=>'Floaroma Town'
            ],
            [
                'category_id'=>2,
                'title'=>'Chemistry: A Hands-on Approach'
            ],
            [
                'category_id'=>2,
                'title'=>'The Anatomy'
            ],
            [
                'category_id'=>2,
                'title'=>'Dinosaur Dictionary'
            ],
            [
                'category_id'=>3,
                'title'=>'Windows 10 Installation Guide'
            ],
            [
                'category_id'=>3,
                'title'=>'Windows 11 Installation Guide'
            ],
            [
                'category_id'=>3,
                'title'=>'Cool Things to do on the Internet'
            ]
        ]);
    }
}
