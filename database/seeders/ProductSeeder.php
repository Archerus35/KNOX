<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Elder Ring',
            'price' => 60,
            'description' => 'Juego de mundo abierto con temática Souls',
            'image' => 'https://media.vandal.net/m/102076/elden-ring-20216121316990_1.jpg'
        ]);
        Product::create([
            'name' => 'Half life 2',
            'price' => 25,
            'description' => 'Continuación de la saga de Black Mesa donde seguiremos las aventuras de Gordon Freeman',
            'image' => 'https://m.media-amazon.com/images/I/51V8ZRK340L._AC_SY445_.jpg'
        ]);
        Product::create([
            'name' => 'DYING LIGHT 2',
            'price' => 60,
            'description' => 'Juego de mundo de abierto en un apocalipsis zombi',
            'image' => 'https://m.media-amazon.com/images/I/81ChC2WlrmL._SX342_.jpg'
        ]);

        Product::create([
            'name' => 'THE LONG DARK',
            'price' => 30,
            'description' => 'Nos pondremos en la piel de un explorador que debido a un accidente su avión se estrello en lo que parece ser un invierno eterno',
            'image' => 'https://uvejuegos.com/img/caratulas/62158/The-Long-Dark-XBO-EU.jpg'
        ]);

        Product::create([
            'name' => 'Sea of Thieves',
            'price' => 40,
            'description' => 'Aventurate en los mares más peligrosos del mundo junto con tu tripulación y un puñado de aventuras por todo lo alto',
            'image' => 'https://www.xboxadictos.net/wp-content/uploads/2020/07/Sea-Of-ThievesPortada-XboxAdictos-e1595261205297.jpg'
        ]);

        Product::create([
            'name' => 'Horizon Zero Forbidden West',
            'price' => 60,
            'description' => 'Explora páramos remotos, enfréntate a máquinas más grandes e imponentes y descubre increíbles tribus en tu regreso a un futuro lejano en el mundo apocalíptico de Horizon.',
            'image' => 'https://uvejuegos.com/img/caratulas/64655/Horizon-Forbidden-West.jpg'
        ]);

        Product::create([
            'name' => 'God of War: Ragnarok',
            'price' => 60,
            'description' => 'God of War: Ragnarök es un próximo juego de acción y aventuras en desarrollo por Santa Monica Studio y que será publicado por Sony Interactive Entertainment. ',
            'image' => 'https://uvejuegos.com/img/caratulas/65089/God-of-War-Ragnarok.jpg'
        ]);

        Product::create([
            'name' => 'Tiny Tinas Wonderlands',
            'price' => 60,
            'description' => 'Tiny Tinas Wonderlands es un videojuego de acción y disparos en primera persona desarrollado por Gearbox Software',
            'image' => 'https://uvejuegos.com/img/caratulas/66286/Tiny-Tina-s-Wonderlands-7303-1623395766.jpg'
        ]);

        Product::create([
            'name' => 'Evil Dead: The game',
            'price' => 70,
            'description' => 'Evil Dead: The Game es un videojuego de terror y supervivencia basado en la franquicia Evil Dead. Fue desarrollado y publicado por Sabre Interactive.',
            'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202109/2814/odiz6ls35at0GBlldKCWk6ja.png'
        ]);

        Product::create([
            'name' => 'The Quarry',
            'price' => 60,
            'description' => 'The Quarry es un videojuego de terror y drama interactivo de 2022 desarrollado por Supermassive Games y publicado por 2K Games.',
            'image' => 'https://www.somosxbox.com/wp-content/uploads/2022/03/the-quarry-somosxbox-1.jpg'
        ]);

        Product::create([
            'name' => 'Forspoken',
            'price' => 70,
            'description' => 'Forspoken es un videojuego de rol de acción actualmente en desarrollo por Luminous Productions, con colaboración de Square Enix. ',
            'image' => 'https://cdn1.epicgames.com/offer/a472b0f2f2a5493d960a941f01cf3393/EGS_Forspoken_LuminousProductions_S1_2560x1440-f2f99882e9d396b21fb65735d266385a'
        ]);

        Product::create([
            'name' => 'Warhammer 40,000: Darktide',
            'price' => 80,
            'description' => 'Warhammer 40,000: Darktide es un videojuego de acción-aventura en primera persona actualmente en desarrollo por la compañía sueca Fatshark',
            'image' => 'https://img2.storyblok.com/0x650/f/156499/1920x1080/31caf140be/darktide-keyart-1920x1080.png'
        ]);
    }
}
