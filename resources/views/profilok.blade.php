<x-app-layout>
    <div class="text-white">
<h1 class="text-white">Összes felhasználó profilja</h1>

@foreach ($users as $user)
    <p><b>Név:</b> {{ $user->name }}</p>
@endforeach
</div>
</x-app-layout>