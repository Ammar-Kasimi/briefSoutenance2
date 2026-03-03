<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc</title>
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
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="font-medium bg-blue-700 px-3 py-1 rounded hover:bg-blue-800 transition">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto mt-8 p-4 md:px-8">
        
        <div class="bg-white p-6 rounded shadow mb-8 text-center border-t-4 border-blue-600 relative">
            <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-900 px-4 py-1 rounded-full font-bold shadow-sm flex items-center space-x-2">
                <span>Ma Réputation :</span>
                <span class="text-xl">{{ Auth::user()->reputation }}</span>
            </div>
            <h1 class="text-3xl font-bold mb-2">{{ $collocation->title }}</h1>
            <p class="text-gray-600 text-lg">{{ $collocation->description }}</p>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <div></div>
            <div class="flex space-x-2">
                @if(Auth::user()->isOwner == true)
                    <a href="{{route('collocations.categories.index',$collocation)}}" class="bg-blue-500 text-white px-4 py-2 rounded font-medium hover:bg-blue-600 transition">Catégories</a>
                    <a href="" class="bg-gray-600 text-white px-4 py-2 rounded font-medium hover:bg-gray-700 transition">Paramètres</a>
                @endif
                <form action="{{route('collocation.leaveCollocation',Auth::id())}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded font-medium hover:bg-yellow-600 transition">Quitter</button>
                </form>
                <form action="" method="">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded font-medium hover:bg-red-700 transition">Annuler</button>
                </form>
            </div>
        </div>

        <div class="bg-white p-6 rounded shadow mb-8">
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
                        @foreach($collocation->depenses as $dep)
                        <tr class="hover:bg-gray-50 transition border-b">
                            <td class="p-3 text-gray-600 text-sm">{{$dep->created_at}}</td>
                            <td class="p-3 font-bold text-blue-600">{{$dep->title}}</td>
                            <td class="p-3 text-gray-600 text-sm">{{$dep->category->name}}</td>
                            <td class="p-3">
                                <span class="bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded">{{$dep->user->name}}</span>
                            </td>
                            <td class="p-3 text-gray-800 font-bold text-right">{{$dep->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-8">
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Membres</h2>
                    <ul class="space-y-3 mb-6">
                        @foreach($collocation->members as $member)
                        <li class="flex justify-between items-center p-3 bg-gray-50 rounded border">
                            <div>
                                <span class="font-medium">{{ $member->name }}</span>
                                <span class="text-xs text-white bg-blue-500 px-2 py-0.5 rounded ml-2">Reputation: {{ $member->reputation }}</span>
                                <span class="text-xs text-green-600 font-bold ml-2"></span>
                            </div>
                            @if($member->id!=Auth::id())
                            <form action="{{route('collocations.kickMember',$member)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-600 text-sm font-semibold hover:underline">Retirer</button>
                            </form>
                            @else
                            <span class="text-sm text-green-500 italic">(Owner)</span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @if(Auth::user()->isOwner == true)
                    <form action="" method="" class="flex flex-col space-y-2">
                        @csrf
                        <input type="email" name="" required placeholder="Email pour inviter" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Envoyer l'invitation</button>
                    </form>
                    @endif
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Qui doit à qui</h2>
                    <ul class="space-y-4">
                        @foreach(Auth::user()->payments as $payment)
                        <li class="flex flex-col p-4 border border-gray-200 bg-gray-50 rounded shadow-sm">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-bold text-gray-800">{{ $payment->indebted->name }}</span>
                                <svg class="w-5 h-5 text-gray-400 mx-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                <span class="font-bold text-gray-800">{{ $payment->payer->name }}</span>
                            </div>
                            <div class="flex justify-between items-end mt-2">
                                <p class="text-2xl font-black text-red-600">{{ $payment->amount }}</p>
                                <form action="{{route('payments.destroy',$payment)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="" value="">
                                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-700 transition">Marquer Payé</button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="space-y-8">
                <div class="bg-white p-6 rounded shadow border-t-4 border-blue-600">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Ajouter une Dépense</h2>
                    <form action="{{route('collocations.depenses.store',$collocation)}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @csrf
                        @method('POST')
                        <input type="text" name="title" required placeholder="Titre (ex: Courses)" class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="number" step="0.01" min="0" name="total" required placeholder="Montant" class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="date" name=""  class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select name="category_id" placeholder="choose a category" required class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        
                        @foreach($collocation->categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            <option disabled selected hidden>choose a category</option>   
                        </select>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold md:col-span-2 hover:bg-blue-700 transition">Enregistrer la dépense</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>