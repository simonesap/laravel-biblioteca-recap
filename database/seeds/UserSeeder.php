<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();
        $newUser->name = 'Simone';
        $newUser->email = 'test@mail.com';
        $newUser->password = bcrypt('password');
        $newUser->save();
    }
}
