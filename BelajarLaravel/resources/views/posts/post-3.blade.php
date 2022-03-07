<html>
    <head>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <form action="/save" method="post">
                @csrf
                <input type="text" name="nama" placeholder="name">
                <input type="password" name="pass" placeholder="password">
                <input type="submit" value="OK">
        </form>
    </body>
</html>