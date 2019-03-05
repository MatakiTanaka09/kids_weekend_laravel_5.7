<?php

use App\Models\Review;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            "uuid" => "2ef7cd8e-87ed-3431-8b44-9a9b39369180",
            "review_user_uuid" => "66482970-38c9-11e9-aa82-a93aabbe9be0",
            "event_uuid" => "66482970-38c9-11e9-aa82-a93aabbe9be0",
            "comment" => "test comment",
            "star_amount" => 5
        ]);

        Factory(Review::class, 15)->create();
    }
}
