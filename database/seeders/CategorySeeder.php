<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            'Desktop PCs',
            'Laptops',
            'Graphics Cards',
            'Processors',
            'Motherboards',
            'RAM',
            'SSD',
            'HDD',
            'Gaming Monitors',
            'Keyboards',
            'Mouse',
            'Headsets',
            'Speakers',
            'Routers',
            'Printers',
            'Cables & Adapters',
            'Laptop Bags',
            'Gaming Chairs',
        ];
        foreach ($data as $element) {
            Category::create([
                "name" => $element,
            ]);
        }
    }
}
