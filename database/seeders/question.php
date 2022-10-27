<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_question;

class question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aspek 1
        M_question::create([
            'id_aspek' => '1',
            'kode_indikator' => '1',
            'soal' => 'Intitusional Lembaga - Lembaga melakukan aksi penghematan dan efisiensi energi listrik (Contoh: Wajib mematikan fasilitas listrik sebelum meninggalkan kantor)',
            'pilihan_1' => 'Lembaga tidak memiliki aturan terkait konsumsi energi listrik',
            'pilihan_2' => 'Lembaga memiliki aturan terkait konsumsi energi listrik, namun belum disosialisasikan',
            'pilihan_3' => 'Lembaga memiliki aturan terkait konsumsi energi listrik, telah disosialisasikan, namun belum ada tindakan evaluasi (reward  and punishment)',
            'pilihan_4' => 'Lembaga memiliki aturan terkait konsumsi energi listrik, telah disosialisasikan, serta terdapat reward and punishment yang jelas',
            'pilihan_5' => 'Penghematan dan efisiensi energi listrik telah menjadi budaya lembaga (Contoh Budaya: Seluruh Amil telah melaksanakan tindakan penghematan dan efisiensi energi listrik tanpa paksaan dan dilakukan secara terus-menerus)',
            'bobot_pertanyaan' => '0.146473628633357'
        ]);
        M_question::create([
            'id_aspek' => '1',
            'kode_indikator' => '2',
            'soal' => 'Intitusional Lembaga - Lembaga melakukan aksi penghematan dan efisiensi air bersih',
            'pilihan_1' => 'Lembaga tidak memiliki aturan terkait konsumsi air bersih',
            'pilihan_2' => 'Lembaga memiliki aturan terkait konsumsi air bersih, namun belum disosialisasikan',
            'pilihan_3' => 'Lembaga memiliki aturan terkait konsumsi air bersih, telah disosialisasikan, namun belum ada tindakan evaluasi (reward and punishment)',
            'pilihan_4' => 'Lembaga memiliki aturan terkait konsumsi air bersih, telah disosialisasikan, serta terdapat reward and punishment yang jelas',
            'pilihan_5' => 'Penghematan dan efisiensi air bersih telah menjadi budaya lembaga (Contoh Budaya: Seluruh Amil telah melaksanakan tindakan penghematan dan efisiensi air bersih tanpa paksaan dan dilakukan secara terus-menerus)',
            'bobot_pertanyaan' => '0.121008169843828'
        ]);
        M_question::create([
            'id_aspek' => '1',
            'kode_indikator' => '3',
            'soal' => 'Intitusional Lembaga - Lembaga memasukkan penggunaan sumber energi terbarukan dalam Rencana Kerja Lembaga (Contoh: Sumber energi terbarukan biofulle, biomassa, energi panas, dll)',
            'pilihan_1' => 'Lembaga merasa tidak perlu menggunakan sumber energi terbarukan',
            'pilihan_2' => 'Lembaga merasa perlu menggunakan sumber energi terbarukan namun belum memiliki rencana implementasi penggunaan sumber energi terbarukan',
            'pilihan_3' => 'Lembaga telah mencari tahu informasi seputar sumber energi terbarukan dan sadar pentingnya menggunakan sumber energi terbarukan',
            'pilihan_4' => 'Lembaga sepakat memasukkan rencana penggunaan sumber energi terbarukan dalam Rencana Kerja Lembaga dalam jangka waktu 3 tahun ke depan',
            'pilihan_5' => 'Saat ini Lembaga telah siap menggunakan sumber energi terbarukan',
            'bobot_pertanyaan' => '0.0644194964708498'
        ]);

        //aspek2
        M_question::create([
            'id_aspek' => '2',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga memiliki kendaraan bermotor yang sesuai dengan kebutuhan lembaga',
            'pilihan_1' => 'Lembaga memiliki kendaraan bermotor yang melebihi kebutuhan lembaga',
            'pilihan_2' => 'Lembaga memiliki kendaraan bermotor yang sesuai dengan kebutuhan Lembaga namun berbahan bakar solar',
            'pilihan_3' => 'Lembaga memiliki kendaraan bermotor berbahan bakar bensin dengan kuantitas yang sesuai dengan kebutuhan lembaga',
            'pilihan_4' => 'Lembaga memiliki kendaraan bermotor berbahan bakar bensin yang kuantitas dan kualitasnya sesuai dengan kebutuhan lembaga dan digunakan seefisien mungkin',
            'pilihan_5' => 'Lembaga memiliki kendaran bermotor listrik atau biofuel yang kualitas dan kuantitasnya sesuai dengan kebutuhan lembaga dan digunakan seefisien mungkin',
            'bobot_pertanyaan' => '0.120369032401489'
        ]);
        M_question::create([
            'id_aspek' => '2',
            'kode_indikator' => '2',
            'soal' => 'Institusional Lembaga - Lembaga melakukan aksi penghematan dan efisiensi BBM',
            'pilihan_1' => 'Lembaga tidak memiliki aturan terkait konsumsi BBM',
            'pilihan_2' => 'Lembaga memiliki aturan terkait konsumsi BBM namun belum disosialisasikan',
            'pilihan_3' => 'Lembaga memiliki aturan terkait konsumsi BBM, sudah disosialisasikan, namun belum ada tindakan evaluasi (reward and punishment)',
            'pilihan_4' => 'Lembaga memiliki aturan terkait konsumsi BBM, sudah disosialisasikan, serta terdapat reward and punishment yang jelas',
            'pilihan_5' => 'Penghematan dan efisiensi BBM sudah menjadi budaya lembaga (Contoh Budaya: Seluruh Amil melakukan penghematan dan efisiensi BBM tanpa paksaan dan dilakukan secara terus-menerus)',
            'bobot_pertanyaan' => '0.213038403823709'
        ]); 

        //aspek3
        M_question::create([
            'id_aspek' => '3',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga memiliki tempat sampah yang memadai',
            'pilihan_1' => 'Lembaga tidak memiliki tempat sampah di kantor',
            'pilihan_2' => 'Sedikit ruangan difasilitasi dengan tempat sampah',
            'pilihan_3' => 'Sebagian ruangan difasilitasi dengan tempat sampah',
            'pilihan_4' => 'Hampir seluruh ruangan difasilitasi dengan tempat sampah',
            'pilihan_5' => 'Seluruh ruang difasilitasi dengan tempat sampah',
            'bobot_pertanyaan' => '0.0803590285110876'
        ]);
        M_question::create([
            'id_aspek' => '3',
            'kode_indikator' => '2',
            'soal' => 'Institusional Lembaga - Lembaga memilah pembuangan sampah menjadi sampah organik atau non-organik',
            'pilihan_1' => 'Lembaga tidak memiliki aturan terkait pemilahan sampah organik - anorganik',
            'pilihan_2' => 'Lembaga memiliki aturan terkait pemilahan sampah organik - anorganik namun belum disosialisasikan',
            'pilihan_3' => 'Lembaga memiliki aturan terkait pemilahan sampah organik - anorganik, sudah disosialisasikan, namun belum ada tindakan evaluasi (reward and punishment)',
            'pilihan_4' => 'Lembaga memiliki aturan terkait pemilahan sampah organik - anorganik, sudah disosialisasikan, serta terdapat reward and punishment yang jelas',
            'pilihan_5' => 'Memilah sampah berdasarkan jenisnya sudah menjadi budaya lembaga (Contoh Budaya: Seluruh Amil memilah sampah organik - anorganik tanpa paksaan dan dilakukan secara terus-menerus)',
            'bobot_pertanyaan' => '0.0699216361918524'
        ]);
        M_question::create([
            'id_aspek' => '3',
            'kode_indikator' => '3',
            'soal' => 'Institusional Lembaga - Adanya kebijakan 5R (Refuse, Reduce, Reuse, Recycle, Replant) (Contoh: Gunakan kembali wadah atau kemasan yang telah kosong untuk fungsi yang sama atau fungsi lainnya.)',
            'pilihan_1' => 'Tidak ada kebijakan 5R di internal lembaga',
            'pilihan_2' => 'Lembaga memiliki kebijakan 5R, namun belum disosialisasikan',
            'pilihan_3' => 'Lembaga memiliki kebijakan 5R, sudah disosialisasikan, namun belum ada reward and punishment yang jelas',
            'pilihan_4' => 'Lembaga memiliki kebijakan 5R, sudah disosialisasikan, serta terdapat reward and punishment yang jelas',
            'pilihan_5' => 'Perilaku 5R sudah menjadi budaya Lembaga (Contoh Budaya: Seluruh Amil menerapkan 5R tanpa paksaan dan dilakukan secara terus-menerus)',
            'bobot_pertanyaan' => '0.0699216361918524'
        ]);
        M_question::create([
            'id_aspek' => '3',
            'kode_indikator' => '4',
            'soal' => 'Institusional Lembaga - Adanya penanggung jawab penerapan 5R',
            'pilihan_1' => 'Lembaga tidak memiliki penanggung jawab penerapan 5R',
            'pilihan_2' => 'Lembaga memiliki penanggung jawab 5R, namun tidak memiliki kompetensi yang sesuai dengan bidangnya',
            'pilihan_3' => 'Lembaga memiliki penanggung jawab 5R yang kompeten, namun tidak melakukan tugasnya dengan baik',
            'pilihan_4' => 'Lembaga memiliki penanggung jawab penerapan 5R dan melakukan tugasnya sesuai dengan SOP yang berlaku',
            'pilihan_5' => 'Lembaga memiliki penanggung jawab penerapan 5R dan melakukan tugasnya sesuai dengan SOP yang berlaku dan memiliki kinerja di luar ekspektasi (melebihi target yang telah ditentukan Lembaga)',
            'bobot_pertanyaan' => '0.059600955927305'
        ]);
        M_question::create([
            'id_aspek' => '3',
            'kode_indikator' => '5',
            'soal' => 'Program Lembaga - Adanya sosialisasi pentingnya menjaga kebersihan lingkungan dan pemrosesan sampah kepada muzakki dan mustahik',
            'pilihan_1' => 'Lembaga tidak memiliki kesadaran untuk melakukan sosialisasi pentingnya menjaga kebersihan lingkungan dan pemrosesan sampah kepada muzakki dan mustahik',
            'pilihan_2' => 'Lembaga memiliki kesadaran melakukan sosialisasi pentingnya menjaga kebersihan lingkungan dan pemrosesan sampah kepada muzakki dan mustahik namun tidak tercantum dalam Rencana Kerja Lembaga',
            'pilihan_3' => 'Lembaga memiliki kesadaran melakukan sosialisasi pentingnya menjaga kebersihan lingkungan dan pemrosesan sampah kepada muzakki dan mustahik, tercantum dalam Rencana Kerja Lembaga, namun tidak dapat direalisasikan dalam 1 tahun',
            'pilihan_4' => 'Lembaga bekerjasama dengan mitra melakukan 1 program sosialisasi keberlanjutan lingkungan dalam 1 tahun (Contoh: Lembaga bersama dengan Dinas Lingkungan Hidup melakukan sosialisasi "Pemilahan Sampah dan Pentingnya Menjaga Lingkungan")',
            'pilihan_5' => 'Lembaga secara mandiri melakukan sosialisasi keberlanjutan lingkungan kepada para stakeholder (muzakki, mustahik) minimal 1 kali dalam 1 tahun (Contoh: Lembaga melakukan sosialisasi "Pemilahan Sampah" kepada para mustahik)',
            'bobot_pertanyaan' => '0.0548880120046685'
        ]);

        //aspek4
        M_question::create([
            'id_aspek' => '4',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga memberikan upah pada amil yang layak sesuai dengan standar syariat (12,,5%) dan ketentuan pemerintah (UMR)',
            'pilihan_1' => 'Lembaga belum mampu memberikan kecukupan upah sesuai UMR setempat',
            'pilihan_3' => 'Lembaga mampu memberikan kecukupan upah sesuai UMR setempat',
            'pilihan_5' => 'Lembaga mampu memberikan upah melebihi UMR setempat, namun tidak melebihi upah Direktur BAZNAS (Mengacu Perpres No. 104 Tahun 2020)',
            'bobot_pertanyaan' => '0.0657088867893069'
        ]);
        M_question::create([
            'id_aspek' => '4',
            'kode_indikator' => '2',
            'soal' => 'Program Lembaga - Lembaga menjalankan program pengentasan kemiskinan',
            'pilihan_1' => 'Lembaga memiliki program pengentasan kemiskinan bersifat bantuan konsumtif',
            'pilihan_2' => 'Lembaga memiliki program pengentasan kemiskinan yang bersifat produktif dan berkelanjutan namun belum memenuhi kebutuhan pokok penerima manfaat',
            'pilihan_3' => 'Lembaga memiliki program terkait pengentasan kemiskinan yang bersifat produktif, berkelanjutan dan mampu memenuhi kebutuhan pokok penerima manfaat',
            'pilihan_4' => 'Lembaga memiliki program terkait pengentasan kemiskinan yang bersifat produktif dan berkelanjutan dan mampu mengentaskan kemiskinan dengan indikator sebagian besar mustahik telah hidup layak (melampaui kebutuhan pokok namun belum mampu menjadi muzakki)',
            'pilihan_5' => 'Lembaga memiliki program terkait pengentasan kemiskinan yang bersifat produktif dan berkelanjutan dan mampu mengentaskan kemiskinan dengan indikator sebagian besar mustahik telah mampu menjadi muzakki',
            'bobot_pertanyaan' => '0.0811093202912243'
        ]);
        M_question::create([
            'id_aspek' => '4',
            'kode_indikator' => '3',
            'soal' => 'Program Lembaga - Lembaga menjalankan program peningkatan kapasitas penerima manfaat (hardskill/softskill) untuk meningkatkan kesempatan bekerja',
            'pilihan_1' => 'Lembaga tidak memiliki program peningkatan kapasitas penerima manfaat',
            'pilihan_2' => 'Lembaga memiliki program peningkatan kapasitas penerima manfaat namun tidak dilakukan secara berkelanjutan',
            'pilihan_3' => 'Lembaga memiliki program peningkatan kapasitas penerima manfaat yang dilakukan secara berkelanjutan namun belum mampu menghasilkan peningkatan skill penerima manfaat (contoh softskill: Menjalankan microsoft (Word, excel, powerpoint), membuat laporan keuangan dsb)',
            'pilihan_4' => 'Lembaga memiliki banyak program terkait peningkatan kapasitas  yang dilakukan secara berkelanjutan  dan mampu membuat penerima manfaat mendapatkan skill baru',
            'pilihan_5' => 'Lembaga memiliki banyak program terkait peningkatan kapasitas yang dilakukan secara berkelanjutan sehingga penerima manfaat mendapatkan skill baru dan mampu mendapatkan kerja setelah menerima program atau menjalankan usaha',
            'bobot_pertanyaan' => '0.0698160395709442'
        ]);
        M_question::create([
            'id_aspek' => '4',
            'kode_indikator' => '4',
            'soal' => 'Program Lembaga - Lembaga menyediakan akses permodalan sehingga penerima manfaat terbebas dari hutang ribawi',
            'pilihan_1' => 'Lembaga memiliki program penyediaan akses permodalan yang mampu membebaskan penerima manfaat dari hutang ribawi sebesar <3% dari total anggaran program LAZ',
            'pilihan_2' => 'Lembaga memiliki program penyediaan akses permodalan yang mampu membebaskan penerima manfaat dari hutang ribawi sebesar 3-5% dari total anggaran program LAZ',
            'pilihan_3' => 'Lembaga memiliki program penyediaan akses permodalan yang mampu membebaskan penerima manfaat dari hutang ribawi sebesar 5-8% dari total anggaran program LAZ',
            'pilihan_4' => 'Lembaga memiliki program penyediaan akses permodalan yang mampu membebaskan penerima manfaat dari hutang ribawi sebesar 8-10% dari total anggaran program LAZ',
            'pilihan_5' => 'Lembaga memiliki program penyediaan akses permodalan yang mampu membebaskan penerima manfaat dari hutang ribawi sebesar ≥10% dari total anggaran program LAZ',
            'bobot_pertanyaan' => '0.0612682709942755'
        ]);
        M_question::create([
            'id_aspek' => '4',
            'kode_indikator' => '5',
            'soal' => 'Program Lembaga - Lembaga membangun kerjasama pada mitra mengenai program-program yang memiliki komitmen dalam peningkatan kesejahteraan penerima manfaat',
            'pilihan_1' => 'Lembaga tidak membangun kerjasama kemitraan',
            'pilihan_2' => 'Lembaga membangun kerjasama  dengan 1 kelompok mitra dalam setahun (Contoh: Lembaga hanya bekerjasama dengan Akademisi tanpa melibatkan Asosiasi dan Regulator)',
            'pilihan_3' => 'Lembaga membangun kerjasama  dengan 2 kelompok mitra dalam setahun (Contoh: Lembaga bekerjasama dengan Akademisi dan Asosiasi tanpa melibatkan Regulator)',
            'pilihan_4' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan 3 kelompok mitra (contoh: Akademisi, Asosiasi, dan Regulator)',
            'pilihan_5' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan lebih dari 3 kelompok mitra (Akademisi, Asosiasi, Regulator, Media, NGO, Perusahaan Swasta, dll)',
            'bobot_pertanyaan' => '0.0539987773022842'
        ]);

        //aspek5
        M_question::create([
            'id_aspek' => '5',
            'kode_indikator' => '1',
            'soal' => 'Program Lembaga - Lembaga menjalankan program bantuan akses pendidikan (Contoh: beasiswa)',
            'pilihan_1' => 'Lembaga memiliki program bantuan akses pendidikan sebesar <5% dari total anggaran program LAZ',
            'pilihan_2' => 'Lembaga memiliki program bantuan akses pendidikan  5-10% dari total anggaran program LAZ',
            'pilihan_3' => 'Lembaga memiliki program bantuan akses pendidikan  sebesar 10-15% dari total anggaran program LAZ',
            'pilihan_4' => 'Lembaga memiliki programbantuan akses pendidikan sebesar 15-20% dari total anggaran program LAZ',
            'pilihan_5' => 'Lembaga memiliki program bantuan akses pendidikan sebesar ≥20% dari total anggaran program LAZ',
            'bobot_pertanyaan' => '0.0776579781025954'
        ]);
        M_question::create([
            'id_aspek' => '5',
            'kode_indikator' => '2',
            'soal' => 'Program Lembaga - Lembaga memiliki upaya menjalankan riset pengembangan lembaga dan ZISWAF',
            'pilihan_1' => 'Lembaga tidak memiliki program riset pengembangan',
            'pilihan_2' => 'Lembaga memiliki program riset pengembangan 1 kali setahun',
            'pilihan_3' => 'Lembaga memiliki program riset pengembangan 2 kali dalam setahun',
            'pilihan_4' => 'Lembaga memiliki program riset pengembangan 3 kali dalam setahun',
            'pilihan_5' => 'Lembaga memiliki program riset pengembangan >3 kali dalam setahun',
            'bobot_pertanyaan' => '0.053559717667982'
        ]);
        M_question::create([
            'id_aspek' => '5',
            'kode_indikator' => '3',
            'soal' => 'Program Lembaga - Lembaga meningkatkan literasi ZISWAF kepada para mitra (donatur, penerima manfaat, akademisi, pemerintah)',
            'pilihan_1' => 'Lembaga tidak memberikan edukasi kepada para mitra mengenai ZISWAF',
            'pilihan_2' => 'Lembaga memiliki program edukasi kepada 1 kelompok mitra mengenai ZISWAF',
            'pilihan_3' => 'Lembaga memiliki  program edukasi kepada 2 kelompok mitra mengenai ZISWAF',
            'pilihan_4' => 'Lembaga memiliki program edukasi kepada 3 kelompok mitra mengenai ZISWAF dan melakukan evaluasi capaian mitra',
            'pilihan_5' => 'Lembaga memiliki program edukasi kepada lebih dari 3 kelompok mitra mengenai ZISWAF, melakukan evaluasi capaian program peningkatan literasi mitra, dan memiliki hasil evaluasi yang baik (adanya peningkatan literasi ZISWAF pada mitra)',
            'bobot_pertanyaan' => '0.0676540877007725'
        ]);
        M_question::create([
            'id_aspek' => '5',
            'kode_indikator' => '4',
            'soal' => 'Program Lembaga - Lembaga meningkatkan pengetahuan agama penerima manfaat',
            'pilihan_1' => 'Lembaga memiliki program sosialisasi dan dakwah untuk meningkatkan spiritualitas penerima diberikan setidaknya 1 kali dalam setahun',
            'pilihan_2' => 'Lembaga memiliki program sosialisasi dan dakwah untuk meningkatkan spiritualitas <10% penerima manfaat dan adanya inovasi program',
            'pilihan_3' => 'Lembaga memiliki program sosialisasi dan dakwah untuk meningkatkan spiritualitas 10-25% penerima manfaat dan adanya inovasi program',
            'pilihan_4' => 'Lembaga memiliki program sosialisasi dan dakwah untuk meningkatkan spiritualitas 25-50% penerima dan mampu membuat penerima manfaat mengaplikasikan apa yang didapatkan',
            'pilihan_5' => 'Lembaga memiliki program sosialisasi dan dakwah untuk meningkatkan spiritualitas >50% penerima manfaat dan mampu membuat penerima manfaat mengaplikasikan dan mendakwahkan apa yang didapatkan',
            'bobot_pertanyaan' => '0.0699660979269716'
        ]);
        M_question::create([
            'id_aspek' => '5',
            'kode_indikator' => '5',
            'soal' => 'Program Lembaga - Lembaga membangun kerjasama pada mitra mengenai program-program yang memiliki komitmen dalam peningkatan kualitas pendidikan dan syiar Islam pada penerima manfaat',
            'pilihan_1' => 'Lembaga tidak membangun kerjasama kemitraan',
            'pilihan_2' => 'Lembaga membangun kerjasama  dengan 1 kelompok mitra dalam setahun (Contoh: Lembaga hanya bekerjasama dengan Akademisi tanpa melibatkan Asosiasi dan Regulator)',
            'pilihan_3' => 'Lembaga membangun kerjasama  dengan 2 kelompok mitra dalam setahun (Contoh: Lembaga bekerjasama dengan Akademisi dan Asosiasi tanpa melibatkan Regulator)',
            'pilihan_4' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan 3 kelompok mitra (contoh: Akademisi, Asosiasi, dan Regulator)',
            'pilihan_5' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan lebih dari 3 kelompok mitra (Akademisi, Asosiasi, Regulator, Media, NGO, Perusahaan Swasta, dll)',
            'bobot_pertanyaan' => '0.0645639971099872'
        ]);

        //aspek6
        M_question::create([
            'id_aspek' => '6',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga membantu amil dalam memperoleh jaminan kesehatan',
            'pilihan_1' => 'Lembaga tidak membantu amil dalam memperoleh jaminan kesehatan',
            'pilihan_3' => 'Lembaga membantu amil untuk memperoleh jaminan kesehatan',
            'pilihan_5' => 'Lembaga membantu amil dan keluarga amil dalam satu KK untuk memperoleh jaminan kesehatan',
            'bobot_pertanyaan' => '0.066270216195187'
        ]);
        M_question::create([
            'id_aspek' => '6',
            'kode_indikator' => '2',
            'soal' => 'Program Lembaga - Lembaga menjalankan program layanan kesehatan',
            'pilihan_1' => 'Lembaga memiliki program layanan kesehatan sebesar <5% dari total anggaran program LAZ',
            'pilihan_2' => 'Lembaga memiliki program layanan kesehatan 5-10% dari total anggaran program LAZ',
            'pilihan_3' => 'Lembaga memiliki program layanan kesehatan 10-15% dari total anggaran program LAZ',
            'pilihan_4' => 'Lembaga memiliki program layanan kesehatan sebesar 15-20% dari total anggaran program LAZ',
            'pilihan_5' => 'Lembaga memiliki program layanan kesehatan sebesar ≥20% dari total anggaran program LAZ',
            'bobot_pertanyaan' => '0.0816539765464347'
        ]);
        M_question::create([
            'id_aspek' => '6',
            'kode_indikator' => '3',
            'soal' => 'Program Lembaga - Lembaga menjalankan program edukasi kesehatan penerima manfaat',
            'pilihan_1' => 'Lembaga tidak memiliki program edukasi kesehatan pada penerima manfaat',
            'pilihan_2' => 'Lembaga memiliki program edukasi kesehatan kepada penerima manfaat namun tidak berkelanjutan',
            'pilihan_3' => 'Lembaga memiliki program edukasi program edukasi kesehatan kepada penerima manfaat yang berkelanjutan',
            'pilihan_4' => 'Lembaga memiliki program edukasi kesehatan kepada penerima manfaat yang berkelanjutan dan melakukan evaluasi capaian penerima manfaat',
            'pilihan_5' => 'Lembaga memiliki program edukasi kesehatan kepada penerima manfaat yang  berkelanjutan, melakukan evaluasi capaian program edukasi kesehatan, dan memiliki hasil evaluasi yang baik (adanya peningkatan kesadaran mengenai kesehatan)',
            'bobot_pertanyaan' => '0.0703662535430445'
        ]);
        M_question::create([
            'id_aspek' => '6',
            'kode_indikator' => '4',
            'soal' => 'Program Lembaga - Lembaga membantu penerima manfaat dalam memperoleh jaminan kesehatan',
            'pilihan_1' => 'Lembaga tidak membantu penerima manfaat dalam memperoleh jaminan kesehatan',
            'pilihan_3' => 'Lembaga membantu 1%-5% penerima manfaat untuk memperoleh jaminan kesehatan ',
            'pilihan_5' => 'Lembaga membantu >5% penerima manfaat untuk memperoleh jaminan kesehatan',
            'bobot_pertanyaan' => '0.0618351581170455'
        ]);
        M_question::create([
            'id_aspek' => '6',
            'kode_indikator' => '5',
            'soal' => 'Program Lembaga - Lembaga membangun kerjasama pada mitra mengenai program-program yang memiliki komitmen dalam peningkatan kualitas kesehatan penerima manfaat',
            'pilihan_1' => 'Lembaga tidak membangun kerjasama kemitraan',
            'pilihan_2' => 'Lembaga membangun kerjasama  dengan 1 kelompok mitra dalam setahun (Contoh: Lembaga hanya bekerjasama dengan Akademisi tanpa melibatkan Asosiasi dan Regulator)',
            'pilihan_3' => 'Lembaga membangun kerjasama  dengan 2 kelompok mitra dalam setahun (Contoh: Lembaga bekerjasama dengan Akademisi dan Asosiasi tanpa melibatkan Regulator)',
            'pilihan_4' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan 3 kelompok mitra (contoh: Akademisi, Asosiasi, dan Regulator)',
            'pilihan_5' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan lebih dari 3 kelompok mitra (Akademisi, Asosiasi, Regulator, Media, NGO, Perusahaan Swasta, dll)',
            'bobot_pertanyaan' => '0.0545712221419441'
        ]);

        //aspek7

        M_question::create([
            'id_aspek' => '7',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga memiliki dokumen SOM (Standar Operasional Manajemen) dan SOP (Standar Operasional Prosedur) untuk mencapai visi pengelolaan zakat

            Contoh SOP: (1) SOP Pendistribusian Dana, (2) SOP Pemberdayaan
            
            Contoh SOM: SOM Alokasi Dana
            ',
            'pilihan_1' => 'Lembaga tidak memiliki dokumen SOM dan SOP',
            'pilihan_2' => 'Lembaga memiliki dokumen  SOM dan SOP, dan mencakup manajemen kelembagaan (pusat dan cabang), alokasi dana dan manajemen pemilihan penerima manfaat dalam setahun',
            'pilihan_3' => 'Lembaga memiliki  dokumen  SOM dan SOP, dan mencakup manajemen kelembagaan (pusat dan cabang), alokasi dana, pemilihan penerima manfaat, manajemen pemilihan mitra (pendamping), prinsip syariah dalam setahun',
            'pilihan_4' => 'Lembaga memiliki SOM dan SOP, dan mencakup manajemen kelembagaan (pusat dan cabang), alokasi dana, pemilihan penerima manfaat, manajemen pemilihan mitra (pendamping), prinsip syariah, dan manajemen akuntansi (pencatatan dan pelaporan)',
            'pilihan_5' => 'Lembaga memiliki SOM dan SOP, dan mencakup manajemen kelembagaan (pusat dan cabang), alokasi dana, pemilihan penerima manfaat, manajemen pemilihan mitra (pendamping), prinsip syariah, dan manajemen akuntansi (pencatatan dan pelaporan), pengawasan,  serta kepatuhan',
            'bobot_pertanyaan' => '0.0391188999543382'
        ]);   
        M_question::create([
            'id_aspek' => '7',
            'kode_indikator' => '2',
            'soal' => 'Institusional Lembaga - Lembaga memiliki dokumen/kebijakan yang mengatur hak dan kewajiban amil',
            'pilihan_1' => 'Lembaga tidak memiliki dokumen kebijakan yang mengatur hak dan kewajiban amil',
            'pilihan_3' => 'Lembaga memiliki dokumen kebijakan yang mengatur hak dan kewajiban amil, namun tidak terimplementasi dengan baik',
            'pilihan_5' => 'Lembaga memiliki dokumen kebijakan yang mengatur hak dan kewajiban amil dan telah terimplementasi dengan baik',
            'bobot_pertanyaan' => '0.0315384570923236'
        ]);   
        M_question::create([
            'id_aspek' => '7',
            'kode_indikator' => '3',
            'soal' => 'Institusional Lembaga - Lembaga memiliki instrumen organisasi yang mendukung jenjang karir amil',
            'pilihan_1' => 'Lembaga tidak memiliki instrumen organisasi yang mendukung jenjang karir amil',
            'pilihan_3' => 'Lembaga memiliki instrumen organisasi yang mendukung jenjang karir amil namun tidak terimplementasi dengan baik',
            'pilihan_5' => 'Lembaga membangun kerjasama mitra yang efektif dan efisien dengan lebih dari 3 kelompok mitra (Akademisi, Asosiasi, Regulator, Media, NGO, Perusahaan Swasta, dll)',
            'bobot_pertanyaan' => '0.0237094751200791'
        ]);   
        M_question::create([
            'id_aspek' => '7',
            'kode_indikator' => '4',
            'soal' => 'Institusional Lembaga - Lembaga memiliki instrumen penilaian profesionalitas dan kompetensi amil',
            'pilihan_1' => 'Lembaga tidak memiliki instrumen penilaian',
            'pilihan_2' => 'Lembaga memiliki instrumen penilaian namun tidak diimplementasikan',
            'pilihan_3' => 'Lembaga melakukan penilaian terhadap profesionalitas dan kompetensi amil, namun hanya saat pergantian tahun kerja',
            'pilihan_4' => 'Lembaga melakukan penilaian terhadap profesionalitas dan kompetensi amil, namun hanya saat pergantian tahun kerja, dan terdapat reward dan sanksi',
            'pilihan_5' => 'Lembaga melakukan penilaian terhadap profesionalitas dan kompetensi amil, namun hanya setiap semester, dan terdapat reward dan sanksi',
            'bobot_pertanyaan' => '0.0253885591089584'
        ]);   
        M_question::create([
            'id_aspek' => '7',
            'kode_indikator' => '5',
            'soal' => 'Institusional Lembaga - Lembaga melakukan efisiensi penggunaan dana',
            'pilihan_1' => 'Nilai rasio biaya penghimpunan (total biaya penghimpunan / total biaya operasional) lebih dari 20%',
            'pilihan_3' => 'Nilai rasio biaya penghimpunan (total biaya penghimpunan / total biaya operasional) antara 10% - 20%',
            'pilihan_5' => 'Nilai rasio biaya penghimpunan (total biaya penghimpunan / total biaya operasional) kurang dari 10%',
            'bobot_pertanyaan' => '0.0216286825693164'
        ]);   
        M_question::create([
            'id_aspek' => '7',
            'kode_indikator' => '6',
            'soal' => 'Institusional Lembaga - Lembaga melakukan efektivitas penggunaan dana',
            'pilihan_1' => 'Nilai Disbursement Collection Ratio < 20 %',
            'pilihan_2' => 'Nilai Disbursement Collection Ratio berkisar 20-49%',
            'pilihan_3' => 'Nilai Disbursement Collection Ratio berkisar 50-69%',
            'pilihan_4' => 'Nilai Disbursement Collection Ratio berkisar  70-89%',
            'pilihan_5' => 'Nilai Disbursement Collection Ratio >90%',
            'bobot_pertanyaan' => '0.0250793302159978'
        ]);

        //aspek8
        M_question::create([
            'id_aspek' => '8',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga memiliki dewan pengawas syariah',
            'pilihan_1' => 'Terdapat Dewan Pengawas Syariah, namun bersifat formalitas dan belum difungsikan',
            'pilihan_3' => 'Dewan Pengawas Syariah melakukan penilaian namun hanya jika diminta',
            'pilihan_5' => 'Dewan Pengawas melakukan pengawasan dan penilaian atas kinerja pengelolaan zakat sesuai dengan keahlian yang dibutuhkan',
            'bobot_pertanyaan' => '0.0456040367375485'
        ]);
        M_question::create([
            'id_aspek' => '8',
            'kode_indikator' => '2',
            'soal' => 'Institusional Lembaga - Lembaga memiliki integritas yang tinggi dalam mengelola zakat sesuai dengan hukum syariah dan hukum legal',
            'pilihan_1' => 'Lembaga tidak memiliki pengetahuan dan pemahaman terkait aturan syariah dan aturan legal',
            'pilihan_2' => 'Lembaga memiliki pengetahuan dan pemahaman terkait aturan syariah dan legal namun belum memiliki instrumen penilaiannya',
            'pilihan_3' => 'Lembaga memiliki instrumen penilaian kesesuaian program dengan syariah dan hukum, namun tidak melakukan penilaian',
            'pilihan_4' => 'Lembaga memiliki instrumen penilaian kesesuaian program dengan syariah dan hukum dan telah melakukan penilaian, namun tidak dilakukan secara rutin',
            'pilihan_5' => 'Lembaga memiliki instrumen penilaian kesesuaian program dengan syariah dan hukum dan telah melakukan penilaian, namun tidak dilakukan secara rutin',
            'bobot_pertanyaan' => '0.0456040367375485'
        ]);
        M_question::create([
            'id_aspek' => '8',
            'kode_indikator' => '3',
            'soal' => 'Institusional Lembaga - Lembaga mengimplementasikan kode etik pengelolaan zakat',
            'pilihan_1' => 'Lembaga tidak memahami kode etik pengelolaan zakat',
            'pilihan_3' => 'Lembaga memahami kode etik pengelolaan zakat namun tidak mengimplementasikan',
            'pilihan_5' => 'Lembaga mengimplementasikan kode etik pengelolaan zakat yang tertuang dalam Perbanaz nomor 1 tahun 2018 dan Zakat Core Principles',
            'bobot_pertanyaan' => '0.037188386865575'
        ]);
        M_question::create([
            'id_aspek' => '8',
            'kode_indikator' => '4',
            'soal' => 'Institusional Lembaga - Lembaga mengimplementasikan tindakan korektif untuk perilaku penyimpangan dalam pengelolaan zakat',
            'pilihan_1' => 'Lembaga tidak memiliki instrumen tindakan korektif',
            'pilihan_3' => 'Lembaga memiliki instrumen tindakan korektif, namun belum tersosialisasikan',
            'pilihan_5' => 'Lembaga memiliki dan mengimplementasikan instrumen tindakan korektif atas penyimpangan',
            'bobot_pertanyaan' => '0.0392894093439146'
        ]);

        //aspek9
        M_question::create([
            'id_aspek' => '9',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Staf di lembaga zakat memiliki etos kerja yang tinggi dan menyelesaikan pekerjaan dengan baik',
            'pilihan_1' => 'Amil tidak memiliki etos kerja yang baik',
            'pilihan_2' => 'Amil memiliki etos dan semangat kerja tinggi, namun hanya bisa menyelesaikan 70% target pekerjaan',
            'pilihan_3' => 'Amil memiliki etos dan semangat kerja tinggi, namun hanya bisa menyelesaikan 80% target pekerjaan',
            'pilihan_4' => 'Amil memiliki etos dan semangat kerja tinggi, namun hanya bisa menyelesaikan 90% target pekerjaan',
            'pilihan_5' => 'Amil memiliki etos dan semangat kerja tinggi dan bisa menyelesaikan target pekerjaan dengan efektif dan efisien',
            'bobot_pertanyaan' => '0.0388270109993006'
        ]);
        M_question::create([
            'id_aspek' => '9',
            'kode_indikator' => '2',
            'soal' => 'Institusional Lembaga - Lembaga menggunakan teknologi untuk menumbuhkan budaya kerja yang efektif',
            'pilihan_1' => 'Lembaga tidak memanfaatkan teknologi',
            'pilihan_2' => 'Lembaga menggunakan teknologi dalam hal penghimpunan saja',
            'pilihan_3' => 'Lembaga menggunakan teknologi dalam hal penghimpunan dan pengelolaan',
            'pilihan_4' => 'Lembaga menggunakan teknologi dalam hal penghimpunan, pengelolaan, dan pendistribusian',
            'pilihan_5' => 'Lembaga menggunakan teknologi dalam hal penghimpunan, pengelolaan, pendistribusian, dan pelaporan',
            'bobot_pertanyaan' => '0.0328187225089734'
        ]);
        M_question::create([
            'id_aspek' => '9',
            'kode_indikator' => '3',
            'soal' => 'Institusional Lembaga - Lembaga menyediakan fasilitas pelatihan bagi amil',
            'pilihan_1' => 'Lembaga tidak memiliki desain training assesment',
            'pilihan_2' => 'Lembaga telah menyusun desain training assesment namun belum dilakukan tindak lanjut (Masih berupa rencana saja)',
            'pilihan_3' => 'Lembaga menyediakan fasilitas pendanaan pelatihan bagi amil namun dengan topik pelatihan yang umum (tidak spesifik terkait dengan tugas amil di Lembaga)',
            'pilihan_4' => 'Lembaga menyediakan fasilitas pendanaan pelatihan bagi amil dengan topik pelatihan yang spesifik terkait dengan tugas amil di Lembaga',
            'pilihan_5' => 'Amil dapat mengimplementasikan materi pelatihan dalam pengelolaan zakat',
            'bobot_pertanyaan' => '0.0291802255347926'
        ]);
        M_question::create([
            'id_aspek' => '9',
            'kode_indikator' => '4',
            'soal' => 'Program - Lembaga memanfaatkan teknologi digital sebagai strategi inovatif dalam meningkatkan penghimpunan zakat',
            'pilihan_1' => 'Lembaga tidak memiliki kanal digital untuk membantu penghimpunan',
            'pilihan_2' => 'Lembaga  memanfaatkan website resmi, dan media sosial sebagai media penghimpunan zakat',
            'pilihan_3' => 'Lembaga  memanfaatkan website resmi, media sosial, layanan perbankan online sebagai media penghimpunan zakat',
            'pilihan_4' => 'Lembaga  memanfaatkan website resmi, media sosial, layanan perbankan online, dan e-commerce sebagai media penghimpunan zakat',
            'pilihan_5' => 'Lembaga  memanfaatkan website resmi, media sosial, layanan perbankan online, dan e-commerce sebagai media penghimpunan zakat dan menunjukkan adanya peningkatan pada jumlah zakat yang dihimpun',
            'bobot_pertanyaan' => '0.0328187225089734'
        ]);
        M_question::create([
            'id_aspek' => '9',
            'kode_indikator' => '5',
            'soal' => 'Program - Lembaga bekerja dengan inovatif dalam melakukan sosialisasi zakat',
            'pilihan_1' => 'Lembaga tidak melakukan sosialisasi zakat',
            'pilihan_2' => 'Lembaga memiliki rencana sosialisasi namun belum dijalankan',
            'pilihan_3' => 'Lembaga melakukan sosialisasi zakat namun hanya secara offline',
            'pilihan_4' => 'Lembaga melakukan sosialisasi zakat secara offline dan online',
            'pilihan_5' => 'Lembaga melakukan sosialisasi zakat dengan memperhatikan karakteristik demografi masyarakat, secara offline dan online',
            'bobot_pertanyaan' => '0.0328187225089734'
        ]);

        //aspek10
        M_question::create([
            'id_aspek' => '10',
            'kode_indikator' => '1',
            'soal' => 'Program - Lembaga berkolaborasi dengan berbagai stakeholder, termasuk UPZ dan tokoh berpengaruh untuk meningkatkan jumlah penghimpunan dana',
            'pilihan_1' => 'Lembaga tidak membangun kerja sama dengan stakeholder dan tokoh berpengaruh',
            'pilihan_3' => 'Lembaga membangun kerjasama dengan stakeholder dan tokoh berpengaruh yang efektif dan efisien dengan  satu kelompok stakeholder (seperti: akademisi saja, pemerintah saja, dan lain-lain)',
            'pilihan_5' => 'Lembaga membangun kerjasama dengan stakeholder dan tokoh berpengaruh yang efektif dan efisien dengan dua kelompok stakeholder (seperti: akademisi dan pemerintah, pemerintah dan asosiasi, dan lain-lain)',
            'bobot_pertanyaan' => '0.043803573183208'
        ]);
        M_question::create([
            'id_aspek' => '10',
            'kode_indikator' => '2',
            'soal' => 'Program - Lembaga melakukan integrasi zakat, baik integrasi dana maupun integrasi program ',
            'pilihan_1' => 'Lembaga tidak melakukan integrasi pengelolaan zakat',
            'pilihan_3' => 'Lembaga melakukan integrasi dana zakat dengan dana atau instrumen sosial lainnya dalam program milik lembaga (integrasi internal)',
            'pilihan_5' => 'Lembaga melakukan integrasi program dengan program milik stakeholder lain (integrasi eksternal)',
            'bobot_pertanyaan' => '0.043803573183208'
        ]);
        M_question::create([
            'id_aspek' => '10',
            'kode_indikator' => '3',
            'soal' => 'Program - Lembaga menunjuk komunitas/kelembagaan lokal sebagai wakil lembaga dalam implementasi program',
            'pilihan_1' => 'Lembaga tidak bekerjasama dengan komunitas/kelompok masyarakat lokal sebagai wakil dalam pemberdayaan penerima program',
            'pilihan_3' => 'Lembaga bekerjasama dengan komunitas/kelompok masyarakat lokal sebagai wakil dalam pemberdayaan penerima program, tetapi tidak aktif',
            'pilihan_5' => 'Lembaga berkerja sama dengan komunitas/kelompok masyarakat lokal yang aktif sebagai wakil dalam pemberdayaan penerima program ',
            'bobot_pertanyaan' => '0.0297871233620984'
        ]);
        M_question::create([
            'id_aspek' => '10',
            'kode_indikator' => '4',
            'soal' => 'Program - Lembaga memiliki mekanisme pengukuran dampak program pendayagunaan',
            'pilihan_1' => 'Lembaga tidak memiliki mekanisme pengukuran dampak program pendayagunaan',
            'pilihan_2' => 'Lembaga dalam proses penyusunan mekanisme pengukuran dampak program pendayagunaan',
            'pilihan_3' => 'Lembaga memiliki sistem pengukuran dampak program pendayagunaan ',
            'pilihan_4' => 'Lembaga memiliki sistem dan mekanisme pengukuran dampak program pendayagunaan ',
            'pilihan_5' => 'Lembaga memiliki sistem, mekanisme dan metodologi pengukuran dampak program pendayagunaan dan telah diimplementasikan dengan baik',
            'bobot_pertanyaan' => '0.0490691343324991'
        ]);

        //aspek11
        M_question::create([
            'id_aspek' => '11',
            'kode_indikator' => '1',
            'soal' => 'Program - Lembaga memiliki data pendistribusiann yang lengkap untuk mencegah tumpang tindih penyaluran',
            'pilihan_1' => 'Lembaga tidak memiliki data penerima manfaat',
            'pilihan_3' => 'Lembaga memiliki data penerima manfaat (namun hanya mencakup kriteria umum saja, tidak ada info apakah penerima menerima program lainnya)',
            'pilihan_5' => 'Lembaga memiliki data penerima manfaat yang lengkap (terkait dengan karakteristik demografi dan program bantuan apa saja yang telah didapatkan)',
            'bobot_pertanyaan' => '0.0382374531099179'
        ]);
        M_question::create([
            'id_aspek' => '11',
            'kode_indikator' => '2',
            'soal' => 'Program - Lembaga melakukan assestment terhadap calon penerima dana zakat/program untuk memastikan distribusi tepat sasaran',
            'pilihan_1' => 'Lembaga tidak melakukan assesment terhadap calon penerima program',
            'pilihan_3' => 'Assesment mencakup kondisi ekonomi secara umum calon penerima program ',
            'pilihan_5' => 'Assesment mencakup kondisi ekonomi dan sosial calon penerima program ',
            'bobot_pertanyaan' => '0.0445549704932056'
        ]);
        M_question::create([
            'id_aspek' => '11',
            'kode_indikator' => '3',
            'soal' => 'Program - Lembaga memiliki berbagai perencanaan untuk setiap program distribusi/pendayagunaan yang telah diimplementasikan sebagai upaya mitigasi risiko',
            'pilihan_1' => 'Lembaga tidak memiliki perencanaan mitigasi risiko dalam program',
            'pilihan_3' => 'Lembaga memiliki dan mengimplementasikan manajemen mitigasi risiko untuk sebagian program',
            'pilihan_5' => 'Lembaga memiliki dan mengimplementasikan manajemen mitigasi risiko untuk seluruh program',
            'bobot_pertanyaan' => '0.0298507031344828'
        ]);
        M_question::create([
            'id_aspek' => '11',
            'kode_indikator' => '4',
            'soal' => 'Program - Implementasi program sesuai dengan SOP dan SOM',
            'pilihan_1' => 'Program belum memiliki SOP dan SOM khusus terkait pelaksanaan program . Contoh SOP: Lembaga melakukan assesment sebelum penyaluran, Lembaga melakukan 2 kali monitoring selama 6 bulan (sebagaimana tertulis di SOP), Contoh SOM: alokasi dana yang didistribusikan sesuai dengan alokasi dana yang direncanakan',
            'pilihan_3' => 'Program telah berjalan sesuai SOP dan SOM, namun tidak semua poinnya terpenuhi',
            'pilihan_5' => 'Program telah berjalan sesuai dengan pedoman SOP dan SOM dan mendapatkan evaluasi di akhir periode tertentu',
            'bobot_pertanyaan' => '0.0245128922438458'
        ]);
        M_question::create([
            'id_aspek' => '11',
            'kode_indikator' => '5',
            'soal' => 'Program - Adanya monitoring dan evaluasi terhadap program pendistribusian oleh pendamping program',
            'pilihan_1' => 'Lembaga tidak melakukan monitoring dan evaluasi terhadap program',
            'pilihan_2' => 'Lembaga melakukan monitoring satu tahun sekali',
            'pilihan_3' => 'Lembaga melakukan monitoring setiap 6 bulan sekali, dan terdapat tindak evaluasi dari hasil monitoring',
            'pilihan_4' => 'Lembaga melakukan monitoring setiap 3 bulan sekali, dan terdapat tindak evaluasi dari hasil monitoring',
            'pilihan_5' => 'Lembaga melakukan monitoring setiap 1 bulan sekali, dan terdapat tindak evaluasi dari hasil monitoring',
            'bobot_pertanyaan' => '0.0293044950899076'
        ]);

        //aspek12
        M_question::create([
            'id_aspek' => '12',
            'kode_indikator' => '1',
            'soal' => 'Institusional Lembaga - Lembaga menggunakan standar akuntansi dan aturan yang diterima secara luas dalam pelaporan',
            'pilihan_1' => 'Pencatatan keuangan tidak sesuai dengan standar akuntansi keuangan syariah yang berlaku',
            'pilihan_3' => 'Pencatatan keuangan sesuai dengan standar akuntansi keuangan syariah dan aturan yang berlaku (Seperti PSAK 109)',
            'pilihan_5' => 'Pencatatan keuangan sesuai dengan standar akuntansi keuangan syariah dan aturan yang berlaku (Seperti PSAK 109) dan sudah dilakukan audit',
            'bobot_pertanyaan' => '0.0388270109993006'
        ]);
        M_question::create([
            'id_aspek' => '12',
            'kode_indikator' => '2',
            'soal' => 'Institusional Lembaga - Lembaga melakukan audit keuangan secara internal dan eksternal',
            'pilihan_1' => 'Lembaga tidak memiliki mekanisme audit internal',
            'pilihan_2' => 'Lembaga telah melakukan audit internal secara rutin',
            'pilihan_3' => 'Lembaga melakukan audit keuangan internal dan eksternal secara rutin dan terkoodinir',
            'pilihan_4' => 'Lembaga melakukan audit keuangan internal dan eksternal dan memperoleh hasil WTP',
            'pilihan_5' => 'Lembaga melakukan audit keuangan internal dan eksternal dan memperoleh hasil WTP serta mempublikasikan hasil laporan audit kepada stakeholder',
            'bobot_pertanyaan' => '0.0328187225089734'
        ]);
        M_question::create([
            'id_aspek' => '12',
            'kode_indikator' => '3',
            'soal' => 'Institusional Lembaga - Lembaga melakukan audit syariah',
            'pilihan_1' => 'Lembaga tidak memiliki rencana dan mekanisme audit syariah',
            'pilihan_2' => 'Lembaga memiliki rencana dan mekanisme audit syariah namun belum terealisasikan',
            'pilihan_3' => 'Lembaga melakukan audit syariah di setiap tahun namun belum dilakukan secara optimal dan profesional',
            'pilihan_4' => 'Lembaga melakukan audit syariah di setiap tahun dan telah dilakukan secara optimal dan profesional',
            'pilihan_5' => 'Lembaga melakukan audit syariah di setiap tahun dan mempublikasikan hasil audit syariah kepada stakeholder',
            'bobot_pertanyaan' => '0.0291802255347926'
        ]);
        M_question::create([
            'id_aspek' => '12',
            'kode_indikator' => '4',
            'soal' => 'Institusional Lembaga - Lembaga mendistribusikan laporan pengelolaan (keuangan dan non keuangan) kepada stakeholder (donatur, asosiasi, pemerintah) secara rutin',
            'pilihan_1' => 'Lembaga tidak mendistribusikan laporan kepada stakeholder',
            'pilihan_2' => 'Lembaga memiliki rencana distribusi laporan namun belum terealisasi',
            'pilihan_3' => 'Lembaga mendistribusikan laporan hanya pada pemerintah',
            'pilihan_4' => 'Lembaga mendistribusikan laporan kepada donatur, pemerintah, dan asosiasi pada akhir tahun',
            'pilihan_5' => 'Lembaga mendistribusikan laporan kepada donatur, pemerintah, dan asosiasi secara rutin setiap semester sesuai amanah UU 23 Tahun 2011',
            'bobot_pertanyaan' => '0.0328187225089734'
        ]);
        M_question::create([
            'id_aspek' => '12',
            'kode_indikator' => '5',
            'soal' => 'Institusional Lembaga - Lembaga mempublikasikan laporan pengelolaan zakat di media yang dapat diakses publik',
            'pilihan_1' => 'Lembaga mempublikasikan laporan di media internal',
            'pilihan_2' => 'Lembaga mempublikasikan laporan pengelolaan zakat di media internal, namun hanya laporan program (tidak mencakup laporan keuangan)',
            'pilihan_3' => 'Lembaga mendistribusikan laporan di media internal, namun  terbatas untuk pengguna tertentu (contoh: hanya bagi pemerintah, donatur, asosiasi)',
            'pilihan_4' => 'Lembaga mendistribusikan laporan di media internal namun memerlukan izin akses bagi masyarakat umum',
            'pilihan_5' => 'Lembaga mendistribusikan laporan pengelolaan zakat dengan lengkap di media internal (free akses) dan media umum',
            'bobot_pertanyaan' => '0.0328187225089734'
        ]);
    }
}
