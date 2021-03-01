<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
        INSERT INTO cities (id, name, postal_code, created_at, updated_at) VALUES
        (1, 'Kota Yogyakrta', null, '2021-02-19 12:55:53', '2021-02-19 12:55:53'),
        (2, 'Kab Sleman', null, '2021-02-19 12:55:53', '2021-02-19 12:55:53'),
        (3, 'Kab Bantul', null, '2021-02-19 12:55:53', '2021-02-19 12:55:53'),
        (4, 'Kab Gunung Kidul', null, '2021-02-19 12:55:53', '2021-02-19 12:55:53'),
        (5, 'Kab Kulon Progo', null, '2021-02-19 12:55:53', '2021-02-19 12:55:53');
        ");
        
    }
}