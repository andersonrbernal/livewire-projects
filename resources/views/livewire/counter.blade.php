<div class="p-16 flex justify-center gap-6 items-center">
    {{-- The whole world belongs to you. --}}
    <button wire:click="increment" class="py-2 px-4 bg-blue-500 hover:bg-blue-400 rounded text-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="py-2 px-4 bg-blue-500 hover:bg-blue-400 rounded text-white">-</button>
</div>
