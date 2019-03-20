<?php

use Illuminate\Database\Seeder;

class UserParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userParents')->insert([
            'uuid'       => '66482970-38c9-11e9-aa82-a93aabbe9be0',
            'user_id'    => 17,
            'last_name'  => 'けんいにろう',
            'first_name' => 'こまつ',
            'last_kana'  => 'けんいちろう',
            'first_kana' => '小松',
            'tel'        => '000-0000-0000',
            'sex'        => '1',
            'zip_code1'  => '111',
            'zip_code2'  => '0000',
            'state'      => '東京都',
            'city'       => '中央区',
            'address1'   => '月島',
            'address2'   => '1-1-1',
        ]);

        DB::table('userParents')->insert([
            'uuid'       => '7ac65a20-38d3-11e9-a0b7-e1830f8af122',
            'user_id'    => 16,
            'last_name'  => 'りえ',
            'first_name' => '三浦',
            'last_kana'  => 'りえ',
            'first_kana' => 'みうら',
            'tel'        => '000-0000-0000',
            'sex'        => '1',
            'zip_code1'  => '111',
            'zip_code2'  => '0000',
            'state'      => '東京都',
            'city'       => '中央区',
            'address1'   => '月島',
            'address2'   => '1-1-1',
        ]);

        Factory(App\Models\UserParent::class, 15)->create();
    }
}
