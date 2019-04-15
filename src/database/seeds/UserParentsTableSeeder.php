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
            'user_id'    => 3,
            'full_name'  => '小松けんいにろう',
            'full_kana'  => 'こまつけんいちろう',
            'tel'        => '000-0000-0000',
            'sex'        => '1',
            'zip_code'   => '111-0000',
            'address'    => '東京都中央区月島1-1-1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

//        DB::table('userParents')->insert([
//            'uuid'      => '7ac65a20-38d3-11e9-a0b7-e1830f8af122',
//            'user_id'   => 3,
//            'full_name' => '小松けんいにろう',
//            'full_kana' => 'こまつけんいちろう',
//            'tel'       => '000-0000-0000',
//            'sex'       => '1',
//            'zip_code'  => '111-0000',
//            'address'   => '東京都中央区月島1-1-1'
//        ]);

//        Factory(App\Models\UserParent::class, 15)->create();
    }
}
