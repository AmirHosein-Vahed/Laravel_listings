<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listings;
use App\Models\User;
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
        // User::factory(5)->create();

        $user1 = User::factory()->create([
            'name' => 'Amir Vahed',
            'email' => 'amir@gmail.com'
        ]);
        $user2 = User::factory()->create([
            'name' => 'Ahmad Banaie',
            'email' => 'ahmad@gmail.com'
        ]);
        $user3 = User::factory()->create([
            'name' => 'Sadegh Tabatabaie',
            'email' => 'sadegh@gmail.com'
        ]);

        Listings::factory(5)->create([
            'user_id' => $user1->id
        ]);
        Listings::factory(5)->create([
            'user_id' => $user2->id
        ]);
        Listings::factory(5)->create([
            'user_id' => $user3->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
