<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class Classes_usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('classes_users')->insert([
                'user_id' => random_int(1, 99),
                'class_id' => random_int(1, 99),
                'teacher_id' => random_int(1, 99),
            ]);
        }
    }
}
