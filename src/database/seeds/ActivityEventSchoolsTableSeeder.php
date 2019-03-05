<?php

use App\Models\ActivityEventSchool;
use Illuminate\Database\Seeder;

class ActivityEventSchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activityEventSchools')->insert([
            [
                "id"            => 1,
                "school_uuid"   => "d3aa5f2b-4dce-3b3d-bff2-2e90865e89c9",
                "event_uuid"    => "66482970-38c9-11e9-aa82-a93aabbe9be0",
                "activity_uuid" => "f844011c-15b1-31af-a782-c4962494441b",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 2,
                "school_uuid"   => "f556a1d3-2948-3610-9f9f-f83fd3bcc77c",
                "event_uuid"    => "aa802176-01d8-3463-b557-2593d8a462ce",
                "activity_uuid" => "7c979ff6-999d-3780-bc36-3081264fea65",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 3,
                "school_uuid"   => "cac90fab-841f-3125-a12e-3251f2d7dc43",
                "event_uuid"    => "978ae615-97a5-369c-b898-c808b51e02a0",
                "activity_uuid" => "d63ff05c-75b7-3b34-8ae8-473a29e9ffa6",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 4,
                "school_uuid"   => "cce48af0-3d83-11e9-8415-454a45a17b9e",
                "event_uuid"    => "f9934030-3d73-11e9-8b6b-bb3494e69e8b",
                "activity_uuid" => "cce70020-3d83-11e9-9c68-63fea490a6a5",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 5,
                "school_uuid"   => "cce53180-3d83-11e9-a133-2f785df45f7c",
                "event_uuid"    => "f993afb0-3d73-11e9-8077-9b0393124b8c",
                "activity_uuid" => "beec6e20-3d85-11e9-89f8-e51a6f0a0627",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 6,
                "school_uuid"   => "cce58b90-3d83-11e9-b280-817e7369492d",
                "event_uuid"    => "f9940060-3d73-11e9-a5b5-438c7de4051c",
                "activity_uuid" => "beecb5b0-3d85-11e9-9cfd-25f8c836b2e2",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 7,
                "school_uuid"   => "cce48af0-3d83-11e9-8415-454a45a17b9e",
                "event_uuid"    => "f9944fb0-3d73-11e9-a80b-83caa6bf0826",
                "activity_uuid" => "4b27b190-3d86-11e9-b9e0-4f43629f0c6e",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 8,
                "school_uuid"   => "cce53180-3d83-11e9-a133-2f785df45f7c",
                "event_uuid"    => "f994a560-3d73-11e9-b034-d5d317db75d3",
                "activity_uuid" => "4b2817c0-3d86-11e9-985a-c7fcbed0ca31",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                "id"            => 9,
                "school_uuid"   => "cce58b90-3d83-11e9-b280-817e7369492d",
                "event_uuid"    => "0d5f0e80-3a4a-11e9-bff4-5d4dcf70a1e0",
                "activity_uuid" => "4b287a60-3d86-11e9-94cc-3b15e6f96d27",
                "created_at"    => now(),
                "updated_at"    => now()
            ],
        ]);

//        Factory(ActivityEventSchool::class, 13)->create();
    }
}
