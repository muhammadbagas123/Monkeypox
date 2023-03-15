<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'admin1',
                'username' => 'admin1',
                'email' => 'muhammad.bagas@student.umn.ac.id',
                'password' => '$2y$10$WQxaDS3mv.GWOxMLk171Wej.rh4TMbA.C0XsyaliTAdhEKNH47le2',
                'remember_token' => 'mhwhtNDHWVnUgbIZF7siPc5hMntt2HHCbBHye8eZbEYdsu8ycv1preEB1pmd',
                'created_at' => '2022-09-14 04:06:49',
                'updated_at' => '2022-11-28 17:38:49',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'admin2',
                'username' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => '$2y$10$P588umLPSpxjkCP0qztGNuaCEI.uRlldjoAfsmFdXRepddACkXzrq',
                'remember_token' => NULL,
                'created_at' => '2022-09-17 21:14:08',
                'updated_at' => '2022-09-17 21:14:08',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'dr. Hayra Avianggi, Sp.DV',
                'username' => 'Dokter',
                'email' => 'hayra.medsos@gmail.com',
                'password' => '$2y$10$I/w85BtDr13a78uGCkWNoeX1mkGDLjjFCs4XeRr3GfCpYYgLlAZ.C',
                'remember_token' => NULL,
                'created_at' => '2022-11-09 18:40:46',
                'updated_at' => '2022-11-10 20:30:23',
            ),
        ));
        
        
    }
}