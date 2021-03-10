<?php

namespace Database\Seeders;

use App\Models\Room;
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
        User::factory()->createMany([[
            'name' => 'Sergei Svirin',
            'email' => 'sergei@svirin',
            'email_verified_at' => null,
        ], [
            'name' => 'Vladislav Sheshin',
            'email' => 'vladislav@sheshin',
            'email_verified_at' => null,
        ]]);

        Room::factory()->create([

        ]);
    }
}
