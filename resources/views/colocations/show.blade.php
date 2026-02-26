@extends('layouts.app')

@section('content')
    <div class="mb-8 border-b pb-4 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Ma Coloc: "Appartement Centre"</h1>
            <p class="text-gray-500 mt-1">Code d'invitation: <span class="font-mono bg-gray-200 px-2 rounded">INV-X892</span></p>
        </div>
        <a href="/expenses/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-bold shadow-sm">
            + Nouvelle Dépense
        </a>
    </div>

    <div class="flex space-x-8 mb-12">
        
        <div class="w-1/3">
            <h3 class="text-xl font-bold mb-4">Membres</h3>
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                <ul>
                    <li class="p-4 border-b flex justify-between items-center">
                        <div><span class="font-bold">Alice (Owner)</span></div>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Moi</span>
                    </li>
                    <li class="p-4 border-b flex justify-between items-center">
                        <div><span class="font-bold">Bob</span></div>
                        <button class="text-red-500 text-sm hover:underline">Retirer</button>
                    </li>
                </ul>
            </div>
             <div class="mt-4 bg-gray-50 p-4 rounded border border-gray-200">
                <h4 class="font-bold text-sm text-gray-700 mb-2">Inviter un membre</h4>
                <form class="flex gap-2">
                    <input type="email" placeholder="email@exemple.com" class="w-full p-1 border rounded text-sm">
                    <button class="bg-blue-600 text-white px-2 rounded text-sm">OK</button>
                </form>
            </div>
        </div>

        <div class="w-2/3">
            <h3 class="text-xl font-bold mb-4">Équilibrage (Qui doit à qui)</h3>
            <div class="grid grid-cols-1 gap-4">
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-red-500 flex justify-between items-center">
                    <div>
                        <p class="text-lg text-gray-700">
                            <span class="font-bold text-red-600">Bob</span> doit 
                            <span class="font-bold text-black">150.00 MAD</span> à 
                            <span class="font-bold text-green-600">Alice</span>
                        </p>
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded text-sm">Marquer Payé</button>
                </div>
            </div>
        </div>
        
    </div>

    <div class="border-t pt-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Historique des Dépenses</h2>
            
            <form action="" method="GET" class="flex items-center space-x-2">
                <label for="month" class="text-sm font-semibold text-gray-600">Mois :</label>
                <select name="month" class="border border-gray-300 p-2 rounded focus:outline-none">
                    <option value="all">Tout voir</option>
                    <option value="2026-02">Février 2026</option>
                    <option value="2026-01">Janvier 2026</option>
                </select>
                <button type="submit" class="bg-gray-200 text-gray-700 px-3 py-2 rounded hover:bg-gray-300 border">Filtrer</button>
            </form>
        </div>

        <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-semibold">
                    <tr>
                        <th class="p-4">Date</th>
                        <th class="p-4">Titre</th>
                        <th class="p-4">Catégorie</th>
                        <th class="p-4">Payé par</th>
                        <th class="p-4 text-right">Montant</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="p-4">24/02/2026</td>
                        <td class="p-4 font-medium">Courses</td>
                        <td class="p-4"><span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Nourriture</span></td>
                        <td class="p-4">Alice</td>
                        <td class="p-4 text-right font-bold">450.00 MAD</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="p-4">20/02/2026</td>
                        <td class="p-4 font-medium">Internet</td>
                        <td class="p-4"><span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Factures</span></td>
                        <td class="p-4">Bob</td>
                        <td class="p-4 text-right font-bold">300.00 MAD</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection