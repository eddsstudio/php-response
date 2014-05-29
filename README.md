### This is very Simple PHP Response class



Simple PHP code

	$response = new Response;
	$response->data([
		'event_id'=>$db->lastID(), 
		'event'=>$data['event'], 
		'recipient'=>$data['recipient']
	]);
	return $response->generate();
	
Return JSON string 

	{
		status : "success",
		data : { "event_id" : 2, "event" : "mail", "recipient" : "somebody@example.com" }
	}