# This is very Simple PHP Response class


# Example 1

$response = new Response;
$response->data([
	'event_id'=>$db->lastID(), 
	'event'=>$data['event'], 
	'recipient'=>$data['recipient']
]);
return $response->generate();