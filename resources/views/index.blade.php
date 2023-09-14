<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> id</th>
                <th> Judul Buku</th>
                <th> Penulis</th>
                <th> Harga</th>
                <th> Tgl.terbit</th>
                <th> Aksi</th>
            </tr>
</thead>
<tbody>
    @foreach($data_buku as $buku)
    <tr>
        <td>{{ $buku->id}}</td>
        <td>{{ $buku->judul}}</td>
        <td>{{ $buku->penulis}}</td>
        <td>{{ "Rp ".number_format($buku->harga, 2, ', ', '.')}}</td>
        <td>{{ date('d-m-Y', strtotime($buku->tgl_terbit)) }}</td>
        <td><button class="btn btn-primary" type="submit">Edit</button></td>
    </tr>
    @endforeach
</tbody>
</body>
</html>