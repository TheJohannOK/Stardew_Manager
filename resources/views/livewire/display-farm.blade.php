<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Progreso granja
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        
                    @foreach ($farm->buildings as $building)
                    @if (! $building->pivot->bought)
                    <div class="p-6 text-gray-900">
                        {{$building->name}}
                        <button class="m-4 border " wire:click="bought({{$building}})">Construido</button>
                        <ul class="ms-2 mt-3">
                            Coste - {{$building->cost}}
                            @foreach ($building->materials as $material)
                                <li>{{ $material->name }} - {{ $material->pivot->quantity }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>