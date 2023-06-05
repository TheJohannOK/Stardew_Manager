<div class="text-orange-900 text-lg">
    
    <table class="table-fixed border border-separate border-spacing-1 w-full">
        <thead>
            <tr class="bg-slate-50">
                <th>Granjas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Bucle para iterar sobre los animales -->
            
            @foreach ($farms as $farm)
            <tr class="odd:bg-white even:bg-slate-50">
                <td class="text-center">{{$farm->name}}</td>
                <!-- Se asigna un id único a cada campo de entrada utilizando el índice -->
                <td class="text-center p-1">
                    <button class="p-3" wire:click="showfarm({{$farm->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#579EEF" class="w-6 h-6 inline">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>

                    <!-- Con esto borro la granja -->
                    <button class="p-3" wire:click="delete({{ $farm }})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#EE6C48" class="w-6 h-6 inline">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
