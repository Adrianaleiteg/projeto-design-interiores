<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Planner</title>
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
            padding: 20px;
        }

        .planner-title {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .planner-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .column {
            background-color: #b0a89f;
            border-radius: 40px;
            padding: 20px;
            width: 160px;
            min-height: 300px;
            text-align: center;
        }

        .column h3 {
            margin-bottom: 15px;
        }

        .task-card {
            background-color: #8c8985;
            color: white;
            padding: 10px;
            margin-top: 10px;
            border-radius: 15px;
        }

        .add-button {
            position: absolute;
            top: 170px;
            right: 60px;
            background-color: black;
            color: white;
            font-size: 24px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
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
            <a href="/projects">PROJETOS</a> |
            <a href="/requests">SOLICITAÇÕES</a>
        </div>
    </nav>

    <main>
        <div class="planner-title">PLANNER</div>
        <div class="planner-container">
            <div class="column">
                <h3>TO DO</h3>
                <div class="task-card">Revisar contrato do cliente SC#</div>
            </div>
            <div class="column">
                <h3>DOING</h3>
            </div>
            <div class="column">
                <h3>DONE</h3>
            </div>
            <div class="column">
                <h3>OVERDUE</h3>
            </div>
        </div>
        <div class="add-button">+</div>
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
