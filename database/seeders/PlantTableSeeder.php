<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trees = [
            [
                'name' => 'Narra Tree',
                'description' => 'Known as the national tree of the Philippines, it has durable hardwood and beautiful golden-yellow flowers.',
                'minimum_price' => 50.00,
                'maximum_price' => 100.00,
                'thumbnail' => 'narra_thumbnail.jpg',
                'image' => 'narra_full.jpg',
            ],
            [
                'name' => 'Mango Tree',
                'description' => 'Famous for its delicious fruits, the mango tree is a common sight in the Philippines.',
                'minimum_price' => 40.00,
                'maximum_price' => 80.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'mango_full.jpg',
            ],
            [
                'name' => 'Coconut Palm',
                'description' => 'A staple tree in tropical countries, providing coconuts for various purposes.',
                'minimum_price' => 30.00,
                'maximum_price' => 60.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'coconut_full.jpg',
            ],
            [
                'name' => 'Banana Tree',
                'description' => 'Known for its large, elongated leaves and clusters of bananas.',
                'minimum_price' => 25.00,
                'maximum_price' => 50.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'banana_full.jpg',
            ],
            [
                'name' => 'Guijo Tree',
                'description' => 'A hardwood tree with dark, reddish-brown wood used in construction.',
                'minimum_price' => 60.00,
                'maximum_price' => 120.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'guijo_full.jpg',
            ],
            [
                'name' => 'Lanzones Tree',
                'description' => 'Produces small, round fruits with a sweet and tangy taste.',
                'minimum_price' => 35.00,
                'maximum_price' => 70.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'lanzones_full.jpg',
            ],
            [
                'name' => 'Guava Tree',
                'description' => 'A fruit-bearing tree with edible fruits that are rich in vitamins.',
                'minimum_price' => 30.00,
                'maximum_price' => 60.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'guava_full.jpg',
            ],
            [
                'name' => 'Molave Tree',
                'description' => 'Known for its hard and durable wood, often used in furniture making.',
                'minimum_price' => 70.00,
                'maximum_price' => 140.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'molave_full.jpg',
            ],
            [
                'name' => 'Santol Tree',
                'description' => 'Produces large, round fruits with sweet and sour taste.',
                'minimum_price' => 40.00,
                'maximum_price' => 80.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'santol_full.jpg',
            ],
            [
                'name' => 'Acacia Tree',
                'description' => 'Known for its distinctive umbrella-shaped canopy and valuable wood.',
                'minimum_price' => 50.00,
                'maximum_price' => 100.00,
                'thumbnail' => 'thumbnail.jpg',
                'image' => 'acacia_full.jpg',
            ],
        ];
        

        foreach ($trees as $tree) {
            Plant::firstOrCreate(['name' => $tree['name']], $tree);
        }
        
    }
}
