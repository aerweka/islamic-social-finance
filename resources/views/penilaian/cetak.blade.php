<!DOCTYPE html>
<html lang="en">
    <?php 
    use Carbon\Carbon;
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Hasil</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
    .profil{
        margin-left: 13px;
    }

    .table{
        font-family: Tahoma;
    }
    img{
        width:80%;
    }
</style>
<body>
    <center><p style="font-size: 13pt; font-weight: bold; font-family: Tahoma">Kinerja Lembaga {{$jawaban[0]->nama_laznas}} Berdasarkan Dimensi Environment, Social, Governance (ESG) Tahun Anggaran {{Carbon::parse($jawaban[0]->filled_at)->year}}</p></center>

    <table class="table table-borderless" style="margin-top: 20px; font-size: 11pt">
        <tbody>
            <tr>
                <td style="width: 20%; line-height: 0px">Nama</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->name}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Email</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->email}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Nama LAZ</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->nama_laznas}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Divisi Penanggungjawab</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->nama_direktur_laznas}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Tingkatan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->tingkatan_laznas}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">No. Rekomendasi Pembuatan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->no_rekomendasi_pembuatan}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Tgl Rekomendasi Pembuatan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->tgl_rekomendasi_pembuatan}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">No. Rekomendasi Perpanjangan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->no_rekomendasi_perpanjangan}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Alamat</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px; padding-left: 35px">- Jalan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->alamat_jalan}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px; padding-left: 35px">- Desa/Kelurahan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->vil_name}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px; padding-left: 35px">- Kecamatan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->dis_name}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Kabupaten/Kota</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->city_name}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Provinsi</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->prov_name}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    @foreach($dim as $d)
    <table class="table table-bordered col-md-8 offset-md-2" style="line-height: 14px; font-size:11pt">
        <thead class="thead-dark">
            @if($d->dimensi == 'Environment')
            <tr style="text-align: center;">
                <th colspan="5" style="background-color: #9BBB59">Dimensi {{$d->dimensi}} bobot:{{round($d->bobot_dimensi*100)}}%</th>
            </tr>
            @elseif($d->dimensi == 'Social')
            <tr style="text-align: center;">
                <th colspan="5" style="background-color: #C4BD97">Dimensi {{$d->dimensi}} bobot:{{round($d->bobot_dimensi*100)}}%</th>
            </tr>
            @elseif($d->dimensi == 'Governance')
            <tr style="text-align: center;">
                <th colspan="5" style="background-color: #FABF8F">Dimensi {{$d->dimensi}} bobot:{{round($d->bobot_dimensi*100)}}%</th>
            </tr>
            @endif
            <tr style="text-align: center">
                <th>Aspek</th>
                <th>Indikator</th>
                <th width="77px">Nilai Kredit</th>
                <th>Bobot</th>
                <th>Skor</th>
            </tr>
        </thead>
        @foreach($pertanyaan->where('dimensi', $d->dimensi) as $p)
        <tbody>
            <tr>
                
                <td>{{$p->aspek}}</td>
                <td>{{$p->soal}}</td>
                <td style="text-align: center">{{$tes[$p->dimensi][$p->kode][$p->kode_indikator]}}</td>
                <td>{{round($p->bobot_pertanyaan*100)}}%</td>
                <td style="text-align: center">{{round($sum_indikator[$p->dimensi][$p->kode][$p->kode_indikator]*100)}}%</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    @endforeach
    <br><br>
    <table class="table table-bordered col-md-8 offset-md-2" style="line-height: 10px; font-size: 11pt">
        <thead class="thead-dark">
            <tr>
                <!-- <th scope="col"></th> -->
                <th>Dimensi</th>
                <th>Aspek</th>
                <th>Skor Aspek</th>
                <!-- <th>Nilai Total</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($aspek as $a)
            <tr>
                @if($a->dimensi == 'Environment')
                <td style="background-color: #9BBB59">{{$a->dimensi}}</td>
                @elseif($a->dimensi == 'Social')
                <td style="background-color: #C4BD97">{{$a->dimensi}}</td>
                @else
                <td style="background-color: #FABF8F">{{$a->dimensi}}</td>
                @endif
                <td>{{$a-> aspek}}</td>
                <td>{{round($sum_aspek[$a->dimensi][$a->kode]*100)}}%</td>
                <!-- <td>{{$sum_dimensi[$a->dimensi]}}</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <table class="table table-bordered col-md-8 offset-md-2" style="line-height: 10px; font-size: 11pt;">
        <thead class="thead-dark">
            <tr>
                <th>Dimensi</th>
                <th>Skor Dimensi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dim as $d)
            <tr>
                <td>{{$d->dimensi}}</td>
                <td>{{round($sum_dimensi[$d->dimensi],2)}}%</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; background-color: #69DC84; font-size: 11pt">Skor Total Kinerja: {{$jawaban[0]->total_all}}%</td>
            </tr>
        </tbody>
    </table>
    @if($jawaban[0]->total_all >= 80 && $jawaban[0]->total_all <= 100)
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian stor total yang berada pada rentang 80 hingga 100 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>SANGAT KONSISTEN</b>  dalam mengimplementasikan nilai-nilai ESG</p>
    @elseif($jawaban[0]->total_all >=60 && $jawaban[0]->total_all < 80)
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian stor total yang berada pada rentang 60 hingga 79 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>KONSISTEN</b>  dalam mengimplementasikan nilai-nilai ESG</p>
    @elseif($jawaban[0]->total_all >=51 && $jawaban[0]->total_all < 60)
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian stor total yang berada pada rentang 51 hingga 59 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>CUKUP KONSISTEN</b>  dalam mengimplementasikan nilai-nilai ESG</p>
    @else   
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian stor total yang berada pada rentang 0 hingga 50 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>KURANG KONSISTEN</b>  dalam mengimplementasikan nilai-nilai ESG</p>
    @endif

    <table class="table table-bordered col-md-8 offset-md-2" style="font-size: 9pt; font-family: tahoma; width:40%; line-height: 5px">
        <thead style="text-align: center">
            <tr>
                <th>SKOR</th>
                <th>PREDIKAT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>80 <u>{{'<'}}</u> x <u>{{'<'}}</u> 100</td>
                <td><b>sangat konsisten</b></td>
            </tr>
            <tr>
                <td>60 <u>{{'<'}}</u> x {{'<'}} 80</td>
                <td><b>konsisten</b></td>
            </tr>
            <tr>
                <td>51 <u>{{'<'}}</u> x {{'<'}} 59</td>
                <td><b>cukup konsisten</b></td>
            </tr>
            <tr>
                <td>x {{'<'}} 51</td>
                <td><b>kurang konsisten</b></td>
            </tr>
        </tbody>
    </table>
    
    <div class="col-md-8 offset-md-2" style="font-familiy: tahoma; margin-top: 68px; font-size: 12px; text-align: justify">
        <center><p style="font-size:13px"><b>METODE PEMBANGUNAN INDEKS PENGUKURAN KINERJA LEMBAGA AMIL ZAKAT (LAZ) 
        BERBASIS DIMENSI ENVIRONMENTAL SOCIAL GOVERNANCE (ESG)
        </b></p></center>

        <p style="text-indent: 0.4in; margin-bottom: 10px">
        Indeks Pengukuran Kinerja Lembaga Amil Zakat Berbasis Dimensi Environmental Social Governance (ESG) ini merupakan suatu indeks yang dibangun 
        dengan metode Delphi-Analytic Network Process (DANP). ANP merupakan sebuah metode pengambilan keputusan multikriteria yang dapat 
        menghasilkan kerangka kerja analisis yang komprehensif untuk memecahkan masalah dalam pengambilan keputusan baik untuk kalangan 
        masyarakat, pemerintah, maupun perusahaan [1,2]. Terdapat beberapa keunggulan dari penggunaan metode ANP [2]. ANP dapat membantu 
        membangun analisis holistik dan non-parsial, di mana semua faktor dan kriteria dipertimbangkan dalam kerangka model baik secara 
        hirarkis maupun dengan keterkaitan antara faktor dan kriteria.
        </p>

        <p style="text-indent: 0.4in; margin-bottom: 10px">
        Metode Delphi menggunakan pendekatan survei yang terdiri dari dua atau lebih proses berulang untuk mengumpulkan dan menyaring 
        data, dengan rangkaian proses dan analisis yang disertai umpan balik [3]. Metode ini memungkinkan responden untuk memberikan 
        pendapat dan penilaian awal dari terbentuknya indikator kinerja. Karakteristik utama dari metode Delphi adalah proses feedback 
        dari responden yang dapat dikontrol melalui orientasi pemecahan masalah, sehingga informasi yang tidak akurat dapat dieliminasi 
        dari model [4].
        </p>

        <p style="text-indent: 0.4in; margin-bottom: 10px">
        Penelitian dengan metode Delphi-ANP dilakukan melalui empat tahapan. Tahap pertama terdiri dari tinjauan pustaka, Focus Group 
        Discussion (FGD), dan wawancara mendalam dengan perwakilan praktisi, asosiasi, akademisi, dan regulator yang akan digunakan 
        untuk survei menggunakan metode Delphi dengan membentuk semi-structured delphi questionnaire dan structured delphi questionnaire 
        yang didistribusikan berulang kali dengan tujuan mengumpulkan dan menjaring instrumen kinerja yang paling tepat.
        </p>

        <p style="text-indent: 0.4in; margin-bottom: 0px">
        Tahap kedua yaitu membentuk konstruksi model ANP. Konstruksi model ANP yang dibentuk akan disampaikan kepada para ahli untuk divalidasi. 
        Tahap ketiga yaitu penyusunan kuesioner yang relevan dan perbandingan berpasangan. Kuesioner yang telah mendapat umpan balik 
        dari responden akan dihitung Geometric Mean, Ratter Agreement dan Normalized Value melalui software Super Decisions dan Microsoft 
        Excel. Ratter Agreement merupakan ukuran yang menunjukkan tingkat kesesuaian responden (R1-Rn) terhadap suatu permasalahan dalam 
        satu cluster, diukur dengan menggunakan Kendall's Coefficient of Concordance (W; 0 < W < 1). Ratter Agreement menunjukkan tingkat 
        persetujuan dan pemahaman semua responden terhadap suatu isu tertentu. Geometric Mean adalah nilai rata-rata yang menunjukkan 
        kecenderungan tertentu dan mewakili penilaian rata-rata responden [1]. Normalized Value digunakan untuk menunjukkan nilai prioritas. 
        Tahap keempat atau terakhir adalah result validation dan interpretation dari kuesioner yang telah dianalisis. Tahapan penelitian 
        Delphi-ANP disajikan pada Gambar 1.
        </p>
        
        <p>
            <center><img src="assets/images/tahap penelitian ANP.jpg"></center>
        </p>

        <p>
            <center><b>Gambar 1 Tahapan Penelitian ANP</b></center>
        </p>

        <p>
            <center> Sumber: Zams dkk. [4] </center>
        </p>

        <p style="text-indent: 0.4in; margin-bottom: 10px">
        Metode Delphi-ANP di penelitian ini menggunakan pendekatan Benefit, Opportunity, Cost dan Risk (BOCR) untuk menganalisis kinerja 
        Lembaga dana sosial Islam pada jangka pendek dan jangka panjang. Agar analisis data menjadi efektif, responden harus memiliki 
        latar belakang, kompetensi, dan pengalaman yang sesuai di topik penelitian [1]. Responden yang mewakili civitas akademika harus 
        memiliki keahlian dan pengetahuan tentang tata kelola ISF. Bagi praktisi, responden harus berasal dari Lembaga Filantropi Islam. 
        Bagi regulator, responden harus menduduki posisi penting dan memiliki kewenangan untuk menentukan kebijakan di bidang ISF. Oleh 
        karena itu, dalam penelitian ini, pemilihan responden dilakukan dengan menggunakan metode purposive sampling dengan kriteria 
        tertentu. Untuk menghindari bias dan salah tafsir, para ahli didampingi oleh peneliti saat mengisi kuesioner. Hal ini untuk 
        memastikan bahwa semua responden memiliki pemahaman yang sama dalam menjawab kuesioner, yang akan membantu menjaga konsistensi 
        tanggapan. Dalam analisis ANP, validitas hasil lebih bergantung pada keahlian daripada jumlah responden [5].
        </p>

        <p style="text-indent: 0.4in; margin-bottom: 10px">
        Kuesioner dibuat dalam bentuk perbandingan berpasangan menggunakan skala 1-9. untuk memungkinkan aspek-aspek yang 
        diidentifikasi diukur dan diberi peringkat berdasarkan tingkat kepentingan dan prioritasnya seperti yang dirasakan 
        oleh responden. Skala 1 berarti tidak penting, sedangkan skala 9 berarti amat sangat penting. Tabel 1,
        </p>

        <p>
            <center><b>Tabel 1</b></center>
        </p>

        <table class="table table-bordered col-md-8 offset-md-2">
            <thead>
                <tr style="text-align: center">
                    <th colspan="4">Tim Pengembang Indeks Pengukuran Kinerja Lembaga Amil Zakat (LAZ) Berbasis Dimensi <i>Environmental Social Governance</i> (ESG).</th>
                </tr>
                <tr>
                    <th width="5%">No</th>
                    <th>Nama</th>
                    <th>Afiliasi</th>
                    <th>Peran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dr. Muhammad Nafik Hadi Ryandono, SE., M.Si</td>
                    <td>Universitas Airlangga</td>
                    <td>Ketua Pengusul</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dr. Tika Widiastuti S.E., M.Si</td>
                    <td>Universitas Airlangga</td>
                    <td>SC</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Muhammad Ubaidillah Al Mustofa B.Sc, M.SEI</td>
                    <td>Universitas Airlangga</td>
                    <td>SC</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Eka Puspa Dewi S.E</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim - Dimensi <i>Environmental</i></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Bintang Lutfi S.E</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim - Dimensi<i>Social</i></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dzikri Nurrohman</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim - Dimensi<i>Social</i></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Nikmatul Atiya S.E</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim - Dimensi<i>Governance</i></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mir???atun Nisa???</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim - Dimensi<i>Governance</i></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Nisrina Nadia</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim - Dimensi<i>Governance</i></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Marclisa</td>
                    <td>Universitas Airlangga</td>
                    <td>Tim HAKI</td>
                </tr>
            </tbody>
        </table>
        
        <p>
            <center><b>Tabel 2</b></center>
        </p>

        <table class="table table-bordered col-md-8 offset-md-2">
            <thead>
                <tr style="text-align: center">
                    <th colspan="4">Kontributor Pengembangan Indeks Pengukuran Kinerja Lembaga Amil Zakat (LAZ) Berbasis Dimensi <i>Environmental Social Governance</i> (ESG).</th>
                </tr>
                <tr>
                    <th width="5%">No</th>
                    <th>Agenda</th>
                    <th>Nama</th>
                    <th>Afiliasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="14">1</td>
                    <td rowspan="14"><i>Focus Group Discussion</i></td>
                    <td>1. Iman Harymawan., SE., MBA., Ph.D.</td>
                    <td>CEO of Center ESG</td>
                </tr>
                <tr>
                    <td>2. Bayu Arie Fianto, SE., MBA., Ph.D.</td>
                    <td>Dosen Departemen Ekonomi Syariah, Universitas Airlangga, dan Ketua SDGs Center Universitas Airlangga</td>
                </tr>
                <tr>
                    <td>3. Dr Machsus Fauzi, ST., MT,</td>
                    <td>Institut Teknologi Sepuluh Nopember - Pengelola Dana Abadi ITS</td>
                </tr>
                <tr>
                    <td>4. Sri Adam Dewi Setyaningrat</td>
                    <td>Riset Development Program Pendistribusian dan Pendayagunaan, Yatim Mandiri Surabaya</td>
                </tr>
                <tr>
                    <td>5. Aditya Kusuma, S.T</td>
                    <td>Kepala Perwakilan LAZ Al-Azhar Jawa Timur</td>
                </tr>
                <tr>
                    <td>6. Nana Sudiana, S.IP., M.M</td>
                    <td>Direktur Program, Inisiatif Zakat Indonesia (IZI)</td>
                </tr>
                <tr>
                    <td>7. Ir. Nana Mintarti</td>
                    <td>Associate Expert FOZ</td>
                </tr>
                <tr>
                    <td>8. Sigit Iko Sugondo</td>
                    <td>Associate Expert FOZ</td>
                </tr>
                <tr>
                    <td>9. Citra Widuri</td>
                    <td>FOZ Pusat</td>
                </tr>
                <tr>
                    <td>10. Yunan Akbar</td>
                    <td>Kepala Unit Pengembangan Produk Syariah Bursa Efek Indonesia</td>
                </tr>
                <tr>
                    <td>11. Al Gifari Hasnul</td>
                    <td>BEI</td>
                </tr>
                <tr>
                    <td>12. Aldiansah Akbar</td>
                    <td>BEI</td>
                </tr>
                <tr>
                    <td>13. Deri Yustria</td>
                    <td>BEI</td>
                </tr>
                <tr>
                    <td>14. Urip Budiarto</td>
                    <td>Kepala Divisi Dana Sosial Syariah Komite Nasional Ekonomi dan Keuangan Syariah (KNEKS)</td>
                </tr>

                <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2"><i>Indepth Interview 01</i></td>
                    <td>1. Sigit Iko Sugondo</td>
                    <td>Associate Expert FOZ</td>
                </tr>
                <tr>
                    <td>2. Bayu Arie Fianto</td>
                    <td>Dosen Departemen Ekonomi Syariah, Universitas Airlangga, dan Ketua SDGs Center Universitas Airlangga</td>
                </tr>
                <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2"><i>Indepth Interview 01</i></td>
                    <td>3. Nana Sudiana, S.IP., M.M</td>
                    <td>Direktur Program, Inisiatif Zakat Indonesia (IZI)</td>
                </tr>
                <tr>
                    <td>4. Ir. Nana Mintarti</td>
                    <td>Associate Expert FOZ</td>
                </tr>

                <tr>
                    <td rowspan="3">3</td>
                    <td rowspan="3">i<i>Indepth Interview 02</i></td>
                    <td>1. Nana Sudiana, S.IP., M.M</td>
                    <td>Direktur Program, Inisiatif Zakat Indonesia (IZI)</td>
                </tr>
                <tr>
                    <td>2. Ir. Nana Mintarti</td>
                    <td>Associate Expert FOZ</td>
                </tr>
                <tr>
                    <td>3. Sigit Iko Sugondo</td>
                    <td>Associate Expert FOZ</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td><i>Indepth Interview 03</i></td>
                    <td>1. Ir. Nana Mintarti</td>
                    <td>Associate Expert FOZ</td>
                </tr>
            </tbody>
        </table>

        <p>
            <center><b>Tabel 3</b></center>
        </p>
        
        <table class="table table-bordered col-md-8 offset-md-2">
            <thead>
                <tr style="text-align: center">
                    <th colspan="4">Responden Kuesioner</th>
                </tr>
                <tr>
                    <th width="5%">No</th>
                    <th>Nama</th>
                    <th>Afiliasi</th>
                    <th>Kelompok Stakeholder</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Prof. Raditya Sukmana, S.E., M.A.</td>
                    <td>Universitas Airlangga</td>
                    <td>Akademisi</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Drs. R. Moh. Qudsi Fauzi, M.M</td>
                    <td>Universitas Airlangga</td>
                    <td>Akademisi</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Aditya Kusuma, S.T</td>
                    <td>LAZ Al-Azhar Jawa Timur</td>
                    <td>Praktisi</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nana Sudiana, S.IP., M.M</td>
                    <td>Inisiatif Zakat Indonesia (IZI)</td>
                    <td>Praktisi</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Kholaf Hibatulloh</td>
                    <td>Forum Zakat (FOZ) Jawa Timur</td>
                    <td>Asosiasi</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Guritno S.Pd</td>
                    <td>Forum Zakat (FOZ) Jawa Timur</td>
                    <td>Asosiasi</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Forum Zakat (FOZ) Jawa Timur</td>
                    <td>Forum Zakat (FOZ) Jawa Timur</td>
                    <td>Asosiasi</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Drs. H. Supriyadi, MM</td>
                    <td>Kementerian Agama Provinsi Jawa Timur</td>
                    <td>Regulator</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Muhammad Hasbi Zaenal, Ph.D</td>
                    <td>BAZNAS</td>
                    <td>Regulator</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Benny Nur Miftahul Ulum, S.Sos.I,MM</td>
                    <td>BAZNAS Jawa Timur</td>
                    <td>Regulator</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Sutan Emir Hidayat, Ph.D</td>
                    <td>KNEKS</td>
                    <td>Regulator</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-borderless col-md-8 offset-md-2" style="text-align: justify; line-height:15px">
            <thead>
                <tr style="text-align: center">
                    <th colspan="2">Daftar Pustaka</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="5%">1.</td>
                    <td>Ascarya. Analytic Network Process (ANP): Pendekatan Baru Studi Kualitatif. Cent Cent Bank Educ Stud Bank Indones. 2005; </td>
                </tr>
                <tr>
                    <td widht="5%">2.</td>
                    <td>Saaty TL, Vargas LG. Decision Making with the Analytic Network Process: Economic, Political, Social and Technological Application with Benefit, Opportunities, Cost and Risks. II. Vol. 195, International Series in Operations Research and Management Science. London: Springer; 2006. 1???370 p. </td>
                </tr>
                <tr>
                    <td widht="5%">3.</td>
                    <td>Hsu CC, Sandford BA. Minimizing non-response in the Delphi process: How to respond to non-response. Pract Assessment, Res Eval. 2007;12(17):1???7. https://doi.org/10.7275/by88-4025</td>
                </tr>
                <tr>
                    <td widht="5%">4.</td>
                    <td>Zams BM, Indrastuti R, Pangersa AG, Hasniawati NA, Zahra FA, Fauziah IA. Designing Central Bank Digital Currency for Indonesia: The Delphi-Analytic Network Process. Bul Ekon Monet dan Perbank. 2020;23(3):411???38. https://doi.org/10.21098/bemp.v23i3.1351</td>
                </tr>
                <tr>
                    <td widht="5%">5.</td>
                    <td>Firmansyah I, Sukmana W. Analisis Problematika Zakat Pada Baznas Kota Tasikmalaya:Pendekatan Metode Analytic Network Process (Anp). J Ris Akunt dan Keuang. 2014;2(2):392. 10.17509/jrak.v2i2.6593.</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>