<?php

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('products')->truncate();

        $products = array(
            array(
                'id' => 1,
                'name' => 'Pan (1kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 2,
                'name' => 'Galletitas saladas (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 3,
                'name' => 'Galletitas dulces (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 4,
                'name' => 'Arroz (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 5,
                'name' => 'Harina de trigo (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 6,
                'name' => 'Polenta (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 7,
                'name' => 'Fideos guiseros (500 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 8,
                'name' => 'Leche (1 litro)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 9,
                'name' => 'Azúcar (1kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 10,
                'name' => 'Dulce de batata (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 11,
                'name' => 'Dulce de leche (500 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 12,
                'name' => 'Mermelada (500 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 13,
                'name' => 'Queso fresco (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 14,
                'name' => 'Queso crema (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 15,
                'name' => 'Queso cuartirolo (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 16,
                'name' => 'Queso de rallar (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 17,
                'name' => 'Aceite mezcla (900 ml)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 18,
                'name' => 'Sal fina (500 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 19,
                'name' => 'Sal gruesa (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 20,
                'name' => 'Vinagre (1 litro)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 21,
                'name' => 'Café (500 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 22,
                'name' => 'Té (cajita de 25 saquitos)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 23,
                'name' => 'Yerba (500 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 24,
                'name' => 'Lentejas (400 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 25,
                'name' => 'Porotos (400 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 26,
                'name' => 'Arvejas (1 lata)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 27,
                'name' => 'Puré de tomates (520 gr)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 28,
                'name' => 'Gaseosas (2,25 litro)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 29,
                'name' => 'Soda (2 litros)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 30,
                'name' => 'Acelga (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 31,
                'name' => 'Cebolla (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 32,
                'name' => 'Lechuga (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 33,
                'name' => 'Tomate (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 34,
                'name' => 'Zanahoria (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 35,
                'name' => 'Zapallo (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 36,
                'name' => 'Papa (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 37,
                'name' => 'Batata (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 38,
                'name' => 'Banana (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 39,
                'name' => 'Mandarina (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 40,
                'name' => 'Manzana (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 41,
                'name' => 'Naranja (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 42,
                'name' => 'Huevos (1 docena)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 43,
                'name' => 'Asado (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 44,
                'name' => 'Carnaza (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 45,
                'name' => 'Carne picada (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 46,
                'name' => 'Cuadril (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 47,
                'name' => 'Falda con hueso (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 48,
                'name' => 'Nalga (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 49,
                'name' => 'Paleta (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 50,
                'name' => 'Pollo (1 kg)',
                'description' => '',
                'barcode' => null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            )
        );

        // Uncomment the below to run the seeder
        DB::table('products')->insert($products);
    }
}
