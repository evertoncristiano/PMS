<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name' => 'Levantamento de requisitos',
            'description' => 'Realizar levantemento dos requisitos para desenvolvimento do novo sistema',
            'completed' => FALSE,
            'project_id' => 3,
            'user_id' => NULL,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'name' => 'Escolha das tecnologias',
            'description' => 'Reunião para escolha das tecnologias a serem utilizadas para desenvolvimento do projeto',
            'completed' => FALSE,
            'project_id' => 3,
            'user_id' => NULL,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'name' => 'Criação do Banco de Dados',
            'description' => 'Realizar a criação do banco de dados',
            'completed' => FALSE,
            'project_id' => 3,
            'user_id' => NULL,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}