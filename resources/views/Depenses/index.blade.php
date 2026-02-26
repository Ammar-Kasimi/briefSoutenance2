@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Liste des Dépenses</h2>
        <a href="expenses/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Nouvelle Dépense
        </a>
    </div>

    <div class="bg-white p-4 rounded shadow-sm mb-6 border border-gray-200">
        <form action="" method="GET" class="flex items-end space-x-4">
            <div class="flex flex-col">
                <label for="month" class="text-sm text-gray-600 mb-1">Filtrer par mois :</label>
                <select name="month" id="month" class="border border-gray-300 p-2 rounded w-64">
                    <option value="all">Tous les mois</option>
                    <option value="02-2026">Février 2026</option>
                    <option value="01-2026">Janvier 2026</option>
                </select>
            </div>
            <button type="submit" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 border border-gray-300">
                Filtrer
            </button>
        </form>
    </div>

    <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 text-gray-600 uppercase text-sm font-semibold">
                <tr>
                    <th class="p-4 border-b">Date</th>
                    <th class="p-4 border-b">Titre</th>
                    <th class="p-4 border-b">Catégorie</th>
                    <th class="p-4 border-b">Payé par</th>
                    <th class="p-4 border-b text-right">Montant</th>
                    <th class="p-4 border-b text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="hover:bg-gray-50 border-b">
                    <td class="p-4">24/02/2026</td>
                    <td class="p-4 font-medium">Courses Carrefour</td>
                    <td class="p-4"><span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Nourriture</span></td>
                    <td class="p-4">Alice</td>
                    <td class="p-4 text-right font-bold">45.00 MAD</td>
                    <td class="p-4 text-center">
                        <button class="text-red-500 hover:text-red-700 delete-confirm font-medium">Supprimer</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 border-b">
                    <td class="p-4">23/02/2026</td>
                    <td class="p-4 font-medium">Facture Internet</td>
                    <td class="p-4"><span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Factures</span></td>
                    <td class="p-4">Bob</td>
                    <td class="p-4 text-right font-bold">300.00 MAD</td>
                    <td class="p-4 text-center">
                        <button class="text-red-500 hover:text-red-700 delete-confirm font-medium">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection