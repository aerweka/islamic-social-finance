<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Hasil</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <center><h3>Hasil Survey 2022</h3></center>

    <table class="table table-bordered col-md-8 offset-md-2">
        <thead class="thead-dark">
            <tr>
                <!-- <th scope="col"></th> -->
                <th>Dimensi</th>
                <th>Aspek</th>
                <th>Nilai</th>
                <th>Nilai Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aspek as $a)
            <tr>
                <td>{{$a->dimensi}}</td>
                <td>{{$a-> aspek}}</td>
                <td>{{$sum_aspek[$a->dimensi][$a->kode]}}</td>
                <td>{{$sum_dimensi[$a->dimensi]}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>