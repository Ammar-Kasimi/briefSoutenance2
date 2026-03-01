<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{-- --}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="" class="text-xl font-bold">EasyColoc</a>
            <form action="" method="">
                <button type="submit" class="font-medium bg-blue-700 px-3 py-1 rounded">Déconnexion</button>
            </form>
        </div>
    </nav>
    <main class="container mx-auto mt-8 p-4">
        <h1 class="text-2xl font-bold mb-6">Bienvenue</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded shadow border-t-4 border-blue-600">
                <h2 class="text-xl font-semibold mb-4">Créer une Colocation</h2>
                <form action="{{route('collocation.store')}}" method="POST">
                   @method('POST')
                @csrf
                      
                    <input type="text" name="title" required placeholder="Nom de la colocation" class="w-full border border-gray-300 p-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea name="desc" placeholder="Description" class="w-full border border-gray-300 p-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3"></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700 transition">Créer</button>
                </form>
            </div>
            <div class="bg-white p-6 rounded shadow border-t-4 border-green-600">
                <h2 class="text-xl font-semibold mb-4">Rejoindre une Colocation</h2>
                <form action="" method="">
                    @csrf
                    <input type="text" name="" required placeholder="Token d'invitation" class="w-full border border-gray-300 p-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded font-semibold hover:bg-green-700 transition">Rejoindre</button>
                </form>
            </div>
        </div>
    </main>
    <script src="{{-- --}}"></script>
</body>

</html>