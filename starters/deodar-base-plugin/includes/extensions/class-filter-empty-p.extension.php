<?php 

class Filter_Empty_P_Extension extends Deodar_Extension {

	public function __construct(){  
		parent::__construct();
	}

	public function register(): void{
		add_filter('the_content', array($this, 'filter_empty_p_tags'),99999);
	}   

	public function filter_empty_p_tags($content){
		$content = str_replace("<p></p>","",$content);
    	return $content;
	}

}