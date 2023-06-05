<div>
    <h1 class="text-center m-3 text-orange-900 font-semibold text-2xl">¿Cuantos animales necesitas?</h1>

    <div class="py-8 text-orange-900 text-lg">
        <form wire:submit.prevent="submit">
            
            <table class="table-fixed border border-separate border-spacing-1 w-full ">
                <thead>
                    <tr class="bg-slate-50">
                        <th>Animales</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Bucle para iterar sobre los animales -->
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Gallina
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_G_Nor" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>

                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Gallina sombría
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_G_Som" id="gallina_som" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>

                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Gallina dorada
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_G_Dor" id="gallina_dor" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Pato
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Pat" id="pato" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>

                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Conejo
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Con" id="conejo" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Dinosaurio
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Din" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Vaca
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Vac" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Oveja
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Ove" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Cerdo
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Cer" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Avestruz
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Ave" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">
                            Cabra
                        </td>
                        <td class="text-center">
                            <input type="number" wire:model="num_Cab" id="gallina" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full" required min="0">
                        </td>
                    </tr>
                    

                </tbody>
            </table>
            <div class="container mx-auto text-center py-8 ">
                <label for="nombreGranja">Nombre de la granja:</label>
                <input type="text" wire:model="nombre_granja" id="nombreGranja" class="border-slate-200 rounded-full" required>
            </div>
            <div class="text-center">
                <button type="submit" class="text-center border rounded-full bg-yellow-100 hover:bg-yellow-300 p-3 text-lg font-semibold">Iniciar progreso</button>
            </div>

        </form>
    </div>
</div>

