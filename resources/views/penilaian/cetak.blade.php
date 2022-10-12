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
</style>
<body>
    <center><p style="font-size: 30px; font-weight: bold">Hasil Survey {{Carbon::parse($jawaban[0]->filled_at)->year}}</p></center>
    

    <table class="table table-borderless" style="margin-top: 20px">
        <tbody>
            <tr>
                <td style="width: 15%; line-height: 0px">Nama</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->name}}</td>
                <td style="width: 15%; line-height: 0px">Direktur</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->nama_direktur_laznas}}</td>
            </tr>
            <tr>
                <td style="width: 15%; line-height: 0px">Email</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->email}}</td>
                <td style="width: 15%; line-height: 0px">Tingkatan</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->tingkatan_laznas}}</td>
            </tr>
            <tr>
                <td style="width: 20%; line-height: 0px">Nama Laznas</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->nama_laznas}}</td>
                <td style="width: 15%; line-height: 0px">Alamat</td>
                <td style="width: 35%; line-height: 0px">: {{$jawaban[0]->alamat_laznas}}</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered col-md-8 offset-md-2" style="line-height: 17px; font-size:13px">
        <thead class="thead-dark">
            <tr style="text-align: center">
                <th width="50px">Dimensi</th>
                <th>Aspek</th>
                <th>Indikator</th>
                <th width="87px">Nilai Jawaban</th>
                <th>Bobot</th>
                <th width="70px">Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pertanyaan as $p)
            <tr>
                @if($p->dimensi == 'Environment')
                <td style="background-color: #9BBB59">{{$p->dimensi}}</td>
                @elseif($p->dimensi == 'Social')
                <td style="background-color: #C4BD97">{{$p->dimensi}}</td>
                @else
                <td style="background-color: #FABF8F">{{$p->dimensi}}</td>
                @endif
                <td>{{$p->aspek}}</td>
                <td>{{$p->soal}}</td>
                <td style="text-align: center">{{$tes[$p->dimensi][$p->kode][$p->kode_indikator]}}</td>
                <td>{{$p->bobot_pertanyaan}}</td>
                <td style="text-align: center">{{$sum_indikator[$p->dimensi][$p->kode][$p->kode_indikator]}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>    
    <table class="table table-bordered col-md-8 offset-md-2" style="line-height: 10px">
        <thead class="thead-dark">
            <tr>
                <!-- <th scope="col"></th> -->
                <th>Dimensi</th>
                <th>Aspek</th>
                <th>Nilai</th>
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
                <td>{{$sum_aspek[$a->dimensi][$a->kode]}}</td>
                <!-- <td>{{$sum_dimensi[$a->dimensi]}}</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <table class="table table-bordered col-md-8 offset-md-2" style="line-height: 10px">
        <thead class="thead-dark">
            <tr>
                <th>Dimensi</th>
                <th>Nilai Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dim as $d)
            <tr>
                <td>{{$d->dimensi}}</td>
                <td>{{$sum_dimensi[$d->dimensi]}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; background-color: #69DC84">Nilai Total: {{$jawaban[0]->total_all}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>