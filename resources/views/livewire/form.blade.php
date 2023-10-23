<form style="background: grey">
    <aside>
        <p>Form $product</p>
        @dump($product)
    </aside>

    <livewire:input wire:model="product" />

    {{-- @devs: you can force the update by executing a function on the parent --}}
    {{-- but the goal is for it to update live instead --}}
    {{-- <button wire:click="update">Update</button> --}}
</form>
