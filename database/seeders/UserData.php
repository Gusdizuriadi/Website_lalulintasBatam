<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('1234admin'),
                'level' => 1,
                'email' => 'admin_lalulintasbatam@gmail.com',
            ],

            [
                'name' => 'Operator',
                'username' => 'operator',
                'password' => bcrypt('1234operator'),
                'level' => 1,
                'email' => 'operator_lalulintasbatam@gmail.com',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
