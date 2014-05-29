### This is very Simple PHP Response class



Simple PHP code

	$response = new Response;
	$response->data([
		'event_id'=>2, 
		'event'=>'event', 
		'recipient'=>'somebody@example.com'
	]);
	return $response->generate();
	
Returns JSON string formated in JSend specification format

	{
		status : "success",
		data : { "event_id" : 2, "event" : "mail", "recipient" : "somebody@example.com" }
	}