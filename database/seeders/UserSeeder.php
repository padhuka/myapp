<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->count(10)->create();
        // $users = collect([
            
        //     [
        //             'name' => 'Irsyad Pa',
        //             'email' => 'belumadaemail@gmail.com',
        //             'password' => bcrypt('password'),
        //             'email_verified_at' => now(),
        //             'created_at' => now(),
        //             'updated_at' => now()
        //     ],
        //     [
    
        //         'name' => 'Padhuka',
        //         'email' => 'belumadaemaidfdl@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        
        //     ])->each(function ($user) {
        //      //   User::create($user);
        //         DB::table('users')->insert($user);
        //     });
    }
}
