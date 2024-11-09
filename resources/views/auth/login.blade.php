
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    
    <style>
       
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1, h2, p {
            font-weight: 700; /* Negrita para encabezados */
        }

        input {
            font-weight: 400; /* Regular para campos de texto */
        }

        .btn {
            font-weight: 600; /* Un poco más grueso para los botones */
        }
    </style>
</head>
<body>
    <main class="contenedor">
       
        <div class="contenedor-formulario">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            
                <input type="email" name="email" placeholder="Email: " required>
                <input type="password" name="password" placeholder="Contraseña:">
                
                <div class="opciones-login">
                    <label>
                        <input type="checkbox" name="remember">
                        Recordarme
                    </label>

                    @if (Route::has('password.request'))               
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>

                <input class="btn" type="submit" value="Iniciar sesión">
            </form>
            <span>¿No tienes una cuenta? <a href="#">Regístrate</a></span>
        </div>

        <div class="contenedor-poster">
            <h1></h1>
            <p></p>
        </div>

    </main>
</body>
</html>
