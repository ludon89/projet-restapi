<?php

namespace Database\Seeders;

use App\Models\HearingAid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HearingAidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HearingAid::factory()->count(10)->create();
    }
}
