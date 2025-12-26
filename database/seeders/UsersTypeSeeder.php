<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_type')->insert([
            ['title' => 'Суперадминистратор', 'slug' => 'superadmin'],
            ['title' => 'Администратор', 'slug' => 'admin'],
            ['title' => 'Руководитель', 'slug' => 'ruk'],
            ['title' => 'Менеджер', 'slug' => 'manager'],
            ['title' => 'Бухгалтер', 'slug' => 'buh'],
            ['title' => 'Клиент', 'slug' => 'client'],
        ]);
    }
}
