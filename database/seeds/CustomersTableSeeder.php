<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name'       => 'Ester e Hadassa Adega ME',
            'cnpj'       => '08954240000137',
            'zip_code'   => '98010324',
            'address'    => 'Rua Marechal Deodoro',
            'number'     => 323,
            'district'   => 'Garibaldi',
            'city'       => 'Cruz Alta',
            'state'      => 'RS',
            'country'    => 'Brasil',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('customers')->insert([
            'name'       => 'Vitória e Ana Esportes Ltda',
            'cnpj'       => '15422670000173',
            'zip_code'   => '91720401',
            'address'    => 'Acesso Quatorze',
            'number'     => 606,
            'district'   => 'Nonoai',
            'city'       => 'Porto Alegre',
            'state'      => 'RS',
            'country'    => 'Brasil',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('customers')->insert([
            'name'       => 'Alícia e Filipe Advocacia ME',
            'cnpj'       => '31462582000151',
            'zip_code'   => '05134100',
            'address'    => 'Rua Iperara',
            'number'     => 702,
            'district'   => 'Jardim Mangalot',
            'city'       => 'São Paulo',
            'state'      => 'SP',
            'country'    => 'Brasil',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
