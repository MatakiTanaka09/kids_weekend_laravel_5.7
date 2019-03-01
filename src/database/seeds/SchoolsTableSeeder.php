<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            "uuid" => 'e2b06f7a-2b7a-3c9f-8b7d-e75881d738b1',
            "name" => 'Kids Seed',
            "name_kana" => 'きっずシーズ',
            "email" => 'kidseed@gmail.com',
            "url" => 'http://localhost:8888',
            "tel" => '000-0000-0000',
            'zip_code1' => '111',
            'zip_code2' => '1111',
            "state" => '東京都',
            "city" => '中央区',
            "address1" => '月島',
            "address2" => '1-1-1',
            'detail' => 'キッズシーズのせつめい'
        ]);

        Factory(App\Models\School::class, 15)->create();
    }
}
