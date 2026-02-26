@extends('layouts.app')

@section('content')
    <div class="w-[600px] mx-auto mt-10">
        <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Créer une nouvelle Colocation</h2>
            
            <form action="" method="POST">
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Nom de la colocation</label>
                    <input type="text" name="name" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-blue-500" placeholder="Ex: Résidence Les Palmiers" required>
                    <p class="text-sm text-gray-500 mt-2">Vous deviendrez automatiquement l'administrateur (Owner).</p>
                </div>

                <div class="flex justify-between items-center">
                    <a href="/dashboard" class="text-gray-600 hover:text-gray-800">Retour</a>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 font-bold">
                        Créer et Inviter
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection