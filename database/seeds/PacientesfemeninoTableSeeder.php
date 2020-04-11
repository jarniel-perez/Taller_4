<?php

use Illuminate\Database\Seeder;

class PacientesfemeninoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\Pacientesfemenino::class, 5)->create();
    }
}
