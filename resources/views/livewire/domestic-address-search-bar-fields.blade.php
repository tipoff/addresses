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