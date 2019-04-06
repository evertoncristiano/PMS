<?php

use Illuminate\Database\Seeder;

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_groups')->insert([
            'name' => 'Administradores',
            'description' => 'Administradores tem acesso total ao sistema',
            'created_at' => date('Y-m-d H:i:s')          
        ]);

        DB::table('user_groups')->insert([
            'name' => 'Usuários',
            'description' => 'Usuários tem acesso aos projetos, tarefas que participa',          
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user_groups')->insert([
            'name' => 'Clientes',
            'description' => 'Clientes podem visualizar o andamento de seus projetos',          
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
