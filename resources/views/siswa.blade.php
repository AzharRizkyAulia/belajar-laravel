<html>

    <head>
        <title>Blog</title>
    </head>

    <body>
        <h3>Hasil
        <ul>
            @foreach($siswas as $siswas2)
            Id      : {{ $siswas2['id']       }} <br>
            Nama    : {{ $siswas2['nama']    }} <br>
            username: {{ $siswas2['username']  }} <br>
            email   : {{ $siswas2['email']  }} <br>
            alamat  : {{ $siswas2['alamat']  }} <br>
            mapel : 
                @foreach($siswas2['mapel'] as $mapel)
                    <ul>
                    <li>{{$mapel['pelajaran']}}</li>
                    </ul>
                @endforeach
            @endforeach
        </ul>
        </h3>
    </body>
    
</html>