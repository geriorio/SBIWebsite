<?php
// Test Newsletter API
$url = 'http://127.0.0.1:8000/api/newsletter';
$data = [
    'email' => 'test@gmail.com'
];

$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\nAccept: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo "Response:\n";
print_r($result);
echo "\n\n";

if ($http_response_header) {
    echo "Headers:\n";
    print_r($http_response_header);
}
