<?php

use App\Models\ChildParent;
use Illuminate\Database\Seeder;

class ChildParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('childParents')->insert([
            "id"          => 16,
            "parent_uuid" => "66482970-38c9-11e9-aa82-a93aabbe9be0",
            "child_uuid"  => "78f68420-38d5-11e9-87c5-050111259bff",
            "created_at"  => now(),
            "updated_at"  => now(),
        ]);

        DB::table('childParents')->insert([
            "id"          => 17,
            "parent_uuid" => "66482970-38c9-11e9-aa82-a93aabbe9be0",
            "child_uuid"  => "fcc8da30-3a4b-11e9-87bc-113c5ebb6e88",
            "created_at"  => now(),
            "updated_at"  => now(),
        ]);

        Factory(ChildParent::class, 15)->create();
    }
}
