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
        $this->call(BasisPengetahuanTableSeeder::class);
        $this->call(CreditTableSeeder::class);
        $this->call(DiagnosaTableSeeder::class);
        $this->call(GejalaTableSeeder::class);
        $this->call(PengetahuanTableSeeder::class);
        $this->call(PenyakitTableSeeder::class);
        $this->call(PesanTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
