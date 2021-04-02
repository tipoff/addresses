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
            wire:click="selectResult({{ $result }})"
        >
            {{ $result->get('description') }}
        </div>
        @endforeach
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

<script>

    const inputAddressLine1 = document.getElementById("address-line-1");
    const inputAddressLine2 = document.getElementById("address-line-2");
    const inputCity = document.getElementById("city");
    const inputState = document.getElementById("state");
    const inputZip = document.getElementById("zip");
    
    Livewire.on('returnPlaceDetails', (addressLine1, zip, city, state) => {
        inputAddressLine1.value = addressLine1;
        inputCity.value = city;
        inputState.value = state;
        inputZip.value = zip;
        inputAddressLine2.focus();
    });

</script>