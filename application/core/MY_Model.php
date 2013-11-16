<?PHP

class MY_Model extends CI_Model {

	function __construct()
    {
		//$this->load_aws();
        // Call the Model constructor
        parent::__construct();
		
		
    }
	

	function load_aws(){
		if(!class_exists("CFRuntime")){
			require(LIBRARIES."/aws/sdk.class.php");
			require("../localconfig/aws.php");
		}
	}
	
	function save($data, $tablename = false, $idfield = false){
		
		if(!$idfield and !isset($this->idfield)){
			$idfield = "id";
		} elseif(!$idfield and isset($this->idfield)){
			$idfield = $this->idfield;
		} elseif (!$idfield) {
			throw new Exception("Couldn't work out primary key");
		}
		
		if(!$tablename){
			$tablename = $this->tablename;
		}
		
		$data = (array)$data;
		
		if (isset($data[$idfield]) && $data[$idfield] != 0){
			$id = $data[$idfield];
			$this->db->where($idfield, $id);
			
			$savedata = $data;
			unset($savedata[$idfield]);
			$this->db->update($tablename, $savedata);
			
			return $id;
		} else {
			$this->db->insert($tablename, $data);
			return $this->db->insert_id();
		}
		
	}
	
	function single_result($result){
		$result = $result->row();
		
		if(!$result){
			return $result;
		}
		#die(class_name($this));
		$classname = get_class($this)."_Object";
		if(class_exists($classname)){
			return new $classname($result);
		}
		return $result;
	}
	
	function multiple_results($result){
		#die(class_name($this));
		$classname = get_class($this)."_Object";
		if(class_exists($classname)){
			$id = $this->idfield;
			$return = array();
			foreach($result->result() as $row){
				if($id){
					$return[$row->$id] = new $classname($row);
				} else {
					$return[] = new $classname($row);
				}
			}
			return $return;
			
		} else {
		}
		return $result->result();
	}
	
	
	function fetch_by_id($id){
	
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->idfield, $id);
		
		$result = $this->db->get();
		
		if ($result->num_rows() == 0){
			return false;
		} else {
			return $this->single_result($result);
		}
	}
	
	
	function fetch_by_column($key, $value){
	
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($key, $value);
		
		$result = $this->db->get();
		
		if ($result->num_rows() == 0){
			return false;
		} else {
			return $this->single_result($result);
		}
	}
	
	function all_by_column($key, $value){
	
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($key, $value);
		
		$result = $this->db->get();
		
		return $this->multiple_results($result);
	}
	
	
	function fetch_all($order_by = false, $direction = "ASC"){
	
		$this->db->select("*");
		$this->db->from($this->tablename);
		
        if($order_by){
            $this->db->order_by($order_by, $direction);
        }
        
		$result = $this->db->get();
		
        return $this->multiple_results($result);
        
	}

}

include("MY_Object.php");
