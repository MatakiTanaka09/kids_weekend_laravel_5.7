<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserParentsTableSeeder::class);
        $this->call(UserChildrenTableSeeder::class);
        $this->call(ChildParentsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(ActivityEventSchoolsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SexesTableSeeder::class);
        $this->call(CategoryEventsTableSeeder::class);
//        $this->call(ImagesTableSeeder::class);
    }
}
