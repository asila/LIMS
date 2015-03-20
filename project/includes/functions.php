<?php
//remove zeros
	function strip_zeros_from_date($marked_string="") {
		//first remove the marked zeros
		$no_zeros = str_replace('*0','',$marked_string);
		$cleaned_string = str_replace('*0','',$no_zeros);
		return $cleaned_string;
	}
	//page redirection
	function redirect_to($location = NULL) {
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}
	//printing message
	function output_message($message="") {
	
		if(!empty($message)){
		return "<p class=\"message\">{$message}</p>";
		}else{
			return "";
		}
	}
	//preload includes
	function __autoload($class_name) {
		$class_name = strtolower($class_name);
		$path = LIB_PATH.DS."{$class_name}.php";
		if(file_exists($path)){
			require_once($path);
		}else{
			die("The file {$class_name}.php could not be found.");
		}
					
	}
	function include_layout_template_public($template="") {
		include(SITE_ROOT.DS.'layouts'.DS.$template);

		}
	/* function include_layout_template_admin($template="") {
		include(SITE_ROOT.DS.'public'.DS.'admin'.DS.'layouts'.DS.$template);

		}	
	function include_layout_template_login($template="") {
		include(SITE_ROOT.DS.'public'.DS.'admin'.DS.'layouts'.DS.$template);

		}	 */	
		
?>