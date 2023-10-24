<div style="background: grey">
    <h1>Parent Component</h1>

    <p>Value from Child Component: {{ $child }}</p>

    <livewire:child-component wire:model="child" />

    {{-- <button wire:click="$refresh">Refresh Parent</button> --}}
</div>
