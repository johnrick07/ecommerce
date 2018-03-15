<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class m_ecommerce extends CI_Model {

	public function getecommerce()
	{
		$sql = $this->db->query("SELECT * FROM db_ecommerce");
		return $sql;
	}
	
	function update($param)
  {
    $field=array(
      'prdctname'=>$param['name'],
      'prdctcode'=>$param['code'],
      'stock'=>$param['stock'],
      'image'=>$param['image'],
      'price'=>$param['price']
      );
    $condition=array('prdct_id'=>$param['id']);
    $query=$this->db->get_where('db_ecommerce',$condition);
    $result=$query->result_array();
    if(!empty($result))
    {
      $this->db->where($condition);
      $this->db->update('db_ecommerce',$field);
    }
}
  
	function save($data){
		$this->db->insert('db_ecommerce',$data);
	}

	function delete($id){
   	    $this->db->where("prdct_id", $id);
  	    $this->db->delete('db_ecommerce');

  }
}