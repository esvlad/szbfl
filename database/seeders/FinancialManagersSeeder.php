<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('financial_managers')->insert([
            ['bitrix_id' => '1182', 'title' => 'Волконский Григорий'],
            ['bitrix_id' => '3361', 'title' => 'Апкадырова Снежана'],
            ['bitrix_id' => '1180', 'title' => 'Макулова Регина'],
            ['bitrix_id' => '1181', 'title' => 'Файзуллина Гульназ'],
        ]);
    }
}
