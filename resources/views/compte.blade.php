<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon Compte') }}
        </h2>
    </x-slot>

    @auth
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   {{ Auth()->user()->name }} /
                   {{ Auth()->user()->email }} / 
                   {{ Auth()->user()->created_at }}
                </div>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>