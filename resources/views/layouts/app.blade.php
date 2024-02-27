<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Name')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css">
    <!-- Custom CSS -->

    <style>

        body {

            padding-top: 5rem;

        }

        .starter-template {

            padding: 3rem 1.5rem;

            text-align: center;

        }

        .foto-container {

        border: 1px solid #ddd;

        padding: 15px;

        margin-bottom: 20px;

        transition: transform .2s; /* Animation */

    }


    .foto-container:hover {

        transform: scale(1.05); /* (110% zoom - Feel free to change it) */

        box-shadow: 0 4px 8px rgba(0,0,0,.05);

    }


    .foto-thumbnail {

        width: 100%;

        height: 200px; /* Adjust the height of the images */

        object-fit: cover; /* Make the images cover the area */

    }


    .foto-title {

        font-size: 18px;

        color: #007bff;

        margin-top: 15px;

    }


    .foto-description {

        background-color: #f8f9fa;

        padding: 10px;

        margin-top: 10px;

        border-radius: 5px;

        font-size: 14px;

    }

   

    .foto-title a {

        color: #000; /* Warna default dari judul */

        text-decoration: none; /* Menghilangkan garis bawah */

        transition: color 0.3s; /* Membuat transisi warna halus */

    }


    .foto-title a:hover {

        color: #800000; /* Warna maroon saat hover */

        cursor: pointer; /* Mengubah cursor menjadi tangan */

    }

    h1{
        font-size: 40px;
        font-weight: bolder;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-shadow: 3px 3px 4px #000;
        animation: color 3s infinite;
    }

    @keyframes color {
        0%{color:rgb(239, 12, 57)}
        10%{color:rgb(216, 231, 13)}
        20%{color:rgb(12, 239, 31)}
        30%{color:rgb(231, 12, 239)}
        40%{color:rgb(12, 239, 197)}
        50%{color:rgb(95, 12, 239)}
        60%{color:rgb(238, 238, 238)}
        70%{color:rgb(28, 45, 40)}
        80%{color:rgb(239, 114, 12)}
        90%{color:rgb(12, 152, 239)}
        100%{color:rgb(228, 239, 12)}
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Photo Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/album">Album</a>
                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('foto.index') }}">Foto</a>
    
                </li>
                @guest

            <li class="nav-item">

                <a class="nav-link" href="/signup">Signup</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="/login">Login</a>

            </li>

            @endguest
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Signup</a>
                </li>

                <li class="nav-item">
                    @if (Auth::check())
                        <form action="{{ route('auth.logout') }}" method="POST" style="display:none;" id="logout-form">
                            @csrf
                        </form>
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">
        <div class="starter-template">
            @yield('content')
        </div>
    </main>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>
</html>
