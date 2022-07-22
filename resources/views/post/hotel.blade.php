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
    <legend>Data Hotel</legend>
    <center>
       <h2>Karyawan</h2>
        <table border=1>
            <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
            </tr>
            @foreach ($karyawan as $data)
                <tr>
                    <td>{{ $data['id_karyawan']}}</td>
                    <td>{{ $data['nm_karyawan'] }}</td>
                    <td>{{ $data['jk'] }}</td>
                </tr>
            @endforeach
        </table> <hr>
        <h2>Pengunjung</h2>
        <table border=1>
            <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>No Telepon</td>
                <td>No KTP</td>
            </tr>
            @foreach ($pengunjung as $data)
                <tr>
                    <td>{{ $data['id_pengunjung']}}</td>
                    <td>{{ $data['nm_pengunjung'] }}</td>
                    <td>{{ $data['alamat'] }}</td>
                    <td>{{ $data['jk']}}</td>
                    <td>{{ $data['no_tlp']}}</td>
                    <td>{{ $data['no_ktp']}}</td>
                </tr>
            @endforeach
        </table> <hr>
        <h2>Transaksi</h2>
        <table border=1>
            <tr>
                <td>No Transaksi</td>
                <td>Id Pengunjung</td>
                <td>Id Karyawan</td>
                <td>Jumlah Kamar</td>
                <td>Tanggal Masuk</td>
                <td>Tanggal Keluar</td>
                <td>Lama Nginap</td>
                <td>Total</td>
            </tr>
            @foreach ($transaksi as $data)
                <tr>
                    <td>{{ $data['no_transaksi']}}</td>
                    <td>{{ $data['id_pengunjung'] }}</td>
                    <td>{{ $data['id_karyawan'] }}</td>
                    <td>{{ $data['jmlh_kamar']}}</td>
                    <td>{{ $data['tgl_masuk']}}</td>
                    <td>{{ $data['tgl_keluar']}}</td>
                    <td>{{ $data['lama_nginap']}}</td>
                    <td>{{ $data['total_harga']}}</td>
                </tr>
            @endforeach
        </table> <hr>
    <h2>Detail Transaksi</h2>
    <table border=1>
        <tr>
            <td>Id Transaksi</td>
            <td>No Transaksi</td>
            <td>No Kamar</td>
        </tr>
        @foreach ($detail_transaksi as $data)
            <tr>
                <td>{{ $data['id_dtl_transaksi']}}</td>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['no_kamar'] }}</td>
            </tr>
        @endforeach
    </table> <hr>
    <h2>Kamar</h2>
    <table border=1>
        <tr>
            <td>No Kamar</td>
            <td>Jenis</td>
            <td>Harga</td>
        </tr>
        @foreach ($kamar as $data)
            <tr>
                <td>{{ $data['no_kamar']}}</td>
                <td>{{ $data['jenis_kamar'] }}</td>
                <td>{{ $data['harga'] }}</td>
            </tr>
        @endforeach
    </table>
</center>
    </fieldset>
</body>
</html>