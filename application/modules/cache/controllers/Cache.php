<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cache extends MX_Controller {
	
	function __construct(){
        parent::__construct();
	
    }
	
	
	public function index()
	{
		$dir = APPPATH.'cache/';
		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
		    echo $filename.'<br>';
			if(substr($filename, 0,5) == "blade"){
				unlink($dir.$filename);
			}
		}
	}
}
