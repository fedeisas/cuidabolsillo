<?php

class PriceReportTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('price_reports')->truncate();

        $pricereport = array(
            array(
                'id' => 1,
                'product_id' => 17,
                'province_id' => 5,
                'price' => 13,
                'latitude' => -26.830147171010314,
                'longitude' => -65.2021293062202,
                'business_id' => 2,
                'session_id' => 'SESSION-ID',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 2,
                'product_id' => 17,
                'province_id' => 5,
                'price' => 12.5,
                'latitude' => -26.830147171010314,
                'longitude' => -65.2021293062202,
                'business_id' => 1,
                'session_id' => 'SESSION-ID',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 3,
                'product_id' => 17,
                'province_id' => 5,
                'price' => 10,
                'latitude' => -26.830147171010314,
                'longitude' => -65.2021293062202,
                'business_id' => 2,
                'session_id' => 'SESSION-ID',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array(
                'id' => 4,
                'product_id' => 17,
                'province_id' => 5,
                'price' => 18,
                'latitude' => -26.830147171010314,
                'longitude' => -65.2021293062202,
                'business_id' => 1,
                'session_id' => 'SESSION-ID',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            )
        );

        // Uncomment the below to run the seeder
        DB::table('price_reports')->insert($pricereport);
    }
}
