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
        //
        factory('App\Admin', 1)->create([
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
    }
}
