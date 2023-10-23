<div>
    <h1>Todos</h1>

    <livewire:todo-input wire:model="todo" />

    <button wire:click="add">Add Todo</button>

    <div>
        @foreach ($todos as $todo)
            <div>{{ $todo }}</div>
        @endforeach
    </div>
</div>
