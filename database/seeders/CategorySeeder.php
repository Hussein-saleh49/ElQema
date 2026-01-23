<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = ["electronics","cabels_accessories","screens_boards"];
       foreach($data as $element){
        Category::create([
            "name" => $element
        ]);
       }
    }
}
