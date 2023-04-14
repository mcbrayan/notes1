<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       $this->call(NoteSeeder::class);
       $this->call(FileSeeder::class);
    }
}
