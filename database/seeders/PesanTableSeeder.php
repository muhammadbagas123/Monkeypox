<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PesanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('pesan')->delete();
        
        DB::table('pesan')->insert(array (
            0 => 
            array (
                'id' => 3,
                'nama' => 'Cangak Fc',
                'email' => 'cangak@gmail.com',
                'subjek' => 'PERIHAL WEBSITE',
                'pesan' => 'Apakah website ini berjalan sebagaimana mestinya?',
                'created_at' => '2022-10-14 18:12:37',
                'updated_at' => '2022-10-14 18:12:37',
            ),
        ));
        
        
    }
}