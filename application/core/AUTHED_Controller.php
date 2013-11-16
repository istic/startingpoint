<?PHP

class AUTHED_Controller extends MY_Controller {
	
	var $viewdata = array();

	function __construct(){
		parent::__construct();
		
		$this->requires_authentication();
	}
	
	
}