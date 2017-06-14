<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myurl extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		if(isset($_POST['url'])){
			$ch = curl_init($_POST['url']);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$res = curl_exec($ch);
			curl_close($ch);
			if(isset($_POST['type']) && $_POST['type'] == 'xsd'){
				$xmlDoc = new DOMDocument();
				$xmlDoc->loadXML($res);
				$elements = $xmlDoc->getElementsByTagName('element');
				$array = array();
				foreach ($elements as $element) {
					$array[] = $element->getAttribute('name');
				}		
				echo json_encode($array);
			} else {
				echo $res;
			}
		} else {
			echo('<i>You can\'t access this page.</i>');
		}
	}
	
}