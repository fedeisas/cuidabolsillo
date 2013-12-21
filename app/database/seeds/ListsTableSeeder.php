<?php

class ListsTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('lists')->truncate();

        $lists = array(
            array(
                'id' => 1,
                'name' => 'IBP',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            )
        );

        // Uncomment the below to run the seeder
        DB::table('lists')->insert($lists);
    }
}
