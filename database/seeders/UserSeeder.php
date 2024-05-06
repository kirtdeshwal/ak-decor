<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id'           => 1,
                'first_name'   => 'Kirti',
                'last_name'    => 'Deshwal',
                'email'        => 'kirtideshwal43@gmail.com',
                'password'     => Hash::make('Dkg@1996')
            ],
            [
                'id'           => 2,
                'first_name'   => 'Aarti',
                'last_name'    => 'Salaria',
                'email'        => 'aartisalaria96@gmail.com',
                'password'     => Hash::make('aarti@786')
            ]
        ]);
    }
}
