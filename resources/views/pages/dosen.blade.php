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
        <legend>
            Data Dosen
        </legend>
        @foreach($dosen as $data)
            Nama Dosen : {{$data['nama']}} <br>
            Mata Kuliah : {{$data['mata_kuliah']}} <br><br>

            <?php $nilai_0 = 0?>

            Mahasiswa Pembimbing: <br>
            @foreach($data['mahasiswa'] as $siswa)
                <br>{{$siswa['nama']}} : {{$siswa['nilai']}} 
                @if($siswa['nilai'] >= 90 && 100)
                    (Grade A)
                @elseif($siswa['nilai'] >= 80 && 89)
                    (Grade B)
                @elseif($siswa['nilai'] >= 70 && 79)
                    (Grade C) 
                @elseif($siswa['nilai'] >= 50 && 69)
                    (Grade D)
                @endif
                <?php $nilai_0 += $siswa['nilai'] ?>
            @endforeach
            <br>
            Total Nilai : {{$nilai_0}}

            <?php $rata = $nilai_0 / count($data['mahasiswa'])?>
            <br>
            Rata-rata : {{$rata}}
            <br>
            @if($rata >= 90)
                Grade dari dosen {{$data['nama']}} : A
            @elseif($rata >= 80)
                Grade dari dosen {{$data['nama']}} : B
            @elseif($rata >= 70)
                Grade dari dosen {{$data['nama']}} : C
            @elseif($rata >= 60)
                Grade dari dosen {{$data['nama']}} : D
            @endif
            <hr>
        @endforeach
    </fieldset>
</body>
</html>