<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'user_id' => 1,
            'name' => 'Samuel Mariano Belo',
            'email' => 'belo.samuel@gmail.com',
            'phone' => '41998834077',
            'github_profile' => 'SamuelB7',
        ]);
    }
}
