<div class="relative">
    <input
        class=""
        wire:model="query"
        type="text"
        placeholder="Enter your address"
    >
    <!-- List of contacts -->
    <ul
        class="absolute z-10"
    >
        @foreach ($contacts as $contact)
        <li
            wire:click="setQuery({{ $contact }})"
        >
            {{ $contact }}
        </li>
        @endforeach
    </ul>
</div>