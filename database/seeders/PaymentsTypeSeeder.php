<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments_type')->insert([
            ['fid' => 1, 'title' => 'Авансовый платеж'],
            ['fid' => 2, 'title' => 'Ежемесячный платеж'],
            ['fid' => 3, 'title' => 'Депозит'],
            ['fid' => 4, 'title' => 'Выписка ЕГРН'],
            ['fid' => 5, 'title' => 'Публикация в ЕФРСБ'],
            ['fid' => 11, 'title' => 'Депозит для суда'],
            ['fid' => 12, 'title' => 'за отмену сп'],
            ['fid' => 13, 'title' => 'Комиссия банка'],
            ['fid' => 17, 'title' => 'справка ЕГРН'],
            ['fid' => 18, 'title' => 'публикация'],
            ['fid' => 19, 'title' => 'прочее'],
            ['fid' => 20, 'title' => 'гос пошлина за третейский суд'],
            ['fid' => 21, 'title' => 'В пм'],
            ['fid' => 22, 'title' => 'гос пошлина'],
            ['fid' => 23, 'title' => 'Услуги'],
            ['fid' => 24, 'title' => 'За справку с банка'],
        ]);
    }
}
