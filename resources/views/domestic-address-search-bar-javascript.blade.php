<div class="w-full">
    <input
        id="autocomplete"
        type="text"
        placeholder="Enter your address"
        class="w-full px-2 py-1 focus:outline-none text-gray-700 ring-1 ring-gray-300 rounded-md overflow-hidden focus:ring-2 focus:ring-blue-300"
    >
</div>

@push ('scripts')
<script type="text/javascript">
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

    let autocomplete;
    function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(document.getElementById("autocomplete"), options);
        // event 'place_changed' fires when User selects an address from dropdown list
        autocomplete.addListener("place_changed", addressSelected);
    }

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
                    addressLine1 += component.long_name;
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
        document.getElementById("address-line-1").value = addressLine1;
        document.getElementById("city").value = city;
        document.getElementById("state").value = state;
        document.getElementById("zip").value = zip;
        // After filling the form with address components from the Autocomplete
        // prediction, set cursor focus on the second address line to encourage
        // entry of subpremise information such as apartment, unit, or floor number.
        document.getElementById("address-line-2").focus();
    }

    function focusField() {
        document.getElementById("parent-field").classList.add("ring-2");
        document.getElementById("parent-field").classList.add("ring-blue-300");
    }

    function blurField() {
        document.getElementById("parent-field").classList.remove("ring-2");
        document.getElementById("parent-field").classList.remove("ring-blue-300");
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('google-api.places.key') }}&libraries=places&callback=initAutocomplete" async defer type="text/javascript"></script>
@endpush