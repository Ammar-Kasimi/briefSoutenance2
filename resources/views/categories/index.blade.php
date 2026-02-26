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
            <div class="flex space-x-4">
                <a href="" class="font-medium">Retour à la Colocation</a>
            </div>
        </div>
    </nav>
    <main class="container mx-auto mt-8 p-4 max-w-4xl">
        <h1 class="text-2xl font-bold mb-6">Gestion des Catégories</h1>
        <div class="bg-white p-6 rounded shadow mb-8">
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Ajouter une Catégorie</h2>
            <form action="" method="" class="flex flex-col md:flex-row gap-4">
                @csrf
                <input type="text" name="" required placeholder="Nom de la catégorie" class="flex-grow border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded font-semibold hover:bg-blue-700 transition">Ajouter</button>
            </form>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Catégories Existantes</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="p-3 border-b font-semibold">Nom de la Catégorie</th>
                            <th class="p-3 border-b font-semibold w-32">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50 transition border-b">
                            <td class="p-3 text-gray-800 font-medium">{{-- --}}</td>
                            <td class="p-3 flex space-x-2">
                                <a href="" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600 transition">Éditer</a>
                                <form action="" method="">
                                    @csrf
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700 transition">Suppr.</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>