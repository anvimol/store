<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
	        [
	        	'name' => 'Playeras Polo Niños',
	        	'slug' => 'playeras-polo-niños',
	        	'description' => 'Playeras Niños, variedad de colores, diseños a rayas, ideales para boradado, estampados, con los logos de su empresa.',
	        	'extract' => 'Bordamos cualquier playera polo con logo o diseño',
	        	'price' => 15.00,
	        	'image' => 'img/Playera_polo_niños_0.jpg',
	        	'visible' => 1,
	        	'category_id' => 1
	        ],
	        [
	        	'name' => 'Playera Polo Damas',
	        	'slug' => 'playera-polo-damas',
	        	'description' => 'Playeras Polo Damas, variedad de colores, diseños a rayas, ideales para boradado, estampados, con los logos de su empresa',
	        	'extract' => 'Bordamos cualquier playera polo con logo o diseño',
	        	'price' => 18.00,
	        	'image' => 'img/Playera_polo_damas_0.jpg',
	        	'visible' => 1,
	        	'category_id' => 2
	        ],
	        [
	        	'name' => 'Playera Polo Caballeros',
	        	'slug' => 'playera-polo-caballeros',
	        	'description' => 'En Uniformes Mexico ofrecemos playeras polo manga larga en composiciones 100% algodon, 50% poliester 50% algodon, y 90% algodon 10% poliéster',
	        	'extract' => 'Bordamos cualquier playera polo con logo o diseño',
	        	'price' => 19.00,
	        	'image' => 'img/Playera_polo_caballeros_0.jpg',
	        	'visible' => 1,
	        	'category_id' => 2
	        ],
	        [
	        	'name' => 'Playera Polo Manga Larga',
	        	'slug' => 'playeras-polo-manga-larga',
	        	'description' => 'Playeras Niños, variedad de colores, diseños a rayas, ideales para boradado, estampados, con los logos de su empresa.',
	        	'extract' => 'Bordamos cualquier playera polo con logo o diseño',
	        	'price' => 20.00,
	        	'image' => 'img/Playera_polo_niños_0.jpg',
	        	'visible' => 1,
	        	'category_id' => 1
	        ],
	        [
	        	'name' => 'Playera Economica',
	        	'slug' => 'playeras-economica',
	        	'description' => 'Playeras Niños, variedad de colores, diseños a rayas, ideales para boradado, estampados, con los logos de su empresa.',
	        	'extract' => 'Bordamos cualquier playera polo con logo o diseño',
	        	'price' => 10.00,
	        	'image' => 'img/playera_economica_1.jpg',
	        	'visible' => 1,
	        	'category_id' => 1
	        ],
	        [
	        	'name' => 'Playeras Cuello Redondo',
	        	'slug' => 'playeras-cuello-redondo',
	        	'description' => 'Playeras cuello redondo, variedad de colores, diseños a rayas, en distintos pesos; desde peso ligero para campañas hasta peso completo',
	        	'extract' => 'Bordamos cualquier playera polo con logo o diseño',
	        	'price' => 15.00,
	        	'image' => 'img/Playera_cuello_redondo_0.jpg',
	        	'visible' => 1,
	        	'category_id' => 1
	        ],
        );

        Product::insert($data);
    }
}
