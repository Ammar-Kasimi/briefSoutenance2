@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-8 text-red-700">Administration Globale</h1>

    <div class="grid grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded shadow border-l-4 border-blue-500">
            <h3 class="text-gray-500 font-bold">Colocations Actives</h3>
            <p class="text-3xl font-bold">12</p>
        </div>
        <div class="bg-white p-6 rounded shadow border-l-4 border-green-500">
            <h3 class="text-gray-500 font-bold">Total Dépenses</h3>
            <p class="text-3xl font-bold">15,430 MAD</p>
        </div>
        <div class="bg-white p-6 rounded shadow border-l-4 border-purple-500">
            <h3 class="text-gray-500 font-bold">Utilisateurs</h3>
            <p class="text-3xl font-bold">45</p>
        </div>
    </div>

    <div class="bg-white rounded shadow border border-gray-200">
        <div class="p-4 border-b bg-gray-50">
            <h2 class="font-bold text-lg">Gestion des Utilisateurs</h2>
        </div>
        <table class="w-full text-left">
            <thead class="bg-gray-100 text-gray-600 text-sm">
                <tr>
                    <th class="p-4">Nom</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Statut</th>
                    <th class="p-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="p-4">Jean Dupont</td>
                    <td class="p-4">jean@example.com</td>
                    <td class="p-4"><span class="text-green-600 font-bold">Actif</span></td>
                    <td class="p-4 text-center">
                        <form action="" method="POST">
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">
                                Bannir
                            </button>
                        </form>
                    </td>
                </tr>
                <tr class="border-b bg-red-50">
                    <td class="p-4">Hacker123</td>
                    <td class="p-4">hacker@bad.com</td>
                    <td class="p-4"><span class="text-red-600 font-bold">Banni</span></td>
                    <td class="p-4 text-center">
                        <form action="" method="POST">
                            <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded text-sm hover:bg-gray-600">
                                Débannir
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection