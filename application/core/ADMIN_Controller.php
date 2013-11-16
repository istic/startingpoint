<?PHP

class ADMIN_Controller extends MY_Controller {
	
	var $viewdata = array();

	function __construct(){
		parent::__construct();
	
		$this->load->library('session');
		$this->load->helper('url');
		
		$this->load->model("User");
		
		if($id = $this->session->userdata("authorised_user")){
			$user = $this->User->fetch_by_id($id);
			if(!$user->is_admin){
				redirect("/auth/login?redirect_to".current_url());
			}
		} else {
			redirect("/auth/login?redirect_to".current_url());
		}
	}
	
}