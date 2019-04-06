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
        DB::table('users')->insert([
            'name' => 'Administrador',
            'username'=>'admin',
            'email' => 'admin@wplay.com.br',
            'email_verified_at'=> date('Y-m-d H:i:s'),
            'password' => bcrypt('admin'),
            'group_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
