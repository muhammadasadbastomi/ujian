<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid #708090;
        }

        th {
            background-color: rgb(154, 151, 151);
            text-align: center;
            color: aliceblue;
        }

        td {
            text-align: center;
            margin-left: 10px !important;
        }

        br {
            margin-bottom: 5px !important;
        }

        .judul {
            text-align: center;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }

        .pemko {
            width: 150px;
        }

        .logo {
            float: left;
            margin-right: 0px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }

        hr {
            margin-top: 10%;
            height: 4px;
            background-color: black;
            width: 100%;
        }

        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }

        .text-right {
            text-align: right;
        }

        .isi {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">LAPORAN BUKU</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama Anggota</th>
                        <th scope="col" class="text-center">Id Anggota</th>
                        <th scope="col" class="text-center">alamat Anggota</th>
                        <th scope="col" class="text-center">Buku yang Dipinjam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ujian as $u)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            {{-- <td class="text-center"><img src="img/ujian/{{$u->foto}}" width="40" class="rounded-circle" alt="Cinque Terre"></td> --}}
                            <td class="text-center">{{ $u->nama }}</td>
                            <td class="text-center">{{ $u->id_anggota }}</td>
                            <td class="text-center">{{ $u->alamat }}</td>
                            <td class="text-center">{{ $u->buku }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

        </div>
    </div>
</body>

</html>
