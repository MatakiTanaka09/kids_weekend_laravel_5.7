<?php

use Illuminate\Database\Seeder;

class UserChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('userChildren')->insert([
            'uuid' => '78f68420-38d5-11e9-87c5-050111259bff',
            'parent_uuid' => '66482970-38c9-11e9-aa82-a93aabbe9be0',
            'last_name' => 'ゆうき',
            'first_name' => 'たなか',
            'last_kana' => 'ゆうき',
            'first_kana' => 'たなか',
            'sex' => '0',
            'birth_day' => '2019-01-01'
        ]);

        DB::table('userChildren')->insert([
            'uuid' => 'fcc8da30-3a4b-11e9-87bc-113c5ebb6e88',
            'parent_uuid' => '66482970-38c9-11e9-aa82-a93aabbe9be0',
            'last_name' => 'けんいちろう',
            'first_name' => 'こまつ',
            'last_kana' => '賢一郎',
            'first_kana' => '小松',
            'sex' => '0',
            'birth_day' => '2019-01-09'
        ]);

        Factory(App\Models\UserChild::class, 15)->create();
    }
}
