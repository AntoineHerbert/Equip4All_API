<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssociationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 2; $i <= 20; $i++) {
            DB::table('associations')->insert([
                ['designation' => $faker->company, 'description' => $faker->paragraph('1'), 'referent_name' => 'Doe', 'referent_forename' => 'John'],
            ]);
        }
    }
}
