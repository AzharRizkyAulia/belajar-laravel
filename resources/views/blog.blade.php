<html>

    <head>
        <title>Blog</title>
    </head>

    <body>
        <h3>Tampilan Data</h3>
        <ul>
            @foreach($data as $data2)
            Id      : {{ $data2['id']       }} <br>
            Title   : {{ $data2['title']    }} <br>
            Content : {{ $data2['content']  }} <br>
            <hr>
            @endforeach
        </ul>
    </body>
    
</html>