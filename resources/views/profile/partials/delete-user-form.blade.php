<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ 'Borrar cuenta' }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ 'Borra tu cuenta de forma definitiva, eliminando cualquier progreso registrado.' }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ 'Borrar cuenta' }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ '¿Estás seguro que quieres eliminar tu cuenta?' }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ 'Porfavor, confirma tu contraseña para eliminar la cuenta.' }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ 'Contraseña' }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ 'Contraseña' }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ 'Cancelar' }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ 'Borrar cuenta' }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
