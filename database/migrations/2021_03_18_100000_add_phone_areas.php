<?php

declare(strict_types = 1);

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Tipoff\Addresses\Models\PhoneArea;
use Tipoff\Addresses\Models\State;

class AddPhoneAreas extends Migration {

    public function up() {

        $phoneAreaData = [
                [
                    'code' => 907,
                    'state_abbreviation' => 'AK',
                    'note' => 'Alaska'
            ],
                [
                    'code' => 205,
                    'state_abbreviation' => 'AL',
                    'note' => 'Central Alabama (including Birmingham; excludes the southeastern corner of Alabama and the deep south; see splits 256 and 334)'
            ],
                [
                    'code' => 251,
                    'state_abbreviation' => 'AL',
                    'note' => 'S Alabama: Mobile and coastal areas, Jackson, Evergreen, Monroeville (split from 334, eff 6/18/01; see also 205, 256)'
            ],
                [
                    'code' => 256,
                    'state_abbreviation' => 'AL',
                    'note' => 'E and N Alabama (Huntsville, Florence, Gadsden; split from 205; see also 334)'
            ],
                [
                    'code' => 334,
                    'state_abbreviation' => 'AL',
                    'note' => 'S Alabama: Auburn/Opelika, Montgomery and coastal areas (part of what used to be 205; see also 256, split 251)'
            ],
                [
                    'code' => 479,
                    'state_abbreviation' => 'AR',
                    'note' => 'NW Arkansas:  Fort Smith, Fayetteville, Springdale, Bentonville (SPLIt from 501, perm 1/19/02, mand 7/20/02)'
            ],
                [
                    'code' => 501,
                    'state_abbreviation' => 'AR',
                    'note' => 'Central Arkansas: Little Rock, Hot Springs, Conway (see split 479)'
            ],
                [
                    'code' => 870,
                    'state_abbreviation' => 'AR',
                    'note' => 'Arkansas: areas outside of west/central AR: Jonesboro, etc'
            ],
                [
                    'code' => 480,
                    'state_abbreviation' => 'AZ',
                    'note' => 'Arizona: East Phoenix (see 520; also Phoenix split 602, 623)'
            ],
                [
                    'code' => 520,
                    'state_abbreviation' => 'AZ',
                    'note' => 'SE Arizona: Tucson area (split from 602; see split 928)'
            ],
                [
                    'code' => 602,
                    'state_abbreviation' => 'AZ',
                    'note' => 'Arizona: Phoenix (see 520; also Phoenix split 480, 623)'
            ],
                [
                    'code' => 623,
                    'state_abbreviation' => 'AZ',
                    'note' => 'Arizona: West Phoenix (see 520; also Phoenix split 480, 602)'
            ],
                [
                    'code' => 928,
                    'state_abbreviation' => 'AZ',
                    'note' => 'Central and Northern Arizona: Prescott, Flagstaff, Yuma (split from 520)'
            ],
                [
                    'code' => 209,
                    'state_abbreviation' => 'CA',
                    'note' => 'Cent. California: Stockton (see split 559)'
            ],
                [
                    'code' => 213,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: Los Angeles (see 310, 323, 626, 818)'
            ],
                [
                    'code' => 310,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: Beverly Hills, West Hollywood, West Los Angeles (see split 562; overlay 424)'
            ],
                [
                    'code' => 323,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: Los Angeles (outside downtown: Hollywood; split from 213)'
            ],
                [
                    'code' => 341,
                    'state_abbreviation' => 'CA',
                    'note' => '(overlay on 510; SUSPENDED)'
            ],
                [
                    'code' => 369,
                    'state_abbreviation' => 'CA',
                    'note' => 'Solano County (perm 12/2/00, mand 6/2/01)'
            ],
                [
                    'code' => 408,
                    'state_abbreviation' => 'CA',
                    'note' => 'Cent. Coastal California: San Jose (see overlay 669)'
            ],
                [
                    'code' => 415,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: San Francisco County and Marin County on the north side of the Golden Gate Bridge, extending north to Sonoma County (see 650 split; 628 overlay, eff 2/2015)'
            ],
                [
                    'code' => 424,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: Los Angeles (see split 562; overlaid on 310 mand 7/26/06)'
            ],
                [
                    'code' => 442,
                    'state_abbreviation' => 'CA',
                    'note' => 'Far north suburbs of San Diego (Oceanside, Escondido; overlaid on 760)'
            ],
                [
                    'code' => 510,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: Oakland, East Bay (see 925)'
            ],
                [
                    'code' => 530,
                    'state_abbreviation' => 'CA',
                    'note' => 'NE California: Eldorado County area, excluding Eldorado Hills itself: incl cities of Auburn, Chico, Redding, So. Lake Tahoe, Marysville, Nevada City/Grass Valley (split from 916)'
            ],
                [
                    'code' => 559,
                    'state_abbreviation' => 'CA',
                    'note' => 'Central California: Fresno (split from 209)'
            ],
                [
                    'code' => 562,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: Long Beach (split from 310 Los Angeles)'
            ],
                [
                    'code' => 619,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: San Diego (see split 760; overlay 858, 935)'
            ],
                [
                    'code' => 626,
                    'state_abbreviation' => 'CA',
                    'note' => 'E S California: Pasadena (split from 818 Los Angeles)'
            ],
                [
                    'code' => 627,
                    'state_abbreviation' => 'CA',
                    'note' => 'No longer in use [was Napa, Sonoma counties (perm 10/13/01, mand 4/13/02); now 707]'
            ],
                [
                    'code' => 628,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: San Francisco County and Marin County on the north side of the Golden Gate Bridge, extending north to Sonoma County (overlaid on 415, eff 2/2015)'
            ],
                [
                    'code' => 650,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: Peninsula south of San Francisco -- San Mateo County, parts of Santa Clara County (split from 415)'
            ],
                [
                    'code' => 657,
                    'state_abbreviation' => 'CA',
                    'note' => 'Northern and western Orange County (overlaid on 714)'
            ],
                [
                    'code' => 661,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: N Los Angeles, Mckittrick, Mojave, Newhall, Oildale, Palmdale, Taft, Tehachapi, Bakersfield, Earlimart, Lancaster (split from 805)'
            ],
                [
                    'code' => 669,
                    'state_abbreviation' => 'CA',
                    'note' => 'Cent. Coastal California: San Jose (overlaid on 408; eff 10/20/2012)'
            ],
                [
                    'code' => 707,
                    'state_abbreviation' => 'CA',
                    'note' => 'NW California: Santa Rosa, Napa, Vallejo, American Canyon, Fairfield'
            ],
                [
                    'code' => 714,
                    'state_abbreviation' => 'CA',
                    'note' => 'Northern and western Orange County (see split 949, overlay 657)'
            ],
                [
                    'code' => 747,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: Los Angeles, Agoura Hills, Calabasas, Hidden Hills, and Westlake Village (see 818; implementation suspended)'
            ],
                [
                    'code' => 760,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: San Diego North County to Sierra Nevada (split from 619; see overlay 442)'
            ],
                [
                    'code' => 764,
                    'state_abbreviation' => 'CA',
                    'note' => '(overlay on 650; SUSPENDED)'
            ],
                [
                    'code' => 805,
                    'state_abbreviation' => 'CA',
                    'note' => 'S Cent. and Cent. Coastal California: Ventura County, Santa Barbara County: San Luis Obispo, Thousand Oaks, Carpinteria, Santa Barbara, Santa Maria, Lompoc, Santa Ynez Valley / Solvang (see 661 split)'
            ],
                [
                    'code' => 818,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: Los Angeles: San Fernando Valley (see 213, 310, 562, 626, 747)'
            ],
                [
                    'code' => 831,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: central coast area from Santa Cruz through Monterey County'
            ],
                [
                    'code' => 858,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: San Diego (see split 760; overlay 619, 935)'
            ],
                [
                    'code' => 909,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: Inland empire: San Bernardino (see split 951), Riverside'
            ],
                [
                    'code' => 916,
                    'state_abbreviation' => 'CA',
                    'note' => 'NE California: Sacramento, Walnut Grove, Lincoln, Newcastle and El Dorado Hills (split to 530)'
            ],
                [
                    'code' => 925,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: Contra Costa area: Antioch, Concord, Pleasanton, Walnut Creek (split from 510)'
            ],
                [
                    'code' => 935,
                    'state_abbreviation' => 'CA',
                    'note' => 'S California: San Diego (see split 760; overlay 858, 619; assigned but not in use)'
            ],
                [
                    'code' => 949,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: S Coastal Orange County (split from 714)'
            ],
                [
                    'code' => 951,
                    'state_abbreviation' => 'CA',
                    'note' => 'California: W Riverside County (split from 909; eff 7/17/04)'
            ],
                [
                    'code' => 303,
                    'state_abbreviation' => 'CO',
                    'note' => 'Central Colorado: Denver (see 970, also 720 overlay)'
            ],
                [
                    'code' => 719,
                    'state_abbreviation' => 'CO',
                    'note' => 'SE Colorado: Pueblo, Colorado Springs'
            ],
                [
                    'code' => 720,
                    'state_abbreviation' => 'CO',
                    'note' => 'Central Colorado: Denver (overlaid on 303)'
            ],
                [
                    'code' => 970,
                    'state_abbreviation' => 'CO',
                    'note' => 'N and W Colorado (part of what used to be 303)'
            ],
                [
                    'code' => 203,
                    'state_abbreviation' => 'CT',
                    'note' => 'Connecticut: Fairfield County and New Haven County; Bridgeport, New Haven (see 860)'
            ],
                [
                    'code' => 475,
                    'state_abbreviation' => 'CT',
                    'note' => 'Connecticut: New Haven, Greenwich, southwestern (postponed; was perm 1/6/01; mand 3/1/01???)'
            ],
                [
                    'code' => 860,
                    'state_abbreviation' => 'CT',
                    'note' => 'Connecticut: areas outside of Fairfield and New Haven Counties (split from 203, overlay 959)'
            ],
                [
                    'code' => 959,
                    'state_abbreviation' => 'CT',
                    'note' => 'Connecticut: Hartford, New London (postponed; was overlaid on 860 perm 1/6/01; mand 3/1/01???)'
            ],
                [
                    'code' => 202,
                    'state_abbreviation' => 'DC',
                    'note' => 'Washington, D.C.'
            ],
                [
                    'code' => 302,
                    'state_abbreviation' => 'DE',
                    'note' => 'Delaware'
            ],
                [
                    'code' => 239,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida (Lee, Collier, and Monroe Counties, excl the Keys; see 305; eff 3/11/02; mand 3/11/03)'
            ],
                [
                    'code' => 305,
                    'state_abbreviation' => 'FL',
                    'note' => 'SE Florida: Miami, the Keys (see 786, 954; 239)'
            ],
                [
                    'code' => 321,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida: Brevard County, Cape Canaveral area; Metro Orlando (split from 407)'
            ],
                [
                    'code' => 352,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida: Gainesville area, Ocala, Crystal River (split from 904)'
            ],
                [
                    'code' => 386,
                    'state_abbreviation' => 'FL',
                    'note' => 'N central Florida: Lake City (split from 904, perm 2/15/01, mand 11/5/01)'
            ],
                [
                    'code' => 407,
                    'state_abbreviation' => 'FL',
                    'note' => 'Central Florida: Metro Orlando (see overlay 689, eff 7/02; split 321)'
            ],
                [
                    'code' => 561,
                    'state_abbreviation' => 'FL',
                    'note' => 'S. Central Florida: Palm Beach County (West Palm Beach, Boca Raton, Vero Beach; see split 772, eff 2/11/02; mand 11/11/02)'
            ],
                [
                    'code' => 689,
                    'state_abbreviation' => 'FL',
                    'note' => 'Central Florida: Metro Orlando (see overlay 321; overlaid on 407, assigned but not in use)'
            ],
                [
                    'code' => 727,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida Tampa Metro: Saint Petersburg, Clearwater (Pinellas and parts of Pasco County; split from 813)'
            ],
                [
                    'code' => 754,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida: Broward County area, incl Ft. Lauderdale (overlaid on 954; perm 8/1/01, mand 9/1/01)'
            ],
                [
                    'code' => 772,
                    'state_abbreviation' => 'FL',
                    'note' => 'S. Central Florida: St. Lucie, Martin, and Indian River counties (split from 561; eff 2/11/02; mand 11/11/02)'
            ],
                [
                    'code' => 786,
                    'state_abbreviation' => 'FL',
                    'note' => 'SE Florida, Monroe County (Miami; overlaid on 305)'
            ],
                [
                    'code' => 813,
                    'state_abbreviation' => 'FL',
                    'note' => 'SW Florida: Tampa Metro (splits 727 St. Petersburg, Clearwater, and 941 Sarasota)'
            ],
                [
                    'code' => 850,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida panhandle, from east of Tallahassee to Pensacola (split from 904); western panhandle (Pensacola, Panama City) are UTC-6'
            ],
                [
                    'code' => 863,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida: Lakeland, Polk County (split from 941)'
            ],
                [
                    'code' => 904,
                    'state_abbreviation' => 'FL',
                    'note' => 'N Florida: Jacksonville (see splits 352, 386, 850)'
            ],
                [
                    'code' => 927,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida: Cellular coverage in Orlando area'
            ],
                [
                    'code' => 941,
                    'state_abbreviation' => 'FL',
                    'note' => 'SW Florida: Sarasota and Manatee counties (part of what used to be 813; see split 863)'
            ],
                [
                    'code' => 954,
                    'state_abbreviation' => 'FL',
                    'note' => 'Florida: Broward County area, incl Ft. Lauderdale (part of what used to be 305, see overlay 754)'
            ],
                [
                    'code' => 229,
                    'state_abbreviation' => 'GA',
                    'note' => 'SW Georgia: Albany (split from 912; see also 478; perm 8/1/00)'
            ],
                [
                    'code' => 404,
                    'state_abbreviation' => 'GA',
                    'note' => 'N Georgia: Atlanta and suburbs (see overlay 678, split 770)'
            ],
                [
                    'code' => 470,
                    'state_abbreviation' => 'GA',
                    'note' => 'Georgia: Greater Atlanta Metropolitan Area (overlaid on 404/770/678; mand 9/2/01)'
            ],
                [
                    'code' => 478,
                    'state_abbreviation' => 'GA',
                    'note' => 'Central Georgia: Macon (split from 912; see also 229; perm 8/1/00; mand 8/1/01)'
            ],
                [
                    'code' => 678,
                    'state_abbreviation' => 'GA',
                    'note' => 'N Georgia: metropolitan Atlanta (overlay; see 404, 770)'
            ],
                [
                    'code' => 706,
                    'state_abbreviation' => 'GA',
                    'note' => 'N Georgia: Columbus, Augusta (see overlay 762)'
            ],
                [
                    'code' => 762,
                    'state_abbreviation' => 'GA',
                    'note' => 'N Georgia: Columbus, Augusta (overlaid on 706)'
            ],
                [
                    'code' => 770,
                    'state_abbreviation' => 'GA',
                    'note' => 'Georgia: Atlanta suburbs: outside of I-285 ring road (part of what used to be 404; see also overlay 678)'
            ],
                [
                    'code' => 912,
                    'state_abbreviation' => 'GA',
                    'note' => 'SE Georgia: Savannah (see splits 229, 478)'
            ],
                [
                    'code' => 671,
                    'state_abbreviation' => 'GU',
                    'note' => 'Guam'
            ],
                [
                    'code' => 808,
                    'state_abbreviation' => 'HI',
                    'note' => 'Hawaii'
            ],
                [
                    'code' => 319,
                    'state_abbreviation' => 'IA',
                    'note' => 'E Iowa: Cedar Rapids (see split 563)'
            ],
                [
                    'code' => 515,
                    'state_abbreviation' => 'IA',
                    'note' => 'Cent. Iowa: Des Moines (see split 641)'
            ],
                [
                    'code' => 563,
                    'state_abbreviation' => 'IA',
                    'note' => 'E Iowa: Davenport, Dubuque (split from 319, eff 3/25/01)'
            ],
                [
                    'code' => 641,
                    'state_abbreviation' => 'IA',
                    'note' => 'Iowa: Mason City, Marshalltown, Creston, Ottumwa (split from 515; perm 7/9/00)'
            ],
                [
                    'code' => 712,
                    'state_abbreviation' => 'IA',
                    'note' => 'W Iowa: Council Bluffs'
            ],
                [
                    'code' => 208,
                    'state_abbreviation' => 'ID',
                    'note' => 'Idaho'
            ],
                [
                    'code' => 217,
                    'state_abbreviation' => 'IL',
                    'note' => 'Cent. Illinois: Springfield'
            ],
                [
                    'code' => 224,
                    'state_abbreviation' => 'IL',
                    'note' => 'Northern NE Illinois:  Evanston, Waukegan, Northbrook (overlay on 847, eff 1/5/02)'
            ],
                [
                    'code' => 309,
                    'state_abbreviation' => 'IL',
                    'note' => 'W Cent. Illinois: Peoria'
            ],
                [
                    'code' => 312,
                    'state_abbreviation' => 'IL',
                    'note' => 'Illinois: Chicago (downtown only -- in the loop; see 773; overlay 872)'
            ],
                [
                    'code' => 331,
                    'state_abbreviation' => 'IL',
                    'note' => 'W NE Illinois, western suburbs of Chicago (part of what used to be 708; overlaid on 630; eff 7/07)'
            ],
                [
                    'code' => 464,
                    'state_abbreviation' => 'IL',
                    'note' => 'Illinois: south suburbs of Chicago (see 630; overlaid on 708)'
            ],
                [
                    'code' => 618,
                    'state_abbreviation' => 'IL',
                    'note' => 'S Illinois: Centralia'
            ],
                [
                    'code' => 630,
                    'state_abbreviation' => 'IL',
                    'note' => 'W NE Illinois, western suburbs of Chicago (part of what used to be 708; overlay 331)'
            ],
                [
                    'code' => 708,
                    'state_abbreviation' => 'IL',
                    'note' => 'Illinois: southern and western suburbs of Chicago (see 630; overlay 464)'
            ],
                [
                    'code' => 773,
                    'state_abbreviation' => 'IL',
                    'note' => 'Illinois: city of Chicago, outside the loop (see 312; overlay 872)'
            ],
                [
                    'code' => 779,
                    'state_abbreviation' => 'IL',
                    'note' => 'NW Illinois: Rockford, Kankakee (overlaid on 815; eff 8/19/06, mand 2/17/07)'
            ],
                [
                    'code' => 815,
                    'state_abbreviation' => 'IL',
                    'note' => 'NW Illinois: Rockford, Kankakee (see overlay 779; eff 8/19/06, mand 2/17/07)'
            ],
                [
                    'code' => 847,
                    'state_abbreviation' => 'IL',
                    'note' => 'Northern NE Illinois: northwestern suburbs of chicago (Evanston, Waukegan, Northbrook; see overlay 224)'
            ],
                [
                    'code' => 872,
                    'state_abbreviation' => 'IL',
                    'note' => 'Illinois: Chicago (downtown only -- in the loop; see 773; overlaid on 312 and 773)'
            ],
                [
                    'code' => 219,
                    'state_abbreviation' => 'IN',
                    'note' => 'NW Indiana: Gary (see split 574, 260)'
            ],
                [
                    'code' => 260,
                    'state_abbreviation' => 'IN',
                    'note' => 'NE Indiana: Fort Wayne (see 219)'
            ],
                [
                    'code' => 317,
                    'state_abbreviation' => 'IN',
                    'note' => 'Cent. Indiana: Indianapolis (see 765)'
            ],
                [
                    'code' => 574,
                    'state_abbreviation' => 'IN',
                    'note' => 'N Indiana: Elkhart, South Bend (split from 219)'
            ],
                [
                    'code' => 765,
                    'state_abbreviation' => 'IN',
                    'note' => 'Indiana: outside Indianapolis (split from 317)'
            ],
                [
                    'code' => 812,
                    'state_abbreviation' => 'IN',
                    'note' => 'S Indiana: Evansville, Cincinnati outskirts in IN, Columbus, Bloomington (mostly GMT-5)'
            ],
                [
                    'code' => 316,
                    'state_abbreviation' => 'KS',
                    'note' => 'S Kansas: Wichita (see split 620)'
            ],
                [
                    'code' => 620,
                    'state_abbreviation' => 'KS',
                    'note' => 'S Kansas: Wichita (split from 316; perm 2/3/01)'
            ],
                [
                    'code' => 785,
                    'state_abbreviation' => 'KS',
                    'note' => 'N & W Kansas: Topeka (split from 913)'
            ],
                [
                    'code' => 913,
                    'state_abbreviation' => 'KS',
                    'note' => 'Kansas: Kansas City area (see 785)'
            ],
                [
                    'code' => 270,
                    'state_abbreviation' => 'KY',
                    'note' => 'W Kentucky: Bowling Green, Paducah (split from 502)'
            ],
                [
                    'code' => 502,
                    'state_abbreviation' => 'KY',
                    'note' => 'N Central Kentucky: Louisville (see 270)'
            ],
                [
                    'code' => 606,
                    'state_abbreviation' => 'KY',
                    'note' => 'E Kentucky: area east of Frankfort: Ashland (see 859)'
            ],
                [
                    'code' => 859,
                    'state_abbreviation' => 'KY',
                    'note' => 'N and Central Kentucky: Lexington; suburban KY counties of Cincinnati OH metro area; Covington, Newport, Ft. Thomas, Ft. Wright, Florence (split from 606)'
            ],
                [
                    'code' => 225,
                    'state_abbreviation' => 'LA',
                    'note' => 'Louisiana: Baton Rouge, New Roads, Donaldsonville, Albany, Gonzales, Greensburg, Plaquemine, Vacherie (split from 504)'
            ],
                [
                    'code' => 318,
                    'state_abbreviation' => 'LA',
                    'note' => 'N Louisiana: Shreveport, Ruston, Monroe, Alexandria (see split 337)'
            ],
                [
                    'code' => 337,
                    'state_abbreviation' => 'LA',
                    'note' => 'SW Louisiana: Lake Charles, Lafayette (see split 318)'
            ],
                [
                    'code' => 504,
                    'state_abbreviation' => 'LA',
                    'note' => 'E Louisiana: New Orleans metro area (see splits 225, 985)'
            ],
                [
                    'code' => 985,
                    'state_abbreviation' => 'LA',
                    'note' => 'E Louisiana: SE/N shore of Lake Pontchartrain: Hammond, Slidell, Covington, Amite, Kentwood, area SW of New Orleans, Houma, Thibodaux, Morgan City (split from 504; perm 2/12/01; mand 10/22/01)'
            ],
                [
                    'code' => 339,
                    'state_abbreviation' => 'MA',
                    'note' => 'Massachusetts: Boston suburbs, to the south and west (see splits 617, 508; overlaid on 781, eff 5/2/01)'
            ],
                [
                    'code' => 351,
                    'state_abbreviation' => 'MA',
                    'note' => 'Massachusetts: north of Boston to NH, 508, and 781 (overlaid on 978, eff 4/2/01)'
            ],
                [
                    'code' => 413,
                    'state_abbreviation' => 'MA',
                    'note' => 'W Massachusetts: Springfield'
            ],
                [
                    'code' => 508,
                    'state_abbreviation' => 'MA',
                    'note' => 'Cent. Massachusetts: Framingham; Cape Cod (see split 978, overlay 774)'
            ],
                [
                    'code' => 617,
                    'state_abbreviation' => 'MA',
                    'note' => 'Massachusetts: greater Boston (see overlay 857)'
            ],
                [
                    'code' => 774,
                    'state_abbreviation' => 'MA',
                    'note' => 'Cent. Massachusetts: Framingham; Cape Cod (see split 978, overlaid on 508, eff 4/2/01)'
            ],
                [
                    'code' => 781,
                    'state_abbreviation' => 'MA',
                    'note' => 'Massachusetts: Boston surburbs, to the north and west (see splits 617, 508; overlay 339)'
            ],
                [
                    'code' => 857,
                    'state_abbreviation' => 'MA',
                    'note' => 'Massachusetts: greater Boston (overlaid on 617, eff 4/2/01)'
            ],
                [
                    'code' => 978,
                    'state_abbreviation' => 'MA',
                    'note' => 'Massachusetts: north of Boston to NH (see split 978 -- this is the northern half of old 508; see overlay 351)'
            ],
                [
                    'code' => 240,
                    'state_abbreviation' => 'MD',
                    'note' => 'W Maryland: Silver Spring, Frederick, Gaithersburg (overlay, see 301)'
            ],
                [
                    'code' => 301,
                    'state_abbreviation' => 'MD',
                    'note' => 'W Maryland: Silver Spring, Frederick, Camp Springs, Prince George\'s County (see 240)'
            ],
                [
                    'code' => 410,
                    'state_abbreviation' => 'MD',
                    'note' => 'E Maryland: Baltimore, Annapolis, Chesapeake Bay area, Ocean City (see overlays 443, 667)'
            ],
                [
                    'code' => 443,
                    'state_abbreviation' => 'MD',
                    'note' => 'E Maryland: Baltimore, Annapolis, Chesapeake Bay area, Ocean City (overlaid on 410, see overlay 667)'
            ],
                [
                    'code' => 667,
                    'state_abbreviation' => 'MD',
                    'note' => 'E Maryland: Baltimore, Annapolis, Chesapeake Bay area, Ocean City (overlaid on 410, 443)'
            ],
                [
                    'code' => 207,
                    'state_abbreviation' => 'ME',
                    'note' => 'Maine'
            ],
                [
                    'code' => 231,
                    'state_abbreviation' => 'MI',
                    'note' => 'W Michigan: Northwestern portion of lower Peninsula; Traverse City, Muskegon, Cheboygan, Alanson'
            ],
                [
                    'code' => 248,
                    'state_abbreviation' => 'MI',
                    'note' => 'Michigan: Oakland County, Pontiac (split from 810; see overlay 947)'
            ],
                [
                    'code' => 269,
                    'state_abbreviation' => 'MI',
                    'note' => 'SW Michigan: Kalamazoo, Saugatuck, Hastings, Battle Creek, Sturgis to Lake Michigan (split from 616)'
            ],
                [
                    'code' => 278,
                    'state_abbreviation' => 'MI',
                    'note' => 'Michigan (overlaid on 734, SUSPENDED)'
            ],
                [
                    'code' => 313,
                    'state_abbreviation' => 'MI',
                    'note' => 'Michigan: Detroit and suburbs (see 734, overlay 679)'
            ],
                [
                    'code' => 517,
                    'state_abbreviation' => 'MI',
                    'note' => 'Cent. Michigan: Lansing (see split 989)'
            ],
                [
                    'code' => 586,
                    'state_abbreviation' => 'MI',
                    'note' => 'Michigan: Macomb County (split from 810; perm 9/22/01, mand 3/23/02)'
            ],
                [
                    'code' => 616,
                    'state_abbreviation' => 'MI',
                    'note' => 'W Michigan: Holland, Grand Haven, Greenville, Grand Rapids, Ionia (see split 269)'
            ],
                [
                    'code' => 679,
                    'state_abbreviation' => 'MI',
                    'note' => 'Michigan: Dearborn area (overlaid on 313; assigned but not in use)'
            ],
                [
                    'code' => 734,
                    'state_abbreviation' => 'MI',
                    'note' => 'SE Michigan: west and south of Detroit -- Ann Arbor, Monroe (split from 313)'
            ],
                [
                    'code' => 810,
                    'state_abbreviation' => 'MI',
                    'note' => 'E Michigan: Flint, Pontiac (see 248; split 586)'
            ],
                [
                    'code' => 906,
                    'state_abbreviation' => 'MI',
                    'note' => 'Upper Peninsula Michigan: Sault Ste. Marie, Escanaba, Marquette (UTC-6 towards the WI border)'
            ],
                [
                    'code' => 947,
                    'state_abbreviation' => 'MI',
                    'note' => 'Michigan: Oakland County (overlays 248, perm 5/5/01)'
            ],
                [
                    'code' => 989,
                    'state_abbreviation' => 'MI',
                    'note' => 'Upper central Michigan: Mt Pleasant, Saginaw (split from 517; perm 4/7/01)'
            ],
                [
                    'code' => 218,
                    'state_abbreviation' => 'MN',
                    'note' => 'N Minnesota: Duluth'
            ],
                [
                    'code' => 320,
                    'state_abbreviation' => 'MN',
                    'note' => 'Cent. Minnesota: Saint Cloud (rural Minn, excl St. Paul/Minneapolis)'
            ],
                [
                    'code' => 507,
                    'state_abbreviation' => 'MN',
                    'note' => 'S Minnesota: Rochester, Mankato, Worthington'
            ],
                [
                    'code' => 612,
                    'state_abbreviation' => 'MN',
                    'note' => 'Cent. Minnesota: Minneapolis (split from St. Paul, see 651; see splits 763, 952)'
            ],
                [
                    'code' => 651,
                    'state_abbreviation' => 'MN',
                    'note' => 'Cent. Minnesota: St. Paul (split from Minneapolis, see 612)'
            ],
                [
                    'code' => 763,
                    'state_abbreviation' => 'MN',
                    'note' => 'Minnesota: Minneapolis NW (split from 612; see also 952)'
            ],
                [
                    'code' => 952,
                    'state_abbreviation' => 'MN',
                    'note' => 'Minnesota: Minneapolis SW, Bloomington (split from 612; see also 763)'
            ],
                [
                    'code' => 314,
                    'state_abbreviation' => 'MO',
                    'note' => 'SE Missouri: St Louis city and parts of the metro area only (see 573, 636, overlay 557)'
            ],
                [
                    'code' => 417,
                    'state_abbreviation' => 'MO',
                    'note' => 'SW Missouri: Springfield'
            ],
                [
                    'code' => 557,
                    'state_abbreviation' => 'MO',
                    'note' => 'SE Missouri: St Louis metro area only (cancelled: overlaid on 314)'
            ],
                [
                    'code' => 573,
                    'state_abbreviation' => 'MO',
                    'note' => 'SE Missouri: excluding St Louis metro area, includes Central/East Missouri, area between St. Louis and Kansas City'
            ],
                [
                    'code' => 636,
                    'state_abbreviation' => 'MO',
                    'note' => 'Missouri: W St. Louis metro area of St. Louis county, St. Charles County, Jefferson County area south (between 314 and 573)'
            ],
                [
                    'code' => 660,
                    'state_abbreviation' => 'MO',
                    'note' => 'N Missouri (split from 816)'
            ],
                [
                    'code' => 816,
                    'state_abbreviation' => 'MO',
                    'note' => 'N Missouri: Kansas City (see split 660, overlay 975)'
            ],
                [
                    'code' => 975,
                    'state_abbreviation' => 'MO',
                    'note' => 'N Missouri: Kansas City (overlaid on 816)'
            ],
                [
                    'code' => 670,
                    'state_abbreviation' => 'MP',
                    'note' => 'Commonwealth of the Northern Mariana Islands (CNMI, US Commonwealth)'
            ],
                [
                    'code' => 228,
                    'state_abbreviation' => 'MS',
                    'note' => 'S Mississippi (coastal areas, Biloxi, Gulfport; split from 601)'
            ],
                [
                    'code' => 601,
                    'state_abbreviation' => 'MS',
                    'note' => 'Mississippi: Meridian, Jackson area (see splits 228, 662; overlay 769)'
            ],
                [
                    'code' => 662,
                    'state_abbreviation' => 'MS',
                    'note' => 'N Mississippi: Tupelo, Grenada (split from 601)'
            ],
                [
                    'code' => 769,
                    'state_abbreviation' => 'MS',
                    'note' => 'Mississippi: Meridian, Jackson area (overlaid on 601; perm 7/19/04, mand 3/14/05)'
            ],
                [
                    'code' => 406,
                    'state_abbreviation' => 'MT',
                    'note' => 'Montana'
            ],
                [
                    'code' => 252,
                    'state_abbreviation' => 'NC',
                    'note' => 'E North Carolina (Rocky Mount; split from 919)'
            ],
                [
                    'code' => 336,
                    'state_abbreviation' => 'NC',
                    'note' => 'Cent. North Carolina: Greensboro, Winston-Salem, High Point (split from 910; see overlay 743)'
            ],
                [
                    'code' => 704,
                    'state_abbreviation' => 'NC',
                    'note' => 'W North Carolina: Charlotte (see split 828, overlay 980)'
            ],
                [
                    'code' => 743,
                    'state_abbreviation' => 'NC',
                    'note' => 'Cent. North Carolina: Greensboro, Winston-Salem, High Point (overlaid on 336)'
            ],
                [
                    'code' => 828,
                    'state_abbreviation' => 'NC',
                    'note' => 'W North Carolina: Asheville (split from 704)'
            ],
                [
                    'code' => 910,
                    'state_abbreviation' => 'NC',
                    'note' => 'S Cent. North Carolina: Fayetteville, Wilmington (see 336)'
            ],
                [
                    'code' => 919,
                    'state_abbreviation' => 'NC',
                    'note' => 'E North Carolina: Raleigh (see split 252, overlay 984)'
            ],
                [
                    'code' => 980,
                    'state_abbreviation' => 'NC',
                    'note' => 'North Carolina: (overlay on 704; perm 5/1/00, mand 3/15/01)'
            ],
                [
                    'code' => 984,
                    'state_abbreviation' => 'NC',
                    'note' => 'E North Carolina: Raleigh (overlaid on 919, perm 8/1/01, mand 2/5/02 POSTPONED)'
            ],
                [
                    'code' => 701,
                    'state_abbreviation' => 'ND',
                    'note' => 'North Dakota'
            ],
                [
                    'code' => 308,
                    'state_abbreviation' => 'NE',
                    'note' => 'W Nebraska: North Platte'
            ],
                [
                    'code' => 402,
                    'state_abbreviation' => 'NE',
                    'note' => 'E Nebraska: Omaha, Lincoln'
            ],
                [
                    'code' => 603,
                    'state_abbreviation' => 'NH',
                    'note' => 'New Hampshire'
            ],
                [
                    'code' => 201,
                    'state_abbreviation' => 'NJ',
                    'note' => 'N New Jersey: Jersey City, Hackensack (see split 973, overlay 551)'
            ],
                [
                    'code' => 551,
                    'state_abbreviation' => 'NJ',
                    'note' => 'N New Jersey: Jersey City, Hackensack (overlaid on 201)'
            ],
                [
                    'code' => 609,
                    'state_abbreviation' => 'NJ',
                    'note' => 'S New Jersey: Trenton (see 856)'
            ],
                [
                    'code' => 732,
                    'state_abbreviation' => 'NJ',
                    'note' => 'Cent. New Jersey: Toms River, New Brunswick, Bound Brook (see overlay 848)'
            ],
                [
                    'code' => 848,
                    'state_abbreviation' => 'NJ',
                    'note' => 'Cent. New Jersey: Toms River, New Brunswick, Bound Brook (see overlay 732)'
            ],
                [
                    'code' => 856,
                    'state_abbreviation' => 'NJ',
                    'note' => 'SW New Jersey: greater Camden area, Mt Laurel (split from 609)'
            ],
                [
                    'code' => 862,
                    'state_abbreviation' => 'NJ',
                    'note' => 'N New Jersey: Newark Paterson Morristown (overlaid on 973)'
            ],
                [
                    'code' => 908,
                    'state_abbreviation' => 'NJ',
                    'note' => 'Cent. New Jersey: Elizabeth, Basking Ridge, Somerville, Bridgewater, Bound Brook'
            ],
                [
                    'code' => 973,
                    'state_abbreviation' => 'NJ',
                    'note' => 'N New Jersey: Newark, Paterson, Morristown (see overlay 862; split from 201)'
            ],
                [
                    'code' => 505,
                    'state_abbreviation' => 'NM',
                    'note' => 'North central and northwestern New Mexico (Albuquerque, Santa Fe, Los Alamos; see split 575, eff 10/07/07)'
            ],
                [
                    'code' => 575,
                    'state_abbreviation' => 'NM',
                    'note' => 'New Mexico (Las Cruces, Alamogordo, Roswell; split from 505, eff 10/07/07)'
            ],
                [
                    'code' => 957,
                    'state_abbreviation' => 'NM',
                    'note' => 'New Mexico (pending; region unknown)'
            ],
                [
                    'code' => 702,
                    'state_abbreviation' => 'NV',
                    'note' => 'S. Nevada: Clark County, incl Las Vegas (overlay 725, eff 6/2014; see also 775)'
            ],
                [
                    'code' => 725,
                    'state_abbreviation' => 'NV',
                    'note' => 'S. Nevada: Clark County, incl Las Vegas (overlaid on 702, eff 6/2014; see also 775)'
            ],
                [
                    'code' => 775,
                    'state_abbreviation' => 'NV',
                    'note' => 'N. Nevada: Reno (all of NV except Clark County area; see 702)'
            ],
                [
                    'code' => 212,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York City, New York (Manhattan; see ovelays 332, 646, 917; split 718)'
            ],
                [
                    'code' => 315,
                    'state_abbreviation' => 'NY',
                    'note' => 'N Cent. New York: Syracuse'
            ],
                [
                    'code' => 332,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York City, New York (Manhattan; overlaid on 212, 646, 917)'
            ],
                [
                    'code' => 347,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York City, New York (overlay for 718: NYC area, except Manhattan)'
            ],
                [
                    'code' => 516,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York: Nassau County, Long Island; Hempstead (see split 631)'
            ],
                [
                    'code' => 518,
                    'state_abbreviation' => 'NY',
                    'note' => 'NE New York: Albany'
            ],
                [
                    'code' => 585,
                    'state_abbreviation' => 'NY',
                    'note' => 'NW New York: Rochester (split from 716)'
            ],
                [
                    'code' => 607,
                    'state_abbreviation' => 'NY',
                    'note' => 'S Cent. New York: Ithaca, Binghamton; Catskills'
            ],
                [
                    'code' => 631,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York: Suffolk County, Long Island; Huntington, Riverhead (split 516)'
            ],
                [
                    'code' => 646,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York (overlaid on 212, 332, 917) NYC (mostly mobile)'
            ],
                [
                    'code' => 716,
                    'state_abbreviation' => 'NY',
                    'note' => 'NW New York: Buffalo (see split 585)'
            ],
                [
                    'code' => 718,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York City, New York (Queens, Staten Island, The Bronx, and Brooklyn; also Marble Hill section of Manhattan; see split 212, 347, 929)'
            ],
                [
                    'code' => 845,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York: Poughkeepsie; Nyack, Nanuet, Valley Cottage, New City, Putnam, Dutchess, Rockland, Orange, Ulster and parts of Sullivan counties in New York\'s lower Hudson Valley and Delaware County in the Catskills (see 914; perm 6/5/00)'
            ],
                [
                    'code' => 914,
                    'state_abbreviation' => 'NY',
                    'note' => 'S New York: Westchester County (see 845)'
            ],
                [
                    'code' => 917,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York: New York City (cellular, see 646)'
            ],
                [
                    'code' => 929,
                    'state_abbreviation' => 'NY',
                    'note' => 'New York City, New York (Queens, Staten Island, The Bronx, and Brooklyn; also Marble Hill section of Manhattan; see split 212, 347, 718)'
            ],
                [
                    'code' => 216,
                    'state_abbreviation' => 'OH',
                    'note' => 'Cleveland (see splits 330, 440)'
            ],
                [
                    'code' => 220,
                    'state_abbreviation' => 'OH',
                    'note' => 'SE and Central Ohio (outside Columbus; overlaid on 740)'
            ],
                [
                    'code' => 234,
                    'state_abbreviation' => 'OH',
                    'note' => 'NE Ohio: Canton, Akron (overlaid on 330; perm 10/30/00)'
            ],
                [
                    'code' => 283,
                    'state_abbreviation' => 'OH',
                    'note' => 'SW Ohio: Cincinnati (cancelled: overlaid on 513)'
            ],
                [
                    'code' => 330,
                    'state_abbreviation' => 'OH',
                    'note' => 'NE Ohio: Akron, Canton, Youngstown; Mahoning County, parts of Trumbull/Warren counties (see splits 216, 440, overlay 234)'
            ],
                [
                    'code' => 380,
                    'state_abbreviation' => 'OH',
                    'note' => 'Ohio: Columbus (overlaid on 614; assigned but not in use)'
            ],
                [
                    'code' => 419,
                    'state_abbreviation' => 'OH',
                    'note' => 'NW Ohio: Toledo (see overlay 567, perm 1/1/02)'
            ],
                [
                    'code' => 440,
                    'state_abbreviation' => 'OH',
                    'note' => 'Ohio: Cleveland metro area, excluding Cleveland (split from 216, see also 330)'
            ],
                [
                    'code' => 513,
                    'state_abbreviation' => 'OH',
                    'note' => 'SW Ohio: Cincinnati (see split 937; overlay 283 cancelled)'
            ],
                [
                    'code' => 567,
                    'state_abbreviation' => 'OH',
                    'note' => 'NW Ohio: Toledo (overlaid on 419, perm 1/1/02)'
            ],
                [
                    'code' => 614,
                    'state_abbreviation' => 'OH',
                    'note' => 'SE Ohio: Columbus (see overlay 380)'
            ],
                [
                    'code' => 740,
                    'state_abbreviation' => 'OH',
                    'note' => 'SE and Central Ohio (outside Columbus; split from 614; overlay 220)'
            ],
                [
                    'code' => 937,
                    'state_abbreviation' => 'OH',
                    'note' => 'SW Ohio: Dayton (part of what used to be 513)'
            ],
                [
                    'code' => 405,
                    'state_abbreviation' => 'OK',
                    'note' => 'W Oklahoma: Oklahoma City (see 580)'
            ],
                [
                    'code' => 539,
                    'state_abbreviation' => 'OK',
                    'note' => 'E Oklahoma: Tulsa area (overlaid on 918)'
            ],
                [
                    'code' => 580,
                    'state_abbreviation' => 'OK',
                    'note' => 'W Oklahoma (rural areas outside Oklahoma City; split from 405)'
            ],
                [
                    'code' => 918,
                    'state_abbreviation' => 'OK',
                    'note' => 'E Oklahoma: Tulsa (see overlay 539)'
            ],
                [
                    'code' => 458,
                    'state_abbreviation' => 'OR',
                    'note' => 'Oregon: Eugene, Medford (overlaid on 541)'
            ],
                [
                    'code' => 503,
                    'state_abbreviation' => 'OR',
                    'note' => 'Oregon (see 458, 541, 971)'
            ],
                [
                    'code' => 541,
                    'state_abbreviation' => 'OR',
                    'note' => 'Oregon: Eugene, Medford (split from 503; 503 retains NW part [Portland/Salem], all else moves to 541; eastern oregon is UTC-7).  Also serves small part of northern California (NE corner of Del Norte County).  (See overlay 458.)'
            ],
                [
                    'code' => 971,
                    'state_abbreviation' => 'OR',
                    'note' => 'Oregon:  Metropolitan Portland, Salem/Keizer area, incl Cricket Wireless (see 503; perm 10/1/00)'
            ],
                [
                    'code' => 215,
                    'state_abbreviation' => 'PA',
                    'note' => 'SE Pennsylvania: Philadelphia (see overlays 267)'
            ],
                [
                    'code' => 223,
                    'state_abbreviation' => 'PA',
                    'note' => 'E Pennsylvania: Gettysburg, Harrisburg, Lancaster, Lebanan, and York (overlays 223, eff 8/2017)'
            ],
                [
                    'code' => 267,
                    'state_abbreviation' => 'PA',
                    'note' => 'SE Pennsylvania: Philadelphia (see 215)'
            ],
                [
                    'code' => 272,
                    'state_abbreviation' => 'PA',
                    'note' => 'NE and N Central Pennsylvania: Wilkes-Barre, Scranton (see 717; overlaid on 570)'
            ],
                [
                    'code' => 412,
                    'state_abbreviation' => 'PA',
                    'note' => 'W Pennsylvania: Pittsburgh (see split 724, overlay 878)'
            ],
                [
                    'code' => 484,
                    'state_abbreviation' => 'PA',
                    'note' => 'SE Pennsylvania: Allentown, Bethlehem, Reading, West Chester, Norristown (see 610)'
            ],
                [
                    'code' => 570,
                    'state_abbreviation' => 'PA',
                    'note' => 'NE and N Central Pennsylvania: Wilkes-Barre, Scranton (see 717; see overlay 272)'
            ],
                [
                    'code' => 610,
                    'state_abbreviation' => 'PA',
                    'note' => 'SE Pennsylvania: Allentown, Bethlehem, Reading, West Chester, Norristown (see overlays 484, 835)'
            ],
                [
                    'code' => 717,
                    'state_abbreviation' => 'PA',
                    'note' => 'E Pennsylvania: Harrisburg (see split 570, overlay 223)'
            ],
                [
                    'code' => 724,
                    'state_abbreviation' => 'PA',
                    'note' => 'SW Pennsylvania (areas outside metro Pittsburgh; split from 412)'
            ],
                [
                    'code' => 814,
                    'state_abbreviation' => 'PA',
                    'note' => 'Cent. Pennsylvania: Erie'
            ],
                [
                    'code' => 835,
                    'state_abbreviation' => 'PA',
                    'note' => 'SE Pennsylvania: Allentown, Bethlehem, Reading, West Chester, Norristown (overlaid on 610, eff 5/1/01; see also 484)'
            ],
                [
                    'code' => 878,
                    'state_abbreviation' => 'PA',
                    'note' => 'Pittsburgh, New Castle (overlaid on 412, perm 8/17/01, mand t.b.a.)'
            ],
                [
                    'code' => 787,
                    'state_abbreviation' => 'PR',
                    'note' => 'Puerto Rico (see overlay 939, perm 8/1/01)'
            ],
                [
                    'code' => 939,
                    'state_abbreviation' => 'PR',
                    'note' => 'Puerto Rico (overlaid on 787, perm 8/1/01)'
            ],
                [
                    'code' => 401,
                    'state_abbreviation' => 'RI',
                    'note' => 'Rhode Island'
            ],
                [
                    'code' => 803,
                    'state_abbreviation' => 'SC',
                    'note' => 'South Carolina: Columbia, Aiken, Sumter (see 843, 864)'
            ],
                [
                    'code' => 843,
                    'state_abbreviation' => 'SC',
                    'note' => 'South Carolina, coastal area: Charleston, Beaufort, Myrtle Beach (split from 803)'
            ],
                [
                    'code' => 864,
                    'state_abbreviation' => 'SC',
                    'note' => 'South Carolina, upstate area: Greenville, Spartanburg (split from 803)'
            ],
                [
                    'code' => 605,
                    'state_abbreviation' => 'SD',
                    'note' => 'South Dakota'
            ],
                [
                    'code' => 423,
                    'state_abbreviation' => 'TN',
                    'note' => 'E Tennessee, except Knoxville metro area: Chattanooga, Bristol, Johnson City, Kingsport, Greeneville (see split 865; part of what used to be 615)'
            ],
                [
                    'code' => 615,
                    'state_abbreviation' => 'TN',
                    'note' => 'Northern Middle Tennessee: Nashville metro area (see 423, 931; see overlay 629, eff 2014)'
            ],
                [
                    'code' => 629,
                    'state_abbreviation' => 'TN',
                    'note' => 'Northern Middle Tennessee: Nashville metro area (see 423, 931; overlaid on 615, eff 2014)'
            ],
                [
                    'code' => 731,
                    'state_abbreviation' => 'TN',
                    'note' => 'W Tennessee: outside Memphis metro area (split from 901, perm 2/12/01, mand 9/17/01)'
            ],
                [
                    'code' => 865,
                    'state_abbreviation' => 'TN',
                    'note' => 'E Tennessee: Knoxville, Knox and adjacent counties (split from 423; part of what used to be 615)'
            ],
                [
                    'code' => 901,
                    'state_abbreviation' => 'TN',
                    'note' => 'W Tennessee: Memphis metro area (see 615, 931, split 731)'
            ],
                [
                    'code' => 931,
                    'state_abbreviation' => 'TN',
                    'note' => 'Middle Tennessee: semi-circular ring around Nashville (split from 615)'
            ],
                [
                    'code' => 210,
                    'state_abbreviation' => 'TX',
                    'note' => 'S Texas: San Antonio (see also splits 830, 956)'
            ],
                [
                    'code' => 214,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Dallas Metro (overlays 469/972)'
            ],
                [
                    'code' => 254,
                    'state_abbreviation' => 'TX',
                    'note' => 'Central Texas (Waco, Stephenville; split, see 817, 940)'
            ],
                [
                    'code' => 281,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Houston Metro (split 713; overlay 832, 346)'
            ],
                [
                    'code' => 325,
                    'state_abbreviation' => 'TX',
                    'note' => 'Central Texas: Abilene, Sweetwater, Snyder, San Angelo (split from 915)'
            ],
                [
                    'code' => 346,
                    'state_abbreviation' => 'TX',
                    'note' => 'Mid SE Texas: central Houston (overlaid on 713, 281, and 832)'
            ],
                [
                    'code' => 361,
                    'state_abbreviation' => 'TX',
                    'note' => 'S Texas: Corpus Christi (split from 512; eff 2/13/99)'
            ],
                [
                    'code' => 409,
                    'state_abbreviation' => 'TX',
                    'note' => 'SE Texas: Galveston, Port Arthur, Beaumont (splits 936, 979)'
            ],
                [
                    'code' => 430,
                    'state_abbreviation' => 'TX',
                    'note' => 'NE Texas: Tyler (overlaid on 903, eff 7/20/02)'
            ],
                [
                    'code' => 432,
                    'state_abbreviation' => 'TX',
                    'note' => 'W Texas: Big Spring, Midland, Odessa (split from 915, eff 4/5/03)'
            ],
                [
                    'code' => 469,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Dallas Metro (overlays 214/972)'
            ],
                [
                    'code' => 512,
                    'state_abbreviation' => 'TX',
                    'note' => 'S Texas: Austin (see split 361; overlay 737, perm 11/10/01)'
            ],
                [
                    'code' => 682,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Fort Worth areas (perm 10/7/00, mand 12/9/00)'
            ],
                [
                    'code' => 713,
                    'state_abbreviation' => 'TX',
                    'note' => 'Mid SE Texas: central Houston (split 281; overlay 346, 832)'
            ],
                [
                    'code' => 737,
                    'state_abbreviation' => 'TX',
                    'note' => 'S Texas: Austin (overlaid on 512, suspended; see also 361)'
            ],
                [
                    'code' => 806,
                    'state_abbreviation' => 'TX',
                    'note' => 'Panhandle Texas: Amarillo, Lubbock'
            ],
                [
                    'code' => 817,
                    'state_abbreviation' => 'TX',
                    'note' => 'N Cent. Texas: Fort Worth area (see 254, 940)'
            ],
                [
                    'code' => 830,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: region surrounding San Antonio (split from 210)'
            ],
                [
                    'code' => 832,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Houston (overlay 713, 281, 346)'
            ],
                [
                    'code' => 903,
                    'state_abbreviation' => 'TX',
                    'note' => 'NE Texas: Tyler (see overlay 430, eff 7/20/02)'
            ],
                [
                    'code' => 915,
                    'state_abbreviation' => 'TX',
                    'note' => 'W Texas: El Paso (see splits 325 eff 4/5/03; 432, eff 4/5/03)'
            ],
                [
                    'code' => 936,
                    'state_abbreviation' => 'TX',
                    'note' => 'SE Texas: Conroe, Lufkin, Nacogdoches, Crockett (split from 409, see also 979)'
            ],
                [
                    'code' => 940,
                    'state_abbreviation' => 'TX',
                    'note' => 'N Cent. Texas: Denton, Wichita Falls (split from 254, 817)'
            ],
                [
                    'code' => 956,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Valley of Texas area; Harlingen, Laredo (split from 210)'
            ],
                [
                    'code' => 972,
                    'state_abbreviation' => 'TX',
                    'note' => 'Texas: Dallas Metro (overlays 214/469)'
            ],
                [
                    'code' => 979,
                    'state_abbreviation' => 'TX',
                    'note' => 'SE Texas: Bryan, College Station, Bay City (split from 409, see also 936)'
            ],
                [
                    'code' => 385,
                    'state_abbreviation' => 'UT',
                    'note' => 'Utah: Salt Lake City Metro (split from 801, eff 3/30/02 POSTPONED; see also 435)'
            ],
                [
                    'code' => 435,
                    'state_abbreviation' => 'UT',
                    'note' => 'Rural Utah outside Salt Lake City metro (see split 801)'
            ],
                [
                    'code' => 801,
                    'state_abbreviation' => 'UT',
                    'note' => 'Utah: Salt Lake City Metro (see split 385, eff 3/30/02; see also split 435)'
            ],
                [
                    'code' => 276,
                    'state_abbreviation' => 'VA',
                    'note' => 'S and SW Virginia: Bristol, Stuart, Martinsville (split from 540; perm 9/1/01, mand 3/16/02)'
            ],
                [
                    'code' => 434,
                    'state_abbreviation' => 'VA',
                    'note' => 'E Virginia: Charlottesville, Lynchburg, Danville, South Boston, and Emporia (split from 804, eff 6/1/01; see also 757)'
            ],
                [
                    'code' => 540,
                    'state_abbreviation' => 'VA',
                    'note' => 'Western and Southwest Virginia: Shenandoah and Roanoke valleys: Fredericksburg, Harrisonburg, Roanoke, Salem, Lexington and nearby areas (see split 276; split from 703)'
            ],
                [
                    'code' => 571,
                    'state_abbreviation' => 'VA',
                    'note' => 'Northern Virginia: Arlington, McLean, Tysons Corner (to be overlaid on 703 3/1/00; see earlier split 540)'
            ],
                [
                    'code' => 703,
                    'state_abbreviation' => 'VA',
                    'note' => 'Northern Virginia: Arlington, McLean, Tysons Corner (see split 540; overlay 571)'
            ],
                [
                    'code' => 757,
                    'state_abbreviation' => 'VA',
                    'note' => 'E Virginia: Tidewater / Hampton Roads area -- Norfolk, Virginia Beach, Chesapeake, Portsmouth, Hampton, Newport News, Suffolk (part of what used to be 804)'
            ],
                [
                    'code' => 804,
                    'state_abbreviation' => 'VA',
                    'note' => 'E Virginia: Richmond (see splits 757, 434)'
            ],
                [
                    'code' => 340,
                    'state_abbreviation' => 'VI',
                    'note' => 'US Virgin Islands (see also 809)'
            ],
                [
                    'code' => 802,
                    'state_abbreviation' => 'VT',
                    'note' => 'Vermont'
            ],
                [
                    'code' => 206,
                    'state_abbreviation' => 'WA',
                    'note' => 'W Washington state: Seattle and Bainbridge Island (see splits 253, 360, 425; overlay 564)'
            ],
                [
                    'code' => 253,
                    'state_abbreviation' => 'WA',
                    'note' => 'Washington: South Tier - Tacoma, Federal Way (split from 206, see also 425; overlay 564)'
            ],
                [
                    'code' => 360,
                    'state_abbreviation' => 'WA',
                    'note' => 'W Washington State: Olympia, Bellingham (area circling 206, 253, and 425; split from 206; see overlay 564)'
            ],
                [
                    'code' => 425,
                    'state_abbreviation' => 'WA',
                    'note' => 'Washington: North Tier - Everett, Bellevue (split from 206, see also 253; overlay 564)'
            ],
                [
                    'code' => 509,
                    'state_abbreviation' => 'WA',
                    'note' => 'E and Central Washington state: Spokane, Yakima, Walla Walla, Ellensburg'
            ],
                [
                    'code' => 564,
                    'state_abbreviation' => 'WA',
                    'note' => 'W Washington State: Olympia, Bellingham (overlaid on 360; see also 206, 253, 425; assigned but not in use)'
            ],
                [
                    'code' => 262,
                    'state_abbreviation' => 'WI',
                    'note' => 'SE Wisconsin: counties of Kenosha, Ozaukee, Racine, Walworth, Washington, Waukesha (split from 414)'
            ],
                [
                    'code' => 414,
                    'state_abbreviation' => 'WI',
                    'note' => 'SE Wisconsin: Milwaukee County (see splits 920, 262)'
            ],
                [
                    'code' => 608,
                    'state_abbreviation' => 'WI',
                    'note' => 'SW Wisconsin: Madison'
            ],
                [
                    'code' => 715,
                    'state_abbreviation' => 'WI',
                    'note' => 'N Wisconsin: Eau Claire, Wausau, Superior'
            ],
                [
                    'code' => 920,
                    'state_abbreviation' => 'WI',
                    'note' => 'NE Wisconsin: Appleton, Green Bay, Sheboygan, Fond du Lac (from Beaver Dam NE to Oshkosh, Appleton, and Door County; part of what used to be 414)'
            ],
                [
                    'code' => 304,
                    'state_abbreviation' => 'WV',
                    'note' => 'West Virginia (see overlay 681)'
            ],
                [
                    'code' => 681,
                    'state_abbreviation' => 'WV',
                    'note' => 'West Virginia (overlaid on 304)'
            ],
                [
                    'code' => 307,
                    'state_abbreviation' => 'WY',
                    'note' => 'Wyoming'
            ],
        ];

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $phoneAreaRecords = collect($phoneAreaData)
            ->map(function (array $record) use ($now) {
                $stateId = State::fromAbbreviation($record['state_abbreviation'])->getId();
                unset($record['state_abbreviation']);
                return array_merge($record, [
                    'state_id' => $stateId,
                    'created_at' => $now,
                ]);
            })->toArray();

        PhoneArea::query()->insertOrIgnore($phoneAreaRecords);
    }

}
