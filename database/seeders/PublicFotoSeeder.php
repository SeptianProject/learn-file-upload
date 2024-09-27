<?php

namespace Database\Seeders;

use App\Models\PublicFoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PublicFoto::factory(10)->create();
    }
}
