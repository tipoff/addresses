<div class="relative">
    <input
        class=""
        wire:model.debounce.400ms="query"
        type="text"
        placeholder="Enter your address"
    >
    <!-- List of results -->
    <div
        class="absolute z-10"
    >
        @foreach ($results as $result)
        <div
            wire:click="setQuery({{ $result }})"
        >
            {{ $result }}
        </div>
        @endforeach
    </div>
</div>