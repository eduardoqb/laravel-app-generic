<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 pt-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-muted text-center pt-3">Iniciar Sesión</h2>
                        <form method="post" action="/entrar">
                            @csrf
                            <div class="row">
                                <div class="col py-3">
                                    <label for="email" class="form-label fw-bold fs-5">
                                        Usuario o correo
                                    </label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col py-3">
                                    <label for="password" class="form-label fw-bold fs-5">
                                        Contraseña
                                    </label>
                                    <br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>
                            @if(session('info'))
                            {{ session('info') }}
                            @endif
                            <div class="row">
                                <div class="col py-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>