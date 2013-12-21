<?php

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('IbpTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('ListsTableSeeder');
        $this->call('PriceReportTableSeeder');
        $this->call('BusinessesTableSeeder');
        $this->call('ListProductTableSeeder');
        $this->call('ProvincesTableSeeder');
        $this->call('UsersTableSeeder');
    }
}
