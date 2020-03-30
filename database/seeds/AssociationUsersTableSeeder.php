<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssociationUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++) {
            DB::table('association_users')->insert([
                ['user_id' => $i, 'association_id' => $i]
            ]);
        }
    }
}
