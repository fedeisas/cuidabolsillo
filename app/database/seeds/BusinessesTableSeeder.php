<?php

class BusinessesTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('businesses')->truncate();

        $businesses = array(
            array(
                'id' => 1,
                'name' => 'Carrefour',
                'location_address' => 'San Martin 350',
                'location_city' => 'San Miguel de Tucumán',
                'location_state' => 'Tucumán',
                'location_postalCode' => '4000',
                'location_country' => 'Argentina',
                'location_lat' => -26.830147171010314,
                'location_lng' => -65.2021293062202,
                'categories' => 'Grocery Store',
                'verified' => 1,
                'stats_checkinsCount' => 0,
                'stats_usersCount' => 0,
                'stats_tipCount' => 0,
                'foursquare_id' => '4c87bf1a14c4b60ce5312235',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 2,
                'name' => 'Carrefour',
                'location_address' => '24 de Septiembre 600',
                'location_city' => 'San Miguel de Tucumán',
                'location_state' => 'Tucumán',
                'location_postalCode' => '4000',
                'location_country' => 'Argentina',
                'location_lat' => -26.830657758169785,
                'location_lng' => -65.20694732666016,
                'categories' => 'Grocery Store',
                'verified' => 1,
                'stats_checkinsCount' => 0,
                'stats_usersCount' => 0,
                'stats_tipCount' => 0,
                'foursquare_id' => '4d391c5940555941c34cada6',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('businesses')->insert($businesses);
    }
}
