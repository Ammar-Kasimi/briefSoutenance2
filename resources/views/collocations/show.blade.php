<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="" class="text-xl font-bold">EasyColoc</a>
            <div class="flex items-center space-x-4">
                <a href="" class="font-medium hover:text-gray-200">Dashboard</a>
                <a href="" class="font-medium hover:text-gray-200">Profil</a>
                <a href="" class="font-medium text-yellow-300 hover:text-yellow-100"></a>
                <form action="" method="">
                    @csrf
                    <button type="submit" class="font-medium bg-blue-700 px-3 py-1 rounded hover:bg-blue-800 transition">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto mt-8 p-4 md:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <h1 class="text-2xl font-bold mb-4 md:mb-0"></h1>
            <div class="flex space-x-2">
                <a href="{{route('collocations.categories.index',$collocation)}}" class="bg-blue-500 text-white px-4 py-2 rounded font-medium hover:bg-blue-600 transition">Catégories</a>
                <a href="" class="bg-gray-600 text-white px-4 py-2 rounded font-medium hover:bg-gray-700 transition">Paramètres</a>
                <form action="" method="">
                    @csrf
                    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded font-medium hover:bg-yellow-600 transition">Quitter</button>
                </form>
                <form action="" method="">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded font-medium hover:bg-red-700 transition">Annuler</button>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-8">
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Membres</h2>
                    <ul class="space-y-3 mb-6">
                        <li class="flex justify-between items-center p-3 bg-gray-50 rounded border">
                            <div>
                                <span class="font-medium"></span>
                                <span class="text-xs text-white bg-blue-500 px-2 py-0.5 rounded ml-2"></span>
                                <span class="text-xs text-green-600 font-bold ml-2"></span>
                            </div>
                            <form action="" method="">
                                @csrf
                                <button type="submit" class="text-red-600 text-sm font-semibold hover:underline">Retirer</button>
                            </form>
                        </li>
                    </ul>
                    <form action="" method="" class="flex flex-col space-y-2">
                        @csrf
                        <input type="email" name="" required placeholder="Email pour inviter" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Envoyer l'invitation</button>
                    </form>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Qui doit à qui</h2>
                    <ul class="space-y-4">
                        <li class="flex flex-col p-4 border border-gray-200 bg-gray-50 rounded shadow-sm">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-bold text-gray-800"></span>
                                <svg class="w-5 h-5 text-gray-400 mx-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                <span class="font-bold text-gray-800"></span>
                            </div>
                            <div class="flex justify-between items-end mt-2">
                                <p class="text-2xl font-black text-red-600"></p>
                                <form action="" method="">
                                    @csrf
                                    <input type="hidden" name="" value="">
                                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-700 transition">Marquer Payé</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="space-y-8">
                <div class="bg-white p-6 rounded shadow border-t-4 border-blue-600">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Ajouter une Dépense</h2>
                    <form action="" method="" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @csrf
                        <input type="text" name="" required placeholder="Titre (ex: Courses)" class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="number" step="0.01" min="0" name="" required placeholder="Montant" class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="date" name="" required class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select name="" placeholder="choose a category" required class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        
                        @foreach($collocation->categories as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                            <option disabled selected hidden>choose a category</option>   
                        </select>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold md:col-span-2 hover:bg-blue-700 transition">Enregistrer la dépense</button>
                    </form>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold mb-2 md:mb-0">Historique des Dépenses</h2>
                        <form action="" method="" class="flex gap-2">
                            @csrf
                            <input type="month" name="" class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="bg-gray-200 px-4 py-2 rounded font-medium hover:bg-gray-300 transition">Filtrer</button>
                        </form>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700">
                                    <th class="p-3 border-b font-semibold">Date</th>
                                    <th class="p-3 border-b font-semibold">Titre</th>
                                    <th class="p-3 border-b font-semibold">Catégorie</th>
                                    <th class="p-3 border-b font-semibold">Payé par</th>
                                    <th class="p-3 border-b font-semibold text-right">Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50 transition border-b">
                                    <td class="p-3 text-gray-600 text-sm"></td>
                                    <td class="p-3 font-bold text-blue-600"></td>
                                    <td class="p-3 text-gray-600 text-sm"></td>
                                    <td class="p-3">
                                        <span class="bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded"></span>
                                    </td>
                                    <td class="p-3 text-gray-800 font-bold text-right"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>