<?php


class Response{
	
	public $data = array();
	public $status = 'success';
	public $response = array();
	public $format = 'JSON';
	public $message = '';
	
	function __construct(){
		return $this;
	}
	
	function status(){
		
	}
	
	function data($data){
		$this->data = $data;
		return $this;
	}
	
	function format($format){
		$this->format = $format;
		return $this;
	}
	
	function dataToJSON($response){
		return json_encode($response);
	}
	
	function dataToXML($data){
		$xml = new SimpleXMLElement("<?xml version=\"1.0\"?><response></response>");
		$this->array_to_xml($data,$xml);
		return $xml->asXML();	
	}
	
	function array_to_xml($student_info, &$xml_student_info) {
	    foreach($student_info as $key => $value) {
	        if(is_array($value)) {
	            if(!is_numeric($key)){
	                $subnode = $xml_student_info->addChild("$key");
	                $this->array_to_xml($value, $subnode);
	            }
	            else{
	                $subnode = $xml_student_info->addChild("item$key");
	                $this->array_to_xml($value, $subnode);
	            }
	        }
	        else {
	            $xml_student_info->addChild("$key",htmlspecialchars("$value"));
	        }
	    }
	}
	
	
	function generate(){
		
		$response['status'] = $this->status; 
		$response['data'] = $this->data;
		
		if($this->format=='JSON'){
			return $this->dataToJSON($response);
		}
		if($this->format=='XML'){
			return $this->dataToXML($response);
		}
		
		 
	}
	
}