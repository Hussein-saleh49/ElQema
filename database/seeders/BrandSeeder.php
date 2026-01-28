<?php
namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            'Intel', 'AMD', 'NVIDIA', 'ASUS', 'MSI', 'Gigabyte', 'ASRock',
            'Corsair', 'Kingston', 'Samsung', 'Western Digital', 'Seagate', 'Crucial',
            'Razer', 'Logitech', 'SteelSeries', 'HyperX', 'Redragon', 'Cooler Master', 'Thermaltake', 'NZXT',
            'Dell', 'LG', 'BenQ', 'AOC',
            'TP-Link', 'UGREEN', 'Anker', 'Baseus',
            'HP', 'Canon', 'Epson', 'Brother',
        ];
        foreach ($data as $element) {
            Brand::create([
                "name" => $element,
            ]);
        }
    }
}
