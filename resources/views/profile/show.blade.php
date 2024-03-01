<x-app-layout>
    <div class="text-white">
    <p>Név: {{ Auth::user()->name }}</p>
    <p>Készült: {{ Auth::user()->created_at }}</p>
    <p>Jelszó: {{ Auth::user()->email }}</p>
    </div>
</x-app-layout>