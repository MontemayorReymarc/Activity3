<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title' => 'User Sample',
            'description' => 'Sample Description',
            'photo' => 'test',
            'user_id' => 1,
            'created_at' => Carbon::now,
        ])
    }
}
