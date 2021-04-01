<div class="w-3/4">
    <input
        id="autocomplete"
        type="text"
        class="w-full px-2 py-1"
    >
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

<script async src="https://maps.googleapis.com/maps/api/js?key={{ config('google-api.places.key') }}&libraries=places&callback=initMap">
    const inputAddressLine1 = document.getElementById("address-line-1");
    // const inputAddressLine2 = document.getElementById("address-line-2");
    const inputCity = document.getElementById("city");
    const inputState = document.getElementById("state");
    const inputZip = document.getElementById("zip");
    
    const inputAutocomplete = document.getElementById("autocomplete");
    
    const options = {
        componentRestrictions: { 
            country: "us",
        },
        fields: [
            "address_components",
            // "place_id",     // if needed, Google place ID
            // "utc_offset_minutes",   // if needed, derive timezone from minutes
        ],
        types: [
            "address",
        ],
    };
    const autocomplete = new google.maps.places.Autocomplete(inputAutocomplete, options);

    // event 'place_changed' fires when User selects an address from dropdown list
    autocomplete.addListener("place_changed", addressSelected);

    function addressSelected() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let addressLine1 = "";
        let city = "";
        let state = "";
        let zip = "";

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        // place.address_components are google.maps.GeocoderAddressComponent objects
        // which are documented at http://goo.gle/3l5i5Mr
        for (const component of place.address_components) {
            const componentType = component.types[0];

            switch (componentType) {
                case "street_number":
                    addressLine1 = `${component.long_name} ${addressLine1}`;
                    break;
                // street name, e.g. Main Street
                case "route":
                    addressLine1 += component.short_name;
                    break;
                case "postal_code":
                    zip = `${component.long_name}${zip}`;
                    break;

                // case "postal_code_suffix":
                //     postcode = `${postcode}-${component.long_name}`;
                //     break;

                // city
                case "locality":
                    city = component.long_name;
                    break;
                // state
                case "administrative_area_level_1":
                    state = component.short_name;
                    break;
                // case "country":
                //     country = component.long_name;
                //     break;
            }
        }
        inputAddressLine1.value = addressLine1;
        inputCity.value = city;
        inputState.value = state;
        inputZip.value = zip;
        // After filling the form with address components from the Autocomplete
        // prediction, set cursor focus on the second address line to encourage
        // entry of subpremise information such as apartment, unit, or floor number.
        inputAddressLine2.focus();
    }
</script>
