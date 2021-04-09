<div
    x-data="{
        showResults: true,
        selectResult(placeId) {
            this.showResults = false;
            $wire.getPlaceDetails(placeId)
                .then(result => {

                });
        },
    }"    
    class="relative"
>
    <input
        type="text"
        placeholder="Enter your address"
        wire:model.debounce.400ms="query"
        @click="showResults = true"
        class=""
    >
    <!-- List of results -->
    <div
        id="results-list"
        x-show="showResults"
        class="absolute z-10"
    >
        @if (!empty($results))
        @foreach ($results as $result)
        <div
            @click="selectResult('{{ $result['place_id'] }}')"
            class="block w-full text-left bg-white cursor-default hover:bg-gray-50"
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
                    class="w-full px-2 py-1 bg-yellow-50"
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
                    class="w-full px-2 py-1"
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
                    class="w-full px-2 py-1 bg-yellow-50"
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
                    class="w-full px-2 py-1 bg-yellow-50"
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
                    class="w-full px-2 py-1 bg-yellow-50"
                >
            </div>
        </div>
        <button 
            type="submit"
            class="mt-2 px-2 py-1 bg-white text-green-500 border-2 border-green-400 rounded-md"
        >
            Submit
        </button>
    </form>
</div>
