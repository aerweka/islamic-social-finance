<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_aspect;

class aspect extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //evironment
        M_aspect::create([
            'kode' => '1',
            'aspek' => 'Konsumsi Energi dan Air',
            'definisi' => 'Mencakup usaha lembaga dalam menghemat dan mengefisiensikan penggunaan energi dan air',
            'bobot_aspek' => '0.33',
            'id_dimensi' => '1',
        ]);
        M_aspect::create([
            'kode' => '2',
            'aspek' => 'Reduksi Emisi Karbon Kendaraan Bermotor',
            'definisi' => 'Mencakup tindakan Lembaga dalam mereduksi emisi karbon kendaraan bermotor',
            'bobot_aspek' => '0.22',
            'id_dimensi' => '1',
        ]);
        M_aspect::create([
            'kode' => '3',
            'aspek' => 'Pemrosesan dan Reduksi Sampah',
            'definisi' => 'Mencakup kesadaran dan kepedulian Lembaga dalam mereduksi sampah',
            'bobot_aspek' => '0.55',
            'id_dimensi' => '1',
        ]);

        //sosial
        M_aspect::create([
            'kode' => '1',
            'aspek' => 'Kesejahteraan',
            'definisi' => 'Lembaga memiliki fokus dalam meningkatkan kesejahteraan penerima manfaaat dan amil ',
            'bobot_aspek' => '0.33',
            'id_dimensi' => '2',
        ]);
        M_aspect::create([
            'kode' => '2',
            'aspek' => 'Pendidikan dan Dakwah',
            'definisi' => 'Lembaga memiliki fokus dalam meningkatkan pendidikan penerima manfaaat dan amil',
            'bobot_aspek' => '0.33',
            'id_dimensi' => '2',
        ]);
        M_aspect::create([
            'kode' => '3',
            'aspek' => 'Kesehatan',
            'definisi' => 'Lembaga memiliki fokus dalam kesehatan penerima manfaaat',
            'bobot_aspek' => '0.33',
            'id_dimensi' => '2',
        ]);

        //governance
        M_aspect::create([
            'kode' => '1',
            'aspek' => 'Kebijakan Manajemen',
            'definisi' => 'Mencakup kebijakan manajerial yang mengarah pada indepensi dan pertumbuhan organisasi lembaga zakat',
            'bobot_aspek' => '0.17',
            'id_dimensi' => '3',
        ]);
        M_aspect::create([
            'kode' => '2',
            'aspek' => 'Kepatuhan',
            'definisi' => 'Mencakup kepatuhan pada regulasi internal lembaga, aturan syariah, dan hukum positif yang berlaku dalam menjalakan aktivitas pengelolaan zakat, serta tindakan korektif atas perilaku menyimpang',
            'bobot_aspek' => '0.17',
            'id_dimensi' => '3',
        ]);
        M_aspect::create([
            'kode' => '3',
            'aspek' => 'Budaya / Culture',
            'definisi' => 'Mencakup upaya dalam menumbuhkan budaya kerja dalam Lembaga Zakat',
            'bobot_aspek' => '0.17',
            'id_dimensi' => '3',
        ]);
        M_aspect::create([
            'kode' => '4',
            'aspek' => 'Kebijakan dalam Penghimpunan dan Pendistribusian',
            'definisi' => 'Mencakup berbagai kebijakan dan strategi yang diperlukan dalam melaksanakan kegiatan penghimpunan dan pendistribusian zakat',
            'bobot_aspek' => '0.17',
            'id_dimensi' => '3',
        ]);
        M_aspect::create([
            'kode' => '5',
            'aspek' => 'Mitigasi Risiko',
            'definisi' => 'Mencakup berbagai upaya/strategi dalam manajemen mitigasi risiko pengelolaan zakat',
            'bobot_aspek' => '0.17',
            'id_dimensi' => '3',
        ]);
        M_aspect::create([
            'kode' => '6',
            'aspek' => 'Keterbukaan Informasi',
            'definisi' => 'Mencakup keterbukaan informasi Lembaga zakat dalam melakukan pelaporan',
            'bobot_aspek' => '0.17',
            'id_dimensi' => '3',
        ]);
    }
}
