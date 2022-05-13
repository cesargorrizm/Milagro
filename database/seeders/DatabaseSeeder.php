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
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(CapacidadSeeder::class);
        $this->call(SectorSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(SliderPrincipalSeeder::class);
    }
}
