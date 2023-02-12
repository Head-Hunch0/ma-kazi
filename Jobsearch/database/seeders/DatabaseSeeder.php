<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\listings;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        //create user with controlled fields
        $user = User::factory()->create([
            'name' => 'John Demethew',
            'email'=>'JohnD@user.com'
        ]);

        //pass user as owner of listings
        listings::factory(6)->create([
            'user_id'=>$user->id
        ]);

    }
}
