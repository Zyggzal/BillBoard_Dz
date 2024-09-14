<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="/"><img style="width: 80px; height:80px;" src="/images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   <li class="nav-item">
                       <a class="nav-link" href="#">Nothing</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Here</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Yet</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <main class="container-fluid bg-dark p-3">
        @yield("main")
    </main>
    <footer class="w-100 p-3 container-fluid fixed-bottom bg-dark text-white text-center">
        &copy; IT STEP <?php echo date("Y")?>
    </footer>
</body>
</html>
