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
        User::create([
            'nama' => 'Nayantaka',
            'email' => 'nayan@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
