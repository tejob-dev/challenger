<?php

namespace Database\Seeders;

use App\Models\Acquereur;
use Illuminate\Database\Seeder;

class AcquereurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acquereur::factory()
            ->count(5)
            ->create();
    }
}
