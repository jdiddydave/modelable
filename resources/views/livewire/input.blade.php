<div style="background: lightgray">
    <aside>
        <p>Input $selected</p>
        @dump($selected)
    </aside>

    <ul>
        @foreach ($products as $product)
        {{-- <li wire:click="select('{{ $product }}')"> --}}
            <li wire:click="select('{{ $product }}')">
                <a href="#">{{ $product }}</a>
            </li>
        @endforeach
    </ul>
</div>
