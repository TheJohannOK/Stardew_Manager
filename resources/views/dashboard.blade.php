<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-white leading-tight ">
            Gráficos animales
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg bg-sky-50 ">
                <div class="p-8  border border-amber-700 border-8 bg-amber-200">
                    <div class="text-center m-3 text-orange-900 font-semibold text-2xl">
                        Rentabilidad animales
                    </div>
                    @livewire('show-chart')                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
