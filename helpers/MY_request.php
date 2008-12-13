<?php defined('SYSPATH') or die('No direct script access.');
class request extends request_Core{

	/**
	 * Tests if the current request is an AMF request by checking the content type to see if it is
	 * of the type 'application/x-amf'
	 *
	 * @return  boolean
	 */
	public static function is_amf()
	{
        return (isset($_SERVER['CONTENT_TYPE']) AND strtolower($_SERVER['CONTENT_TYPE']) === 'application/x-amf'); 
	}


} // End request