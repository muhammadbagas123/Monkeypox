<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PenyakitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('penyakit')->delete();
        
        DB::table('penyakit')->insert(array (
            0 => 
            array (
                'id' => 'P001',
                'nama' => 'Monkeypox',
                'slug' => 'monkeypox',
            'deskripsi' => '<p>Monkeypox adalah virus zoonosis (virus yang ditularkan ke manusia dari hewan) dengan gejala yang mirip dengan yang terlihat di masa lalu pada pasien cacar, meskipun secara klinis tidak terlalu parah. Dengan pemberantasan cacar pada tahun 1980 dan penghentian selanjutnya dari vaksinasi cacar, monkeypox telah muncul sebagai orthopoxvirus yang paling penting bagi kesehatan masyarakat. Cacar monyet terutama terjadi di Afrika tengah dan barat, seringkali di dekat hutan hujan tropis, dan semakin sering muncul di daerah perkotaan. Hewan inang termasuk berbagai hewan pengerat dan primata non-manusia.</p>',
                'solusi' => '<p><strong>Menurut Dr. Fiska ROsita Sp,DV.</strong></p>

<ul>
<li>Meningkatkan imunitas tubuh, karena ini disebabkan oleh virus.</li>
<li>Untuk terapi hanya sesuai gejala, virus ini dapat sembuh dan membaik dalam kurang lebih 3-4 minggu.</li>
</ul>

<p>&nbsp;</p>

<p><strong>Menurut Dr.</strong></p>',
                'gambar' => '1663111345_cacar_monyet.jpg',
                'created_at' => '2022-09-12 07:33:26',
                'updated_at' => '2022-10-19 18:38:51',
            ),
        ));
        
        
    }
}