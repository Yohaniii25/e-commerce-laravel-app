<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Black rose bouquet',
                'price' => '1200',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'category' => 'Rose',
                'gallery' => 'https://i.pinimg.com/originals/f2/72/f2/f272f233252a86504c94c96e7ab1e481.jpg'
            ],
            [
                'name' => 'White tulip bouquet',
                'price' => '900',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'category' => 'Tulip',
                'gallery' => 'https://unsplash.com/photos/tw4olON9liM'
            ],
        ]);
    }
}