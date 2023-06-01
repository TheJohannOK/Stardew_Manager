<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Progreso granja:  {{$farm->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center ">
                        
                    @foreach ($farm->buildings as $building)
                    @if (! $building->pivot->bought)
                    <div class="p-6 text-gray-900 inline-block m-4 text-center bg-gradient-to-r from-lime-200 to-lime-300 p-2 rounded-lg ">
                       
                        <span class="font-bold">{{$building->name}}</span> 
                        <button class="m-4 border p-2 rounded-full bg-green-300 hover:bg-green-400 " wire:click="bought({{$building}})">Construido</button>
                        <div class="ms-2 mt-3 bg-gradient-to-r from-orange-200 to-orange-300 p-2 rounded-lg">
                            <div class="bg-gradient-to-r from-yellow-200 to-yellow-300 p-2 rounded-lg">
                                Coste - {{$building->cost}}
                            </div>
                            @foreach ($building->materials as $material)
                               <div class="bg-gradient-to-r from-green-200 to-green-300 m-4 p-1 rounded-lg">{{ $material->name }} - {{ $material->pivot->quantity }} </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>