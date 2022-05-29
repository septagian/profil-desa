<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'septagian',
            'email' => 'septagian@gmail.com',
            'username' => 'septagiangmail',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'udinbatok',
            'email' => 'udinbatokotok@gmail.com',
            'username' => 'udinbatokotok',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'idamboylah',
            'email' => 'boylahidam@gmail.com',
            'username' => 'boylahidam',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'phodol',
            'email' => 'dodolipak@gmail.com',
            'username' => 'dodolipak',
            'password' =>  bcrypt('12345')
        ]);
    }
}
