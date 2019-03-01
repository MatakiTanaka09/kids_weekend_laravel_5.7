<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            "uuid" => 'f844011c-15b1-31af-a782-c4962494441b',
            "event_uuid" => '78f152f0-3bd7-11e9-993f-39f68f8add6e',
            "school_uuid" => 'e2b06f7a-2b7a-3c9f-8b7d-e75881d738b1',
            "pub_state" => 0,
            "name" => 'プログラミングであそぼう',
            "detail" => 'プログラミングの入門をやります',
        ]);

        Factory(App\Models\Activity::class, 15)->create();
    }
}
