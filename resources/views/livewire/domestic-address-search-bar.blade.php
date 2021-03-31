<div class="relative">
    <input
        class=""
        wire:model="query"
        type="text"
        placeholder="Enter your address"
    >
    <!-- List of results -->
    <ul
        class="absolute z-10"
    >
        @foreach ($results as $result)
        <li
            wire:click="setQuery({{ $result }})"
        >
            {{ $result }}
        </li>
        @endforeach
    </ul>
</div>