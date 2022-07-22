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
        <legend>Data Siswa</legend>
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
        </table>
    </fieldset>
</body>
</html>