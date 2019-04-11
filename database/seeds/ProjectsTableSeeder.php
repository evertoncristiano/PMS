<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'Website Responsivo',
            'description' => 'Realizar a criação de um novo website',
            'deliveryDate' => '2019-12-20',
            'customer_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('projects')->insert([
            'name' => 'Social Media Facebook',
            'description' => 'Elaborar uma nova identidade para a página do Facebook',
            'deliveryDate' => '2019-10-10',
            'customer_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('projects')->insert([
            'name' => 'Gerenciador de Projetos',
            'description' => 'Desenvolver um sistema de gerenciamento de projetos',
            'deliveryDate' => '2019-04-12',
            'customer_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}