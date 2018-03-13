<?php

class editModel extends CI_Model{

public function retriveData($prdct_id)
{

$data =	$this->db->get_where('db_ecommerce',array('prdct_id'=>$prdct_id));
$this->db->delete('db_ecommerce',array('prdct_id'=>$prdct_id));

return $data->result();

}

public function editData($data)

{

$this->db->insert('db_ecommerce',$data);
echo '<script>alert("You have update the data successfully.");</script>';

}


}

?>