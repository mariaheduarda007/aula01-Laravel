<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $data = [
            ["name" => "PROFESSOR"], // 1
            ["name" => "COORDENADOR"], // 2
        ];
        DB::table('roles')->insert($data);
    }
    
}
