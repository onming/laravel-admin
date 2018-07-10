<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@onming.cn',
            'password' => bcrypt('onming'),
        ]);
    }
}
