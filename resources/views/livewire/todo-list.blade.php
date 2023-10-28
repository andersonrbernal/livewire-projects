<div class="flex flex-col w-[300px] mx-auto py-16">
    <div class="flex justify-between gap-4">
        <input type="text" wire:model='todoText' wire:keydown.enter='addTodo' placeholder="Type and hit enter"
            class="flex-1" />
        <button
            class="py-2 px-4 bg-blue-500 hover:bg-blue-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
            wire:click='addTodo'>
            Add
        </button>
    </div>

    <div class="py-6">
        @if (count($todos) === 0)
            <p class="text-gray-600 text-center">There are no todos.</p>
        @endif
        @foreach ($todos as $index => $todo)
            <div class="flex gap-4 justify-between items-center py-1">
                <input type="checkbox" wire:change='toggleTodo({{ $todo->id }})'
                    {{ $todo->completed ? 'checked' : null }} />
                <label class="flex-1 {{ $todo->completed ? 'line-through' : null }}">
                    {{ $todo->text }}
                </label>
                <button wire:click='deleteTodo({{ $todo->id }})'>
                    <x-heroicon-s-trash class="w-6 h-6 hover:text-red-600" />
                </button>
            </div>
        @endforeach
    </div>
</div>
