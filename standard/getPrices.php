<!-- Get prices of standard products dynamically, markup by 13%
    Markup is donated to the company -->

<?php

// Hi-vis suit

$ch = curl_init();

//Get the current pricing of the suit
curl_setopt($ch, CURLOPT_URL, 'https://www.dickies.com/hi-vis/hi-vis-2-piece-safety-rain-suit/L10533.html');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, ''); // Handle compressed responses
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:122.0) Gecko/20100101 Firefox/122.0');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
    'Accept-Language: en-US,en;q=0.5',
    'Referer: https://www.dickies.com/profession/hi-vis?prefn1=gender&prefv1=men',
    'DNT: 1',
    'Upgrade-Insecure-Requests: 1',
    'Sec-Fetch-Dest: document',
    'Sec-Fetch-Mode: navigate',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-User: ?1',
    'Sec-GPC: 1',
    'Connection: keep-alive',
    // Cookies need to be a single string
    'Cookie: dwanonymous_e3010f22077e9725337a0d245c857b97=ablzolROoTYdbZuDUyCBig5aTG; geolocation_checked_DickiesUS=1; ...; BVImplnew_site=17025_5_0',
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Process your response here
    echo $response;
}

curl_close($ch);


// Assuming the response contains direct price information or JSON from which the price can be extracted.
// You might need to parse the response depending on its structure, e.g., if it's JSON:
$priceData = json_decode($response, true);
$foreignPrice = $priceData['price']; // Adjust based on actual response structure
