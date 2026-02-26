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
                <a href="" class="font-medium">Retour</a>
            </div>
        </div>
    </nav>
    <main class="container mx-auto mt-8 p-4 max-w-lg">
        <h1 class="text-2xl font-bold mb-6">Paramètres de la Colocation</h1>
        <div class="bg-white p-6 rounded shadow border-t-4 border-yellow-500">
            <form action="" method="" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nom de la Colocation</label>
                    <input type="text" name="" value="{{-- --}}" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea name="" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{-- --}}</textarea>
                </div>
                <div class="flex justify-end space-x-3 pt-4 border-t">
                    <a href="" class="bg-gray-200 text-gray-800 px-4 py-2 rounded font-medium hover:bg-gray-300 transition">Annuler</a>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700 transition">Enregistrer</button>
                </div>
            </form>
        </div>
    </main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>