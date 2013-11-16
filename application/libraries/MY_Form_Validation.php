<?PHP
      

class MY_Form_Validation extends CI_Form_validation
{
 public function __construct()
 {
  parent::__construct();
  $this->set_error_delimiters(' <div class="alert alert-danger">', '</div>');
   }
}