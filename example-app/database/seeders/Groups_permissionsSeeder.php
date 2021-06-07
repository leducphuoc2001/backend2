<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Groups_permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('groups_permissions')->insert([
                'permission_id' => random_int(1, 99),
                'group_id' => random_int(1, 99),
            ]);
        }
    }
}
