<?php

declare(strict_types = 1);

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Tipoff\Addresses\Models\Country;
use Tipoff\Addresses\Models\State;

class AddPhoneAreas extends Migration {

    public function up() {

        if (class_exists(PhoneArea::class)) {
            PhoneArea::query()->insertOrIgnore([
                    [
                        'code' => 239,
                        'state_id' => 1,
                        'note' => 'Florida (Lee, Collier, and Monroe Counties, excl the Keys; see 305; eff 3/11/02; mand 3/11/03)'
                ],
                    [
                        'code' => 305,
                        'state_id' => 1,
                        'note' => 'SE Florida: Miami, the Keys (see 786, 954; 239)'
                ],
                    [
                        'code' => 321,
                        'state_id' => 1,
                        'note' => 'Florida: Brevard County, Cape Canaveral area; Metro Orlando (split from 407)'
                ],
                    [
                        'code' => 352,
                        'state_id' => 1,
                        'note' => 'Florida: Gainesville area, Ocala, Crystal River (split from 904)'
                ],
                    [
                        'code' => 386,
                        'state_id' => 1,
                        'note' => 'N central Florida: Lake City (split from 904, perm 2/15/01, mand 11/5/01)'
                ],
                    [
                        'code' => 407,
                        'state_id' => 1,
                        'note' => 'Central Florida: Metro Orlando (see overlay 689, eff 7/02; split 321)'
                ],
                    [
                        'code' => 561,
                        'state_id' => 1,
                        'note' => 'S. Central Florida: Palm Beach County (West Palm Beach, Boca Raton, Vero Beach; see split 772, eff 2/11/02; mand 11/11/02)'
                ],
                    [
                        'code' => 689,
                        'state_id' => 1,
                        'note' => 'Central Florida: Metro Orlando (see overlay 321; overlaid on 407, assigned but not in use)'
                ],
                    [
                        'code' => 727,
                        'state_id' => 1,
                        'note' => 'Florida Tampa Metro: Saint Petersburg, Clearwater (Pinellas and parts of Pasco County; split from 813)'
                ],
                    [
                        'code' => 754,
                        'state_id' => 1,
                        'note' => 'Florida: Broward County area, incl Ft. Lauderdale (overlaid on 954; perm 8/1/01, mand 9/1/01)'
                ],
                    [
                        'code' => 772,
                        'state_id' => 1,
                        'note' => 'S. Central Florida: St. Lucie, Martin, and Indian River counties (split from 561; eff 2/11/02; mand 11/11/02)'
                ],
                    [
                        'code' => 786,
                        'state_id' => 1,
                        'note' => 'SE Florida, Monroe County (Miami; overlaid on 305)'
                ],
                    [
                        'code' => 813,
                        'state_id' => 1,
                        'note' => 'SW Florida: Tampa Metro (splits 727 St. Petersburg, Clearwater, and 941 Sarasota)'
                ],
                    [
                        'code' => 850,
                        'state_id' => 1,
                        'note' => 'Florida panhandle, from east of Tallahassee to Pensacola (split from 904); western panhandle (Pensacola, Panama City) are UTC-6'
                ],
                    [
                        'code' => 863,
                        'state_id' => 1,
                        'note' => 'Florida: Lakeland, Polk County (split from 941)'
                ],
                    [
                        'code' => 904,
                        'state_id' => 1,
                        'note' => 'N Florida: Jacksonville (see splits 352, 386, 850)'
                ],
                    [
                        'code' => 927,
                        'state_id' => 1,
                        'note' => 'Florida: Cellular coverage in Orlando area'
                ],
                    [
                        'code' => 941,
                        'state_id' => 1,
                        'note' => 'SW Florida: Sarasota and Manatee counties (part of what used to be 813; see split 863)'
                ],
                    [
                        'code' => 954,
                        'state_id' => 1,
                        'note' => 'Florida: Broward County area, incl Ft. Lauderdale (part of what used to be 305, see overlay 754)'
                ],
                    [
                        'code' => 270,
                        'state_id' => 2,
                        'note' => 'W Kentucky: Bowling Green, Paducah (split from 502)'
                ],
                    [
                        'code' => 502,
                        'state_id' => 2,
                        'note' => 'N Central Kentucky: Louisville (see 270)'
                ],
                    [
                        'code' => 606,
                        'state_id' => 2,
                        'note' => 'E Kentucky: area east of Frankfort: Ashland (see 859)'
                ],
                    [
                        'code' => 859,
                        'state_id' => 2,
                        'note' => 'N and Central Kentucky: Lexington; suburban KY counties of Cincinnati OH metro area; Covington, Newport, Ft. Thomas, Ft. Wright, Florence (split from 606)'
                ],
                    [
                        'code' => 205,
                        'state_id' => 3,
                        'note' => 'Central Alabama (including Birmingham; excludes the southeastern corner of Alabama and the deep south; see splits 256 and 334)'
                ],
                    [
                        'code' => 251,
                        'state_id' => 3,
                        'note' => 'S Alabama: Mobile and coastal areas, Jackson, Evergreen, Monroeville (split from 334, eff 6/18/01; see also 205, 256)'
                ],
                    [
                        'code' => 256,
                        'state_id' => 3,
                        'note' => 'E and N Alabama (Huntsville, Florence, Gadsden; split from 205; see also 334)'
                ],
                    [
                        'code' => 334,
                        'state_id' => 3,
                        'note' => 'S Alabama: Auburn/Opelika, Montgomery and coastal areas (part of what used to be 205; see also 256, split 251)'
                ],
                    [
                        'code' => 907,
                        'state_id' => 4,
                        'note' => 'Alaska'
                ],
                    [
                        'code' => 480,
                        'state_id' => 5,
                        'note' => 'Arizona: East Phoenix (see 520; also Phoenix split 602, 623)'
                ],
                    [
                        'code' => 520,
                        'state_id' => 5,
                        'note' => 'SE Arizona: Tucson area (split from 602; see split 928)'
                ],
                    [
                        'code' => 602,
                        'state_id' => 5,
                        'note' => 'Arizona: Phoenix (see 520; also Phoenix split 480, 623)'
                ],
                    [
                        'code' => 623,
                        'state_id' => 5,
                        'note' => 'Arizona: West Phoenix (see 520; also Phoenix split 480, 602)'
                ],
                    [
                        'code' => 928,
                        'state_id' => 5,
                        'note' => 'Central and Northern Arizona: Prescott, Flagstaff, Yuma (split from 520)'
                ],
                    [
                        'code' => 479,
                        'state_id' => 6,
                        'note' => 'NW Arkansas:  Fort Smith, Fayetteville, Springdale, Bentonville (SPLIt from 501, perm 1/19/02, mand 7/20/02)'
                ],
                    [
                        'code' => 501,
                        'state_id' => 6,
                        'note' => 'Central Arkansas: Little Rock, Hot Springs, Conway (see split 479)'
                ],
                    [
                        'code' => 870,
                        'state_id' => 6,
                        'note' => 'Arkansas: areas outside of west/central AR: Jonesboro, etc'
                ],
                    [
                        'code' => 209,
                        'state_id' => 7,
                        'note' => 'Cent. California: Stockton (see split 559)'
                ],
                    [
                        'code' => 213,
                        'state_id' => 7,
                        'note' => 'S California: Los Angeles (see 310, 323, 626, 818)'
                ],
                    [
                        'code' => 310,
                        'state_id' => 7,
                        'note' => 'S California: Beverly Hills, West Hollywood, West Los Angeles (see split 562; overlay 424)'
                ],
                    [
                        'code' => 323,
                        'state_id' => 7,
                        'note' => 'S California: Los Angeles (outside downtown: Hollywood; split from 213)'
                ],
                    [
                        'code' => 341,
                        'state_id' => 7,
                        'note' => '(overlay on 510; SUSPENDED)'
                ],
                    [
                        'code' => 369,
                        'state_id' => 7,
                        'note' => 'Solano County (perm 12/2/00, mand 6/2/01)'
                ],
                    [
                        'code' => 408,
                        'state_id' => 7,
                        'note' => 'Cent. Coastal California: San Jose (see overlay 669)'
                ],
                    [
                        'code' => 415,
                        'state_id' => 7,
                        'note' => 'California: San Francisco County and Marin County on the north side of the Golden Gate Bridge, extending north to Sonoma County (see 650 split; 628 overlay, eff 2/2015)'
                ],
                    [
                        'code' => 424,
                        'state_id' => 7,
                        'note' => 'S California: Los Angeles (see split 562; overlaid on 310 mand 7/26/06)'
                ],
                    [
                        'code' => 442,
                        'state_id' => 7,
                        'note' => 'Far north suburbs of San Diego (Oceanside, Escondido; overlaid on 760)'
                ],
                    [
                        'code' => 510,
                        'state_id' => 7,
                        'note' => 'California: Oakland, East Bay (see 925)'
                ],
                    [
                        'code' => 530,
                        'state_id' => 7,
                        'note' => 'NE California: Eldorado County area, excluding Eldorado Hills itself: incl cities of Auburn, Chico, Redding, So. Lake Tahoe, Marysville, Nevada City/Grass Valley (split from 916)'
                ],
                    [
                        'code' => 559,
                        'state_id' => 7,
                        'note' => 'Central California: Fresno (split from 209)'
                ],
                    [
                        'code' => 562,
                        'state_id' => 7,
                        'note' => 'California: Long Beach (split from 310 Los Angeles)'
                ],
                    [
                        'code' => 619,
                        'state_id' => 7,
                        'note' => 'S California: San Diego (see split 760; overlay 858, 935)'
                ],
                    [
                        'code' => 626,
                        'state_id' => 7,
                        'note' => 'E S California: Pasadena (split from 818 Los Angeles)'
                ],
                    [
                        'code' => 627,
                        'state_id' => 7,
                        'note' => 'No longer in use [was Napa, Sonoma counties (perm 10/13/01, mand 4/13/02); now 707]'
                ],
                    [
                        'code' => 628,
                        'state_id' => 7,
                        'note' => 'California: San Francisco County and Marin County on the north side of the Golden Gate Bridge, extending north to Sonoma County (overlaid on 415, eff 2/2015)'
                ],
                    [
                        'code' => 650,
                        'state_id' => 7,
                        'note' => 'California: Peninsula south of San Francisco -- San Mateo County, parts of Santa Clara County (split from 415)'
                ],
                    [
                        'code' => 657,
                        'state_id' => 7,
                        'note' => 'Northern and western Orange County (overlaid on 714)'
                ],
                    [
                        'code' => 661,
                        'state_id' => 7,
                        'note' => 'California: N Los Angeles, Mckittrick, Mojave, Newhall, Oildale, Palmdale, Taft, Tehachapi, Bakersfield, Earlimart, Lancaster (split from 805)'
                ],
                    [
                        'code' => 669,
                        'state_id' => 7,
                        'note' => 'Cent. Coastal California: San Jose (overlaid on 408; eff 10/20/2012)'
                ],
                    [
                        'code' => 707,
                        'state_id' => 7,
                        'note' => 'NW California: Santa Rosa, Napa, Vallejo, American Canyon, Fairfield'
                ],
                    [
                        'code' => 714,
                        'state_id' => 7,
                        'note' => 'Northern and western Orange County (see split 949, overlay 657)'
                ],
                    [
                        'code' => 747,
                        'state_id' => 7,
                        'note' => 'S California: Los Angeles, Agoura Hills, Calabasas, Hidden Hills, and Westlake Village (see 818; implementation suspended)'
                ],
                    [
                        'code' => 760,
                        'state_id' => 7,
                        'note' => 'California: San Diego North County to Sierra Nevada (split from 619; see overlay 442)'
                ],
                    [
                        'code' => 764,
                        'state_id' => 7,
                        'note' => '(overlay on 650; SUSPENDED)'
                ],
                    [
                        'code' => 805,
                        'state_id' => 7,
                        'note' => 'S Cent. and Cent. Coastal California: Ventura County, Santa Barbara County: San Luis Obispo, Thousand Oaks, Carpinteria, Santa Barbara, Santa Maria, Lompoc, Santa Ynez Valley / Solvang (see 661 split)'
                ],
                    [
                        'code' => 818,
                        'state_id' => 7,
                        'note' => 'S California: Los Angeles: San Fernando Valley (see 213, 310, 562, 626, 747)'
                ],
                    [
                        'code' => 831,
                        'state_id' => 7,
                        'note' => 'California: central coast area from Santa Cruz through Monterey County'
                ],
                    [
                        'code' => 858,
                        'state_id' => 7,
                        'note' => 'S California: San Diego (see split 760; overlay 619, 935)'
                ],
                    [
                        'code' => 909,
                        'state_id' => 7,
                        'note' => 'California: Inland empire: San Bernardino (see split 951), Riverside'
                ],
                    [
                        'code' => 916,
                        'state_id' => 7,
                        'note' => 'NE California: Sacramento, Walnut Grove, Lincoln, Newcastle and El Dorado Hills (split to 530)'
                ],
                    [
                        'code' => 925,
                        'state_id' => 7,
                        'note' => 'California: Contra Costa area: Antioch, Concord, Pleasanton, Walnut Creek (split from 510)'
                ],
                    [
                        'code' => 935,
                        'state_id' => 7,
                        'note' => 'S California: San Diego (see split 760; overlay 858, 619; assigned but not in use)'
                ],
                    [
                        'code' => 949,
                        'state_id' => 7,
                        'note' => 'California: S Coastal Orange County (split from 714)'
                ],
                    [
                        'code' => 951,
                        'state_id' => 7,
                        'note' => 'California: W Riverside County (split from 909; eff 7/17/04)'
                ],
                    [
                        'code' => 303,
                        'state_id' => 8,
                        'note' => 'Central Colorado: Denver (see 970, also 720 overlay)'
                ],
                    [
                        'code' => 719,
                        'state_id' => 8,
                        'note' => 'SE Colorado: Pueblo, Colorado Springs'
                ],
                    [
                        'code' => 720,
                        'state_id' => 8,
                        'note' => 'Central Colorado: Denver (overlaid on 303)'
                ],
                    [
                        'code' => 970,
                        'state_id' => 8,
                        'note' => 'N and W Colorado (part of what used to be 303)'
                ],
                    [
                        'code' => 203,
                        'state_id' => 9,
                        'note' => 'Connecticut: Fairfield County and New Haven County; Bridgeport, New Haven (see 860)'
                ],
                    [
                        'code' => 475,
                        'state_id' => 9,
                        'note' => 'Connecticut: New Haven, Greenwich, southwestern (postponed; was perm 1/6/01; mand 3/1/01???)'
                ],
                    [
                        'code' => 860,
                        'state_id' => 9,
                        'note' => 'Connecticut: areas outside of Fairfield and New Haven Counties (split from 203, overlay 959)'
                ],
                    [
                        'code' => 959,
                        'state_id' => 9,
                        'note' => 'Connecticut: Hartford, New London (postponed; was overlaid on 860 perm 1/6/01; mand 3/1/01???)'
                ],
                    [
                        'code' => 302,
                        'state_id' => 10,
                        'note' => 'Delaware'
                ],
                    [
                        'code' => 229,
                        'state_id' => 11,
                        'note' => 'SW Georgia: Albany (split from 912; see also 478; perm 8/1/00)'
                ],
                    [
                        'code' => 404,
                        'state_id' => 11,
                        'note' => 'N Georgia: Atlanta and suburbs (see overlay 678, split 770)'
                ],
                    [
                        'code' => 470,
                        'state_id' => 11,
                        'note' => 'Georgia: Greater Atlanta Metropolitan Area (overlaid on 404/770/678; mand 9/2/01)'
                ],
                    [
                        'code' => 478,
                        'state_id' => 11,
                        'note' => 'Central Georgia: Macon (split from 912; see also 229; perm 8/1/00; mand 8/1/01)'
                ],
                    [
                        'code' => 678,
                        'state_id' => 11,
                        'note' => 'N Georgia: metropolitan Atlanta (overlay; see 404, 770)'
                ],
                    [
                        'code' => 706,
                        'state_id' => 11,
                        'note' => 'N Georgia: Columbus, Augusta (see overlay 762)'
                ],
                    [
                        'code' => 762,
                        'state_id' => 11,
                        'note' => 'N Georgia: Columbus, Augusta (overlaid on 706)'
                ],
                    [
                        'code' => 770,
                        'state_id' => 11,
                        'note' => 'Georgia: Atlanta suburbs: outside of I-285 ring road (part of what used to be 404; see also overlay 678)'
                ],
                    [
                        'code' => 912,
                        'state_id' => 11,
                        'note' => 'SE Georgia: Savannah (see splits 229, 478)'
                ],
                    [
                        'code' => 808,
                        'state_id' => 12,
                        'note' => 'Hawaii'
                ],
                    [
                        'code' => 208,
                        'state_id' => 13,
                        'note' => 'Idaho'
                ],
                    [
                        'code' => 217,
                        'state_id' => 14,
                        'note' => 'Cent. Illinois: Springfield'
                ],
                    [
                        'code' => 224,
                        'state_id' => 14,
                        'note' => 'Northern NE Illinois:  Evanston, Waukegan, Northbrook (overlay on 847, eff 1/5/02)'
                ],
                    [
                        'code' => 309,
                        'state_id' => 14,
                        'note' => 'W Cent. Illinois: Peoria'
                ],
                    [
                        'code' => 312,
                        'state_id' => 14,
                        'note' => 'Illinois: Chicago (downtown only -- in the loop; see 773; overlay 872)'
                ],
                    [
                        'code' => 331,
                        'state_id' => 14,
                        'note' => 'W NE Illinois, western suburbs of Chicago (part of what used to be 708; overlaid on 630; eff 7/07)'
                ],
                    [
                        'code' => 464,
                        'state_id' => 14,
                        'note' => 'Illinois: south suburbs of Chicago (see 630; overlaid on 708)'
                ],
                    [
                        'code' => 618,
                        'state_id' => 14,
                        'note' => 'S Illinois: Centralia'
                ],
                    [
                        'code' => 630,
                        'state_id' => 14,
                        'note' => 'W NE Illinois, western suburbs of Chicago (part of what used to be 708; overlay 331)'
                ],
                    [
                        'code' => 708,
                        'state_id' => 14,
                        'note' => 'Illinois: southern and western suburbs of Chicago (see 630; overlay 464)'
                ],
                    [
                        'code' => 773,
                        'state_id' => 14,
                        'note' => 'Illinois: city of Chicago, outside the loop (see 312; overlay 872)'
                ],
                    [
                        'code' => 779,
                        'state_id' => 14,
                        'note' => 'NW Illinois: Rockford, Kankakee (overlaid on 815; eff 8/19/06, mand 2/17/07)'
                ],
                    [
                        'code' => 815,
                        'state_id' => 14,
                        'note' => 'NW Illinois: Rockford, Kankakee (see overlay 779; eff 8/19/06, mand 2/17/07)'
                ],
                    [
                        'code' => 847,
                        'state_id' => 14,
                        'note' => 'Northern NE Illinois: northwestern suburbs of chicago (Evanston, Waukegan, Northbrook; see overlay 224)'
                ],
                    [
                        'code' => 872,
                        'state_id' => 14,
                        'note' => 'Illinois: Chicago (downtown only -- in the loop; see 773; overlaid on 312 and 773)'
                ],
                    [
                        'code' => 219,
                        'state_id' => 15,
                        'note' => 'NW Indiana: Gary (see split 574, 260)'
                ],
                    [
                        'code' => 260,
                        'state_id' => 15,
                        'note' => 'NE Indiana: Fort Wayne (see 219)'
                ],
                    [
                        'code' => 317,
                        'state_id' => 15,
                        'note' => 'Cent. Indiana: Indianapolis (see 765)'
                ],
                    [
                        'code' => 574,
                        'state_id' => 15,
                        'note' => 'N Indiana: Elkhart, South Bend (split from 219)'
                ],
                    [
                        'code' => 765,
                        'state_id' => 15,
                        'note' => 'Indiana: outside Indianapolis (split from 317)'
                ],
                    [
                        'code' => 812,
                        'state_id' => 15,
                        'note' => 'S Indiana: Evansville, Cincinnati outskirts in IN, Columbus, Bloomington (mostly GMT-5)'
                ],
                    [
                        'code' => 319,
                        'state_id' => 16,
                        'note' => 'E Iowa: Cedar Rapids (see split 563)'
                ],
                    [
                        'code' => 515,
                        'state_id' => 16,
                        'note' => 'Cent. Iowa: Des Moines (see split 641)'
                ],
                    [
                        'code' => 563,
                        'state_id' => 16,
                        'note' => 'E Iowa: Davenport, Dubuque (split from 319, eff 3/25/01)'
                ],
                    [
                        'code' => 641,
                        'state_id' => 16,
                        'note' => 'Iowa: Mason City, Marshalltown, Creston, Ottumwa (split from 515; perm 7/9/00)'
                ],
                    [
                        'code' => 712,
                        'state_id' => 16,
                        'note' => 'W Iowa: Council Bluffs'
                ],
                    [
                        'code' => 316,
                        'state_id' => 17,
                        'note' => 'S Kansas: Wichita (see split 620)'
                ],
                    [
                        'code' => 620,
                        'state_id' => 17,
                        'note' => 'S Kansas: Wichita (split from 316; perm 2/3/01)'
                ],
                    [
                        'code' => 785,
                        'state_id' => 17,
                        'note' => 'N & W Kansas: Topeka (split from 913)'
                ],
                    [
                        'code' => 913,
                        'state_id' => 17,
                        'note' => 'Kansas: Kansas City area (see 785)'
                ],
                    [
                        'code' => 225,
                        'state_id' => 18,
                        'note' => 'Louisiana: Baton Rouge, New Roads, Donaldsonville, Albany, Gonzales, Greensburg, Plaquemine, Vacherie (split from 504)'
                ],
                    [
                        'code' => 318,
                        'state_id' => 18,
                        'note' => 'N Louisiana: Shreveport, Ruston, Monroe, Alexandria (see split 337)'
                ],
                    [
                        'code' => 337,
                        'state_id' => 18,
                        'note' => 'SW Louisiana: Lake Charles, Lafayette (see split 318)'
                ],
                    [
                        'code' => 504,
                        'state_id' => 18,
                        'note' => 'E Louisiana: New Orleans metro area (see splits 225, 985)'
                ],
                    [
                        'code' => 985,
                        'state_id' => 18,
                        'note' => 'E Louisiana: SE/N shore of Lake Pontchartrain: Hammond, Slidell, Covington, Amite, Kentwood, area SW of New Orleans, Houma, Thibodaux, Morgan City (split from 504; perm 2/12/01; mand 10/22/01)'
                ],
                    [
                        'code' => 207,
                        'state_id' => 19,
                        'note' => 'Maine'
                ],
                    [
                        'code' => 240,
                        'state_id' => 20,
                        'note' => 'W Maryland: Silver Spring, Frederick, Gaithersburg (overlay, see 301)'
                ],
                    [
                        'code' => 301,
                        'state_id' => 20,
                        'note' => 'W Maryland: Silver Spring, Frederick, Camp Springs, Prince George\'s County (see 240)'
                ],
                    [
                        'code' => 410,
                        'state_id' => 20,
                        'note' => 'E Maryland: Baltimore, Annapolis, Chesapeake Bay area, Ocean City (see overlays 443, 667)'
                ],
                    [
                        'code' => 443,
                        'state_id' => 20,
                        'note' => 'E Maryland: Baltimore, Annapolis, Chesapeake Bay area, Ocean City (overlaid on 410, see overlay 667)'
                ],
                    [
                        'code' => 667,
                        'state_id' => 20,
                        'note' => 'E Maryland: Baltimore, Annapolis, Chesapeake Bay area, Ocean City (overlaid on 410, 443)'
                ],
                    [
                        'code' => 339,
                        'state_id' => 21,
                        'note' => 'Massachusetts: Boston suburbs, to the south and west (see splits 617, 508;
overlaid on 781, eff 5/2/01)'
                ],
                    [
                        'code' => 351,
                        'state_id' => 21,
                        'note' => 'Massachusetts: north of Boston to NH, 508, and 781 (overlaid on 978, eff 4/2/01)'
                ],
                    [
                        'code' => 413,
                        'state_id' => 21,
                        'note' => 'W Massachusetts: Springfield'
                ],
                    [
                        'code' => 508,
                        'state_id' => 21,
                        'note' => 'Cent. Massachusetts: Framingham;
Cape Cod (see split 978, overlay 774)'
                ],
                    [
                        'code' => 617,
                        'state_id' => 21,
                        'note' => 'Massachusetts: greater Boston (see overlay 857)'
                ],
                    [
                        'code' => 774,
                        'state_id' => 21,
                        'note' => 'Cent. Massachusetts: Framingham;
Cape Cod (see split 978, overlaid on 508, eff 4/2/01)'
                ],
                    [
                        'code' => 781,
                        'state_id' => 21,
                        'note' => 'Massachusetts: Boston surburbs, to the north and west (see splits 617, 508;
overlay 339)'
                ],
                    [
                        'code' => 857,
                        'state_id' => 21,
                        'note' => 'Massachusetts: greater Boston (overlaid on 617, eff 4/2/01)'
                ],
                    [
                        'code' => 978,
                        'state_id' => 21,
                        'note' => 'Massachusetts: north of Boston to NH (see split 978 --this is the northern half of old 508;
see overlay 351)'
                ],
                    [
                        'code' => 231,
                        'state_id' => 22,
                        'note' => 'W Michigan: Northwestern portion of lower Peninsula;
Traverse City, Muskegon, Cheboygan, Alanson'
                ],
                    [
                        'code' => 248,
                        'state_id' => 22,
                        'note' => 'Michigan: Oakland County, Pontiac (split from 810;
see overlay 947)'
                ],
                    [
                        'code' => 269,
                        'state_id' => 22,
                        'note' => 'SW Michigan: Kalamazoo, Saugatuck, Hastings, Battle Creek, Sturgis to Lake Michigan (split from 616)'
                ],
                    [
                        'code' => 278,
                        'state_id' => 22,
                        'note' => 'Michigan (overlaid on 734, SUSPENDED)'
                ],
                    [
                        'code' => 313,
                        'state_id' => 22,
                        'note' => 'Michigan: Detroit and suburbs (see 734, overlay 679)'
                ],
                    [
                        'code' => 517,
                        'state_id' => 22,
                        'note' => 'Cent. Michigan: Lansing (see split 989)'
                ],
                    [
                        'code' => 586,
                        'state_id' => 22,
                        'note' => 'Michigan: Macomb County (split from 810;
perm 9/22/01, mand 3/23/02)'
                ],
                    [
                        'code' => 616,
                        'state_id' => 22,
                        'note' => 'W Michigan: Holland, Grand Haven, Greenville, Grand Rapids, Ionia (see split 269)'
                ],
                    [
                        'code' => 679,
                        'state_id' => 22,
                        'note' => 'Michigan: Dearborn area (overlaid on 313;
assigned but not in use)'
                ],
                    [
                        'code' => 734,
                        'state_id' => 22,
                        'note' => 'SE Michigan: west and south of Detroit --Ann Arbor, Monroe (split from 313)'
                ],
                    [
                        'code' => 810,
                        'state_id' => 22,
                        'note' => 'E Michigan: Flint, Pontiac (see 248;
split 586)'
                ],
                    [
                        'code' => 906,
                        'state_id' => 22,
                        'note' => 'Upper Peninsula Michigan: Sault Ste. Marie, Escanaba, Marquette (UTC-6 towards the WI border)'
                ],
                    [
                        'code' => 947,
                        'state_id' => 22,
                        'note' => 'Michigan: Oakland County (overlays 248, perm 5/5/01)'
                ],
                    [
                        'code' => 989,
                        'state_id' => 22,
                        'note' => 'Upper central Michigan: Mt Pleasant, Saginaw (split from 517;
perm 4/7/01)'
                ],
                    [
                        'code' => 218,
                        'state_id' => 23,
                        'note' => 'N Minnesota: Duluth'
                ],
                    [
                        'code' => 320,
                        'state_id' => 23,
                        'note' => 'Cent. Minnesota: Saint Cloud (rural Minn, excl St. Paul/Minneapolis)'
                ],
                    [
                        'code' => 507,
                        'state_id' => 23,
                        'note' => 'S Minnesota: Rochester, Mankato, Worthington'
                ],
                    [
                        'code' => 612,
                        'state_id' => 23,
                        'note' => 'Cent. Minnesota: Minneapolis (split from St. Paul, see 651;
see splits 763, 952)'
                ],
                    [
                        'code' => 651,
                        'state_id' => 23,
                        'note' => 'Cent. Minnesota: St. Paul (split from Minneapolis, see 612)'
                ],
                    [
                        'code' => 763,
                        'state_id' => 23,
                        'note' => 'Minnesota: Minneapolis NW (split from 612;
see also 952)'
                ],
                    [
                        'code' => 952,
                        'state_id' => 23,
                        'note' => 'Minnesota: Minneapolis SW, Bloomington (split from 612;
see also 763)'
                ],
                    [
                        'code' => 228,
                        'state_id' => 24,
                        'note' => 'S Mississippi (coastal areas, Biloxi, Gulfport;
split from 601)'
                ],
                    [
                        'code' => 601,
                        'state_id' => 24,
                        'note' => 'Mississippi: Meridian, Jackson area (see splits 228, 662;
overlay 769)'
                ],
                    [
                        'code' => 662,
                        'state_id' => 24,
                        'note' => 'N Mississippi: Tupelo, Grenada (split from 601)'
                ],
                    [
                        'code' => 769,
                        'state_id' => 24,
                        'note' => 'Mississippi: Meridian, Jackson area (overlaid on 601;
perm 7/19/04, mand 3/14/05)'
                ],
                    [
                        'code' => 314,
                        'state_id' => 25,
                        'note' => 'SE Missouri: St Louis city and parts of the metro area only (see 573, 636, overlay 557)'
                ],
                    [
                        'code' => 417,
                        'state_id' => 25,
                        'note' => 'SW Missouri: Springfield'
                ],
                    [
                        'code' => 557,
                        'state_id' => 25,
                        'note' => 'SE Missouri: St Louis metro area only (cancelled: overlaid on 314)'
                ],
                    [
                        'code' => 573,
                        'state_id' => 25,
                        'note' => 'SE Missouri: excluding St Louis metro area, includes Central/East Missouri, area between St. Louis and Kansas City'
                ],
                    [
                        'code' => 636,
                        'state_id' => 25,
                        'note' => 'Missouri: W St. Louis metro area of St. Louis county, St. Charles County, Jefferson County area south (between 314 and 573)'
                ],
                    [
                        'code' => 660,
                        'state_id' => 25,
                        'note' => 'N Missouri (split from 816)'
                ],
                    [
                        'code' => 816,
                        'state_id' => 25,
                        'note' => 'N Missouri: Kansas City (see split 660, overlay 975)'
                ],
                    [
                        'code' => 975,
                        'state_id' => 25,
                        'note' => 'N Missouri: Kansas City (overlaid on 816)'
                ],
                    [
                        'code' => 406,
                        'state_id' => 26,
                        'note' => 'Montana'
                ],
                    [
                        'code' => 308,
                        'state_id' => 27,
                        'note' => 'W Nebraska: North Platte'
                ],
                    [
                        'code' => 402,
                        'state_id' => 27,
                        'note' => 'E Nebraska: Omaha, Lincoln'
                ],
                    [
                        'code' => 702,
                        'state_id' => 28,
                        'note' => 'S. Nevada: Clark County, incl Las Vegas (overlay 725, eff 6/2014;
see also 775)'
                ],
                    [
                        'code' => 725,
                        'state_id' => 28,
                        'note' => 'S. Nevada: Clark County, incl Las Vegas (overlaid on 702, eff 6/2014;
see also 775)'
                ],
                    [
                        'code' => 775,
                        'state_id' => 28,
                        'note' => 'N. Nevada: Reno (all of NV except Clark County area;
see 702)'
                ],
                    [
                        'code' => 603,
                        'state_id' => 29,
                        'note' => 'New Hampshire'
                ],
                    [
                        'code' => 201,
                        'state_id' => 30,
                        'note' => 'N New Jersey: Jersey City, Hackensack (see split 973, overlay 551)'
                ],
                    [
                        'code' => 551,
                        'state_id' => 30,
                        'note' => 'N New Jersey: Jersey City, Hackensack (overlaid on 201)'
                ],
                    [
                        'code' => 609,
                        'state_id' => 30,
                        'note' => 'S New Jersey: Trenton (see 856)'
                ],
                    [
                        'code' => 732,
                        'state_id' => 30,
                        'note' => 'Cent. New Jersey: Toms River, New Brunswick, Bound Brook (see overlay 848)'
                ],
                    [
                        'code' => 848,
                        'state_id' => 30,
                        'note' => 'Cent. New Jersey: Toms River, New Brunswick, Bound Brook (see overlay 732)'
                ],
                    [
                        'code' => 856,
                        'state_id' => 30,
                        'note' => 'SW New Jersey: greater Camden area, Mt Laurel (split from 609)'
                ],
                    [
                        'code' => 862,
                        'state_id' => 30,
                        'note' => 'N New Jersey: Newark Paterson Morristown (overlaid on 973)'
                ],
                    [
                        'code' => 908,
                        'state_id' => 30,
                        'note' => 'Cent. New Jersey: Elizabeth, Basking Ridge, Somerville, Bridgewater, Bound Brook'
                ],
                    [
                        'code' => 973,
                        'state_id' => 30,
                        'note' => 'N New Jersey: Newark, Paterson, Morristown (see overlay 862;
split from 201)'
                ],
                    [
                        'code' => 505,
                        'state_id' => 31,
                        'note' => 'North central and northwestern New Mexico (Albuquerque, Santa Fe, Los Alamos;
see split 575, eff 10/07/07)'
                ],
                    [
                        'code' => 575,
                        'state_id' => 31,
                        'note' => 'New Mexico (Las Cruces, Alamogordo, Roswell;
split from 505, eff 10/07/07)'
                ],
                    [
                        'code' => 957,
                        'state_id' => 31,
                        'note' => 'New Mexico (pending;
region unknown)'
                ],
                    [
                        'code' => 212,
                        'state_id' => 32,
                        'note' => 'New York City, New York (Manhattan;
see ovelays 332, 646, 917;
split 718)'
                ],
                    [
                        'code' => 315,
                        'state_id' => 32,
                        'note' => 'N Cent. New York: Syracuse'
                ],
                    [
                        'code' => 332,
                        'state_id' => 32,
                        'note' => 'New York City, New York (Manhattan;
overlaid on 212, 646, 917)'
                ],
                    [
                        'code' => 347,
                        'state_id' => 32,
                        'note' => 'New York City, New York (overlay for 718: NYC area, except Manhattan)'
                ],
                    [
                        'code' => 516,
                        'state_id' => 32,
                        'note' => 'New York: Nassau County, Long Island;
Hempstead (see split 631)'
                ],
                    [
                        'code' => 518,
                        'state_id' => 32,
                        'note' => 'NE New York: Albany'
                ],
                    [
                        'code' => 585,
                        'state_id' => 32,
                        'note' => 'NW New York: Rochester (split from 716)'
                ],
                    [
                        'code' => 607,
                        'state_id' => 32,
                        'note' => 'S Cent. New York: Ithaca, Binghamton;
Catskills'
                ],
                    [
                        'code' => 631,
                        'state_id' => 32,
                        'note' => 'New York: Suffolk County, Long Island;
Huntington, Riverhead (split 516)'
                ],
                    [
                        'code' => 646,
                        'state_id' => 32,
                        'note' => 'New York (overlaid on 212, 332, 917) NYC (mostly mobile)'
                ],
                    [
                        'code' => 716,
                        'state_id' => 32,
                        'note' => 'NW New York: Buffalo (see split 585)'
                ],
                    [
                        'code' => 718,
                        'state_id' => 32,
                        'note' => 'New York City, New York (Queens, Staten Island, The Bronx, and Brooklyn;
also Marble Hill section of Manhattan;
see split 212, 347, 929)'
                ],
                    [
                        'code' => 845,
                        'state_id' => 32,
                        'note' => 'New York: Poughkeepsie; Nyack, Nanuet, Valley Cottage, New City, Putnam, Dutchess, Rockland, Orange, Ulster and parts of Sullivan counties in New York\'s lower Hudson Valley and Delaware County in the Catskills (see 914; perm 6/5/00)'
                ],
                    [
                        'code' => 914,
                        'state_id' => 32,
                        'note' => 'S New York: Westchester County (see 845)'
                ],
                    [
                        'code' => 917,
                        'state_id' => 32,
                        'note' => 'New York: New York City (cellular, see 646)'
                ],
                    [
                        'code' => 929,
                        'state_id' => 32,
                        'note' => 'New York City, New York (Queens, Staten Island, The Bronx, and Brooklyn; also Marble Hill section of Manhattan; see split 212, 347, 718)'
                ],
                    [
                        'code' => 252,
                        'state_id' => 33,
                        'note' => 'E North Carolina (Rocky Mount; split from 919)'
                ],
                    [
                        'code' => 336,
                        'state_id' => 33,
                        'note' => 'Cent. North Carolina: Greensboro, Winston-Salem, High Point (split from 910; see overlay 743)'
                ],
                    [
                        'code' => 704,
                        'state_id' => 33,
                        'note' => 'W North Carolina: Charlotte (see split 828, overlay 980)'
                ],
                    [
                        'code' => 743,
                        'state_id' => 33,
                        'note' => 'Cent. North Carolina: Greensboro, Winston-Salem, High Point (overlaid on 336)'
                ],
                    [
                        'code' => 828,
                        'state_id' => 33,
                        'note' => 'W North Carolina: Asheville (split from 704)'
                ],
                    [
                        'code' => 910,
                        'state_id' => 33,
                        'note' => 'S Cent. North Carolina: Fayetteville, Wilmington (see 336)'
                ],
                    [
                        'code' => 919,
                        'state_id' => 33,
                        'note' => 'E North Carolina: Raleigh (see split 252, overlay 984)'
                ],
                    [
                        'code' => 980,
                        'state_id' => 33,
                        'note' => 'North Carolina: (overlay on 704; perm 5/1/00, mand 3/15/01)'
                ],
                    [
                        'code' => 984,
                        'state_id' => 33,
                        'note' => 'E North Carolina: Raleigh (overlaid on 919, perm 8/1/01, mand 2/5/02 POSTPONED)'
                ],
                    [
                        'code' => 701,
                        'state_id' => 34,
                        'note' => 'North Dakota'
                ],
                    [
                        'code' => 216,
                        'state_id' => 35,
                        'note' => 'Cleveland (see splits 330, 440)'
                ],
                    [
                        'code' => 220,
                        'state_id' => 35,
                        'note' => 'SE and Central Ohio (outside Columbus; overlaid on 740)'
                ],
                    [
                        'code' => 234,
                        'state_id' => 35,
                        'note' => 'NE Ohio: Canton, Akron (overlaid on 330; perm 10/30/00)'
                ],
                    [
                        'code' => 283,
                        'state_id' => 35,
                        'note' => 'SW Ohio: Cincinnati (cancelled: overlaid on 513)'
                ],
                    [
                        'code' => 330,
                        'state_id' => 35,
                        'note' => 'NE Ohio: Akron, Canton, Youngstown; Mahoning County, parts of Trumbull/Warren counties (see splits 216, 440, overlay 234)'
                ],
                    [
                        'code' => 380,
                        'state_id' => 35,
                        'note' => 'Ohio: Columbus (overlaid on 614; assigned but not in use)'
                ],
                    [
                        'code' => 419,
                        'state_id' => 35,
                        'note' => 'NW Ohio: Toledo (see overlay 567, perm 1/1/02)'
                ],
                    [
                        'code' => 440,
                        'state_id' => 35,
                        'note' => 'Ohio: Cleveland metro area, excluding Cleveland (split from 216, see also 330)'
                ],
                    [
                        'code' => 513,
                        'state_id' => 35,
                        'note' => 'SW Ohio: Cincinnati (see split 937; overlay 283 cancelled)'
                ],
                    [
                        'code' => 567,
                        'state_id' => 35,
                        'note' => 'NW Ohio: Toledo (overlaid on 419, perm 1/1/02)'
                ],
                    [
                        'code' => 614,
                        'state_id' => 35,
                        'note' => 'SE Ohio: Columbus (see overlay 380)'
                ],
                    [
                        'code' => 740,
                        'state_id' => 35,
                        'note' => 'SE and Central Ohio (outside Columbus; split from 614; overlay 220)'
                ],
                    [
                        'code' => 937,
                        'state_id' => 35,
                        'note' => 'SW Ohio: Dayton (part of what used to be 513)'
                ],
                    [
                        'code' => 405,
                        'state_id' => 36,
                        'note' => 'W Oklahoma: Oklahoma City (see 580)'
                ],
                    [
                        'code' => 539,
                        'state_id' => 36,
                        'note' => 'E Oklahoma: Tulsa area (overlaid on 918)'
                ],
                    [
                        'code' => 580,
                        'state_id' => 36,
                        'note' => 'W Oklahoma (rural areas outside Oklahoma City; split from 405)'
                ],
                    [
                        'code' => 918,
                        'state_id' => 36,
                        'note' => 'E Oklahoma: Tulsa (see overlay 539)'
                ],
                    [
                        'code' => 458,
                        'state_id' => 37,
                        'note' => 'Oregon: Eugene, Medford (overlaid on 541)'
                ],
                    [
                        'code' => 503,
                        'state_id' => 37,
                        'note' => 'Oregon (see 458, 541, 971)'
                ],
                    [
                        'code' => 541,
                        'state_id' => 37,
                        'note' => 'Oregon: Eugene, Medford (split from 503; 503 retains NW part [Portland/Salem], all else moves to 541; eastern oregon is UTC-7).  Also serves small part of northern California (NE corner of Del Norte County).  (See overlay 458.)'
                ],
                    [
                        'code' => 971,
                        'state_id' => 37,
                        'note' => 'Oregon:  Metropolitan Portland, Salem/Keizer area, incl Cricket Wireless (see 503; perm 10/1/00)'
                ],
                    [
                        'code' => 215,
                        'state_id' => 38,
                        'note' => 'SE Pennsylvania: Philadelphia (see overlays 267)'
                ],
                    [
                        'code' => 223,
                        'state_id' => 38,
                        'note' => 'E Pennsylvania: Gettysburg, Harrisburg, Lancaster, Lebanan, and York (overlays 223, eff 8/2017)'
                ],
                    [
                        'code' => 267,
                        'state_id' => 38,
                        'note' => 'SE Pennsylvania: Philadelphia (see 215)'
                ],
                    [
                        'code' => 272,
                        'state_id' => 38,
                        'note' => 'NE and N Central Pennsylvania: Wilkes-Barre, Scranton (see 717; overlaid on 570)'
                ],
                    [
                        'code' => 412,
                        'state_id' => 38,
                        'note' => 'W Pennsylvania: Pittsburgh (see split 724, overlay 878)'
                ],
                    [
                        'code' => 484,
                        'state_id' => 38,
                        'note' => 'SE Pennsylvania: Allentown, Bethlehem, Reading, West Chester, Norristown (see 610)'
                ],
                    [
                        'code' => 570,
                        'state_id' => 38,
                        'note' => 'NE and N Central Pennsylvania: Wilkes-Barre, Scranton (see 717; see overlay 272)'
                ],
                    [
                        'code' => 610,
                        'state_id' => 38,
                        'note' => 'SE Pennsylvania: Allentown, Bethlehem, Reading, West Chester, Norristown (see overlays 484, 835)'
                ],
                    [
                        'code' => 717,
                        'state_id' => 38,
                        'note' => 'E Pennsylvania: Harrisburg (see split 570, overlay 223)'
                ],
                    [
                        'code' => 724,
                        'state_id' => 38,
                        'note' => 'SW Pennsylvania (areas outside metro Pittsburgh; split from 412)'
                ],
                    [
                        'code' => 814,
                        'state_id' => 38,
                        'note' => 'Cent. Pennsylvania: Erie'
                ],
                    [
                        'code' => 835,
                        'state_id' => 38,
                        'note' => 'SE Pennsylvania: Allentown, Bethlehem, Reading, West Chester, Norristown (overlaid on 610, eff 5/1/01; see also 484)'
                ],
                    [
                        'code' => 878,
                        'state_id' => 38,
                        'note' => 'Pittsburgh, New Castle (overlaid on 412, perm 8/17/01, mand t.b.a.)'
                ],
                    [
                        'code' => 401,
                        'state_id' => 39,
                        'note' => 'Rhode Island'
                ],
                    [
                        'code' => 803,
                        'state_id' => 40,
                        'note' => 'South Carolina: Columbia, Aiken, Sumter (see 843, 864)'
                ],
                    [
                        'code' => 843,
                        'state_id' => 40,
                        'note' => 'South Carolina, coastal area: Charleston, Beaufort, Myrtle Beach (split from 803)'
                ],
                    [
                        'code' => 864,
                        'state_id' => 40,
                        'note' => 'South Carolina, upstate area: Greenville, Spartanburg (split from 803)'
                ],
                    [
                        'code' => 605,
                        'state_id' => 41,
                        'note' => 'South Dakota'
                ],
                    [
                        'code' => 423,
                        'state_id' => 42,
                        'note' => 'E Tennessee, except Knoxville metro area: Chattanooga, Bristol, Johnson City, Kingsport, Greeneville (see split 865; part of what used to be 615)'
                ],
                    [
                        'code' => 615,
                        'state_id' => 42,
                        'note' => 'Northern Middle Tennessee: Nashville metro area (see 423, 931; see overlay 629, eff 2014)'
                ],
                    [
                        'code' => 629,
                        'state_id' => 42,
                        'note' => 'Northern Middle Tennessee: Nashville metro area (see 423, 931; overlaid on 615, eff 2014)'
                ],
                    [
                        'code' => 731,
                        'state_id' => 42,
                        'note' => 'W Tennessee: outside Memphis metro area (split from 901, perm 2/12/01, mand 9/17/01)'
                ],
                    [
                        'code' => 865,
                        'state_id' => 42,
                        'note' => 'E Tennessee: Knoxville, Knox and adjacent counties (split from 423; part of what used to be 615)'
                ],
                    [
                        'code' => 901,
                        'state_id' => 42,
                        'note' => 'W Tennessee: Memphis metro area (see 615, 931, split 731)'
                ],
                    [
                        'code' => 931,
                        'state_id' => 42,
                        'note' => 'Middle Tennessee: semi-circular ring around Nashville (split from 615)'
                ],
                    [
                        'code' => 210,
                        'state_id' => 43,
                        'note' => 'S Texas: San Antonio (see also splits 830, 956)'
                ],
                    [
                        'code' => 214,
                        'state_id' => 43,
                        'note' => 'Texas: Dallas Metro (overlays 469/972)'
                ],
                    [
                        'code' => 254,
                        'state_id' => 43,
                        'note' => 'Central Texas (Waco, Stephenville; split, see 817, 940)'
                ],
                    [
                        'code' => 281,
                        'state_id' => 43,
                        'note' => 'Texas: Houston Metro (split 713; overlay 832, 346)'
                ],
                    [
                        'code' => 325,
                        'state_id' => 43,
                        'note' => 'Central Texas: Abilene, Sweetwater, Snyder, San Angelo (split from 915)'
                ],
                    [
                        'code' => 346,
                        'state_id' => 43,
                        'note' => 'Mid SE Texas: central Houston (overlaid on 713, 281, and 832)'
                ],
                    [
                        'code' => 361,
                        'state_id' => 43,
                        'note' => 'S Texas: Corpus Christi (split from 512; eff 2/13/99)'
                ],
                    [
                        'code' => 409,
                        'state_id' => 43,
                        'note' => 'SE Texas: Galveston, Port Arthur, Beaumont (splits 936, 979)'
                ],
                    [
                        'code' => 430,
                        'state_id' => 43,
                        'note' => 'NE Texas: Tyler (overlaid on 903, eff 7/20/02)'
                ],
                    [
                        'code' => 432,
                        'state_id' => 43,
                        'note' => 'W Texas: Big Spring, Midland, Odessa (split from 915, eff 4/5/03)'
                ],
                    [
                        'code' => 469,
                        'state_id' => 43,
                        'note' => 'Texas: Dallas Metro (overlays 214/972)'
                ],
                    [
                        'code' => 512,
                        'state_id' => 43,
                        'note' => 'S Texas: Austin (see split 361; overlay 737, perm 11/10/01)'
                ],
                    [
                        'code' => 682,
                        'state_id' => 43,
                        'note' => 'Texas: Fort Worth areas (perm 10/7/00, mand 12/9/00)'
                ],
                    [
                        'code' => 713,
                        'state_id' => 43,
                        'note' => 'Mid SE Texas: central Houston (split 281; overlay 346, 832)'
                ],
                    [
                        'code' => 737,
                        'state_id' => 43,
                        'note' => 'S Texas: Austin (overlaid on 512, suspended; see also 361)'
                ],
                    [
                        'code' => 806,
                        'state_id' => 43,
                        'note' => 'Panhandle Texas: Amarillo, Lubbock'
                ],
                    [
                        'code' => 817,
                        'state_id' => 43,
                        'note' => 'N Cent. Texas: Fort Worth area (see 254, 940)'
                ],
                    [
                        'code' => 830,
                        'state_id' => 43,
                        'note' => 'Texas: region surrounding San Antonio (split from 210)'
                ],
                    [
                        'code' => 832,
                        'state_id' => 43,
                        'note' => 'Texas: Houston (overlay 713, 281, 346)'
                ],
                    [
                        'code' => 903,
                        'state_id' => 43,
                        'note' => 'NE Texas: Tyler (see overlay 430, eff 7/20/02)'
                ],
                    [
                        'code' => 915,
                        'state_id' => 43,
                        'note' => 'W Texas: El Paso (see splits 325 eff 4/5/03; 432, eff 4/5/03)'
                ],
                    [
                        'code' => 936,
                        'state_id' => 43,
                        'note' => 'SE Texas: Conroe, Lufkin, Nacogdoches, Crockett (split from 409, see also 979)'
                ],
                    [
                        'code' => 940,
                        'state_id' => 43,
                        'note' => 'N Cent. Texas: Denton, Wichita Falls (split from 254, 817)'
                ],
                    [
                        'code' => 956,
                        'state_id' => 43,
                        'note' => 'Texas: Valley of Texas area; Harlingen, Laredo (split from 210)'
                ],
                    [
                        'code' => 972,
                        'state_id' => 43,
                        'note' => 'Texas: Dallas Metro (overlays 214/469)'
                ],
                    [
                        'code' => 979,
                        'state_id' => 43,
                        'note' => 'SE Texas: Bryan, College Station, Bay City (split from 409, see also 936)'
                ],
                    [
                        'code' => 385,
                        'state_id' => 44,
                        'note' => 'Utah: Salt Lake City Metro (split from 801, eff 3/30/02 POSTPONED; see also 435)'
                ],
                    [
                        'code' => 435,
                        'state_id' => 44,
                        'note' => 'Rural Utah outside Salt Lake City metro (see split 801)'
                ],
                    [
                        'code' => 801,
                        'state_id' => 44,
                        'note' => 'Utah: Salt Lake City Metro (see split 385, eff 3/30/02; see also split 435)'
                ],
                    [
                        'code' => 802,
                        'state_id' => 45,
                        'note' => 'Vermont'
                ],
                    [
                        'code' => 276,
                        'state_id' => 46,
                        'note' => 'S and SW Virginia: Bristol, Stuart, Martinsville (split from 540; perm 9/1/01, mand 3/16/02)'
                ],
                    [
                        'code' => 434,
                        'state_id' => 46,
                        'note' => 'E Virginia: Charlottesville, Lynchburg, Danville, South Boston, and Emporia (split from 804, eff 6/1/01; see also 757)'
                ],
                    [
                        'code' => 540,
                        'state_id' => 46,
                        'note' => 'Western and Southwest Virginia: Shenandoah and Roanoke valleys: Fredericksburg, Harrisonburg, Roanoke, Salem, Lexington and nearby areas (see split 276; split from 703)'
                ],
                    [
                        'code' => 571,
                        'state_id' => 46,
                        'note' => 'Northern Virginia: Arlington, McLean, Tysons Corner (to be overlaid on 703 3/1/00; see earlier split 540)'
                ],
                    [
                        'code' => 703,
                        'state_id' => 46,
                        'note' => 'Northern Virginia: Arlington, McLean, Tysons Corner (see split 540; overlay 571)'
                ],
                    [
                        'code' => 757,
                        'state_id' => 46,
                        'note' => 'E Virginia: Tidewater / Hampton Roads area -- Norfolk, Virginia Beach, Chesapeake, Portsmouth, Hampton, Newport News, Suffolk (part of what used to be 804)'
                ],
                    [
                        'code' => 804,
                        'state_id' => 46,
                        'note' => 'E Virginia: Richmond (see splits 757, 434)'
                ],
                    [
                        'code' => 206,
                        'state_id' => 47,
                        'note' => 'W Washington state: Seattle and Bainbridge Island (see splits 253, 360, 425; overlay 564)'
                ],
                    [
                        'code' => 253,
                        'state_id' => 47,
                        'note' => 'Washington: South Tier - Tacoma, Federal Way (split from 206, see also 425; overlay 564)'
                ],
                    [
                        'code' => 360,
                        'state_id' => 47,
                        'note' => 'W Washington State: Olympia, Bellingham (area circling 206, 253, and 425; split from 206; see overlay 564)'
                ],
                    [
                        'code' => 425,
                        'state_id' => 47,
                        'note' => 'Washington: North Tier - Everett, Bellevue (split from 206, see also 253; overlay 564)'
                ],
                    [
                        'code' => 509,
                        'state_id' => 47,
                        'note' => 'E and Central Washington state: Spokane, Yakima, Walla Walla, Ellensburg'
                ],
                    [
                        'code' => 564,
                        'state_id' => 47,
                        'note' => 'W Washington State: Olympia, Bellingham (overlaid on 360; see also 206, 253, 425; assigned but not in use)'
                ],
                    [
                        'code' => 304,
                        'state_id' => 48,
                        'note' => 'West Virginia (see overlay 681)'
                ],
                    [
                        'code' => 681,
                        'state_id' => 48,
                        'note' => 'West Virginia (overlaid on 304)'
                ],
                    [
                        'code' => 262,
                        'state_id' => 49,
                        'note' => 'SE Wisconsin: counties of Kenosha, Ozaukee, Racine, Walworth, Washington, Waukesha (split from 414)'
                ],
                    [
                        'code' => 414,
                        'state_id' => 49,
                        'note' => 'SE Wisconsin: Milwaukee County (see splits 920, 262)'
                ],
                    [
                        'code' => 608,
                        'state_id' => 49,
                        'note' => 'SW Wisconsin: Madison'
                ],
                    [
                        'code' => 715,
                        'state_id' => 49,
                        'note' => 'N Wisconsin: Eau Claire, Wausau, Superior'
                ],
                    [
                        'code' => 920,
                        'state_id' => 49,
                        'note' => 'NE Wisconsin: Appleton, Green Bay, Sheboygan, Fond du Lac (from Beaver Dam NE to Oshkosh, Appleton, and Door County; part of what used to be 414)'
                ],
                    [
                        'code' => 307,
                        'state_id' => 50,
                        'note' => 'Wyoming'
                ],
                    [
                        'code' => 202,
                        'state_id' => 51,
                        'note' => 'Washington, D.C.'
                ],
                    [
                        'code' => 787,
                        'state_id' => 52,
                        'note' => 'Puerto Rico (see overlay 939, perm 8/1/01)'
                ],
                    [
                        'code' => 939,
                        'state_id' => 52,
                        'note' => 'Puerto Rico (overlaid on 787, perm 8/1/01)'
                ],
                    [
                        'code' => 340,
                        'state_id' => 53,
                        'note' => 'US Virgin Islands (see also 809)'
                ],
                    [
                        'code' => 671,
                        'state_id' => 54,
                        'note' => 'Guam'
                ],
                    [
                        'code' => 670,
                        'state_id' => 59,
                        'note' => 'Commonwealth of the Northern Mariana Islands (CNMI, US Commonwealth)'
                ]
            ]);
        }
    }

}
