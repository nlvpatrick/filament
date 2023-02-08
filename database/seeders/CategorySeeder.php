<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryList;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'  => 'trucks'
            ],
            [
                'name'  => 'wireless devices'
            ],
            [
                'name'  => 'weddings'
            ],
            [
                'name'  => 'psychopaths'
            ],
            [
                'name'  => 'fruits'
            ]
        ];

        CategoryList::insert($data);
    }
}
