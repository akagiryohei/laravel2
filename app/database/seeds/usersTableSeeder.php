<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'master',
            'email' => 'abbbbbbbb35@gmail.com',
            'password' => 'unison',
            'rool' => '1',
        ]);
    }
}
