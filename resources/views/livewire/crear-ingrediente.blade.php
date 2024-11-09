<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearIngrediente'>
    <div>
        <x-input-label for="name" :value="__('Nombre Ingrediente')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model.live="name" :value="old('name')"
            autocomplete="name" placeholder="Nombre del ingrediente" />

        @error('name')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea id="descripcion"
            class="block mt-1 w-full border-gray-300 focus:border-amber-500 focus:ring-amber-500 rounded-md shadow-sm h-40"
            type="text" wire:model.live="descripcion" :value="old('descripcion')" autocomplete="descripcion"
            placeholder="Descripción"></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen"
            autocomplete="imagen" />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
    <x-primary-button>Añadir Ingrediente</x-primary-button>
</form>
