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
        
        DB::table('admins')->insert([
            'name' => 'Sri City Auto',
            'email' => 'admin@cityauto.in',
            'password' => bcrypt('123456'),
        ]);
    }
}
