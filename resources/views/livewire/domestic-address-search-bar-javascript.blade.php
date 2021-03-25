<div class="relative">
    <input
        class=""
        type="text"
        id="search-bar"
        placeholder="Enter your address"
    >
    <!-- List of results -->
    <div
        class="absolute z-10"
        id="results"
    >
        
    </div>
</div>

<script>
    const searchBar = document.getElementById('search-bar');
    let query = '';
    const autocompleteResults = document.getElementById('results');
    const filter = 'types=address';
    // need to create session tokens for billing https://developers.google.com/maps/documentation/places/web-service/session-tokens
    const sessiontoken;
    const placesApiUrl = `https://maps.googleapis.com/maps/api/place/autocomplete/json?${filter}&sessiontoken=${sessiontoken}&key=`;

    searchBar.addEventListener('input', updateQueryAndAutocomplete);

    async function updateQueryAndAutocomplete(e) {
        query = e.target.value;
        // clear previous results
        autocompleteResults.innerHTML = '';
        // TODO: add loading animation before API call
        // call API, calls on every change on 'search bar', uses Laravel Mix env var
        const response = await fetch(placesApiUrl + {{ process.env.MIX_GOOGLE_API_KEY }});
        const json = await response.json();
        // use status codes
        // https://developers.google.com/maps/documentation/places/web-service/autocomplete#place_autocomplete_status_codes
        // if (json['status'] === 'OK')
        json['predictions'].forEach(result => {
            // create new div with innerText of each returned result
            let newResult = document.createElement('div');
            newResult.innerText = result['description'];
            // on click replace current search query with returned result, calls API again
            newResult.addEventListener('click', updateQueryAndAutocomplete);
            // append to results list
            autocompleteResults.appendChild(newResult);
        });
    }
</script>