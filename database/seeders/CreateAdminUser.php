<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class createAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser=User::create([
            'email' => 'admin@mail.ru',
            'password' => Hash::make('password'),
        ]);
        Role::create([
            'name'=>'Admin',
        ]);
        Role::create([
            'name'=>'Client',
        ]);
        Role::create([
            'name'=>'Business',
        ]);
        $adminUser->assignRole('Admin');
    }
}
