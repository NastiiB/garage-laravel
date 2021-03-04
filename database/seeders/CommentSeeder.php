<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory()
            ->count(3)
            ->for(User::all()->random())
            ->for(Announcement::all()->random())
            ->create();
    }
}
