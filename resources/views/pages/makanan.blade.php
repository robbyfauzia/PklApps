<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if ($a == 'ayam goreng')
        <br>Pesanan : {{ $a }}
        <br>harga : Rp.150000
    @elseif ($a == 'lobster')
        <br>Pesanan : {{ $a }}
        <br>harga : Rp.20000
    @elseif ($a == 'pizza')
        <br>Pesanan : {{ $a }}
        <br>harga : Rp.50000
    @elseif ($a == 'tiramisu')
        <br>Pesanan : {{ $a }}
        <br>harga : Rp.30000
    @elseif ($a == 'pasta')
        <br>Pesanan : {{ $a }}
        <br>harga : Rp.25000
    @else
        Makanan tidak ada
    @endif

    <hr>
    @if ($b == 'ayam goreng')
        <br>Pesanan : {{ $b }}
        <br>harga : Rp.150000
    @elseif ($b == 'lobster')
        <br>Pesanan : {{ $b }}
        <br>harga : Rp.20000
    @elseif ($b == 'pizza')
        <br>Pesanan : {{ $b }}
        <br>harga : Rp.50000
    @elseif ($b == 'tiramisu')
        <br>Pesanan : {{ $b }}
        <br>harga : Rp.30000
    @elseif ($b == 'pasta')
        <br>Pesanan : {{ $b }}
        <br>harga : Rp.25000
    @else
        Makanan tidak ada
    @endif

</body>

</html>
