<?php

use Illuminate\Database\Seeder;

class TabelaUsersSeeder extends Seeder
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
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'setor' => 'COMUNICACAO',
            'status' => TRUE,
        ]);
    }
}
