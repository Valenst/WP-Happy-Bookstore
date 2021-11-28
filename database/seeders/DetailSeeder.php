<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
            'book_id'=>1,
            'author'=>'Ashcosie',
            'publisher'=>'Gramedio',
            'year'=>2016,
            'description'=>'For as long as it has been, the Underground has been peaceful. It all changed when a crack to the surface was found one day.'
            ],
            [
                'book_id'=>2,
                'author'=>'Skye Childe',
                'publisher'=>'Gramedio',
                'year'=>2021,
                'description'=>'Take flight into the newly discovered horizons.'
            ],
            [
                'book_id'=>3,
                'author'=>'Faraway',
                'publisher'=>'Gramedio',
                'year'=>2006,
                'description'=>'Why can\'t it always be Summer.'
            ],
            [
                'book_id'=>4,
                'author'=>'Sinnho Diamond',
                'publisher'=>'Gramedio',
                'year'=>2007,
                'description'=>'You came to get emotionally healed too, didn\'t you?'
            ],
            [
                'book_id'=>5,
                'author'=>'Alebdo',
                'publisher'=>'Gramedio',
                'year'=>2020,
                'description'=>'Basics to master chemistry in one night.'
            ],
            [
                'book_id'=>6,
                'author'=>'Alebdo',
                'publisher'=>'Gramedio',
                'year'=>2021,
                'description'=>'The anatomy of what exactly? Find out when you purchase this book.'
            ],
            [
                'book_id'=>7,
                'author'=>'Susei Delta',
                'publisher'=>'Gramedio',
                'year'=>2019,
                'description'=>'All 100 species of dinosaurs are depicted in this dictionary.'
            ],
            [
                'book_id'=>8,
                'author'=>'Micro',
                'publisher'=>'Microsoft',
                'year'=>2010,
                'description'=>'This guidebook will teach you how to install Windows 10.'            
            ],
            [
                'book_id'=>9,
                'author'=>'Michael',
                'publisher'=>'Michaelsoft',
                'year'=>2010,
                'description'=>'Don\'t get fooled by Windows 10, get the newest Windows 11 and how to install it with this book.'            
            ],
            [
                'book_id'=>10,
                'author'=>'Swagx',
                'publisher'=>'Gramedio',
                'year'=>2000,
                'description'=>'Hey guyz don\'t you wanna be [swag] lik3 me? Purchase this book now to discover.'            
            ]
        ]);
    }
}
