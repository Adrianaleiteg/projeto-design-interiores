<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Solicitações</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Playfair Display', serif;
            background: url('/img/requestsphoto.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar .logo {
            font-weight: bold;
        }

        .topbar .menu a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            padding-top: 60px;
        }

        .title {
            font-size: 48px;
            color: #000;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #e7a742;
            color: white;
            border: none;
            padding: 15px 40px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 40px;
        }

        .search-box {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-box input {
            padding: 10px 20px;
            border-radius: 30px;
            border: 2px solid #000;
            width: 300px;
        }

        .search-box i {
            margin-left: -35px;
            color: #000;
            cursor: pointer;
            font-size: 18px;
        }

        .requests-box {
            background-color: rgba(33, 33, 33, 0.5);
            border-radius: 30px;
            padding: 30px;
            width: 340px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .request-item {
            color: white;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="logo">JESSICA’S DESIGN</div>
        <div class="menu">
            <a href="#">HOME</a>
            <a href="#">LOGOUT</a>
            <a href="#">TASKS</a>
            <a href="#">PROJETOS</a>
        </div>
    </div>

    <div class="container">
        <h1 class="title">SOLICITAÇÕES</h1>
        <button class="btn">RESPONDA EM 2 DIAS</button>

        <div class="search-box">
            <input type="text" placeholder="Pesquisar...">
            <i>🔍</i>
        </div>

        <div class="requests-box">
            <div class="request-item">Solicitação 1 - Jhon Doe</div>
            <div class="request-item">Solicitação 2 - Jane Smith</div>
            <div class="request-item">Solicitação 3 - Lucas Lima</div>
            <div class="request-item">Solicitação 4 - Maria Souza</div>
        </div>
    </div>
</body>
</html>
