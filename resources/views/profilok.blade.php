<h1>Összes felhasználó profilja</h1>

@foreach ($users as $user)
    <p>Név: {{ $user->name }}</p>
@endforeach