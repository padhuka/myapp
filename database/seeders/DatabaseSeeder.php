<?php

namespace Database\Seeders;

//use App\Models\User;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        // User::create([

        //     'name' => 'Irsyad Pa',
        //     'email' => 'belumadaemail@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now(),
        // ]);

     $this->call([
        UserSeeder::class,
        TasksSeeder::class
     ]);

    

    }
}
