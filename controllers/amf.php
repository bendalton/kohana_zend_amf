<?
ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.MODPATH.'/zendamf/vendor/');
require_once 'Zend/Amf/Server.php';

class Amf_Controller extends Controller {

    public $server;
    
    public function index()
    {
        $this->server = new Zend_Amf_Server();
        Event::add('system.display', array($this,'handle_system_display'));
    }
    
    public function handle_system_display()
    {
        // this prevents kohana from attempting to parse the output
        Event::$data = $this->server->handle();
    }

} // End