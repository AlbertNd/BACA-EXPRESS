<?php

namespace Database\Seeders;

use App\Models\ville;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class villeSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ville::factory(1)->create();
    }
}
