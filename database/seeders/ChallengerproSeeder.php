<?php

namespace Database\Seeders;

use App\Models\Challengerpro;
use Illuminate\Database\Seeder;

class ChallengerproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Challengerpro::factory()
            ->count(5)
            ->create();
    }
}
