<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class m_ecommerce extends CI_Model {

	public function getecommerce()
	{
		$sql = $this->db->query("SELECT * FROM db_ecommerce");
		return $sql;
	}

	function save($data){
		$this->db->insert('db_ecommerce',$data);
	}
}
