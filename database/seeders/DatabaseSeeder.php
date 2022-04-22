<?php

namespace Database\Seeders;

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArmamentoSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(ComandoDeZonaSeeder::class);
        $this->call(DestacamentoSeeder::class);
        $this->call(AccesoriosSeeder::class);
        $this->call(MunicionSeeder::class);
        $this->call(ExplosivosSeeder::class);
        $this->call(OrdenPublicoSeeder::class);
        $this->call(OptronicosSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(GradoMilitarSeeder::class);
        $this->call(ParametrosSeeder::class);
        $this->call(AsuntoSeeder::class);
        $this->call(CompaniaSeeder::class);
    }
}
