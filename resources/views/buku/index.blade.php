<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        <thead>
    <tbody>
        @foreach($data_buku as $buku)
            <tr>
                <td>{{ ++$no}}
                <td>{{ $buku->judul}}
                <td>{{ $buku->penulis}}
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{ date('d/m/Y', strtotime($buku->tgl_terbit)) }}</td>
            <tr>
        @endforeach

        <h1>Jumlah Buku: {{ $hitung }}</h1>
    </tbody>
</body>
</html>