<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'superadmin',
            'email' => 'superadmin@elmedina.com.my',
            'password' => bcrypt('password'),
            'branch' => 'ALL',
        ]);
    }
}
