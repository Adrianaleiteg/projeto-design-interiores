<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Cadastro</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700">Nome</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <label class="block text-gray-700">Senha</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <label class="block text-gray-700">Confirmar Senha</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <label class="block text-gray-700">Nome da empresa</label>
                <input type="text" name="company_name" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div>
                <label class="block text-gray-700">Aniversario</label>
                <input type="dateDMY" name="birth" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition">Registrar</button>
            </div>
        </form>

        <p class="mt-4 text-sm text-center text-gray-600">
            Já tem uma conta?
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Entrar</a>
        </p>
    </div>

</body>

</html>
