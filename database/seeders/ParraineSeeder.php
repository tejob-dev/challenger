<?php

namespace Database\Seeders;

use App\Models\Parraine;
use Illuminate\Database\Seeder;

class ParraineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parraine::factory()
            ->count(5)
            ->create();
    }
}
