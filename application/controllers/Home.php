<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("m_ecommerce");
	}

	public function index()
	{
		$data['sql1'] = $this->m_ecommerce->getecommerce();
		$this->load->view('header');
		$this->load->view('ecommerce', $data);
		$this->load->view('footer');
	}

	public function add(){
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function updateview($data){
		$this->load->view('header');
		$this->load->view('product_edit',$data);
		$this->load->view('footer');
	}

	function view($x=''){
    $data['condition']=array('prdct_id'=>$x);
    $this->load->model('m_ecommerce');
    $result=$this->m_ecommerce->update($data);
    $data=array('index'=>$result);
    $this->updateview($data);
  }
	function update(){
	$id=Null;
    $name=Null;
    $code=Null;
    $stock=Null;
    $image=Null;
    $price=Null;
    extract($_POST);
    $param['id']=$id;
    $param['name']=$name;
    $param['code']=$code;
    $param['stock']=$stock;
    $param['image']=$image;
    $param['price']=$price;
    if(isset($param))
    {

      $this->load->model('m_ecommerce');
      $result = $this->m_ecommerce->update($param);
      $this->index();
    
    }
    else{
      echo "cannot";
    }

}

	public function delete($id){
    $this->m_ecommerce->delete($id);  
    redirect('Home');
    }

	public function save(){
		$prdctname = $this->input->post('prdctname');
		$prdctcode = $this->input->post('prdctcode');
		$stock = $this->input->post('stock');
		$image = $this->input->post('image');
		$price = $this->input->post('price');
		$data = array(
			'prdctname' => $prdctname,
			'prdctcode' => $prdctcode,
			'stock' => $stock,
			'image' => $image,
			'price' => $price,
			);

           $this->m_ecommerce->save($data);
		   redirect('home');
        }
 
	 }