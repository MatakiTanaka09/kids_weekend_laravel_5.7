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
            [
                "uuid" => 'd3aa5f2b-4dce-3b3d-bff2-2e90865e89c9',
                "name" => 'Kids Seed',
                "name_kana" => 'キッズシーズ',
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
            ],
            [
                "uuid" => 'f556a1d3-2948-3610-9f9f-f83fd3bcc77c',
                "name" => 'Kids Seed',
                "name_kana" => 'キッズシーズ',
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
            ],
            [
                "uuid" => 'cac90fab-841f-3125-a12e-3251f2d7dc43',
                "name" => 'Kids Seed',
                "name_kana" => 'キッズシーズ',
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
            ],
            [
                "uuid" => 'cce48af0-3d83-11e9-8415-454a45a17b9e',
                "name" => 'Kids Seed',
                "name_kana" => 'キッズシーズ',
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
            ],
            [
                "uuid" => 'cce53180-3d83-11e9-a133-2f785df45f7c',
                "name" => 'Kids Seed',
                "name_kana" => 'キッズシーズ',
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
            ],
            [
                "uuid" => 'cce58b90-3d83-11e9-b280-817e7369492d',
                "name" => 'Kids Seed',
                "name_kana" => 'キッズシーズ',
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
            ],
        ]);

        Factory(App\Models\School::class, 15)->create();
    }
}
