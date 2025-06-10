<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jessica's Design</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: url('/img/loginphoto.png') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
        }

        .logo {
            font-weight: bold;
            font-size: 1.2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-left: 20px;
        }

        .login-container {
            color: #fff;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
        background-color: rgba(33, 33, 33, 0.5); /* mais escuro */
        backdrop-filter: blur(10px);
        padding: 60px 50px;
        border-radius: 30px;
        max-width: 750px;
        width: 100%;
        text-align: center;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        .login-box h4 {
            color: #fff;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            font-weight: 700;
            font-size: 1rem;
        }

        .login-box h2 {
            color: #fff;
            font-size: 2.2rem;
            margin-bottom: 30px;
            font-weight: 800;
        }

        .login-box input {
            width: 100%;
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 40px;
            border: 2px solid #fff;
            background-color: transparent;
            color: #ded2d2;
            font-size: 1rem;
        }

        .login-box input::placeholder {
            color: #ffffff;
            font-weight: 500;
        }

        .login-box a {
            font-size: 0.85rem;
            color: #fff;
            text-decoration: none;
            display: block;
            margin-bottom: 25px;
            opacity: 0.8;
        }

        .login-box button {
            padding: 12px 40px;
            background-color: #000;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            transition: background 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        .login-box button:hover {
            background-color: #222;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">JESSICA’S DESIGN</div>
        <nav>
            <a href="/">HOME</a>
            <a href="#">SOBRE NÓS</a>
        </nav>
    </header>

    <div class="login-container">
        <div class="login-box">
            <h4>SEJA BEM-VINDO DE VOLTA!</h4>
            <h2>Acesse sua conta agora mesmo</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="email" required>
                <input type="password" name="password" placeholder="Password" required>
                {{-- <a href="{{ route('password.request') }}">Forgot Password?</a> --}}
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
