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
</style>
<body>
    <center><p style="font-size: 12pt; font-weight: bold; font-family: Tahoma">Kinerja Lembaga {{$jawaban[0]->nama_laznas}} Berdasarkan Dimensi Environment, Social, Governance (ESG) Tahun Anggaran {{Carbon::parse($jawaban[0]->filled_at)->year}}</p></center>

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
                <td style="width: 20%; line-height: 0px">Direktur</td>
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
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian skor total yang berada pada rentang 80 hingga 100 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>SANGAT KONSISTEN</b> dengan nilai-nilai ESG</p>
    @elseif($jawaban[0]->total_all >=60 && $jawaban[0]->total_all < 80)
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian skor total yang berada pada rentang 60 hingga 79 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>KONSISTEN</b> dengan nilai-nilai ESG</p>
    @elseif($jawaban[0]->total_all >=51 && $jawaban[0]->total_all < 60)
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian skor total yang berada pada rentang 51 hingga 59 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>CUKUP KONSISTEN</b> dengan nilai-nilai ESG</p>
    @else   
        <p style="font-size: 12pt; font-family: tahoma; margin-left:15px">Dari hasil penilaian skor total yang berada pada rentang 0 hingga 50 maka kinerja <b>LAZ {{$jawaban[0]->nama_laznas}}</b> termasuk kriteria <b>KURANG KONSISTEN</b> dengan nilai-nilai ESG</p>
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
</body>
</html>