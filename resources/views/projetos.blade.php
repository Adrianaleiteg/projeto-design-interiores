<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: white;
        }

        nav, footer {
            background-color: #777;
            color: white;
            font-weight: bold;
            padding: 10px 40px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-left {
            font-size: 16px;
        }

        .nav-right a {
            color: white;
            text-decoration: none;
            margin: 0 8px;
            font-size: 14px;
        }

        .nav-right a:hover {
            text-decoration: underline;
        }

        main {
            flex: 1;
            padding: 40px 20px;
        }

        .projects-container {
            display: flex;
            justify-content: center;
            gap: 80px;
            flex-wrap: wrap;
        }

        .project-column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .project-column h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .search-box {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-box input {
            width: 180px;
            padding: 8px;
            border-radius: 20px 0 0 20px;
            border: 2px solid #000;
            outline: none;
        }

        .search-box button {
            padding: 8px 12px;
            border: 2px solid #000;
            border-left: none;
            background-color: white;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
        }

        .project-box {
            background-color: #a79f95;
            border-radius: 40px;
            padding: 20px;
            width: 220px;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .project-card {
            background-color: #8c8985;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 20px;
            width: 100%;
            text-align: center;
        }

        footer {
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 8px;
            font-size: 14px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer div {
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-left">JESSICA’S DESIGN</div>
        <div class="nav-right">
            <a href="/">HOME</a> |
            <a href="/logout">LOGOUT</a> |
            <a href="/tasks">TASKS</a> |
            <a href="/projects">PROJETOS</a>
        </div>
    </nav>

    <main>
        <div class="projects-container">
            <!-- Coluna Aberto -->
            <div class="project-column">
                <h2>ABERTO</h2>
                <div class="search-box">
                    <input type="text" placeholder="Buscar...">
                    <button>🔍</button>
                </div>
                <div class="project-box">
                </div>
            </div>

            <!-- Coluna Fechado -->
            <div class="project-column">
                <h2>FECHADO</h2>
                <div class="search-box">
                    <input type="text" placeholder="Buscar...">
                    <button>🔍</button>
                </div>
                <div class="project-box">
                </div>
            </div>
        </div>
    </main>

    <footer>
        JESSICA’S DESIGN
        <div>
            <a href="/">HOME</a> |
            <a href="/logout">LOGOUT</a> |
            <a href="/tasks">TASKS</a> |
            <a href="/projects">PROJETOS</a>
        </div>
    </footer>

</body>
</html>
