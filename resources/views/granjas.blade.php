<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-white leading-tight">
            Mis granjas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg bg-sky-50">
                <div class="p-8  border border-amber-700 border-8 bg-amber-200">
                    <!--LIVEWIRE -->
                    @livewire('show-farms')
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

