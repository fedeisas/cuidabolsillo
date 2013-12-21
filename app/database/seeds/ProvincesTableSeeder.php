<?php

class ProvincesTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('provinces')->truncate();

        $provinces = array(
            array(
                'id' => 1,
                'ISO_3166-2' => 'AR-B',
                'name' => 'Buenos Aires',
                'area' => 307571,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 2,
                'ISO_3166-2' => 'AR-X',
                'name' => 'Córdoba',
                'area' => 165321,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 3,
                'ISO_3166-2' => 'AR-S',
                'name' => 'Santa Fe',
                'area' => 133007,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 4,
                'ISO_3166-2' => 'AR-M',
                'name' => 'Mendoza',
                'area' => 148827,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 5,
                'ISO_3166-2' => 'AR-T',
                'name' => 'Tucumán',
                'area' => 22524,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 6,
                'ISO_3166-2' => 'AR-E',
                'name' => 'Entre Ríos',
                'area' => 78781,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 7,
                'ISO_3166-2' => 'AR-A',
                'name' => 'Salta',
                'area' => 155488,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 8,
                'ISO_3166-2' => 'AR-N',
                'name' => 'Misiones',
                'area' => 29801,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 9,
                'ISO_3166-2' => 'AR-H',
                'name' => 'Chaco',
                'area' => 99633,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 10,
                'ISO_3166-2' => 'AR-W',
                'name' => 'Corrientes',
                'area' => 88199,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 11,
                'ISO_3166-2' => 'AR-G',
                'name' => 'Santiago del Estero',
                'area' => 136351,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 12,
                'ISO_3166-2' => 'AR-J',
                'name' => 'San Juan',
                'area' => 89651,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 13,
                'ISO_3166-2' => 'AR-Y',
                'name' => 'Jujuy',
                'area' => 53219,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 14,
                'ISO_3166-2' => 'AR-R',
                'name' => 'Río Negro',
                'area' => 203013,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 15,
                'ISO_3166-2' => 'AR-Q',
                'name' => 'Neuquén',
                'area' => 94078,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 16,
                'ISO_3166-2' => 'AR-P',
                'name' => 'Formosa',
                'area' => 72066,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 17,
                'ISO_3166-2' => 'AR-U',
                'name' => 'Chubut',
                'area' => 224686,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 18,
                'ISO_3166-2' => 'AR-D',
                'name' => 'San Luis',
                'area' => 76748,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 19,
                'ISO_3166-2' => 'AR-K',
                'name' => 'Catamarca',
                'area' => 102602,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 20,
                'ISO_3166-2' => 'AR-F',
                'name' => 'La Rioja',
                'area' => 89680,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 21,
                'ISO_3166-2' => 'AR-L',
                'name' => 'La Pampa',
                'area' => 143440,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 22,
                'ISO_3166-2' => 'AR-Z',
                'name' => 'Santa Cruz',
                'area' => 243943,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 23,
                'ISO_3166-2' => 'AR-V',
                'name' => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
                'area' => 1023708,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('provinces')->insert($provinces);
    }
}
