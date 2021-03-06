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
        $this->call(CategoriesTableSeeder::class);
        $this->call(AssociationsTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(AssociationUsersTableSeeder::class);

    }
}
