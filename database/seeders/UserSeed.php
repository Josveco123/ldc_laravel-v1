<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'alcira@alcira.com'],
            [
                'name' => 'Alcira',
                'email_verified_at' => now(),
                'razon_social' => 'Laboratorio del Caribe SAS.',
                'whatsapp' => '25252525',
                'ciudad' => 'Sincelejo',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
            ]
        )->assignRole('admin');

        User::updateOrCreate(
            ['email' => 'master@master.com'],
            [
                'name' => 'master',
                'email_verified_at' => now(),
                'razon_social' => 'Laboratorios del Caribe SAS.',
                'whatsapp' => '25252525',
                'ciudad' => 'Sincelejo',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
            ]
        )->assignRole('master');

        User::updateOrCreate(
            ['email' => 'cliente@cliente.com'],
            [
                'name' => 'cliente',
                'email_verified_at' => now(),
                'razon_social' => 'mi empresa sas del cliente',
                'whatsapp' => '5656565656',
                'ciudad' => 'Monteria',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
            ]
        )->assignRole('client');
    }
}
