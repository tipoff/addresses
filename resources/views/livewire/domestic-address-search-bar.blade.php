<div
    x-data="{
        showResults: true,
        selectedResult: null,
        selectResult(description) {
            this.showResults = false;
            this.selectedResult = description;
        },
    }"
    class="relative"
>
    <input
        type="text"
        placeholder="Enter your address"
        wire:model.debounce.400ms="query"
        x-model="selectedResult"
        x-on:click="showResults = true"
        x-on:click.away="showResults = false"
        class="w-full px-2 py-1 focus:outline-none"
    >
    <!-- List of results -->
    <div
        id="results-list"
        x-show="showResults"
        class="absolute z-10 w-full"
    >
        @if (!empty($results))
        @foreach ($results as $result)
        <div
            wire:key="'{{ $result['place_id'] }}'"
            wire:click="getPlaceDetails('{{ $result['place_id'] }}')"
            x-on:click="selectResult('{{ $result['description'] }}')"
            class="block w-full px-2 py-1 text-left bg-white cursor-default hover:bg-gray-50"
        >
            {{ $result['description'] }}
        </div>
        @endforeach
        @endif
    </div>
</div>
