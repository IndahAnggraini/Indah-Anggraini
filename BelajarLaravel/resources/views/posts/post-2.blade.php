<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/assets/css/style.css">
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .header, .footer{
                background-color: yellow;
                width: 100%;
                height: 50px;
                border: 2px solid black;
                text-align: center;
            }
            .header h1, .footer h1{
                margin-top: 6px;
                margin-bottom: 0;
            }
            .clear::after{
                content: "";
                clear: both;
                display: table;
            }
            .footer{
                float: left;
                margin-top: 14px;
            }
            .menu{
                background-color: yellow;
                width: 20%;
                height: 420px;
                border: 2px solid black;
                margin-top: 14px;

                float: left;
                padding: 14px 7px;
            }
            .content{
                background-color: gray;
                width: 75%;
                float: right;
                height: 420px;
                display: inline-block;
                margin-top: 14px;
                margin-left: 14px;
                border: 2px solid black;
                padding: 14px 7px;
            }
            .content .navbar{
                background-color: yellow;

                border: 2px solid black;
                height: 32px;
                padding-top: 14px;
            }
            .content .navbar ul{
                list-style-type: none;
                padding-left: 0px;
                margin-left: 7px;
                display: inline;
            }
            .content .navbar ul li{
                display: inline;
                border: 2px solid black;
                border-radius: 7px;
                background-color: aqua;
                padding: 4px 21px;
            }
            .content .navbar h4{
                display: inline;
                margin-left: 35px;
            }
            .content .isi{
                background-color: aqua;
                margin-top: 14px;
                padding: 0px 7px;
                border: 2px solid black;
                height: 357px;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <h1>Header</h1>
        </div>

        <div class="menu">
            <h3>Menu</h3>
        </div>

        <div class="content">
            <div class="navbar">
            <ul>

                @foreach ($data1 as $d)
                    <li>{{$d}} </li> 
                @endforeach

            </ul>
            <h4>Navbar with button</h4>
             </div>


        <div class="isi">
            <p>ajhdgvaahdvhjbsjk abshabdhajdbha jhabdjhab jnajsn andja
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui repellendus voluptatum incidunt amet quidem deleniti iste consectetur voluptas aperiam aut exercitationem vitae pariatur, non atque sapiente. Voluptas consectetur vel iusto!
            </p>
        </div>
    </div>

    <div class="clear"></div>

    <div class="footer">
        <h1>Footer</h1>
    </div>

    </body>
</html>
