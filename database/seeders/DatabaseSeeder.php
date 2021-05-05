<?php

namespace Database\Seeders;

use App\Models\HistorikPorosi;
use App\Models\Magazine;
use App\Models\Marres;
use App\Models\Pagesa;
use App\Models\Perdorues;
use App\Models\Porosi;
use App\Models\Qytet;
use App\Models\Roli;
use App\Models\Shtet;
use App\Models\Status;
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
        // \App\Models\User::factory(10)->create();
        HistorikPorosi::factory(10)->create();
        Magazine::factory(10)->create();
        Marres::factory(10)->create();
        Pagesa::factory(10)->create();
        Perdorues::factory(10)->create();
        Porosi::factory(10)->create();
        Qytet::factory(10)->create();
        Roli::factory(10)->create();
        Shtet::factory(10)->create();
        Status::factory(10)->create();
    }
}
