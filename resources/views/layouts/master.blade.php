<!doctype html>
<html lang="en">
  <head>
    <title>my laravel | crud app | tutorials | aws</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://kit.fontawesome.com/3d9e5fe33e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
  </head>
  <body>
    {{-- navigation --}}
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark shadow-sm">
        <div class=" container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h3>LOGO</h3>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class=" nav-item">
                    <a href="{{ url('/') }}" class=" nav-link">Home</a>
                </li>
                <li class=" nav-item">
                    <a href="{{ route('articles.index') }}" class=" nav-link">Articles</a>
                </li>
                <li class=" nav-item">
                    <a href="{{ route('posts.index') }}" class=" nav-link">Posts</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    {{-- end navigation --}}
    {{-- content --}}
        <main class=" container py-4">
            @yield('content')
        </main>
    {{-- end content --}}
    {{-- footer --}}
    <div class=" bg-secondary text-white p-1">
        <div class=" container">
            <div class=" w3-center w3-bottombar">
                <a href="{{ url('contact') }}" class=" btn btn-primary">Contact</a>
                <a href="{{ url('about') }}" class=" btn btn-primary">About</a>
                <a href="" class=" btn btn-primary">GitHub</a>
                <a href="" class=" btn btn-primary">Linkedin</a>
            </div>
            <div class="w3-center">
                <div class="">&copy; 2022. All Right Reserve</div>
                <div class=""><a href="{{ url('/') }}" style="color: white; text-decoration:none;">thecloudlearners.com</a></div>
            </div>
        </div>
    </div>
    {{-- end footer --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
