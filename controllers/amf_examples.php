<?php defined('SYSPATH') or die('No direct script access.');

class Amf_Examples_Controller extends Controller {

    public function index()
    {

    }
    
    public function hello_world($name = null)
    {
        if(!isset($name)){
            $name = $this->input->post('name');
        }
        
        $message = "Hello World $name!";
        
        if(request::is_amf())
        {
            return $message;
        }
        
        $view = View::factory('amf_examples/hello_world');
        $view->message = $message;
        $view->render(TRUE);
    }

} // End