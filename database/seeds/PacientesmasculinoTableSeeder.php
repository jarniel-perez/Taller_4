<?php

use Illuminate\Database\Seeder;

class PacientesmasculinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pacientesmasculino::class, 5)->create();

    }
}
