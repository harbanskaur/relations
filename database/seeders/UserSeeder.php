<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('abcd'),
        ]);
        Contact::create([
            'user_id' => '1',
            'phone' => '1234567891',
            'address' => 'address text',
        ]);
    }
}
