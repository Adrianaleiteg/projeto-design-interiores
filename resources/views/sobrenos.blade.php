{{-- home.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Inicial</title>
    @push('styles')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('https://migo22.my.canva.site/home/_assets/media/6711a413591c42cd5d8027fae0ec5ab0.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            color: #fff;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            margin: 0 10px;
        }

        .btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            p {
                font-size: 1rem;
            }
            
            .btn {
                display: block;
                margin: 10px auto;
                width: 80%;
            }
        }
    </style>
    @endpush
</head>
<body>
    <div class="overlay">
        <div class="content">
            <h1>{{ $pageTitle ?? 'Bem-vindo ao Nosso Site' }}</h1>
            <p>{{ $pageDescription ?? 'Descrição do seu site ou mensagem de boas-vindas.' }}</p>
            
            <div class="cta-buttons">
                <a href="{{ route('sobre') }}" class="btn">Sobre Nós</a>
                <a href="{{ route('contato') }}" class="btn">Contato</a>
            </div>
        </div>
    </div>
</body>
</html>