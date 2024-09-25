<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Import model User

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'rsirasyid',
            'email'=> 'rsirasyid@gmail.com',
            'password'=> bcrypt('nodweAb1212@')
        ];
        User::insert($user);
    }
}
