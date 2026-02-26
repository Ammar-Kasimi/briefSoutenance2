<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{-- --}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <nav class="bg-gray-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="" class="text-xl font-bold">EasyColoc Admin</a>
            <div class="flex space-x-4">
                <a href="" class="font-medium hover:text-gray-300">Retour</a>
                <form action="" method="">
                    @csrf
                    <button type="submit" class="font-medium bg-red-600 px-3 py-1 rounded">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="container mx-auto mt-8 p-4">
        <h1 class="text-2xl font-bold mb-6">Statistiques Globales</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-6 rounded shadow border-l-4 border-blue-500">
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Utilisateurs</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{-- --}}</p>
            </div>
            <div class="bg-white p-6 rounded shadow border-l-4 border-green-500">
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Colocations</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{-- --}}</p>
            </div>
            <div class="bg-white p-6 rounded shadow border-l-4 border-yellow-500">
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Dépenses</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{-- --}}</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded shadow mb-8">
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Utilisateurs</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="p-3 border-b font-semibold">Nom</th>
                            <th class="p-3 border-b font-semibold">Email</th>
                            <th class="p-3 border-b font-semibold">Statut</th>
                            <th class="p-3 border-b font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50 transition border-b">
                            <td class="p-3 font-medium">{{-- --}}</td>
                            <td class="p-3 text-gray-600">{{-- --}}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-800">{{-- --}}</span>
                            </td>
                            <td class="p-3">
                                <form action="" method="" class="inline-block">
                                    @csrf
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700 transition">Bannir</button>
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