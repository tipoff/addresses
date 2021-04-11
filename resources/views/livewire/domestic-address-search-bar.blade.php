<div
    x-data="{
        showResults: true,
        selectedResult: null,
        addressLine1: null,
        zip: null,
        city: null,
        state: null,
        selectResult(placeId, description) {
            this.showResults = false;
            this.selectedResult = description;
            this.$refs.addressLine2.focus();
            $wire.getPlaceDetails(placeId)
                .then(result => {
                    this.addressLine1 = result.addressLine1;
                    this.zip = result.zip;
                    this.city = result.city;
                    this.state = result.state;
                });
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
            x-on:click="selectResult('{{ $result['place_id'] }}', '{{ $result['description'] }}')"
            class="block w-full px-2 py-1 text-left bg-white cursor-default hover:bg-gray-50"
        >
            {{ $result['description'] }}
        </div>
        @endforeach
        @endif
    </div>
    <form
        method="POST"
        action=""
        class="w-full"
    >
        @csrf
        <div class="flex justify-between w-full mt-4 text-gray-700">
            <div class="w-4/12">
                <label class="ml-2 text-xs text-gray-500 font-semibold tracking-widest">
                    Address 1
                </label>
                <input
                    id="address-line-1"
                    name="address-line-1"
                    type="text"
                    readonly="readonly"
                    x-model="addressLine1"
                    class="w-full px-2 py-1 bg-yellow-50 focus:outline-none"
                >
            </div>
            <div class="w-4/12 ml-2">
                <label class="ml-2 text-xs text-gray-500 font-semibold tracking-widest">
                    Address 2
                </label>
                <input
                    id="address-line-2"
                    name="address-line-2"
                    type="text"
                    x-ref="addressLine2"
                    class="w-full px-2 py-1 focus:outline-none"
                >
            </div>
            <div class="w-2/12 ml-2">
                <label class="ml-2 text-xs text-gray-500 font-semibold tracking-widest">
                    City
                </label>
                <input
                    id="city"
                    name="city"
                    type="text"
                    readonly="readonly"
                    x-model="city"
                    class="w-full px-2 py-1 bg-yellow-50 focus:outline-none"
                >
            </div>
            <div class="w-1/12 ml-2">
                <label class="ml-2 text-xs text-gray-500 font-semibold tracking-widest">
                    State
                </label>
                <input
                    id="state"
                    name="state"
                    type="text"
                    readonly="readonly"
                    x-model="state"
                    class="w-full px-2 py-1 bg-yellow-50 focus:outline-none"
                >
            </div>
            <div class="w-1/12 ml-2">
                <label class="ml-2 text-xs text-gray-500 font-semibold tracking-widest">
                    Zip
                </label>
                <input
                    id="zip"
                    name="zip"
                    type="text"
                    readonly="readonly"
                    x-model="zip"
                    class="w-full px-2 py-1 bg-yellow-50 focus:outline-none"
                >
            </div>
        </div>
        <button
            type="submit"
            class="mt-2 px-2 py-1 bg-white text-green-500 border-2 border-green-400 rounded-md focus:outline-none"
        >
            Submit
        </button>
    </form>
</div>
