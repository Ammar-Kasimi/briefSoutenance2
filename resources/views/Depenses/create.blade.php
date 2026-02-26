@extends('layouts.app')

@section('content')
    <div class="w-[600px] mx-auto bg-white p-8 rounded-lg shadow-md border border-gray-200">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Ajouter une dépense</h2>

        <form action="" method="POST" id="expenseForm">
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Titre</label>
                <input type="text" name="title" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="Ex: Courses" required>
            </div>

            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label class="block text-gray-700 font-bold mb-2">Montant (MAD)</label>
                    <input type="number" id="amount" name="amount" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="0.00" required>
                    <p id="amountError" class="text-red-500 text-sm mt-1 hidden">Le montant doit être positif.</p>
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 font-bold mb-2">Date</label>
                    <input type="date" name="date" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" required>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Catégorie</label>
                <select name="category_id" class="w-full border border-gray-300 p-2 rounded bg-white">
                    <option value="1">Nourriture</option>
                    <option value="2">Logement</option>
                    <option value="3">Transport</option>
                    <option value="4">Loisirs</option>
                </select>
            </div>

            <div class="flex justify-end space-x-3">
                <a href="/expenses" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Annuler</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enregistrer</button>
            </div>
        </form>
    </div>

    <script>
        const form = document.getElementById('expenseForm');
        const amountInput = document.getElementById('amount');
        const errorMsg = document.getElementById('amountError');

        form.addEventListener('submit', function(event) {
            // Get value
            const amount = parseFloat(amountInput.value);

            // Check if amount is valid
            if (amount <= 0) {
                // Stop form from sending
                event.preventDefault();
                // Show error message (remove 'hidden' class)
                errorMsg.classList.remove('hidden');
                // Add red border to input
                amountInput.classList.add('border-red-500');
            } else {
                errorMsg.classList.add('hidden');
                amountInput.classList.remove('border-red-500');
            }
        });
    </script>
@endsection