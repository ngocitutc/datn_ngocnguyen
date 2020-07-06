<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin',
            'role' => ADMIN,
            'password' => password_hash('admin@123', PASSWORD_BCRYPT),
        ]);
    }
}
