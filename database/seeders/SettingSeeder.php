<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'logo' => 'LOGO',
                'logo_name' => 'logo name',
                'email' => 'excample@gmail.com',
                'phone' => '0999999999',
                'about' => 'About Section',
                'about_image' => 'about image',
                'search' => 'Search Section',
                'location' => 'Location Section',

            ],

        ]);
    }
}
