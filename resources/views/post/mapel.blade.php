<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <center>
        <h2>Tabel Siswa</h2>
        <table border=1>
            <tr>
                <td>no</td>
                <td>Nama</td>
                <td>JK</td>
                <td>Jurusan</td>
            </tr>
            @foreach ($siswa as $data)
                <tr>
                    <td>{{ $data['no']}}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['jk'] }}</td>
                    <td>{{ $data['jurusan'] }}</td>
                </tr>
            @endforeach
        </table> <hr>
        <h2>Tabel Peserta</h2>
        <table border=1>
            <tr>
                <td>no</td>
                <td>Kode_MP</td>
            </tr>
            @foreach ($peserta as $data)
                <tr>
                    <td>{{ $data['no']}}</td>
                    <td>{{ $data['kode_MP'] }}</td>
                </tr>
            @endforeach
        </table><hr>
        <h2>Tabel Mapel</h2>
        <table border=1>
            <tr>
                <td>Kode_MP</td>
                <td>Nama_MP</td>
                <td>SKS</td>
                <td>SEMESTER</td>
            </tr>
            @foreach ($mapel as $data)
                <tr>
                    <td>{{ $data['kode_mp'] }}</td>
                    <td>{{ $data['nama_mp']}}</td>
                    <td>{{ $data['sks']}}</td>
                    <td>{{ $data['semester']}}</td>
                </tr>
            @endforeach
        </table><hr>
    </center>
    </fieldset>
</body>
</html>