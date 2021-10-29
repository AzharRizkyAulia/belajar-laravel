<html>

    <head>
        <title>Absen</title>
    </head>

    <body>
    <center>
    <table border=1>
        <tr>
        <th colspan=5><h2>Data Absen</h2></th>
        </tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
            @foreach($absen as $data2)
            <tr>
                <td>{{ $data2['nis']       }}</td>
                <td>{{ $data2['nama']      }}</td>
                <td>{{ $data2['jk']        }}</td>
                <td>{{ $data2['kelas']     }}</td>
                <td>{{ $data2['alamat']    }}</td>
            </tr>
            @endforeach
    </table>
        </center>
    </body>
    
</html>