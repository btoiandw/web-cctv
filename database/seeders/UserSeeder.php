<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username' => 'biw',
                'role' => 1,
                'password' => 'P@ssw0rd11'
            ]

        ];
        foreach ($user as $key => $idt) {
            User::create($idt);
        }
    }
}
