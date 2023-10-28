<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model='firstNumber' placeholder="Number 1" />
            <select class="w-24" wire:model='action'>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model='secondNumber' placeholder="Number 2" />
            <button wire:click='calculate' {{ $disabled ? 'disabled' : '' }}
                class="py-2 px-4 bg-blue-500 hover:bg-blue-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white">
                =
            </button>
        </div>
        <p class="text-3xl">{{ substr($result, 0, 4) }}</p>
    </div>
</div>
