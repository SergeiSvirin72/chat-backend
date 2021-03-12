<?php

namespace Database\Seeders;

use App\Models\Message;
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

        User::factory()->count(50)->create();

        $room = Room::factory()->create();
        $room->users()->attach([1, 2]);
        $messages = Message::factory()->count(10)->create([
            'user_id' => rand(1, 2),
            'room_id' => $room->id,
        ]);
        $room = Room::factory()->create();
        $room->users()->attach([1, 4]);
        $room = Room::factory()->create();
        $room->users()->attach([1, 6]);
        $messages = Message::factory()->count(3)->create([
            'user_id' => rand(1, 6),
            'room_id' => $room->id,
        ]);
        $room = Room::factory()->create();
        $room->users()->attach([1, 8]);
        $messages = Message::factory()->count(20)->create([
            'user_id' => rand(1, 8),
            'room_id' => $room->id,
        ]);
    }
}
