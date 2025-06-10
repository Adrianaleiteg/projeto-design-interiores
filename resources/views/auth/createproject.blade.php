<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Criar Novo Projeto</title>
    <link rel="stylesheet" href="/css/app.css"> <!-- ajuste conforme necessário -->
</head>

<body>
    <div class="container">
        <h1>Criar Novo Projeto</h1>

        <form method="POST" action="{{ route('projetos') }}">
            <input type="hidden" name="_token" value="AQUI_VAI_O_TOKEN_CSRF_MANUAL">

            <div>
                <label for="name">Nome do Projeto</label>
                <input type="text" name="name" required>
            </div>

            <div>
                <label for="cliente_id">Cliente ID</label>
                <input type="number" name="cliente_id" required>
            </div>

            <div>
                <label for="funcionario_id">Funcionário ID</label>
                <input type="number" name="funcionario_id" required>
            </div>

            <div>
                <label for="status">Status</label>
                <input type="text" name="status" required>
            </div>

            <div>
                <label for="etapa_atual">Etapa Atual</label>
                <input type="text" name="estapa_atual" required>
            </div>

            <div>
                <label for="etapa_anterior">Etapa Anterior</label>
                <input type="text" name="etapa_anterior">
            </div>

            <div>
                <button type="button">submit</button>
            </div>
        </form>
    </div>
</body
