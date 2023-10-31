<!DOCTYPE html>
<html>
<head>
    <title>CRUD CRISTIAN HEBEL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('productos.index') }}">
            <i class="fas fa-home"></i> Inicio
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('almacenes.index') }}">
                        <i class="fas fa-warehouse"></i> Gestión
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    
    <div class="container">
        @yield('content')
    </div>


    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p class="mt-1 mb-1">&copy; {{ date('Y') }} CRUD CRISTIAN HEBEL</p>
    </footer>
    
</body>
</html>
