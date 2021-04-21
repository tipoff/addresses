<div class="relative">
    <input
        id="search-bar"
        type="text"
        placeholder="Enter your address"
        oninput="getPredictions(this.value)"
        onfocus="showPredictions()"
        onblur="hidePredictions()"
        class="w-full px-2 py-1 focus:outline-none text-gray-700 ring-1 ring-gray-300 rounded-md overflow-hidden focus:ring-2 focus:ring-blue-300"
    >
    <span id="error-msg" class="ml-2 text-xs text-red-500"></span>
    <div
        id="results-list"
        class="absolute top-9 z-10 w-full"
    >
    </div>
    <div id="attributions"></div>
</div>

@push ('scripts')
<script type="text/javascript">
    const autocompleteParams = {
        input: null,
        sessionToken: null,
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
    const placeDetailsParams = {
        placeId: null,
        sessionToken: null,
        fields: [
            "address_components",
            // can retrieve more fields if needed for data consistency e.g. timezone
        ],
    };

    function resetSessionToken() {
        let sessionToken = new google.maps.places.AutocompleteSessionToken();
        autocompleteParams.sessionToken = sessionToken;
        placeDetailsParams.sessionToken = sessionToken;
    }

    let autocompleteService;
    let placesService;

    function initAutocomplete() {
        autocompleteService = new google.maps.places.AutocompleteService();
        placesService = new google.maps.places.PlacesService(document.getElementById("attributions"));
        resetSessionToken();
    }

    function populatePredictions(predictions, status) {
        // clear results in list
        document.getElementById("results-list").innerHTML = "";
        // show results in list
        if (status === "OK") {
            predictions.forEach(prediction => {
                const result = document.createElement("div");
                result.className = "block w-full px-2 py-1 text-left bg-white cursor-default hover:bg-gray-50";
                result.innerText = prediction.description;
                result.onmousedown = function () {
                    hidePredictions();
                    document.getElementById("search-bar").value = prediction.description;
                    addressSelected(prediction.place_id);
                }
                document.getElementById("results-list").appendChild(result);
            });
        }
    }

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    const debounceDelay = 400;
    const getPredictions = debounce(function (query) {
        let startsWithStreetNumber = /^\d/;
        let errorMsg = "Please enter a street number.";
        if (!startsWithStreetNumber.test(query) ) {
            hidePredictions();
            document.getElementById("error-msg").innerText = errorMsg;
        } else {
            showPredictions();
            document.getElementById("error-msg").innerText = "";
            autocompleteParams.input = query;
            autocompleteService.getPlacePredictions(autocompleteParams, populatePredictions);
        }
    }, debounceDelay, false);

    function populateFields(placeDetails, status) {
        let addressLine1 = "";
        let city = "";
        let state = "";
        let zip = "";
        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        // place.address_components are google.maps.GeocoderAddressComponent objects
        // which are documented at http://goo.gle/3l5i5Mr
        for (const component of placeDetails.address_components) {
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

    function addressSelected(placeId) {
        placeDetailsParams.placeId = placeId;
        placesService.getDetails(placeDetailsParams, populateFields);
        resetSessionToken();
    }

    function focusField() {
        document.getElementById("parent-field").classList.add("ring-2");
        document.getElementById("parent-field").classList.add("ring-blue-300");
    }

    function blurField() {
        document.getElementById("parent-field").classList.remove("ring-2");
        document.getElementById("parent-field").classList.remove("ring-blue-300");
    }

    function showPredictions() {
        document.getElementById("results-list").classList.remove("invisible");
    }

    function hidePredictions() {
        document.getElementById("results-list").classList.add("invisible");
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('google-api.places.key') }}&libraries=places&callback=initAutocomplete" async defer type="text/javascript"></script>
@endpush