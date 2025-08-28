<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(1)->create();
        foreach ($tags as $tag) {
            $tag->jobs()->attach(\App\Models\JobListing::factory(10)->create());
        }
    }
}
