<div style="background: grey">
    <h1>Parent Component</h1>

    <p>Value from Child Component: {{ $child }}</p>

    <button wire:click="click">Update Child Value</button>

    <livewire:child-component wire:model="child" />
</div>
