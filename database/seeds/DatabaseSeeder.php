<?php

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
        // $this->call(UserSeeder::class);

        App\User::create([
            'name' => 'Administrador',
            'email' => 'official.dduran@gmail.com',
            'password' => Hash::make('abc123')
        ]);

        App\NegocioDigital::create([
            'titulo' => 'Negocio 1',
            'descripcion' => 'Lorem ipsum dolor sit amet 1',
            'imagen' => '1.png',
            'orden' => 1
        ]);

        App\NegocioDigital::create([
            'titulo' => 'Negocio 2',
            'descripcion' => 'Lorem ipsum dolor sit amet 2',
            'imagen' => '2.png',
            'orden' => 2
        ]);

        App\NegocioDigital::create([
            'titulo' => 'Negocio 3',
            'descripcion' => 'Lorem ipsum dolor sit amet 3',
            'imagen' => '3.png',
            'orden' => 3
        ]);
    }
}
