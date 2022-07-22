<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Jam Tayang Televisi</h2>
        @foreach ($tv as $data)
            <table border=1 cellpadding="10" style="width:500px">
                <tr>
                    <th colspan="3">{{ $data['nama'] }} </th>
                </tr>
                <tr>
                    <th>Acara</th>
                    <th>Jam Tayang</th>
                    <th>Tanggal Tayang</th>
                </tr>
                @foreach ($data['jadwal_mulai'] as $jadwal)
                <tr>
                        <td>{{ $jadwal['judul_program'] }}</td>
                        <td>{{ $jadwal['jam'] }}</td> 
                        <td>{{ $jadwal['tanggal_tayang'] }}</td>
                    @endforeach
                </tr>
            </table>
            <br>
        @endforeach 
    </center>
</body>

</html>
