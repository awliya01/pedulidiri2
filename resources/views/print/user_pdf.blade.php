<!DOCTYPE html>
<html>

<head>
    <title>Peduli Diri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>


    <center>
        <h4>Laporan Data User Peduli Diri</h4>
    </center>
    <br />

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Role</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($user as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->role }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->telp }}</td>
                    <td>{{ $p->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>
