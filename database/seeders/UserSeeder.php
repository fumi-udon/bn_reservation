<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@bistronippon.com',
            'password' => Hash::make('2017')
        ]);
        // 新しいユーザー追加
        User::create([
            'name' => 'nippon',
            'email' => 'admin@bistronippon.tn',
            'password' => Hash::make('2017')
        ]);
    }
}
