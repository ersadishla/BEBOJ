<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mahasiswa)
            <tr>
                <td>{{$mahasiswa->mahasiswa->nrp}}</td>
                <td>{{$mahasiswa->mahasiswa->nama}}</td>
                <td>{{$mahasiswa->matakuliah->nama}}</td>
                <td>{{$mahasiswa->matakuliah->semester}}</td>
                <td>{{$mahasiswa->matakuliah->sks}}</td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</body>
</html>